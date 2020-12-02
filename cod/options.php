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
 	<div class="container option_cont">
 		<form action="api/api.php" method="GET">
 			<div class="valute_opstion row limit_box">
 				<label class="lable">Лимит историй</label>
 				<input type="number" name="limit_historys" class="limit_historys" >
 				<button type="submit" class="option_btn">Применить</button>
 			</div>
 			<div class="box_checkbox">
 			<?php echo $valute_convert_option; ?>
 			</div>
 		</form>
 	</div>

 	<?php include('include/js.php');?>	

 </body>
 </html>