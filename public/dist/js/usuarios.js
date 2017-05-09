var idTabelaIndex = null;
$(document).ready(function() {
    idTabelaIndex = $('#lista-usuarios').DataTable({
      "dom": '<"col-md-6"f><"col-md-6"l><"col-md-12"rt><"bottom"ip><"clear">',
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "language": {
          url: '/dist/js/Portuguese-Brasil.json'
      },
      "ajax": '/usuarios/listar_todos',
      "columns":[
        { data: 'id', name: 'id'},
        { data: 'name', name: 'name'},
        { data: 'cor', name: 'cor'},
        { data: 'email', name: 'email'},
        { data: 'categoria', name: 'categoria'},
        { data: 'id', name:'id'}
      ]
    });

    $('#lista-usuarios').change(function(){
    	idTabelaIndex.draw();
    });
} );
