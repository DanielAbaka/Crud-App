<?php 
include 'db.php';

if(isset($_POST['send'])){

$name = $_POST['task'];

$sql = "Insert into task (name) values ('$name')";

$val = $db->query($sql);

if($val){

	header('location: index.php');
}

}


?>