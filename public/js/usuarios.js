var idTabelaIndex = null;
$(document).ready(function() {
    idTabelaIndex = $('#lista-usuarios').DataTable({
      "dom": '<"col-md-6"f><"col-md-6"l><"col-md-12"rt><"bottom"ip><"clear">',
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "language": {
          url: '/dist/js/Portuguese-Brasil.json'
      },
      "order": [[ 0, "asc" ]],
      "processing": true,
      "serverSide": true
    });

    $('#lista-usuarios').change(function(){
    	idTabelaIndex.draw();
    });
} );
