             <style>
              #preview{
                width: 50px;
                height: 50px;
                background: #c2c2c2;
              }
            </style>
            <!-- Begin Page Content -->
            <div class="container-fluid">

             <!-- Begin Page Content -->
             <div class="container-fluid">
              <h1 class="h3 mb-0 text-gray-800 float-left">LISTA DE PACIENTES</h1>
              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-end mb-3">
               <a href="<?= base_url();?>dashboard/patients/register" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2">
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
                    <th>Name</th>
                    <th>Nome da Mae</th>
                    <th>cpf</th>
                    <th>cnes</th>
                    <th>Nascimento</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tfoot>
                 <tr>
                  <th>Foto</th>
                  <th>Name</th>
                  <th>Nome da Mae</th>
                  <th>cpf</th>
                  <th>cnes</th>
                  <th>Nascimento</th>
                  <th>Ações</th>

                </tr>
              </tfoot>
              <tbody>
               <?php if (!empty($user)) :?>
                <?php foreach ($user as $row) : ?>
                  <tr>
                    <td><img id="preview" src="<?= base_url('assets/img/' . $row['imagem']);?>" ></td>
                    <td><?= character_limiter($row['name'], 20); ?></td>
                    <td><?= $row['nomemae']; ?></td>
                    <td><?= $row['cpf']; ?></td>
                    <td><?= $row['cnes']; ?></td>
                    <td><?= data('d/m/Y', character_limiter($row['nascimento'], 11)); ?></td>
                    <td>
                      <a href="<?= base_url('dashboard/patients/edit/' . $row['id']);?>" class="btn btn-sm btn-primary"><i class="far fa-edit"></i></a>
                      <a href="<?= base_url('dashboard/patients/delete/' . $row['id']);?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete">
                        <i class="far fa-trash-alt"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="8" class="text-center">Nenhum usuário encontrado em base de dados</td>
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
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="delete">Atenção</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Você tem certeza que deseja excluir paciente?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
        <a href="<?= base_url('dashboard/patients/delete/' . $row['id']);?>" class="btn btn-danger btn-sm">Deletar</a>
      </div>
    </div>
  </div>
</div>