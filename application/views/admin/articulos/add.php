<section class="content-header">	
      <h1>
        REGISTRAR NUEVO ARTICULO
        <!-- <small>Usuarios</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Articulo</a></li>
        <li class="active">Registrar nuevo Articulo</li>
      </ol>
    </section>

    <section class="content">
      <div class="col-md-6">
        <?php if($this->session->flashdata('message_e')){ ?>      
           <div class="alert alert-danger" role="alert"><strong><?=$this->session->flashdata('message_e')?></strong></div>
          <?php }else if($this->session->flashdata('message_s')) { ?>
            <div class="alert alert-success" role="alert"><strong><?=$this->session->flashdata('message_s')?></strong></div>
          <?php  } ?>   
          <div class="box box-success">
            <form role="form" method="post" action="<?= base_url()?>articulos/insert">
              <div class="box-body"><br>
                <div class="col-md-6">  
                   <div class="form-group">   
                   <label for="">GENERO</label>         
                    <select id="genero" name="genero" class="form-control" >
                      <option value="0">Seleccione...</option>           
                     <?php foreach ($listarGeneros as $key): ?>
                       <option value="<?= $key->GeneroID ?>"><?= $key->Nombre ?></option>
                     <?php endforeach ?>
                    </select>
                    </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                 <label for="">SUBGENERO</label>         
                 <select id="subgenero" name="subgenero" class="form-control" >                 
                       <option value="0">Seleccione...</option>                     
                 </select>
               </div>
               </div> 
               <div class="col-md-12">
                 <hr>
               </div>  
               <div class="col-md-6">
                  <div class="form-group">
                 <label for="">Codigo</label>
                 <input type="text" class="form-control" name="codigo" placeholder="Ingrese Codigo">
               </div>
               </div>     
               <div class="col-md-12">
                  <div class="form-group">
                 <label for="">Nombre del Articulo</label>
                 <input type="text" class="form-control text-uppercase" name="articulo" placeholder="Ingrese Nombre del Articulo">
               </div>
               </div> 
               <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Tipo Moneda</label>
                   <select name="moneda" class="form-control" >                     
                         <option value="0">US$ (dólares)</option>                      
                         <option value="1">S/. (soles)</option>                      
                   </select>
                  </div>
               </div>   
               <div class="col-md-6">
                <label for="">Precio</label>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" name="precio" class="form-control">              
                  </div>
                  <p style="color: red;" class="pull-right"><small>USAR PUNTO (.)</small></p>
               </div>           
              </div>            
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm">REGISTRAR NUEVO ARTICULO</button> ó <a href="#">Cancelar</a>
              </div>
            </form>
          </div>    
      </div>
    </section>