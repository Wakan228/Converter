<?php 
include('include/controller.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<?php include('include/link.php');  ?>
 	<title>valuta</title>
 </head>
 <body>
 	<?php include('include/header.php'); ?>
 	<div class="container index_cont">
 			<div class="row justify-content-around valute_main">
 				<div class="container_base">
	 				<input type="text" class="base_ccy">
					<select class="selsect_base">
						<?php echo $valute_base; ?>
					</select>
				</div>
				<div class="container_convert">
	 				<input type="text" readonly class="convert_ccy">
					<select class="selsect_convert">
					  <?php echo $valute_convert; ?>
					</select>
				</div>
 			</div>
 	</div>

 	<?php include('include/js.php');?>	

 </body>
 </html>