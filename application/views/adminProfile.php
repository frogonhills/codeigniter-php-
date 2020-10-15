<html>

<head>Admin Page
</head>

<body>
	<?php  foreach ($userdata as $key ) {   ?>

<p> First name= <?php echo $key['firstName']  ?></p>
<p> Last name=  <?php echo $key['password']  ?></p>
<p>User ID=  <?php echo $key['userid']  ?></p>
<p>Password=  <?php echo $key['password']  ?></p>

<br>
<br>
<br>
<br>
<br>
<div>
<a href="workingEmployee"> Current Employees</a><br>
<a href="customerSttaus">Customer Sttus</a><br>

<?php } ?>
<div>
    <form action="bycid" method="post">
         
         <input type="text" name="customerid" placeholder=" Customer ID" >
       <button>search ID</button>     


    </form>
  </div>
  <div>
    <form action="bycatagory" method="post">
         
         <input type="text" name="catagory" placeholder=" Catagory" >
       <button>search catagory</button>     


    </form>
  </div>














</body>
</html>