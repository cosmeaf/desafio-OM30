<?php 

if(!function_exists('data')){
	function data($format = 'd-m-Y', $originalDate){
		return date($format, strtotime($originalDate));
	}
}


?>