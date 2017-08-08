<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Prometrus</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container" >
  <div class="row">
  <div class="page-header">
  <h1>Login</h1>
  </div>
  <div class="col-md-4 col-md-offset-4">
  <?php  if(@$alerta!= null){?>
   <div class="alert alert-<?php  echo @$alerta["class"];?>">
   <?php echo @$alerta["mensagem"];?>
   </div>
   <?php }?>
  <form action="<?php echo base_url('conta/entrar')?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="captcha" >
  <div class="form-group">
    <label for="email">Endereço de e-mail</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php  echo set_value('email')?>">
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" name="senha" class="form-control" id="senha" placeholder="senha" value="<?php echo set_value('senha')?>">
  </div>

  
  <button type="submit" name="entrar" value="entrar" class="btn btn-success pull-right">Entrar</button>
</form>

   </div>
  </div>

  </div>
    

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="<?php echo base_url('asstes/js/bootstrap.min.js')?>"></script>
  </body>