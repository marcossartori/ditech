 </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Cadastro de salas</h1>
  </div>
  <div class="col-md-4 col-md-offset-4">
  <?php  if(@$alerta!= null){?>
   <div class="alert alert-<?php  echo @$alerta["class"];?>">
   <?php echo @$alerta["mensagem"];?>
   </div>
   <?php }?>
  <form action="<?php echo base_url('cadastro_salas/cadastrar')?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="captcha" >
  
  <div class="form-group">
    <label for="usuario">Numero Da Sala</label>
    <input type="number" name="numero" class="form-control" id="numero" placeholder="Numero" value="<?php echo set_value('numero');?>">
  </div>
  
  <div class="form-group">
    <label for="email">Nome do predio</label>
    <input type="text" name="predio" class="form-control" id="predio" placeholder="Predio" value="<?php  echo set_value('predio')?>">
  </div>
  
    <div class="form-group">
    <label for="email">Nome da sala</label>
    <input type="text" name="nome" class="form-control" id="nome" placeholder="nome" value="<?php  echo set_value('nome')?>">
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