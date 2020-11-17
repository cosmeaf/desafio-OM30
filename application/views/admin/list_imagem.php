<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="">

	<style>
		#img-preview {
			display: none; 
			width: 100px;   
			border: 2px dashed #333;  
			margin-bottom: 20px;
		}
		#img-preview img {  
			width: 100%;
			height: auto; 
			display: block;   
		}
		[type="file"] {
			height: 0;  
			width: 0;
			overflow: hidden;
		}
		[type="file"] + label {
			font-family: sans-serif;
			background: #f44336;
			padding: 5px 20px;
			border: 2px solid #f44336;
			border-radius: 3px;
			color: #fff;
			cursor: pointer;
			transition: all 0.2s;
		}
		[type="file"] + label:hover {
			background-color: #fff;
			color: #f44336;
		}
	</style>
</head>
<body>
	

	<div class="container ">

		<section class="mt-5">
			<center><h1>FORM VALIDATION IMAGEM</h1></center>
			<hr>
			<form action="<?= base_url();?>imagem/do_upload" enctype="multipart/form-data" accept-charset="utf-8" method="post">
				<div id="img-preview"></div>
				<input type="file" id="choose-file" name="choose-file" accept="image/*" />
				<label for="choose-file">Upload</label>


				<button type="submit" class="btn btn-success bnt-sm float-right">Salvar</button>
			</form>

		</section>

	</div>
	<!-- Bootstrap JS Requirements -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
	<!-- the fileinput plugin initialization -->
	<script>
		var loadFile = function(event) {
			var output = document.getElementById('output');
			output.src = URL.createObjectURL(event.target.files[0]);
			output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
  }
};

const chooseFile = document.getElementById("choose-file");
const imgPreview = document.getElementById("img-preview");
chooseFile.addEventListener("change", function () {
	getImgData();
});

function getImgData() {
	const files = chooseFile.files[0];
	if (files) {
		const fileReader = new FileReader();
		fileReader.readAsDataURL(files);
		fileReader.addEventListener("load", function () {
			imgPreview.style.display = "block";
			imgPreview.innerHTML = '<img src="' + this.result + '" />';
		});    
	}
}
</script>
</body>
</html>