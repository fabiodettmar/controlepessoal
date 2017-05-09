var idTabelaIndex = null;
$(document).ready(function() {
    idTabelaIndex = $('#lista-ultimos-registros').DataTable({
      "dom": '<"col-md-6"f><"col-md-6"l><"col-md-12"rt><"bottom"ip><"clear">',
      "paging": false,
      "lengthChange": true,
      "searching": false,
      "ordering": false,
      "info": false,
      "language": {
          url: '/dist/js/Portuguese-Brasil.json'
      },
      "ajax": '/registros/listar_ultimos',
      "columns":[
        { data: 'tipo_registro', name: 'tipo_registro'},
        { data: 'data_entrada', name: 'data_entrada'},
        { data: 'valor', name: 'valor'},        
        { data: 'descricao', name: 'descricao'}
      ]
    });

    $('#lista-ultimos-registros').change(function(){
    	idTabelaIndex.draw();
    });
} );
