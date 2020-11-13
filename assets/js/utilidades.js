// Auto Closed Alert Bootstrap
window.setTimeout(function() {
	$(".alert").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove(); 
	});
}, 4000);

// Get Cep by VIACEP
const cep = document.querySelector("#cep")

const showData = (result)=>{
	for(const campo in result){
		if(document.querySelector("#"+campo)){
			document.querySelector("#"+campo).value = result[campo]
		}
	}
}

cep.addEventListener("blur",(e)=>{
	let search = cep.value.replace("-","")
	const options = {
		method: 'GET',
		mode: 'cors',
		cache: 'default'
	}

	fetch(`https://viacep.com.br/ws/${search}/json/`, options)
	.then(response =>{ response.json()
		.then( data => showData(data))
	})
	.catch(e => console.log('Deu Erro: '+ e,message))
})


