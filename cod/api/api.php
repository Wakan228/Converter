<?php 
include('../include/controller.php');
if(!empty($_GET['history'])){
	preg_match_all('/,(.*?),/',$_GET['history'],$value);
	if($value[1][0] != 0 && $value[1][0] != ''){
		SET_historys($link,$value[1][0],$value[1][1],date("y.m.d"));
	}
}
if(!empty($_GET['limit_historys'])){
	SET_limit_historys($link,$_GET['limit_historys']);
	header('Location: ../index.php');
}
if(!empty($_GET['valute'])){
	preg_match_all('/,(.*?),/',$_GET['valute'],$value);
	SET_valute($link,$value[1][0],$value[1][1]);
}

 ?>