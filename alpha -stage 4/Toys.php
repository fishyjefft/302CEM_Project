<?php 
	$Header="E-Valley";
	require 'Base/header.php';
?>
 
  <body>	
		 <!-- Page Content -->
    <article>
      <div class="container" id="game">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
		  
           <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

			<table class="table" align="center" >
		<thead> 
			<tr>
				<th> ID </th>
				<th> Picture </th>
				<th> Name </th>
				<th> Description </th>
				<th> Price(RM)</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
	  <?php 
		
		$conn = new mysqli('localhost','root','','evalley');
		
		$query = 'select * from evalley_product where Category=\'toy\' order by Productid ASC;';
		$result = $conn->query($query) or die('Error:'.$conn->error);
		$data = array();
		$have_data = false;
		
		if($result->num_rows > 0)
		{
			$have_data = true;
			
			while($row = $result->fetch_assoc())
			{
				$data[] = $row;
			}
		}
		else
		{
			$have_data = false;
		}
		
		$result->close();
		$conn->close();

	  ?>
	 
	<tbody>
		<?php
		
		if($have_data == true)
		{
			foreach($data as $row)
			{
				echo '<tr>';
				
				echo '<td>'.$row['Productid'].'</td>';
				echo '<td><a href="Modal_Includes/Images/'.$row['Image'].'"><img src="Modal_Includes/Images/'.$row['Image'].'" width="240" height="240" alt="" align="left" /></a></td>';
				echo '<td>'.$row['Name'].'</td>';
				echo '<td>'.$row['Description'].'</td>';
				echo '<td>'.$row['Price'].'</td>';
				echo '<td><a class="btn btn-primary" id="item_'.$row['Productid'].'" href="Base/add_cart_item.php?id='.$row['Productid'].'&i_name='.$row['Name'].'&price='.$row['Price'].'&pic='.$row['Image'].'">Add To Cart</a></td>';
				echo '<td><a class="btn btn-primary" href="Base/add_wish_list.php?id='.$row['Productid'].'&i_name='.$row['Name'].'&price='.$row['Price'].'&pic='.$row['Image'].'">Add To Wishlist</a>';
				
				echo '</tr>';
			}
		}
		else
		{
			echo '<tr><td colspan="4" class="text-center">No Data</td></tr>';
		}
		
		?>
		
	</tbody>


	</table>
			
			  </div>
			</div>
		  </div>
		</article>
    <!-- /.container -->
	
	<?php
			
		if($Sess_Admin == true)
		{
			include_once ('Modal_Includes/Modal_Interface1.php');
			
			echo '<button type="button" data-toggle="modal" data-target="#add_data">Add item</button>';
		}
			
	?>
	
	 <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
		
		
		
		
		    <!-- Footer -->
	   <?php require ("Base/footer.php");?>
	   
	   	<script>

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("game");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>

	
  </body>

</html>