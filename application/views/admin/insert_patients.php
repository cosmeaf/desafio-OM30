        	<!-- Begin Page Content -->
        	<div class="container-fluid">
        		<h1 class="h3 mb-0 text-gray-800 float-left">PACIENTE CADASTRADO</h1>
        		<!-- Page Heading -->
        		<div class="d-sm-flex align-items-center justify-content-end mb-3">
        			<a href="<?= base_url();?>dashboard/patients" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2">
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
                  <form action="<?= base_url();?>dashboard/patients/register" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                  <div class="form-row">
                    <!-- PESSOAL ####################################################################################### -->
                    <div class="form-group col-md-3">
                      <label for="name">Nome</label>
                      <input type="text" class="form-control form-control-sm" id="name" name="name" value="<?= set_value('name');?>">
                      <?php echo form_error("name")?>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="nomemae">Nome da Mae</label>
                      <input type="text" class="form-control form-control-sm" id="nomemae" name="nomemae" value="<?= set_value('nomemae');?>">
                      <?php echo form_error("nomemae")?>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="cpf">Numero CPF</label>
                      <input type="text" class="form-control form-control-sm" id="cpf" name="cpf" name="cpf" value="<?= set_value('cpf');?>">
                      <?php echo form_error("cpf")?>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="cnes">Numero CNES</label>
                      <input type="text" class="form-control form-control-sm" id="cnes" name="cnes" name="cnes" value="<?= set_value('cnes');?>">
                      <?php echo form_error("cnes")?>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="nascimento">Data Nascimento</label>
                      <input type="date" class="form-control form-control-sm" id="nascimento" name="nascimento" value="<?= set_value('nascimento');?>">
                      <?php echo form_error("nascimento")?>
                    </div>
                  </div>
                  <!-- Endereço ########################################################################################### -->
                  <div class="form-row">
                    <div class="form-group col-md-2">
                      <label for="cep">Numero CEP</label>
                      <input type="text" class="form-control form-control-sm" id="cep" name="cep" value="<?= set_value('cep');?>">
                      <?php echo form_error("cep")?>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="logradouro">Logradouro, Rua, Avenida</label>
                      <input type="text" class="form-control form-control-sm" id="logradouro" name="logradouro" value="<?= set_value('logradouro');?>">
                      <?php echo form_error("logradouro")?>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="complemento">Numero, Complemento</label>
                      <input type="text" class="form-control form-control-sm" id="complemento" name="complemento" value="<?= set_value('complemento');?>">
                      <?php echo form_error("complemento")?>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="localidade">Cidade</label>
                      <input type="text" class="form-control form-control-sm" id="localidade" name="localidade" value="<?= set_value('localidade');?>">
                      <?php echo form_error("localidade")?>
                    </div>
                    <div class="form-group col-md-1">
                      <label for="uf">Estado</label>
                      <input type="text" class="form-control form-control-sm" id="uf" name="uf" value="<?= set_value('uf');?>" readonly>
                      <?php echo form_error("uf")?>
                    </div>
                    <!-- CONTATO ########################################################################################### -->
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control form-control-sm" id="email" name="email" value="<?= set_value('email');?>">
                        <?php echo form_error("email")?>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control form-control-sm" id="celular" name="celular" value="<?= set_value('celular');?>">
                        <?php echo form_error("celular")?>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control form-control-sm" id="telefone" name="telefone" value="<?= set_value('telefone');?>">
                        <?php echo form_error("telefone")?>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="recado">Recado</label>
                        <input type="text" class="form-control form-control-sm" id="recado" name="recado" value="<?= set_value('recado');?>">
                        <?php echo form_error("recado")?>
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary mb-5 mt-5">CADASTRAR</button>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
          </div>
        </div>