<?php include('database.php');
function GET_limit_historys($link)
{
 $selectSQL = "SELECT * FROM  `options` WHERE id = 1";
  $selectResult = $link->query($selectSQL);
    if ($selectResult->num_rows > 0) {
     $result = $selectResult->fetch_assoc();
        return $result;
    }
    return false;
}
$limit_historys = GET_limit_historys($link);

function GET_valute_base($link){
  $selectSQL = "SELECT * FROM  `valute` WHERE base = 1";
  $selectResult = $link->query($selectSQL);
    if ($selectResult->num_rows > 0) {
    	 $array = array();
    	 while($result = $selectResult->fetch_assoc()){
    	 	array_push($array,$result);
    	 }
        return $array;
    }
    return false;
}

function GET_valute_convert($link){
  $selectSQL = "SELECT * FROM  `valute` WHERE base = 1";
  $selectResult = $link->query($selectSQL);
    if ($selectResult->num_rows > 0) {
    	 $array = array();
    	 while($result = $selectResult->fetch_assoc()){
    	 	array_push($array,$result);
    	 }
        return $array;
    }
    return false;
}
function GET_valute_convertt($link){
  $selectSQL = "SELECT * FROM  `valute`";
  $selectResult = $link->query($selectSQL);
    if ($selectResult->num_rows > 0) {
       $array = array();
       while($result = $selectResult->fetch_assoc()){
        array_push($array,$result);
       }
        return $array;
    }
    return false;
}
function GET_historys($link,$limit_historys){
  $selectSQL = "SELECT * FROM  `history` ORDER BY id DESC LIMIT $limit_historys";
  $selectResult = $link->query($selectSQL);
    if ($selectResult->num_rows > 0) {
    	 $array = array();
    	 while($result = $selectResult->fetch_assoc()){
    	 	array_push($array,$result);
    	 }
        return $array;
    }
    return false;
}
function SET_historys($link,$base,$convertt,$data){
      $selectSQL = "INSERT INTO `history` (data,base,convertt)
                                  VALUES ('$data','$base','$convertt')";
    $selectResult = $link->query($selectSQL);
}
function SET_limit_historys($link,$limit)
{
 $selectSQL = "UPDATE options
  SET limit_history = $limit
  WHERE id = 1;";
  $selectResult = $link->query($selectSQL);
}
function SET_valute($link,$valute,$on)
{
 $selectSQL = "UPDATE valute
  SET base = $on
  WHERE valute = '$valute'";
  echo $selectSQL;
  $selectResult = $link->query($selectSQL);
}
 ?>