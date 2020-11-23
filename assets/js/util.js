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

if(cep){
	cep.addEventListener("blur", buscaCep)
}

function buscaCep(){
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
}

// UPLOAD FOTO
/*var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
    'onclick="alert(\'Call your custom code here.\')">' +
    '<i class="glyphicon glyphicon-tag"></i>' +
    '</button>'; 
$("#avatar-2").fileinput({
    overwriteInitial: true,
    maxFileSize: 1500,
    showClose: false,
    showCaption: false,
    showBrowse: false,
    browseOnZoneClick: true,
    removeLabel: '',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors-2',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="/samples/default-avatar-male.png" alt="Your Avatar"><h6 class="text-muted">Click to select</h6>',
    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});*/
// FIM UPLOAD FOTO


