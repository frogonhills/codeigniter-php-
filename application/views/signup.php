<!DOCTYPE html>

<html lang="">

<head>
<title>submit</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>




<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/04.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h1>Customer Registation</h1>
    </div>
    <div class="one_quarter">
      <form method="post" action="signupprocess">
        <fieldset>
          <legend>enter here</legend>
          <input class="btmspace-15" type="text" name="firstName" placeholder="First Name">
          <input class="btmspace-15" type="text" name="lastName" placeholder="last name">
          <input class="btmspace-15" type="text" name="email" placeholder="Email">
          <input class="btmspace-15" type="text" name="userid" placeholder="User ID">
          <input class="btmspace-15" type="password" name="password" placeholder="password">
          <input class="btmspace-15" type="text" name="address" placeholder="Address">
          <input class="btmspace-15" type="text" name="nationality" placeholder="Nationality">
          <input class="btmspace-15" type="text" name="phone" placeholder="phone number">
          <input class="btmspace-15" type="text" name="days" placeholder="hoy many days">

          <input type ="text" name ="catagory"  value =" <?php echo $this->uri->segment(2)?> ">
          <button type="submit" value="submit">submit</button>
        </fieldset>

      </form>
    </div>
    