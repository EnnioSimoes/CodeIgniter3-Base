//$( document ).ready(function() {
    
    //========= Busca Ajax jquery =========
    /*
    $.ajax({
        'url' : "http://localhost/codeigniter3/crud/getDados",
        'type' : 'GET',
        'success' : function(data){ 
            var result = JSON.parse( data );                             	                        
            $('#result').html( '<p>'+ result.data[0]['nome'] +'</p>' );
            //console.log(result);
        }
    });      
    */
   
    //========= Busca Ajax Jquery DataTables =========
    /*
    $('#example').dataTable({
        "ajax": "http://localhost/codeigniter3/crud/getDados",
        "bProcessing": true,
        "columns": [
            {"data": "id" },
            {"data": "nome" },
            {"data": "telefone" },
            {"data": "idade" },
        ],
        "columnDefs": [ {
            "targets": 5,
            "data": "id",
            "render": function ( data, type, full, meta ) {
            return '<a href="'+data+'">Apagar</a>';
            }
        },
        {
            "targets": 4,
            "data": "id",
            "render": function ( data, type, full, meta ) {
            return '<a href="'+data+'">Editar</a>';
            }
        }
    
        
        ]

    });
    */
   
    //========= Busca Ajax Jquery JTable =========        

//});