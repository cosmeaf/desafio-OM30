        	<!-- Begin Page Content -->
        	<div class="container-fluid">
        		<h1 class="h3 mb-0 text-gray-800 float-left">CADASTRO DE USUÁRIO</h1>
        		<!-- Page Heading -->
        		<div class="d-sm-flex align-items-center justify-content-end mb-3">
        			<a href="<?= base_url();?>dashboard/users" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2">
                <i class="fas fa-chevron-circle-left fa-sm text-white-50"></i>
                VOLTAR
              </a>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> 
                REPORT
              </a>
            </div>
            <hr>
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pessoa</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active mt-1" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="card p-3">
                 <form action="<?= base_url();?>dashboard/users/update" method="post" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                  <div class="form-row">
                    <div class="form-group col-md-4">
                     <label for="image">
                      <input type="file" name="image" id="image" style="display:none;"/>
                      <img class="float-right" style="width: 80px;height: 80px;background-color: #c2c2c2;" src="<?= base_url();?>assets/img/default.png"/>
                    </label> 
                  </div>
                </div>
                <div class="form-row">
                  <!-- PESSOAL ####################################################################################### -->
                  <div class="form-group col-md-3">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name" value="<?= $user['name'];?>">
                    <?php echo form_error("name")?>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control form-control-sm" id="email" name="email" value="<?= $user['email'];?>">
                    <?php echo form_error("email")?>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="role_id">Membro</label>
                    <select id="role_id" class="form-control form-control-sm" name="role_id">
                      <?php echo form_error("role_id")?>      
                      <option value="1">Administrador</option>
                      <option value="2">Funcionario</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="is_active">Status</label>
                    <select id="is_active" class="form-control form-control-sm" name="is_active">
                      <?php echo form_error("is_active")?>
                      <option value="0">Ativo</option>
                      <option value="1">Inativo</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="cpf">Password</label>
                    <input type="password" class="form-control form-control-sm" id="password" name="password" name="password">
                    <?php echo form_error("password")?>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="passconf">Confirmar Password</label>
                    <input type="password" class="form-control form-control-sm" id="passconf" name="passconf" name="passconf">
                    <?php echo form_error("passconf")?>
                  </div>
                </div>
                <input type="hidden" id="id" name="id" value="<?= $user['id']; ?>" /> 
                <button type="submit" class="btn btn-primary mb-5 mt-5">ATUALIZAR</button>
              </form>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
        </div>
      </div>