<?php 
include('model.php');
$valute_convert = '';
$history_text = '';
$valute_base = '<option value="UAH">UAH</option>'.PHP_EOL.'<option value="USD">USD</option>'.PHP_EOL.'<option value="BYN">BYN</option>'.PHP_EOL;
	$valutes_get_convert = GET_valute_convert($link);
	$valutes_get_convertt =  GET_valute_convertt($link);
	 	foreach ($valutes_get_convert as $valute) {
 		$valute_convert .= '<option value="'.$valute['valute'].'">'.$valute['valute'].'</option>'.PHP_EOL;
 	}
	 	foreach ($valutes_get_convertt as $valute) {
	 		if($valute['base'] == 1){
	 			$checked = 'checked';
	 		}else{
	 			$checked = '';
	 		}
 		$valute_convert_option .= '<div class="valute_opstion row"><div class="valuta"><h3>'.$valute['valute'].'</h3></div><input type="checkbox" '.$checked.' data-atr="'.$valute['valute'].'" class="checkbox"></input></div>'.PHP_EOL;
						}				
	$historys = GET_historys($link,$limit_historys['limit_history']);
	 	foreach ($historys as $history) {
 		$history_text .= '<div class="history_box"><h3>DATA : '.$history['data'].'</h3><h4>'.$history['base'].'   =  '.$history['convertt'].'</div></h4>'.PHP_EOL;
		}
 ?>