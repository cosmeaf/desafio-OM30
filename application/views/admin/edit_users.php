
<style>
  #preview{
    width: 150px;
    height: 150px;
    background: #c2c2c2;
    border: 1px solid #ccc;
    box-shadow: 5px 5px 5px #ccc;
    cursor: pointer;
    position: relative;
    margin-top: 10%;
    margin-left: 30%;
  }
</style>
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
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Acesso</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active mt-1" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <!-- HOME TABE -->
    <div class="row mt-3">
      <div class="col-12">
   
        <div class="row">
          <div class="col-4">
            <div class="card p-5">
               <form action="<?= base_url();?>dashboard/users/updateImage" method="post" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                <div class="form-row">
                  <div class="form-group col-12">
                    <!-- -->
                    <label for="imagem">
                     <input id="imagem" type="file" name="imagem" style="display:none;" value="base_url('assets/img/' . $user['image']);?>"/>
                     <img id="preview" src="<?= base_url('assets/img/' . $user['image']);?>">
                     <?php echo form_error("imagem")?>
                   </label>
                   <!-- -->
                 </div>
               </div>
               <input type="hidden" id="id" name="id" value="<?= $user['id']; ?>" /> 
               <button type="submit" class="btn btn-block btn-primary btn-sm mb-5 mt-2">ATUALIZAR</button>
             </form>
           </div>          
         </div>
         <div class="col-4">
          <div class="card p-5">
             <form action="<?= base_url();?>dashboard/users/updatePassword" method="post" method="post" enctype="multipart/form-data" accept-charset="utf-8">
             <div class="form-row">
              <div class="form-group col-12">
                <label for="cpf">Password</label>
                <input type="password" class="form-control form-control-sm" id="password" name="password" >
                <?php echo form_error("password")?>
              </div>
              <div class="form-group col-12">
                <label for="passconf">Confirmar Password</label>
                <input type="password" class="form-control form-control-sm" id="passconf" name="passconf" >
                <?php echo form_error("passconf")?>
              </div>
            </div>
            <input type="hidden" id="id" name="id" value="<?= $user['id']; ?>" /> 
            <button type="submit" class="btn btn-block btn-primary btn-sm mt-2">ATUALIZAR</button>
          </form>
        </div>
      </div>
      <div class="col-4">
        <div class="card p-5">
         <form action="<?= base_url();?>dashboard/users/update" method="post" method="post" enctype="multipart/form-data" accept-charset="utf-8">
          <div class="form-row">
            <!-- PESSOAL ####################################################################################### -->
            <div class="form-group col-12">
              <label for="name">Nome</label>
              <input type="text" class="form-control form-control-sm" id="name" name="name" value="<?= $user['name'];?>">
              <?php echo form_error("name")?>
            </div>
            <div class="form-group col-12">
              <label for="email">E-mail</label>
              <input type="text" class="form-control form-control-sm" id="email" name="email" value="<?= $user['email'];?>">
              <?php echo form_error("email")?>
            </div>
            <div class="form-group col-6">
              <label for="role_id">Membro</label>
              <select id="role_id" class="form-control form-control-sm" name="role_id">
                <?php echo form_error("role_id")?>      
                <option value="1">Administrador</option>
                <option value="2">Funcionario</option>
              </select>
            </div>
            <div class="form-group col-6">
              <label for="is_active">Status</label>
              <select id="is_active" class="form-control form-control-sm" name="is_active">
                <?php echo form_error("is_active")?>
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
              </select>
            </div>
          </div>
          <input type="hidden" id="id" name="id" value="<?= $user['id']; ?>" /> 
          <button type="submit" class="btn btn-block btn-primary btn-sm mb-5 mt-2">ATUALIZAR</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- HOME TABE -->
</div>

<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>
</div>

</div>
<script>
  function readImage() {
    if (this.files && this.files[0]) {
      var file = new FileReader();
      file.onload = function(e) {
        document.getElementById("preview").src = e.target.result;
      };       
      file.readAsDataURL(this.files[0]);
    }
  }
  document.getElementById("imagem").addEventListener("change", readImage, false);
</script>