<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>CRUD Module CodeIgniter</title>
            

    <link href="<?=ASSETSPATH ?>jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=ASSETSPATH ?>jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
<!--	
    <script src="<?=ASSETSPATH ?>scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="<?=ASSETSPATH ?>scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="<?=ASSETSPATH ?>scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
-->    
    
</head>
<body>

<div id="container">
<?php
//print_r($data);
//echo JSPATH;
?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div id="PersonTableContainer"></div>
        </div>
    </div>

</div>
    
    
    
    <script type="text/javascript" src="<?=JSPATH.'jquery-2.1.1.min.js'; ?>" ></script>
    <script type="text/javascript" src="<?=ASSETSPATH.'jquery-ui/jquery-ui.min.js'; ?>" ></script>
    <script type="text/javascript" src="<?=ASSETSPATH.'jtable/jquery.jtable.min.js'; ?>" ></script>
    
    
    
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#PersonTableContainer').jtable({
            title: 'CRUD Module CodeIgniter',
            paging: true, //Enable paging
            pageSize: 10, //Set page size (default: 10)
            sorting: true, //Enable sorting
            defaultSorting: 'Name ASC', //Set default sorting        
            actions: {
                listAction: '/codeigniter3/crud/getAll',
                createAction: '/codeigniter3/crud/insert',
                updateAction: '/codeigniter3/crud/update',
                deleteAction: '/codeigniter3/crud/delete'
            },
            fields: {
                id: {
                    key: true,
                    create: false,
                    edit: false,
                    list: false
                },
                nome: {
                    title: 'Nome',
                    width: '40%'
                },
                telefone: {
                    title: 'Telefone',
                    width: '20%'
                },
                idade: {
                    title: 'Idade',
                    width: '30%',
                    create: true,
                    edit: true
                }
            }
        });
        $('#PersonTableContainer').jtable('load');  
        });
    </script>
</body>
</html>