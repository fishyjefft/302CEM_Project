<?php require('Base/session.php'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

	<title><?php echo $Header; ?> </title>
  </head>
  
  <body>
    <!-- Navigation -->
	    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: rgba(53, 79, 119, 1.0);">
            <div class="col-xl-3">
                <a class="navbar-brand" href="index.php">E-Valley</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="col-xl-8 justify-content-center" style="float: none; margin: 0 auto;">
                <div class="input-group" style="width:80%;">
                    <input type="text" id="txt_SearchText" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                        <input type="button" id="btn_NavSearch" class="btn btn-success" value="Search" />
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <ul class="navbar-nav" >
					<li class="col-sm-3">
						<?php
							if($Sess_Status == NULL || $Sess_Status == 0){
								echo LogInDisplay();
							}
							else{
								echo LogOutDisplay();
							}
						?>
					  
					</li>
                </ul>
            </div>  
        </nav>
		
		        <nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color: rgba(0, 0, 51, 1.0);">
           
            <div class="row"  >
              <ul class="navbar-nav">
                <li class="col-sm-3">
                  <a class="nav-link" href="Category.php">Category </a>
                </li>
                <li class="col-sm-3">
                  <a class="nav-link" href="Promotion.php">Promotions</a>
                </li>
                <li class="col-sm-3">
                  <a class="nav-link" href="AboutUs.php">About Us</a>
                </li>
                  <li class="col-sm-3">
                  <a class="nav-link" href="#">Wishlist</a>
				  
			<div class="cart-align">	  
                </li>
                  <li class="col-sm-3">
                  <a class="nav-link" href="#">Cart</a>
                </li>
			</div>
			
              </ul>
            </div>
        </nav>