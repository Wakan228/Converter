<?php 
		$link = mysqli_connect('localhost','root','','valute_db');
		if(mysqli_connect_errno())
		{
				echo 'Ошибка в подключении('.mysqli_connect_errno().'): '.mysqli_connect_error();
				exit();
		}
 ?>