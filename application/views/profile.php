<html>

<head>
</head>

<body>
	<?php  foreach ($userdata as $key ) {   ?>

<p> First name= <?php echo $key['firstName']  ?></p>
<p> Customer id= <?php echo $key['customerid']  ?></p>
<p> Last name=  <?php echo $key['password']  ?></p>
<p>Email=  <?php echo $key['email']  ?></p>
<p>Address=  <?php echo $key['address']  ?></p>
<p>Nationality=  <?php echo $key['nationality']  ?></p>
<p>Phone=  <?php echo $key['phone']  ?></p>





<?php } ?>








</body>