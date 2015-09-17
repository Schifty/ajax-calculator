<?php
if(isset($_POST['num1'])){
$num1 = $_POST['num1'];
}else {$num1 = "";}


if(isset($_POST['operation'])){
$operation = $_POST['operation'];
}else {$operation = "";}

if(isset($_POST['num2'])){
$num2 = $_POST['num2'];
}else {$num2 = "";}


if(!empty($num1) and !empty($num2)){

 $a = "";
  // echo $operation; exit;

  if($operation=='Add'){
	$a = $num1 + $num2;
}else if($operation=='Subtract'){
	$a = $num1 - $num2;
}else if($operation=='Multiply'){
	$a = $num1 * $num2;
}else if($operation=='Divide'){
	$a = $num1 / $num2;
}

$returnData = array('total' => $a);

}



//convert the php array to json to be handled by javascript

echo json_encode($returnData);

?>