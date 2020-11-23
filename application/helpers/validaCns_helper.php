
<?php 

if (function_exists('cnes')) {
	
	function validaCns(){
		$cns = $this->input->post('cnes');
		//echo "<pre>";var_dump($cns);die();
		$validator1 = '/^[1-2][0-9]{10}00[0-1][0-9]$/';
		$validator2 = '/^[7-9][0-9]{14}$/';
        // CNSs definitivos começam em 1 ou 2 / CNSs provisórios em 7, 8 ou 9
		if (preg_match($validator1, $cns) || preg_match($validator2, $cns) ) {
			$result = $this->somaPonderadaCns($cns) % 11 == 0;
			echo "<pre>";var_dump($result);die();
		}
		return false;
	}


	function somaPonderadaCns($cns): int{
		$soma = 0;

		for ($i = 0; $i < mb_strlen($cns); $i++) {
			$soma += $cns[$i] * (15 - $i);
		}

		return $soma;
	}
}


?>