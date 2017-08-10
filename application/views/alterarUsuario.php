 </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Cadastro de Usuarios</h1>
  </div>
  <div class="col-md-4 col-md-offset-4">
  <?php  if(@$alerta!= null){?>
   <div class="alert alert-<?php  echo @$alerta["class"];?>">
   <?php echo @$alerta["mensagem"];?>
   </div>
   <?php }?>
   <form action="<?php echo base_url('cadastro_usuario/atualizar')?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="captcha" >
   <input type="hidden" name="id" value="<?php echo $usuario[0]->id;?>" >
  
  <div class="form-group">
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuário" value="<?php echo $usuario[0]->usuario;?>">
  </div>
  <div class="form-group">
    <label for="usuario">Nome completo</label>
    <input type="text" name="nome" class="form-control" id="usuario" placeholder="Nome Completo" value="<?php echo $usuario[0]->nome;?>">
  </div>
  <div class="form-group">
    <label for="usuario">Setor</label>
    <input type="text" name="setor" class="form-control" id="usuario" placeholder="Setor"  value="<?php  echo $usuario[0]->setor;?>">
  </div>
  
  <div class="form-group">
    <label for="email">Endereço de e-mail</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php  echo $usuario[0]->email;?>">
  </div>
  
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" name="senha" class="form-control" id="senha" placeholder="senha" value="<?php echo $usuario[0]->senha;?>">
  </div>
  
  <div class="form-group">
    <label for="confisenha">Confirmar Senha</label>
    <input type="password" name="confisenha" class="form-control" id="confisenha" placeholder="Confirmar Senha" >
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