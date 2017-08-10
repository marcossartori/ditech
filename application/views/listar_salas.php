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
       <?php }
	   
	   
	  
	   ?>
       
    
      
                            <h2>Bordered Table</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Numero da Sala</th>
                                            <th>Nome da Sala</th>
                                            <th>Nome do predio</th>
                                            <th>Editar</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                     
                                          <?php
										  
		   foreach($salas as $row){?>
    
           <tr>
            <td><?php echo $row->numero ;?></td>
             <td><?php echo $row->nome ;?></td>
            <td><?php echo $row->predio;?></td>
           
            <td ><a href="<?php echo base_url() . 'cadastro_salas/editarSalas/' . $row->idsalas; ?>">Editar</a></td>
            <td ><a href="<?php echo base_url() . 'cadastro_salas/excluirSalas/' . $row->idsalas; ?>">Ecluir</a></td>
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