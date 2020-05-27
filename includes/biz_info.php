




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BizTweak - Biz Info</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mycss.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/Features-Boxed.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>





<header>
<!-- Collapsible Navigation Bar <div class="container-fluid">-->

  <div class="container-fluid">
<!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#36e2ce;">


    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <!-- Button that toggles the navbar on and off on small screens -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

      <!-- Hides information from screen readers -->
        <span class="sr-only"></span>

        <!-- Draws 3 bars in navbar button when in small mode -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

	<a class="pull-left" href="#"><img src="logo.png" style="width:50px;height:50px;"></a>
    </div>

   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="navbar-header">
      <a class="navbar-brand" href="#">BizTweak</a>
    </div>
	  
	  <ul class="nav navbar-nav">
        
		<li><a href="../dashboard.php"><i class="fas fa-chart-pie mr-3"></i>  Dashboard</a></li>
		
		<li class="active"><a href="../biz_info.php"><i class="fas fa-info mr-3"></i>  Biz Info</a></li>
		<li><a href="../biz_structure.php"><i class="fas fa-network-wired"></i>  Biz Structure</a></li>
		<li><a href="../biz_concept.php"><i class="fas fa-users"></i>  Biz Concept</a></li>
 
      </ul>
      <!-- navbar-left will move the search to the left -->
     
		<ul class="nav navbar-nav navbar-right" style="padding-right:5px;">
		<li><a href="../my_profile.php"><i class="fas fa-user mr-3"></i>  My Profile</a></li>
		<li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i>  Logout</a></li>
       </ul>
    </div><!-- /.navbar-collapse -->
  
  
</nav>
</div><!-- /.container-fluid -->

</header>

<main>




    <div class="features-boxed">
        <div class="container" style="margin:0 auto;">
            <div class="intro">
                <h2 class="text-center">Business Information </h2>
                <p class="text-center">Please add the following information about your business.</p>
            </div>
            <div class="row features">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item">
                    <div class="box"><i class="fas fa-info icon"></i>
                        <h3 class="name">Biz Info</h3>
                        <p class="description">
						
						 <form method="POST" action="biz_info_process.php" style="width: 350px; margin:0 auto;">
    <div class="form-group">
      <label for="entname">Enterprise Name:</label>
      <input type="text" class="form-control" id="entname" placeholder="Enter enterprise name" name="entname">
    </div>
    <div class="form-group">
      <label for="entnum">Enterprise Number:</label>
      <input type="text" class="form-control" id="entnum" placeholder="Enter enterprise number" name="entnum">
    </div>
    <div class="form-group">
      <label for="regdate">Registration date:</label>
      <input type="text" class="form-control" id="regdate" placeholder="Enter registration date" name="regdate">
    </div>
    <div class="form-group">
      <label for="entadd">Enterprise Address:</label>
      <input type="text" class="form-control" id="entadd" rows="5" placeholder="Enter enterprise address" name="entadd">
    </div>
    <div class="form-group">
      <label for="entbio">Enterprise biography:</label>
      <input type="text" class="form-control" id="entbio" placeholder="Define your enterprise in one sentence." name="entbio">
    </div>
	<div class="form-group">
	<label for="entsta">Enterprise Status:</label>
	<select class="form-control" id="entsta" name="entsta">
        <option>Idea/Concept</option>
        <option>Start Up (Pre-revenue)</option>
        <option>Start Up (Post-revenue)</option>
        <option>Established Enterprise (&gt; 2 years)</option>
      </select>
	</div>

	
			<div class="form-group">
	<label for="entind">Enterprise Industry:</label>
	<select multiple class="form-control" id="entind" name="entind">
        <option>Admin/Business support</option>
        
        <option>Agriculture, Forestry,Fishing and Hunting</option>
        <option>Arts, Entertainment and Recreation</option>
		<option>Constrution</option>
		<option>Education</option>
		<option>Finance and Insurance</option>
		<option>Healthcare and Social Assistance</option>
		<option>Hospitality</option>
		<option>Information Technology</option>
		<option>Manufacturing</option>
		<option>Mining and Mineral processing</option>
		<option>Professional, Scientific and Technical Services</option>
		<option>Real Estate</option>
		<option>Retail</option>
		<option>Transport and Logistics</option>
		<option>Utilities</option>
      </select>
	</div>
	    <div class="form-group">
      <label for="entprods">Product/Service Offering:</label>
      <input type="text" class="form-control" id="entprods" placeholder="Enter enterprise product/service" name="entprods">
    </div>
	
    <button type="submit" class="btn btn-default"name="bizinfo-update">Update</button>
  </form>
						
						</p>
												
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
