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
                      <td><?= character_limiter($row['name'], 20); ?></td>
                      <td><?= $row['nomemae']; ?></td>
                      <td><?= $row['cpf']; ?></td>
                      <td><?= $row['cnes']; ?></td>
                      <td><?= data('d/m/Y', character_limiter($row['nascimento'], 11)); ?></td>
                      <td>
                        <a href="" class="btn btn-sm btn-primary">edit</a>
                        <a href="" class="btn btn-sm btn-danger">edit</a>
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