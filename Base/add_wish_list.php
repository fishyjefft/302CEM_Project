<?php

require ("../Engine/SessionManager.php");

if(isset($_GET["id"]) && isset($_GET["i_name"]) && isset($_GET["price"]) && isset($_GET["pic"])){
	
	$pid = $_GET["id"];
	$item_name = $_GET["i_name"];
	$price = $_GET["price"];
	$pic = $_GET["pic"];
	
	$Session = new SessionManager();
	$Session->StartSession();
	$Session->CreateSession();
	
	$Sess_Wish = $Session->GetSession("Main_Wish");
	
	array_push($Sess_Wish, array($pid, $item_name, $price, $pic, 1));
	
	$Session->ChangeData("Main_Wish", $Sess_Wish);
	
	header('Location: ../Wishlist.php');
	exit();
}	
else{
	header('Location: ../');
	exit();
}