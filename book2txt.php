<?php 

header("Access-Control-Allow-Origin: http://lorrin.cn");
header("Access-Control-Allow-Origin: http://acee.net16.net");
header("Access-Control-Allow-Origin: http://niutan.github.io/acee_sjch2014/");

$books=stripslashes($_POST['books']);
$iddd=$_POST['iddd'];
echo file_put_contents($iddd, $books);
echo 1;
#echo (!empty($iddd))? '1':'0';

?>
