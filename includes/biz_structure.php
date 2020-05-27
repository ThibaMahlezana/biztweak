




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BizTweak - Biz Structure</title>

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
		
		<li><a href="../biz_info.php"><i class="fas fa-info mr-3"></i>  Biz Info</a></li>
		<li class="active"><a href="../biz_structure.php"><i class="fas fa-network-wired"></i>  Biz Structure</a></li>
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
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Business Structure </h2>
                <p class="text-center">A business structure enlightens you more about all the legal documentation you 
need based on jurisdiction. The business structure you choose influences everything 
from day-to-day operations, to taxes, to how much of your personal assets are 
at risk.</p>
            </div>
            <div class="row features">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-education icon"></i>
                        <h3 class="name">Talent</h3>
                        <p class="description"> the anticipation of required human capital for an organization and the 
						planning to meet those needs is critical.</p>
												<a href="#" class="learn-more" data-toggle="modal" data-target="#bstal">Answer questions »</a></div>
                </div>
				
				
				<!-- Modal -->
<div id="bstal" class="modal fade" role="dialog">
  <div class="modal-dialog">

 <form method="POST" action="biz_structure_process_talent.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mindset & Leadership</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do the owners/executive management have sufficient experience in providing the product or service?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio_1" class="custom-control-label">No</label>
      </div> 
    </div>
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">The owners or management of the company are spending most of their time in the company?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio1_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio1_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio1_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio1_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Are the educational qualifications or background experience sufficient to support the delivery of products or services offered?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio2_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio2_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio2_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio2_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	      <div class="modal-header">
        
        <h4 class="modal-title">Employee Satisfaction</h4>
      </div>
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you perform employee satisfaction surveys?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio3_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio3_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio3_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio3_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Can you rank the level of employee satisfaction?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio4_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio4_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio4_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio4_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>



	      <div class="modal-header">
        
        <h4 class="modal-title">Functional Capability</h4>
      </div>
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Are there sufficient administration systems in place to help the company’s processes?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio5" id="radio5_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio5_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio5" id="radio5_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio5_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Is the company’s organizational structure sufficient to support the delivery of products or services offered?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio6" id="radio6_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio6_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio6" id="radio6_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio6_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>




	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizstructuretalent-update">Update</button>
      </div>
    </div>
	
</form>	
	
	
  </div>
</div>
				







				
				
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-book icon"></i>
                        <h3 class="name">Legal</h3>
                        <p class="description">The body of law that applies to the rights, 
						relations, and conduct of persons and businesses engaged in commerce, merchandising, 
						trade, and sale of goods and services.</p>
									<a href="#" class="learn-more" data-toggle="modal" data-target="#bsleg">Answer questions »</a></div>
                </div>									
				
				<!-- Modal -->
<div id="bsleg" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">

 <form method="POST" action="biz_structure_process_legal.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Constitutional Docs. Compliance</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">COR14.3</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio10_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio10_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio10_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio10_1" class="custom-control-label">No</label>
      </div> 
    </div>
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Memo. Of Incorporation</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio11_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio11_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio11_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio11_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Shareholders Agreement</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio12_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio12_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio12_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio12_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Share certificates</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio13_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio13_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio13_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio13_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Share register</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio14_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio14_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio14_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio14_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">share vluation structure</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio5" id="radio15_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio15_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio5" id="radio15_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio15_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>

	      <div class="modal-header">
        
        <h4 class="modal-title">Commercial contract Agreement</h4>
      </div>	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Non-disclosure agreement</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio6" id="radio16_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio16_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio6" id="radio16_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio16_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>

	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">General terms and conditions</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio7" id="radio17_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio17_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio7" id="radio17_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio17_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Services Agreement</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio8" id="radio18_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio18_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio8" id="radio18_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio18_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>

	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Sub-contractor agreement</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio9" id="radio19_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio19_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio9" id="radio19_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio19_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Joint venture/ teaming agree</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio90" id="radio190_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio190_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio90" id="radio190_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio190_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Any other third party contracts</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio91" id="radio191_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio191_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio91" id="radio191_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio191_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>

	      <div class="modal-header">
        
        <h4 class="modal-title">Labour Compliance</h4>
      </div>

	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Employment contracts</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio92" id="radio192_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio192_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio92" id="radio192_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio192_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Fixed term employment contracts</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio93" id="radio193_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio193_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio93" id="radio193_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio193_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Indi. Contractor contracts</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio94" id="radio194_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio194_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio94" id="radio194_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio194_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Leave and grievance appl. Forms</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio95" id="radio195_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio195_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio95" id="radio195_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio195_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">COIDA certification</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio96" id="radio196_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio196_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio96" id="radio196_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio196_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Disciplinary policy</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio97" id="radio197_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio197_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio97" id="radio197_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio197_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">HIV/AIDS Policy</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio98" id="radio198_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio198_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio98" id="radio198_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio198_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Grievance Policy</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio99" id="radio199_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio199_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio99" id="radio199_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio199_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Grievance Policy</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio990" id="radio199_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio199_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio990" id="radio199_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio199_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Leave policy</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio991" id="radio1990_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio1990_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio991" id="radio1990_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio1990_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>



	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Sexual Harassment Policy</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio992" id="radio1991_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio1991_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio992" id="radio1991_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio1991_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Occupational health and safety</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio993" id="radio1992_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio1992_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio993" id="radio1992_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio1992_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">POPI Policy</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio994" id="radio1993_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio1993_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio994" id="radio1993_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio1993_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>

	      <div class="modal-header">
        
        <h4 class="modal-title">Regulatory Know. And Compliance</h4>
      </div>



	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Company’s Act</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio995" id="radio1994_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio1994_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio995" id="radio1994_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio1994_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Basic Conditions of Employ.</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio996" id="radio1995_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio1995_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio996" id="radio1995_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio1995_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">POPI</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio997" id="radio1996_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio1996_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio997" id="radio1996_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio1996_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Occupational Health & Safety</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio998" id="radio1997_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio1997_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio998" id="radio1997_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio1997_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>


	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Income tax & VAT</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio999" id="radio1998_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio1998_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio999" id="radio1998_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio1998_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>



	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Intellectual Property
</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio9990" id="radio1999_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio1999_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio9990" id="radio1999_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio1999_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizstructurelegal-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>



				
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-share icon"></i>
                        <h3 class="name">Service Offering Capability </h3>
                        <p class="description">organized collection of specific people, process, information, technology 
						and other resources which together function to meet customer need.</p>
								<a href="#" class="learn-more" data-toggle="modal" data-target="#bssoc">Answer questions »</a></div>
                </div>
				
				<!-- Modal -->
<div id="bssoc" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">

 <form method="POST" action="biz_structure_process_soc.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delivery Expertise</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Is there a defined process to pursue potential business opportunities?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio10_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio10_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio10_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio10_1" class="custom-control-label">No</label>
      </div> 
    </div>
	</div>
	

	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company have the appropriate technical infrastructure to provide core business offerings?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio11_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio11_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio11_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio11_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>

	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Can the company show its experience in delivering the service or product?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio12_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio12_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio12_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio12_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company provide the required product training to employees?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio13_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio13_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio13_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio13_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Can you rank the employees’ level of skill to deliver the products or services?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio14_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio14_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio14_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio14_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company have dedicated and qualified people to deliver the products and services?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio5" id="radio15_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio15_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio5" id="radio15_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio15_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
			
	      <div class="modal-header">
        
        <h4 class="modal-title">Compliance and Certification</h4>
      </div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does your company have the relevant compliance requirements in place?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio6" id="radio16_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio16_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio6" id="radio16_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio16_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company have a Quality assurance process in place?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio7" id="radio17_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio17_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio7" id="radio17_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio17_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Is your company certified or accredited for the core services offered?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio8" id="radio18_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio18_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio8" id="radio18_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio18_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
		
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Is your company certified by SASDC?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio9" id="radio19_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio19_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio9" id="radio19_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio19_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	      <div class="modal-header">
        
        <h4 class="modal-title">Market Intelligence</h4>
      </div>

	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company conduct market research?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio90" id="radio190_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio190_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio90" id="radio190_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio190_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	  

	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Has the company actively identified a competitors in the market?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio91" id="radio191_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio191_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio91" id="radio191_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio191_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>

	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Has the company identified a key competitive advantage?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio92" id="radio192_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio192_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio92" id="radio192_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio192_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	  

	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you know the company’s product or service differentiation?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio93" id="radio193_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio193_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio93" id="radio193_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio193_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	  	  



	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizstructuresoc-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				




				
				
				
				
				
				
				
				
				
				
				<div class="clearfix visible-md"></div>
				<div class="clearfix visible-lg"></div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-tree-conifer icon"></i>
                        <h3 class="name">Organisation </h3>
                        <p class="description">a system that consists of explicit and implicit institutional 
						rules and policies designed to outline workflow.</p>
								<a href="#" class="learn-more" data-toggle="modal" data-target="#bsorg">Answer questions »</a></div>
                </div>
				
				<!-- Modal -->
<div id="bsorg" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_structure_process_org.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Business Process Management</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you document all the business processes?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio10_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio10_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio10_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio10_1" class="custom-control-label">No</label>
      </div> 
    </div>
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Business processes are regularly reviewed and updated?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio11_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio11_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio11_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio11_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you have a method to manage deviations from documented business processes?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio12_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio12_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio12_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio12_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Are all business processes communicated to all company personnel?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio13_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio13_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio13_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio13_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	      <div class="modal-header">
        
        <h4 class="modal-title">Marketing and Sales</h4>
      </div>

	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company advertise?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio14_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio14_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio14_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio14_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Is the company’s advertising effective?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio5" id="radio15_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio15_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio5" id="radio15_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio15_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>	
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company conduct sales planning and developed targets?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio6" id="radio16_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio16_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio6" id="radio16_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio16_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>	
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you have a price strategy in place?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio7" id="radio17_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio17_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio7" id="radio17_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio17_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>	
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you review your pricing strategy often?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio8" id="radio18_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio18_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio8" id="radio18_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio18_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>	
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you have a dedicated person responsible for sales?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio9" id="radio19_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio19_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio9" id="radio19_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio19_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>	

	

	
	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizstructureorg-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				







				
				
				
				
				<div class="clearfix visible-sm"></div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-knight icon"></i>
                        <h3 class="name">Strategy </h3>
                        <p class="description">a set of competitive moves and actions that a business uses to attract customers, 
						compete successfully, strengthening performance, and achieve organisational goals. </p>
							<a href="#" class="learn-more" data-toggle="modal" data-target="#bsstr">Answer questions »</a></div>
                </div>
				
				<!-- Modal -->
<div id="bsstr" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_structure_process_stra.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Business & Customers</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company have a defined business plan?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio10_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio10_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio10_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio10_1" class="custom-control-label">No</label>
      </div> 
    </div>
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Is the company executing the business plan?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio11_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio11_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio11_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio11_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company measure client/customer satisfaction?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio12_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio12_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio12_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio12_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Can you rate the effectiveness of client/customer engagement?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio13_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio13_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio13_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio13_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	      <div class="modal-header">
        
        <h4 class="modal-title">Growth Strategy</h4>
      </div>	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you have a defined growth strategy with targeted growth areas?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio14_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio14_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio14_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio14_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company invest sufficiently in product or service development?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio5" id="radio15_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio15_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio5" id="radio15_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio15_1" class="custom-control-label">No</label>
      </div> 
    </div>	
	</div>
	
	




	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizstructurestra-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				


				
				
				
				
				
				
				
				
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-briefcase icon"></i>
                        <h3 class="name">Financial Management</h3>
                        <p class="description">A useful for portfolio management, distribution of dividend, 
						capital raising, hedging and resource allocation.</p>
						<a href="#" class="learn-more" data-toggle="modal" data-target="#bsfinman">Answer questions »</a></div>
                </div>
				
				<!-- Modal -->
<div id="bsfinman" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_structure_process_finman.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Financial Management</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company perform budgeting and forecasting?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio10_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio10_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio0" id="radio10_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio10_1" class="custom-control-label">No</label>
      </div> 
    </div>
	</div>
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company implement cash flow management?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio11_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio11_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio11_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio11_1" class="custom-control-label">No</label>
      </div> 
    </div>
	</div>
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company perform reconciliations?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio12_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio12_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="radio12_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio12_1" class="custom-control-label">No</label>
      </div> 
    </div>
	</div>
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company document the financials of the business?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio13_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio13_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="radio13_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio13_1" class="custom-control-label">No</label>
      </div> 
    </div>
	</div>
		
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Does the company have a dedicated person responsible for financial management?</span>	
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio14_0" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=True> 
        <label for="radio14_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="radio14_1" type="radio" aria-describedby="radioHelpBlock" required="required" class="custom-control-input" value=False> 
        <label for="radio14_1" class="custom-control-label">No</label>
      </div> 
    </div>
	</div>		
	
	

	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizstructurefinman-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				








</main>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
