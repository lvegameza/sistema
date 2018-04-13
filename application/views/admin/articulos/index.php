<section class="content-header">
      <h1>
        Articulos
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Articulos</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <a href="<?= base_url()?>articulos/add" class="btn btn-success btn-sm">REGISTRAR NUEVO ARTICULO</a>
            </div>         
                   	
        	<div class="box-body">
        		<table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
            
                <th>CODIGO</th>
                <th>DESCRIPCION</th>
                <th>MONEDA</th>                
                <th>PRECIO</th>
                <th>GENERO</th>
                <th>SUBGENERO</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listar as $key): ?>
            <tr>
                <td><?= $key->Codigo ?></td>
                <td><?= $key->n1 ?></td>
                <td>
                  <?php
                  if ($key->Moneda == 0) {
                    echo "US$";
                  }else{
                    echo "S/.";
                  }
                  ?></td>
                <td><?= $key->Precio ?></td>     
                <td><?= $key->n2 ?></td>     
                <td><?= $key->n3 ?></td>     
                <td><a href="#" class="btn btn-second btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i> DETALLE</a></td>   
            </tr>                           
            <?php endforeach ?>                  
        </tbody>       
    </table>
        	</div>
          </div>
       
        </div>
     
      </div>
     
    </section>