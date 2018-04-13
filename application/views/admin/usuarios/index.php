<section class="content-header">	
      <h1>
        Lista de Usuarios
        <small>Lista General</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Usuario</a></li>
        <!-- <li class="active">Data tables</li> -->
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <a href="<?= base_url()?>usuarios/add" class="btn btn-success btn-sm">REGISTRAR NUEVO USUARIO</a>
            </div>         
                   	
        	<div class="box-body">
            <?php if($this->session->flashdata('message_e')){ ?>      
               <div class="alert alert-danger" role="alert"><strong><?=$this->session->flashdata('message_e')?></strong></div>
              <?php }else if($this->session->flashdata('message_s')) { ?>
                <div class="alert alert-success" role="alert"><strong><?=$this->session->flashdata('message_s')?></strong></div>
            <?php  } ?>  
            <table id="example1" class="table" style="height: 40px;" width="100%">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Estado</th>
                        <th>Rol</th>
                        <th>Operacion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listar as $key): ?>
                        <tr>
                            <td><?= $key->Nombres ?></td>
                            <td><?= $key->Correo ?></td>
                            <td><?= $key->Telefono ?></td>
                            <td><?php 
                                if ($key->Estado == 0) {
                                    echo "<span class='label label-success'>Activo</span>";
                                }else{
                                    echo "<span class='label label-danger'>Inactivo</span>";    
                                } ?>                                    
                            </td>                           
                            <td><?php 
                                if ($key->RolID == 1) {
                                    echo "Administrador";
                                }else{
                                    echo "Cliente";    
                                } ?>                                    
                            </td>
                            <td><a href="#" class="btn btn-second btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i>
 DETALLE</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        	</div>
          </div>       
        </div>     
      </div>     
</section>