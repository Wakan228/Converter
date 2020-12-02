<?php 
$link = mysqli_connect('localhost','root','','valute_db');
function SET_valute($link,$valute){
	 $selectSQL = "INSERT INTO `valute` (valute,base, convertt)
VALUES ('$valute', 1, 1);";
//echo $selectSQL;
 //$selectResult = $link->query($selectSQL);
}
function curl($url, $postdata='', $cookie='', $proxy='')
{
    $uagent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.205 Safari/534.16";
    
    $ch = curl_init( $url );
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   // возвращает веб-страницу
    curl_setopt($ch, CURLOPT_HEADER, 0);           // возвращает заголовки
    @curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);   // переходит по редиректам
    curl_setopt($ch, CURLOPT_ENCODING, "");        // обрабатывает все кодировки
    curl_setopt($ch, CURLOPT_USERAGENT, $uagent);  // useragent
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);        // таймаут ответа
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);       // останавливаться после 10-ого редиректа
    if(!empty($postdata))
	{
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
	}
	if(!empty($cookie))
	{
		//curl_setopt($ch, CURLOPT_COOKIEJAR, $_SERVER['DOCUMENT_ROOT'].'/2.txt');
		//curl_setopt($ch, CURLOPT_COOKIEFILE,$_SERVER['DOCUMENT_ROOT'].'/2.txt');
	}
	$content = curl_exec( $ch );
	$err     = curl_errno( $ch );
	$errmsg  = curl_error( $ch );
	$header  = curl_getinfo( $ch );
	curl_close( $ch );

	$header['errno']   = $err;
	$header['errmsg']  = $errmsg;
	$header['content'] = $content; 
	return $header;

}
 $url = $_GET["url"];
 $result = curl($url);
 $trimmed = trim($result["content"]);
 $menu =  explode('cc":',$trimmed);
 for ($i=1; $i < count($menu); $i = $i + 2) { 
 	 preg_match_all('/"(.*?)"/',$menu[$i],$type);
 	 echo $type[1][0].'<br>';
 	 SET_valute($link,$type[1][0]);
 }
 ?>