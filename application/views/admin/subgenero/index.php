<section class="content-header">
      <h1>
        Sub Generos
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">SubGeneros</li>
      </ol>
    </section>


    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <a href="<?= base_url()?>generos/addSub/<?= $generoID ?>" class="btn btn-success btn-sm">REGISTRAR NUEVO SUBGENERO</a>
            </div>         
                   	
        	<div class="box-body">
          <?php if($this->session->flashdata('message_e')){ ?>      
           <div class="alert alert-danger" role="alert"><strong><?=$this->session->flashdata('message_e')?></strong></div>
          <?php }else if($this->session->flashdata('message_s')) { ?>
            <div class="alert alert-success" role="alert"><strong><?=$this->session->flashdata('message_s')?></strong></div>
          <?php  } ?>   
        		<table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
            
                <th>SUBGENERO</th>
                <th>DESCRIPCION</th>
                <th>ESTADO</th>                
                <th>OPERACION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listar as $key): ?>
            <tr>
                <td><?= $key->Nombre ?></td>
                <td><?= $key->Descripcion ?></td>
                <td><?php 
                    if ($key->Estado == 0) {
                      echo "<span class='label label-success'>Activo</span>";
                    }else{
                      echo "<span class='label label-danger'>Inactivo</span>";    
                    } ?>                                    
                </td>                
                <td><a href="#" class="btn btn-second btn-sm">OPERACIONES</a></td>      
            </tr>                 
            <?php endforeach ?>        
        </tbody>       
    </table>
        	</div>
          </div>
       
        </div>
     
      </div>
     
    </section>