
<?php 
	$Header="E-Valley";
	require ("Base/h3.php");
?>
    <div class="shopping-cart" style="margin-top: 150px;">
      <!-- Title -->
      <div class="title">
        Cart List
      </div>

      <!-- Product #1 -->
	  <?php
	  foreach($Sess_Cart as $item_list){
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
			<div class="quantity">
			  <button class="plus-btn" type="button" name="button" onclick="$(\'#ttl_price_'.$item_list[0].'\').html(parseInt($(\'#ttl_qty_'.$item_list[0].'\').val())*'.$item_list[2].')">
				<img src="plus.svg" alt="" />
			  </button>
			  <input type="text" name="name" id="ttl_qty_'.$item_list[0].'" value="'.$item_list[4].'">
			  <button class="minus-btn" type="button" name="button" onclick="$(\'#ttl_price_'.$item_list[0].'\').html(parseInt($(\'#ttl_qty_'.$item_list[0].'\').val())*'.$item_list[2].')">
				<img src="minus.svg" alt="" />
			  </button>
			</div>
			<div class="total-price" id="ttl_price_'.$item_list[0].'">'.$item_list[2].'</div>
			
			</div>
			';
			
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

