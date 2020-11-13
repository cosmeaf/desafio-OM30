<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">
	<title>Document</title>
</head>
<body>
	<div class="continer">
		<div class="row mt-5">
			<div class="offset-3 col-6 offset-md-4 col-md-4 mt-5">
				<div class="text-center mb-3"><h1><?= $title ?></h1></div>
				<div class="card">
					<div class="card-body">
						<?php if ($this->session->flashdata('success')) : ?>
							<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
								<?= $this->session->flashdata('success'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<?php elseif ($this->session->flashdata('danger')) : ?>
								<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
									<?= $this->session->flashdata('danger') ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<?php endif; ?>
							<form action="<?= base_url();?>recovery" method="post">
								<div class="form-group">
									<label for="email">Recovery E-mail</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
									<?php echo form_error("email")?>
								</div>

								<div class="form-group">
									<a href="<?= base_url()?>login">Login</a>
									<a style="float: right;" href="<?= base_url()?>register">Register</a>
								</div>

								<button type="submit" class="btn btn-success btn-block">Recovery</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
		  <script src="<?= base_url();?>assets/js/utilidades.js"></script>
	</body>
	</html>