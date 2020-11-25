<?php
include('connect.php');

if(isset($_POST['add_contact'])){
	if(! $conn ) {
        die('Could not connect: ' . $conn->connect_error);
	 }
	 $name=$_POST['Name'];
	 $Email_Id = $_POST['EmailId'];
	 $Mobile_No = $_POST['MobileNo'];
	 $message=$_POST['Message'];
	 
	 
	 $sql = "INSERT INTO contact_us (Name,EmailId,MobileNo,Message,Login_Id) VALUES('$name','$Email_Id','$Mobile_No','$message','0')";
		
	 //echo "$sql";
     $retval = $conn->query($sql);
     
     if(! $retval ) {
        die('Could not enter data: ' . $conn->connect_error);
     }
     
     echo "Entered data successfully\n";
}

?>


<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript" src="jquery.min.js"></script> 
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a href="index.php">Style My Hair</a>
			</div>
			<ul>
				<li>
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="about.php">about</a>
				</li>
				<li>
					<a href="hairstyle.php">hairstyles</a>
				</li>
				<!-- <li>
					<a href="news.php">news</a>
				</li> -->
				<li class="selected">
					<a href="contact.php">contact</a>
				</li>
				<li>
					<a href="login.php">login</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div id="body">
		<!-- <div class="article">
			<h3>contact us</h3>
			<p>
				This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
			</p>
			<ul>
				<li>
					<span>Address :</span> 7177 Saint Michael Drive, Los Angeles, CA 90048, United States
				</li>
				<li>
					<span>Office Phone Number :</span> (864) 232-3553
				</li>
				<li>
					<span>Fax Number :</span> (864) 232-4160
				</li>
				<li>
					<span>Email :</span> <a href="http://www.freewebsitetemplates.com/misc/contact">info@zizurz.com</a>
				</li>
			</ul>
		</div> -->
		<form action="<?php $_PHP_SELF ?>" method="post" id="form1" >
            
            <div class="form-group">
              <br>  Name <input type="text" name="Name" class="form-control"><br>
                Email Id <input type="email" name="EmailId" class="form-control"><br>
                Phone No<input type='phone' name='MobileNo' class="form-control"><br>
				Message<input type='text' name='Message' class="form-control"><br><br>
                <button type="submit" name="add_contact" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-primary">Clear</button>
                </div>
          </form> 
	</div>
	<div id="footer">
		<div>
			<div class="connect">
				<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
				<a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
				<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
				<a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
			</div>
			<p>
				&copy; copyright 2020 | all rights reserved.
			</p>
		</div>
	</div>
</body>
</html>