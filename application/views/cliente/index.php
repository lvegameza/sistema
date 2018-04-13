<div class="row">
<div class="col-md-12">
  <br><br><br>
  <h2>Lista de Articulos</h2>
  <hr>
    <table id="example" class="table table-striped table-bordered" style="font-size: 12px; height: 40px;" width="100%">
        <thead>
            <tr style="background:#2980b9;color:white; ">
                <th>CODIGO</th>
                <th>DESCRIPCION</th>
                <th class="text-center">MONEDA</th>
                <th>PRECIO</th>
                <th>GENERO</th>
                <th>SUBGENERO</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listar as $key): ?>
            <tr>
                <td><?= $key->Codigo ?></td>
                <td><?= $key->n1 ?></td>
                <td  class="text-center">
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
            </tr>                           
            <?php endforeach ?>            
        </tbody>
        <tfoot>
            <tr>
                <th>CODIGO</th>
                <th>DESCRIPCION</th>
                <th>MONEDA</th>
                <th>PRECIO</th>
                <th>GENERO</th>
                <th>SUBGENERO</th>
            </tr>
        </tfoot>
    </table>         
</div>
      
</div>
      
