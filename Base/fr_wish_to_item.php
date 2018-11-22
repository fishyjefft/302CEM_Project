<?php

require ("../Engine/SessionManager.php");

if(isset($_GET["ct_pos"])){
	
	$Session = new SessionManager();
	$Session->StartSession();
	$Session->CreateSession();
	
	$Sess_Cart = $Session->GetSession("Main_Cart");
	
	$Sess_Wish = $Session->GetSession("Main_Wish");
	
	$Selected_Data = $Sess_Wish[$_GET["ct_pos"]];
	
	array_push($Sess_Cart, $Selected_Data);
	
	$Session->ChangeData("Main_Cart", $Sess_Cart);
	
	header('Location: ../Cart.php');
	exit();
}
else{
	header('Location: ../');
	exit();
}