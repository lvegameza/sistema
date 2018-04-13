
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url()?>public/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url()?>public/js/bootstrap.min.js"></script>

<script src="<?= base_url()?>public/js/jquery.dataTables.min.js"></script>

<script src="<?= base_url()?>public/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url()?>public/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>public/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url()?>public/js/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?= base_url()?>public/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url()?>public/js/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url()?>public/js/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url()?>public/js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) --><!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>public/js/demo.js"></script>

<script src="<?= base_url()?>public/js/main.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()    
  })
  $('#example1').DataTable( {
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    } );
</script>

</body>
</html>