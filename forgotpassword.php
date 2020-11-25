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
				<li>
					<a href="contact.php">contact</a>
				</li>
				<li class="selected">
					<a href="login.php">login</a>
				</li>
				
			</ul>
		</div>
	</div>
    <div id="body">
    <form action="<?php $_PHP_SELF ?>" method="post" id="form1" >
            
            <div class="form-group">
              <br>  
                
                Email Id <input type="email" name="EmailId" class="form-control"><br>
              
				
                <button type="submit" name="add_contact" class="btn btn-primary">Login</button><br><br>
               
           
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