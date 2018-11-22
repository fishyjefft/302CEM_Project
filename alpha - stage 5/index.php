<?php 
	$Header="E-Valley";
	require 'Base/header.php';
	
	if(isset($_GET['status'])){
		if ($_GET['status']=='success'){
			echo '<script>alert("Register Successfully!");</script>';
		}
	}
?>
   <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Recommend</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Furniture</a>
            <a href="#" class="list-group-item">Electronics</a>
            <a href="#" class="list-group-item">Toys & Hobbies</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="Images/newarrivals.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="Images/luggage.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="Images/furniture.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
			
		
			
          </div>
		  
		  <div id="carouselExampleIndicators1" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="Images/toys.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="Images/cloths.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="Images/health.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
			
		
			
          </div>
		  

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="Catagoriesimages/Luggage/Bag/Chrome Unisex Hondo.jpg" style="width:240px;height:180px;" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Chrome Unisex Hondo bag</a>
                  </h4>
                  <h5>RM 37</h5>
                  <p class="card-text">Unisex Hondo bag</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="Catagoriesimages/Furniture/Antique/Household Essentials Trunks Standard.jpg" style="width:240px;height:180px;" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Household essential trunk standard</a>
                  </h4>
                  <h5>RM 129</h5>
                  <p class="card-text">Household essential</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="Catagoriesimages/Furniture/Baby/iloom, Licensed Disney Aco Sofa, Kids Sofa, Kids Chair, Toddler Chair, Kids Couch, Baby Couch, Children Lounge Couch, Living Room Furniture, Playroom Furniture (Minnie Mouse).jpg" style="width:240px;height:180px;" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Disney Aco sofa</a>
                  </h4>
                  <h5>RM 355</h5>
                  <p class="card-text">A cute Mickey mouse design sofa</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="Catagoriesimages/Electronic/Laptops/Lenovo Ideapad 210s 11.6 inch HD Flagship Laptop.jpg" style="width:240px;height:180px;" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Lenovo Ideapad 210s 11.6 inch HD Flagship Laptop</a>
                  </h4>
                  <h5>RM 3299</h5>
                  <p class="card-text">Lenovo laptop</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="Catagoriesimages/Gifts/Golf/Cleveland Golf Men's RTX 4 Wedge, Tour Satin Finish.jpg"  style="width:240px;height:180px; alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Golf Men'S RTX 4 wedge</a>
                  </h4>
                  <h5>RM 2399</h5>
                  <p class="card-text">Golf RTX for men</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="Catagoriesimages/Toys/baby/Gund Baby Animated Flappy The Elephant Plush Toy.jpg"  style="width:240px;height:180px; alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Elephant Plush</a>
                  </h4>
                  <h5>RM 267</h5>
                  <p class="card-text">A cute elephant plush for baby</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
   
	<?php require ("Base/footer.php");?>
	


    