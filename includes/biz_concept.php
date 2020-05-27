




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BizTweak - Biz Concept</title>

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
		<li><a href="../biz_structure.php"><i class="fas fa-network-wired"></i>  Biz Structure</a></li>
		<li class="active"><a href="../biz_concept.php"><i class="fas fa-users"></i>  Biz Concept</a></li>
 
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
                <h2 class="text-center">Business Concept </h2>
                <p class="text-center">Assess the understanding, stregnth and potential of your business concept.</p>
            </div>
            <div class="row features">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-certificate icon"></i>
                        <h3 class="name">Value proposition</h3>
                        <p class="description">A value proposition is a promise of value to be delivered
												, communicated, and acknowledged. It is also a belief from the customer about 
												how value will be delivered, experienced and acquired.</p>
												<a href="#" class="learn-more" data-toggle="modal" data-target="#bcvp">Answer questions »</a></div>
                </div>
				
				
				<!-- Modal -->
<div id="bcvp" class="modal fade" role="dialog">
  <div class="modal-dialog">
 <form method="POST" action="biz_concept_process_vprop.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Value proposition</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you know the problem you are solving?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know what value you deliver to the customer?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Are you aware of which customer needs you are satisfying?</span>	
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
	
	
	  <div class="form-group row">
    <div class="col-4"></div> 
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Can you describe the uniqueness of your product, and show key differences from existing alternatives?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you have an elevator pitch?</span>	
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





	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptvprop-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				







				
				
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-user icon"></i>
                        <h3 class="name">Customer segment</h3>
                        <p class="description">Customer segmentation is the process of dividing customers 
									into groups based on common characteristics so companies can market to 
									each group effectively and appropriately.</p>
									<a href="#" class="learn-more" data-toggle="modal" data-target="#bccs">Answer questions »</a></div>
                </div>									
				
				<!-- Modal -->
<div id="bccs" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_concept_process_cs.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Customer segment</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you know who your product is for?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know who is your target market/audience?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know where they are located?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know the Total market size?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know how much of your market is accessible?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know how much of your market is in your region/locality?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you have a profile for your ideal customer?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know who your most important customers are?</span>	
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




	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptcs-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				







									
									
									
									
									
									
									
									
									
									
									
									
									

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-bullhorn icon"></i>
                        <h3 class="name">Channels </h3>
                        <p class="description">A marketing channel is the people, organizations, and activities necessary 
								to transfer the ownership of goods from the point of production to the point of consumption. </p>
								<a href="#" class="learn-more" data-toggle="modal" data-target="#bcch">Answer questions »</a></div>
                </div>
				
				<!-- Modal -->
<div id="bcch" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_concept_process_cha.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Marketing channels</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you know how you are going to reach your customers?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you have a marketing plan in place?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Have you developed a network to reach your target audience?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you provide post-sales customer support?</span>	
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
	
	





	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptcha-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				




				
				
				
				
				
				
				
				
				
				
				<div class="clearfix visible-md"></div>				
				
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-heart icon"></i>
                        <h3 class="name">Customer relationships </h3>
                        <p class="description">Customer relationship management is an approach to managing a company's 
								interaction with current and potential customers. It uses data analysis about customers' 
								history with a company to improve business relationships with customers, specifically 
								focusing on customer retention and ultimately driving sales growth</p>
								<a href="#" class="learn-more" data-toggle="modal" data-target="#bccr">Answer questions »</a></div>
                </div>
				
				<!-- Modal -->
<div id="bccr" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_concept_process_cusrel.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Customer relationships</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you know the types of relationships you need to establish with your customer segments?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you have a process for getting your customer base?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you have a process for retaining your customer base?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you have a system in place for growing your customer base?</span>	
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
	
	





	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptcusrel-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				







				
				
				
				
				
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-piggy-bank icon"></i>
                        <h3 class="name">Revenue streams </h3>
                        <p class="description">Revenue Streams are the various sources from which a business earns money 
							from the sale of goods. In business, a revenue stream is generally made up of either recurring revenue, 
							transaction-based revenue, project revenue, or service revenue. </p>
							<a href="#" class="learn-more" data-toggle="modal" data-target="#bcrs">Answer questions »</a></div>
                </div>
				
				<!-- Modal -->
<div id="bcrs" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_concept_process_revstr.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Revenue streams</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you know how to generate revenue from each customer segment?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know the value that your customers are willing to pay for?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know how your customers are currently paying?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know how your customers prefer to pay?</span>	
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
	
	





	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptrevstr-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				


				
				
				
				
				
				
				
				
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-check icon"></i>
                        <h3 class="name">Key activities</h3>
                        <p class="description">these are the most important tasks a company must carry out in order to 
						fulfill its business purpose. To be successful, a company must carry out key actions that are 
						primarily dictated by its business model.</p>
						<a href="#" class="learn-more" data-toggle="modal" data-target="#bcka">Answer questions »</a></div>
                </div>
				
				<!-- Modal -->
<div id="bcka" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_concept_process_keyact.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Key activities</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you know the most important things you need to do to make your business model work?</span>	
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
	
	

	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptkeyact-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				






			<div class="clearfix visible-md"></div>
				<div class="clearfix visible-sm"></div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-check icon"></i>
                        <h3 class="name">Key Resources</h3>
                        <p class="description">Key Resources is the building block describing the most important assets 
						needed to make a business model work. Every business model requires them, and it is only through 
						them that companies generate Value Propositions and Revenues. Key resources can be physical, 
						financial, intellectual, or human. </p>
						<a href="#" class="learn-more" data-toggle="modal" data-target="#bckr">Answer questions »</a></div>
                </div>
				
				<!-- Modal -->
<div id="bckr" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_concept_process_keyres.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Key resources</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you know what infrastructure and resources you need in order to deliver the key activities?</span>	
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
	
	

	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptkeyres-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				








                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-check icon"></i>
                        <h3 class="name">Key partners</h3>
                        <p class="description">Key Partners are the relationships that you have with other business, 
						governmental, or non-consumer entities that help your business model work. These can be the 
						relationships that your company has with your suppliers, your manufacturers, business partners, 
						etc.</p>
						<a href="#" class="learn-more" data-toggle="modal" data-target="#bckp">Answer questions »</a></div>
                </div>
	
				<!-- Modal -->
<div id="bckp" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_concept_process_keypart.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Key partners</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you know what strategic partnerships the company needs to form, to increase the scalability and efficiency of the business?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Have you determined how each partnership will help the business?</span>	
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


	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptkeypart-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				


				
				
				
					
				
				
				
				
				<div class="clearfix visible-sm"></div>
                
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-usd icon"></i>
                        <h3 class="name">Cost structure</h3>
                        <p class="description">Cost structure refers to the types and relative proportions of fixed and 
						variable costs that a business incurs. Cost structure can be used as a tool to determine pricing. </p>
						<a href="#" class="learn-more" data-toggle="modal" data-target="#bccstr">Answer questions »</a></div>
                </div>
	
				<!-- Modal -->
<div id="bccstr" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_concept_process_coststr.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cost structure</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Have the costs involved in delivering the key activities been determined?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Have the costs involved in acquiring the key resources been determined?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know the costs involved in maintaining customer relationships?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know the costs involved in determining and acquiring market segments?</span>	
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
	
	





	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptcoststr-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				


				
				
				
	






				<div class="clearfix visible-md"></div>	
               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-duplicate icon"></i>
                        <h3 class="name">Current alternatives</h3>
                        <p class="description">In business, a company in the same industry or a similar industry which offers 
						a similar product or service. The presence of one or more competitors can reduce the prices of goods 
						and services as the companies attempt to gain a larger market share. </p>
						<a href="#" class="learn-more" data-toggle="modal" data-target="#bccalt">Answer questions »</a></div>
                </div>
	
				<!-- Modal -->
<div id="bccalt" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_concept_process_curralt.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Current alternatives</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Do you know how the problem you are solving is currently being addressed?</span>	
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
      <span id="radioHelpBlock" class="form-text text-muted">Do you know who are the people currently solving this problem?</span>	
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
	
	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptcurralt-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				


				
				
				
	




				

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-cog icon"></i>
                        <h3 class="name">Solution</h3>
                        <p class="description">It includes the practical, experiential, affective, meaningful and valuable aspects of
												of the value proposition. </p>
						<a href="#" class="learn-more" data-toggle="modal" data-target="#bcsol">Answer questions »</a></div>
                </div>
	
				<!-- Modal -->
<div id="bcsol" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_concept_process_sol.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Solution</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Have you determined the experience you want the customer to experience when applying your product/service?</span>	
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
	
	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptsol-update">Submit</button>
      </div>
    </div>
</form>
  </div>
</div>
				


				
				
				
	



				

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="box"><i class="glyphicon glyphicon-fast-forward icon"></i>
                        <h3 class="name">Unfair Advantage</h3>
                        <p class="description">Something that puts you in a better position than your competitors which cannot easily be copied or bought. </p>
						<a href="#" class="learn-more" data-toggle="modal" data-target="#bcuad">Answer questions »</a></div>
                </div>
	
				<!-- Modal -->
<div id="bcuad" class="modal fade" role="dialog" style="text-align:left;">
  <div class="modal-dialog">
<form method="POST" action="biz_concept_process_unfad.php">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Unfair advantage</h4>
      </div>
      <div class="modal-body" style="margin-left:15px;">
	  
	  
	<div class="form-group row">
    <div class="col-4"></div>   
    <div class="col-8">
      <span id="radioHelpBlock" class="form-text text-muted">Is there a special thing, attribute or characteristic that your competitors are not able to copy or obtain?</span>	
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
	
	
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="bizconceptunfad-update">Submit</button>
      </div>
    </div>
</form>
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
