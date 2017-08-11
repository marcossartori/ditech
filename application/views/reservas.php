<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.min.js'?>"></script>
<script type="text/javascript">
	
	$(document).ready(function(e) {
		
        $('#livre').change(function(){
			
			$('#f1').submit();
			
			});
			$('#reservado').change(function(){
			
			$('#locado').submit();
			
			});
    });
	</script>
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
<form id="f1" name="f1" action="<?php echo base_url('reservas/FiltroReserva')?>" method="post" enctype="multipart/form-data">
                      <table class="table  table-hover">
                       
                          <tbody>
                              <tr>
                                  <th>  
                                  <label for="usuario">salas disponiveis</label>
                                  <select id="livre" style="width:300px" name="livre" class="form-control" id="passaValor" onchange="cadastro_salas/editarSalas">
                                  <option  value=''>Carregando... </option>
                                        
                                          <?php
                                      
                                           foreach($unlock as $row){?>

                                            <option value='<?php echo $row->idsalas ?>'><?php echo $row->nome ?></option>; 
       
    
                                            <?php }?>
                                     

                                             </select></th>
                                             
                         </form> 
                         
                         <form id="locado" name="locado" action="<?php echo base_url('reservas/FiltroReserva')?>" method="post" enctype="multipart/form-data">                   
                                  <th>  <label   style="width:300px; margin-left:-60%; " for="usuario">salas reservadas</label>
                                        <select style="width:300px; margin-left:-60%; "  name="reservado" class="form-control" id="reservado" onchange="getValor(this.value, 0)">
                                        <option value=''>Carregando... </option>
                                        <?php
                                      
                                           foreach($lock as $row){?>

                                            <option value='<?php echo $row->idsalas ?>'><?php echo $row->nome ?></option>; 
       
    
                                            <?php }?>

                                             </select></th>
                           
                         
                          
                     
                          </tbody>
                      </table>
    </form>              </div>
              



                  <h2></h2>
                  <div style="display" class="table-responsive">
                      <table class="table table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th>Numero da Sala</th>
                                  <th>Nome da Sala</th>
                                  <th>Nome do predio</th>
                                  <th>Status</th>
                                  
                              </tr>
                          </thead>
                          <tbody>
                          
                           
                          <?php
       if(!empty($_POST['livre'] )){                               
       foreach(@$Slock as $row){?>

       <tr>
        <td><?php echo @$row->numero;?></td>
         <td><?php echo @$row->nome ;?></td>
        <td><?php echo @$row->predio;?></td>
       
        <td style="background-color:#0F0" ><a href="<?php echo base_url() . 'Reservas/fazerReserva/' . $row->idsalas; ?>">LIVRE</a></td>
       
      </tr>
    
      <?php }}?>
                          
                     
                          </tbody>
                      </table>
                  </div>
               <h2></h2>
                  <div style="" class="table-responsive">
                      <table class="table table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th>Locatario</th>
                                  <th>Data de locação</th>
                                   <th>Inicio da reserva</th>
                                  <th>Fim da reserva</th>
                                  <th>Sala Reservada</th>
                                  <th>Status</th>
                                  
                              </tr>
                          </thead>
                          <tbody>
                          
                           
                          <?php
         if(!empty($_POST['reservado'] )){                              
       foreach(@$Ulock as $row){?>

       <tr>
        <td><?php echo @$row->Locatario;?></td>
         <td><?php echo @$row->datareserva ;?></td>
         <td><?php echo @$row->horaini ;?></td>
        <td><?php echo @$row->horafim;?></td>
        <td><?php echo @$row->sala;?></td>
       
        <td style="background-color:#F00" >LOCADO</td>
       
      </tr>
    
      <?php }}?>
                          
                     
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