<html>
<head>
		<title> Upload </title>
</head>
<body>

<form action="image.php" method="POST" enctype="multipart/from-data">
	File:
	<input type="file" name="image"> <input type="submit" value="Upload">
</form>

<?php

// connect to database.
mysql_connect("localhost","root","","evalley") or die(mysql_error());
mysql_select_db("evalley") or die (mysql_error());

// file properties
$file = $_FILES['image']['tmp_name'];

if (!isset($file))
	echo "Please select an image.";
else
	{
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addcslashes($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
		
		if ($image_size == FALSE)
			echo "That's not an image.";
		else
		{
			
		}
	}
?>

</body>
</html>