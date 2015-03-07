<!DOCTYPE html>
<html lang="en">
	<head></head>
	<body>
	
		<div id="container">
			<h1>Requisicao ajax</h1>
			
			<button>Pegar hora</button>
			<div id='result'></div>
                        <?php echo CTRPATH; ?>
		</div>
	
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
		<script type="text/javascript">
		    $( document ).ready(function() {
	
	                $('button').click(function(){
		
  	                      $.ajax({
	                          'url' : "<?php echo CTRPATH;?>welcome/ajaxGetDate",
	                          'type' : 'GET',
	                          'success' : function(data){ 
	                              var result = JSON.parse( data );                             	                        
	                              $('#result').html( '<p>'+ result.date +'</p>' );
	                              $('button').html( 'Atualizar hora' );
	                          }
	                      });              
					
	                });
	
		    });
	     </script>	
	</body>
</html>