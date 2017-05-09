var idTabelaIndex = null;
$(document).ready(function() {
    idTabelaIndex = $('#lista-registros').DataTable({
      "dom": '<"col-md-6"f><"col-md-6"l><"col-md-12"rt><"bottom"ip><"clear">',
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "language": {
          url: '/dist/js/Portuguese-Brasil.json'
      },
      "ajax": '/registros/listar_todos',
      "columns":[
        { data: 'id', name: 'id'},
        { data: 'tipo_registro', name: 'tipo_registro'},
        { data: 'data_entrada', name: 'data_entrada'},
        { data: 'valor', name: 'valor'},
        { data: 'categoria', name: 'categoria'},
        { data: 'responsavel', name:'responsavel'},
        { data: 'conta', name:'conta'},
        { data: 'status', name:'status'},
        { data: "id", "width": "90px", "name":"id", "render": function (data) {
            return '<a href="/registros/mostra/'+ data +'" class="btn btn-warning btn-xs">Editar</a> '
            + '<a href="/registros/remove/'+ data +'" class="btn btn-danger btn-xs">Remover</a>';
          }
        }
      ]
    });

    $('#lista-registros').change(function(){
    	idTabelaIndex.draw();
    });
} );
