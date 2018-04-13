<section class="content-header">	
      <h1>
        REGISTRAR NUEVO USUARIO
        <!-- <small>Usuarios</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Usuario</a></li>
        <li class="active">Registrar nuevo usuario</li>
      </ol>
    </section>

    <section class="content">
      <div class="col-md-8">
          <?php if($this->session->flashdata('message_e')){ ?>      
           <div class="alert alert-danger" role="alert"><strong><?=$this->session->flashdata('message_e')?></strong></div>
          <?php }else if($this->session->flashdata('message_s')) { ?>
            <div class="alert alert-success" role="alert"><strong><?=$this->session->flashdata('message_s')?></strong></div>
          <?php  } ?>   
          <div class="box box-success">        
            <form role="form" method="post" action="<?= base_url()?>usuarios/insert">
              <div class="box-body">
                <div class="col-md-12"><br>
                   <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control text-uppercase" name="nombre" placeholder="Ingrese nombres completos">         
                      </div>                                   
                    </div>
                </div>
               <div class="col-md-6">
                <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="telefono" placeholder="Ingrese telefono">         
                      </div>                                   
                    </div>                  
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                 <!-- <label for="exampleInputEmail1">Email address</label> -->
                 <select name="rol" class="form-control" >
                     <?php foreach ($listar as $key): ?>
                       <option value="<?= $key->RolID ?>"><?= $key->Nombre ?></option>
                     <?php endforeach ?>
                 </select>
               </div>
               </div>
               <div class="col-md-12">
                    <div class="form-group"><br>
                        <p style="color:red"><strong>CREDENCIALES PARA INGRESAR AL SISTEMA</strong></p>                
                    </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group">
                 <!-- <label for="exampleInputEmail1">Email address</label> -->
                 <input type="email" class="form-control text-lowercase" name="correo" placeholder="Ingrese correo electronico" >
               </div>
               </div> 
               <div class="col-md-4">
                   <div class="form-group">
                 <!-- <label for="exampleInputEmail1">Email address</label> -->
                 <input type="password" class="form-control" name="clave" placeholder="Ingrese contraseña" >
               </div>
               </div> 
               <div class="col-md-4">
                   <div class="form-group">
                 <!-- <label for="exampleInputEmail1">Email address</label> -->
                 <input type="password" class="form-control" name="clave2" placeholder="Repita contraseña" >
               </div>
               </div> 
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm">REGISTRAR NUEVO USUARIO</button> ó <a href="#">Cancelar</a>
              </div>
            </form>
          </div>    
      </div>
    </section>