<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>LOGIN</title>
</head>
<body>

  <div class="container">
  
     <div class="row">
    
     <?php if($this->session->flashdata('message_e')){ ?>                       
           <div class="alert alert-danger" role="alert"><strong><?=$this->session->flashdata('message_e')?></strong></div>
          <?php }else if($this->session->flashdata('message_s')) { ?>
            <div class="alert alert-success" role="alert"><strong><?=$this->session->flashdata('message_s')?></strong></div>
          <?php  } ?>  
       <form class="col s4 offset-s4" method="post" action="<?= base_url()?>init/login">
        <img src="<?= base_url()?>public/img/logo.png">
     <h5 class="center-align"><strong>INGRESO AL SISTEMA</strong></h5>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="correo">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="clave">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="col s6 push-s7">
        <input type="hidden" name="token" value="<?= $token ?>">
        <button class="btn waves-effect waves-light" type="submit" name="action">INGRESAR
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
   
  </div>
  </div>
	
	         <footer class="page-footer teal lighten-2" style="position: absolute;width: 100%;bottom: 0;left: 0;">        
            <div class="footer-copyright">
              <div class="container">
              © 2014 Copyright Text
              <a class="grey-text text-lighten-4 right" href="#!">Created by Luis Vega</a>
              </div>
            </div>
          </footer>
        
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</html>