<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BizTweak - Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mycss.css" rel="stylesheet">
	 <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body  style="background-color:#eef4f7;">




<main>


<div class="container">

<img src="logo.png" class="logo" style="width:100px; height:100px; margin-top:5%;">


<div class="row" style="margin-top:5%;">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">




<div id="loginCarousel" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators">

<li data-target="#loginCarousel" data-slide-to="0" class="active">

</li>

<li data-target="#loginCarousel" data-slide-to="1">

</li>

<li data-target="#loginCarousel" data-slide-to="2">

</li>

<li data-target="#loginCarousel" data-slide-to="3">

</li>

</ol>

<div class="carousel-inner">

<div class="item active">
<div class="slide1"><img src="photos/rsz_three_women_consulting.jpg"></div>
<div class="carousel-caption" style="color:#000000;">
<h1>Ideation to revenue</h1>
<p>Set yourself up for success.</p>

</div>
</div>




<div class="item">
<div class="slide2"><img src="photos/rsz_spotong.jpg"></div>
<div class="carousel-caption" style="color:#000000;">
<h1>Collaborate</h1>
<p>Build for the masses.</p>

</div>
</div>



<div class="item">
<div class="slide3"><img src="photos/black-female-farmer.jpg" style="color:#000000;"></div>
<div class="carousel-caption">
<h1>Live your dream.</h1>
<p>Anywhere, anytime.</p>

</div>
</div>





<div class="item">
<div class="slide4"><img src="photos/rsz_david-siglin-87978-unsplash.jpg"></div>
<div class="carousel-caption" style="color:#000000;">
<h1>Concept to Consumer</h1>
<p>Ideate with ease.</p>

</div>
</div>



</div>

<a class="left carousel-control" href="#loginCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>


<a class="right carousel-control" href="#loginCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>



</div>









</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="border-left:solid; border-width:1px;">

		<div>
			<h4>Sign in with			  
				<span class="fa fa-facebook" style="padding:0 10px; font-size:150%;"></span> 
				<span class="fa fa-twitter" style="padding:0 10px; font-size:150%;"></span> 
				<span class="fa fa-linkedin" style="padding:0 10px; font-size:150%;"></span>
			</h4> 


		</div>

			<h4 style=" width:100%; text-align:center; border-bottom: 1px solid #000; line-height:0.01em; margin:10px 0 20px; margin-top:35px;">
			
			<span style=" background:#eef4f7; padding:0 10px;">Or</span>
			
			</h4>

<form action="includes/login_process.php" method="post">
	<div class="form-group">

		<label for="emailad">
			<h4>Email Address</h4>
		</label>
	<input type="text" placeholder="Enter Username/Email" name="emailad" class="form-control">
	</div>
	
	
	<div class="form-group">

		<label for="psw">
			<h4>Password</h4>
		</label>
	<input type="Password" placeholder="Enter Password" name="psw" class="form-control">
	</div>

	
	
	<div class="form-group">
	
	<input type="checkbox" name="chkbxlgn">
		
		<label for="chkbxlgn">
			<h5>Remember me</h5>
		</label>
	
	<div class="pull-right">
	<a href="#" data-toggle="modal" data-target="#frgtpass"><h5>Forgot Password?</h5></a>
	
	</div>


	</div>
	

	<div style="width:20%;">
		<button type="submit" class="btn btn-primary btn-block" name="login-submit">Login</button>
	</div>
</form>
	<div>
	<h5>
	Don't have an account?
	<a href="#" data-toggle="modal" data-target="#regacc">Register</a>
	</h5>
	</div>


</div>



				
				
				<!-- Modal -->
<div id="regacc" class="modal fade" role="dialog">
  <div class="modal-dialog">
<form action="includes/signup_process.php" method="post">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:blue;"><b>Register Account</b></h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">



	<div class="form-group">

		<label for="uname">
			<h4>Username</h4>
		</label>
	<input type="text" placeholder="Enter Username" name="uname" class="form-control" required>
	</div>
	
	
	
	<div class="form-group">

		<label for="emailad">
			<h4>Email Address</h4>
		</label>
	<input type="text" placeholder="Enter Email" name="emailad" class="form-control" required>
	</div>
	
	
	<div class="form-group">

		<label for="psw">
			<h4>Password</h4>
		</label>
	<input type="password" placeholder="Enter a strong Password" name="psw" class="form-control" required>
	</div>
	
	
	<div class="form-group">

		<label for="pswc">
			<h4>Password</h4>
		</label>
	<input type="password" placeholder="Repeat the strong Password" name="pswc" class="form-control" required>
	</div>		
	
	
	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="signup-submit">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				







				
				
				<!-- Modal -->
<div id="frgtpass" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:blue;"><b>Reset Password</b></h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">


	
	<div class="form-group">

		<label for="emailad">
			<h4>Email Address</h4>
		</label>
	<input type="text" placeholder="Enter Email" name="emailad" class="form-control" required>
	</div>
	
	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>

  </div>
</div>
				













</div>
</div>





</main>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
