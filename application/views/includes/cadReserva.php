 <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.min.js'?>"></script>
<script type="text/javascript">
	
	$(document).ready(function(e) {
		
		
		
        $('#horaini').change(function(){
			var horaIni = $('#horaini').val().split(':');
			horasTotal = parseInt(horaIni[0], 10) + parseInt(1, 10);
			//minutosTotal = parseInt(horaIni[1], 10) + parseInt(horaSom[1], 10);  
		    horaFinal= horasTotal +":"+horaIni[1];
			$('#horafim').val(horaFinal);
			
			
			});
    });
	</script>
 </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Reservas</h1>
  </div>
  <div class="col-md-4 col-md-offset-4">
  <?php 

   if(@$alerta!= null){?>
   <div class="alert alert-<?php  echo @$alerta["class"];?>">
   <?php echo @$alerta["mensagem"];?>
   
   
   </div>
   <?php } ?>
   <form action="<?php echo base_url('Reservas/cadastrar')?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="captcha" >
   <input type="hidden" value="<?php echo $this->session->userdata('id');?>" name="idusuario" >
   <input type="hidden" value="<?php echo  @$Reserva[0]->idsalas?>" name="idsala" >
 
  <div class="form-group">
    <label for="usuario">Locatario</label>
    <input type="text" disabled="disabled" name="locatario" class="form-control" id="usuario" placeholder="Locatario"  value="<?php echo $this->session->userdata('usuario');?>">
  </div>
  <div class="form-group">
    <label for="usuario">Data de Reserva</label>
    <input type="date" name="datareserva" class="form-control" id="date" placeholder="Data de reserva" value="<?php echo set_value('datareserva')?>">
  </div>
   <div class="form-group">
    <label for="usuario">Hora da Reserva</label>
    <input  type="time" name="horaini" class="form-control" id="horaini" placeholder="Horario de Reserva" value="<?php echo set_value('horaini')?>">
  </div>
  <div class="form-group">
    <label for="usuario">Horario final </label>
    <input  readonly="readonly" type="text" name="horafim" class="form-control" id="horafim" placeholder="Horrario final" value="<?php echo set_value('horafim')?>">
  </div>
  
  <div class="form-group">
    <label for="email">Sala Reservada</label>
    <input type="text" disabled="disabled" name="email" class="form-control" id="email" placeholder="Nome da Sala" value="<?php  echo @$Reserva[0]->nome?>">
  </div>
  
 
  
  <button type="submit" name="salvar" value="salvar" class="btn btn-success pull-right">Salvar</button>
</form>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>