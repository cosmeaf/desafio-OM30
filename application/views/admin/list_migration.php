        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <hr>
          <div>
            <h4>Atenção</h4>
            <p>Para realizar alteração em base de dados, favor ler documentação sobre migration no link com manual de instruções do codeigniter 
              <a href="https://codeigniter.com/userguide3/libraries/migration.html" target="_blank">Clique</a>
            </p>
            <p> # Modelo Padrão</p>
            <p> A versão 001 é para a tables = "tbl_users"</p>
            <p>  A versão 002 é para a tables = "tbl_pacientes" </p>
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
                    <th>Number of version</th>
                    <th>Status Version</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                 <tr>
                   <th>Number of version</th>
                   <th>Status Version</th>
                     <th>Action</th>
                 </tr>
               </tfoot>
               <tbody>
                <?php if (!empty($version)) :?>
                  <?php foreach ($version as $row) : ?>
                    <tr>
                      <td><?= $row['version']; ?></td>
                      <td><?= ($row['version'] == 1) ? "Default Version " : "Installed patient table version" ?></td>
                      <td><a href=" <?= base_url();?>migrate" class="btn btn-primary btn-sm"><i class="fas fa-play-circle"></i></a></td>
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