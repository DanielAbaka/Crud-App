<?php

$db = new Mysqli;

$db->connect('localhost','root','','crude');

if(!$db){
	echo "success";
}
?>