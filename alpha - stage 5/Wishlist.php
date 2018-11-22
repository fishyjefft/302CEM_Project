
<?php 
	$Header="E-Valley";
	require ("Base/h3.php");
?>
    <div class="shopping-cart" style="margin-top: 150px;">
      <!-- Title -->
      <div class="title">
        Wish List
      </div>

      <!-- Product #1 -->
	  <?php
	  $i=0;
	  foreach($Sess_Wish as $item_list){
		  echo 
		  '<div class="item">
			<div class="buttons">
			  <span class="delete-btn"></span>
			  <span class="like-btn"></span>
			</div>
			<div class="image">
			  <img src="Modal_Includes/Images/'.$item_list[3].'" alt="" width="110px" height="40px" />
			</div>
			<div class="description">
			  <span>'.$item_list[1].'</span>
			  <span>White</span>
			</div>
			<div class="total-price" > <a class="btn btn-primary" href="Base/fr_wish_to_item.php?ct_pos='.$i.'">Add To Cart</a></div>
			
			</div>
			';
			
			$i++;
	  }
	  
	  
	  ?>
	  
    </div>

    <script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}

        $input.val(value);

    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value < 100) {
      		value = value + 1;
    		} else {
    			value =100;
    		}

    		$input.val(value);
    	});

      $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
      });
    </script>
	 <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
  
	    <?php require ("Base/footer.php");?>

