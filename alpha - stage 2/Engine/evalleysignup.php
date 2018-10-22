<?php

include 'db.php';
$username= $_POST['username'];
$password = $_POST['password'];	
$email = $_POST['email'];
$address = $_POST['address'];
$identificationno = $_POST['identificationno'];
$phoneno = $_POST['phoneno'];






    if(empty($_POST['username'])){

	     header("Location:../htdocs/Register.php?error=username");
		
		exit();
	}
	
	//Validate the password 
	if (empty($_POST['password'])){
		 header("Location:../htdocs/Register.php?error=password");
	
		exit();
	}
	
	
    if(empty($_POST['email'])){
		  header("Location:../htdocs/Register.php?error=email");
		
		exit();
	}
	
	 if(empty($_POST['address'])){
		  header("Location:../htdocs/Register.php?error=address");
		
		exit();
	}
	
	 if(empty($_POST['identificationno'])){
		  header("Location:../htdocs/Register.php?error=identificationno");
		
		exit();
	}
	
	 if(empty($_POST['phoneno'])){
		  header("Location:../htdocs/Register.php?error=phoneno");
		
		exit();
	}
	
	else {
		$sql= "SELECT username FROM user WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);
		if($uidcheck > 0) {
			 header("Location:../htdocs/Register.php?error=username");
			print '<p class="error">Username Existed!.</p>';
			exit();
		} 
		//If there were no errors, print a success message: 
		else {
			$sql = "INSERT INTO user (username,password,email,address,identificationno,phoneno)
			VALUES ('$username','$password','$email','$address','$identificationno','$phoneno')";
			$result = mysqli_query($conn, $sql);
			
			header("Location: ../index.php?status=success");
			exit();
		}
	}	
	
?>