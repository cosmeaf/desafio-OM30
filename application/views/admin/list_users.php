        <style>
          #preview{
            width: 50px;
            height: 50px;
            background: #c2c2c2;
            position: relative;
            text-align: center;
          }
        </style>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Begin Page Content -->
          <div class="container-fluid mt-5">
            <h1 class="h3 mb-0 text-gray-800 float-left">LISTA DE PACIENTES</h1>
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-end mb-3">
              <a href="<?= base_url();?>dashboard/users/register" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2">
                <i class="fas fa-plus fa-sm text-white-50"></i> 
                CADASTRAR
              </a>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> 
                REPORT
              </a>
            </div>
          </div>
          <div class="card">
            <div class="row">
             <div class="col">
              <div class="card">
               <div class="card-body">
                <div class="table table-responsive">
                 <table class="table table-bordered table-hover table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Grupo</th>
                    <th>Status</th>
                    <th>Registrado em:</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tfoot>
                 <tr>
                   <th>Foto</th>
                   <th>Nome</th>
                   <th>E-mail</th>
                   <th>Grupo</th>
                   <th>Status</th>
                   <th>Registrado em:</th>
                   <th>Ações</th>

                 </tr>
               </tfoot>
               <tbody>
                 <?php if (!empty($user)) :?>
                  <?php foreach ($user as $row) : ?>
                    <tr>
                      <td> <img id="preview" src="<?= base_url('assets/img/' . $row['image']);?>"> </td>
                      <td><?= $row['name']; ?></td>
                      <td><?= $row['email']; ?></td>
                      <td><?= ($row['role_id'] == 1) ? 'Administrador' : 'Funcionário' ?></td>
                      <td><?= ($row['is_active'] == 1)? 'Ativo' : 'Inativo' ?></td>
                      <td><?= data('d/m/Y',$row['created_at'] ); ?></td>
                      <td>
                        <?php if ($row['role_id'] == 1): ?>
                          <a href="<?= base_url('dashboard/users/edit/' . $row['id']);?>" class="btn btn-sm btn-primary"><i class="far fa-edit"></i></a>
                          <?php else: ?>
                            <a href="<?= base_url('dashboard/users/edit/' . $row['id']);?>" class="btn btn-sm btn-primary"><i class="far fa-edit"></i></a>
                            <a href="<?= base_url('dashboard/users/delete/' . $row['id']);?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i>
                            <?php endif ?>
                            
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="7" class="text-center">Nenhum usuário encontrado em base de dados</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>                    
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-gradient-danger text-white">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="delete">Atenção</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Você esta preste a excluir um funcionário do sistema.
          Esse procedimento é perigoso e não oferece retorno.
          Você tem certeza que deseja excluir funcionário?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <a href="<?= base_url('dashboard/users/delete/' . $row['id']);?>" class="btn btn-success btn-sm">Deletar</a>
        </div>
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