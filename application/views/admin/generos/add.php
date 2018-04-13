<section class="content-header">	
      <h1>
        REGISTRAR NUEVO GENERO
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
            <form role="form" method="post" action="<?= base_url()?>generos/insert">
              <div class="box-body">
                <div class="col-md-12"><br>
                  <div class="form-group">                 
                    <input type="text" class="form-control text-uppercase" name="nombre" placeholder="INGRESE NOMBRE GENERO">
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">                
                    <textarea name="descripcion" cols="30" rows="10" class="form-control" placeholder="INGRESE UNA DESCRIPCION"></textarea>
                  </div>
               </div>                
              </div>            
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm">REGISTRAR NUEVO GENERO</button> ó <a href="#">Cancelar</a>
              </div>
            </form>
          </div>    
      </div>
    </section>