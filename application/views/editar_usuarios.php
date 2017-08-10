   </nav>
  
          <div id="page-wrapper">
  
              <div class="container-fluid">
  
                  <!-- Page Heading -->
                  <div class="row">
                      <div class="col-lg-12">
                          
    </div>
   
    <?php  if(@$alerta!= null){?>
     <div class="alert alert-<?php  //echo @$alerta["class"];?>">
  
  
     </div>
     <?php }?>
     
  
    
                          <h2>Bordered Table</h2>
                          <div class="table-responsive">
                              <table class="table table-bordered table-hover">
                                  <thead>
                                      <tr>
                                          <th>Usuario</th>
                                          <th>nome</th>
                                          <th>Setor</th>
                                          <th>Email</th>
                                          <th>Editar</th>
                                          <th>Excluir</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  
                                   
                                        <?php foreach($usuarios as $row){?>
  
         <tr>
          <td><?php echo $row->usuario ;?></td>
           <td><?php echo $row->nome ;?></td>
          <td><?php echo $row->setor;?></td>
          <td ><?php echo $row->email;?></td>
          <td ><a href="<?php echo base_url() . 'cadastro_usuario/editarUsuario/' . $row->id; ?>">Editar</a></td>
          <td ><a href="<?php echo base_url() . 'cadastro_usuario/excluirUsuario/' . $row->id; ?>">Ecluir</a></td>
        </tr>
      
        <?php }?>
                                  
                             
                                  </tbody>
                              </table>
                          </div>
                      
                      </div>
                  </div>
                  <!-- /.row -->
  
              </div>
              <!-- /.container-fluid -->
  
          </div>
          <!-- /#page-wrapper -->
  
      </div>