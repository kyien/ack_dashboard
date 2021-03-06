<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Bootstrap Dashboard by Bootstrapious.com</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="all,follow">
		<!-- Bootstrap CSS-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Google fonts - Roboto -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<!-- theme stylesheet-->
		<link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
		<!-- jQuery Circle-->
		<script src="js/dropzone.js"></script>

		
		<link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
		<!-- Custom stylesheet - for your changes-->
		<link rel="stylesheet" href="css/custom.css">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/favicon.ico">
		<!-- Font Awesome CDN-->
		<!-- you can replace it by local Font Awesome-->
		<script src="https://use.fontawesome.com/99347ac47f.js"></script>
		<!-- Font Icons CSS-->
		<!-- <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">  old dashboard icon databse-->
    <link href="https://file.myfontastic.com/onqXfTEE9u2ddH6ZwSxUgM/icons.css" rel="stylesheet">
		<!-- Tweaks for older IEs--><!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	</head>
	<body>
		<!-- Side Navbar -->
		<?php  $page="expense";include ("globalnav.php");?>
							<div class="breadcrumb-holder">
								<div class="container-fluid">
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item active">Voteheads</li>

									</ul>
								</div>
							</div>
							<form method="POST" action="voteheads.php">
							<section class="forms">
								<div class="container-fluid">
									<header>
										<h1 class="h3 display">Voteheads</h1>
									</header>
									<span class="form-group"><input class="form-control " type="date" value="" "></span>
									<div class="row">
										<div class="col-lg-6	">
											<div class="card">
											<div class="card-block">
												<h1 class="h3 display">RECURRENT</h1>
												<div class="line"></div>
								                    <div class="form-group row">
								                      
								                      <div class="col-sm-12	">
								                        <div class="row">
								                        	 <label class="col-md-3 form-control-label"><i class="fa fa-bolt fa-2x" aria-hidden="true"> &nbsp;</i>Electricity </label>
								                          <div class="col-md-6">
								                            <input type="text" placeholder="" class="form-control">
								                          </div><div class="line"></div>
								                          <label class="col-md-3 form-control-label"><i class="fa fa-tint fa-2x" aria-hidden="true"> &nbsp;</i>Water</label>
								                          <div class="col-md-6">
								                            <input type="text" placeholder="" class="form-control">
								                          </div><div class="line"></div>
								                            <label class="col-md-3 form-control-label"><i class="fa fa-shield fa-2x" aria-hidden="true"> &nbsp;</i>Security</label>
								                          <div class="col-md-6">
								                            <input type="text" placeholder="" class="form-control">
								                          </div>
								                          <div class="line"></div>
								                            <label class="col-md-3 form-control-label"><i class="fa fa-book fa-2x" aria-hidden="true"> &nbsp;</i>Stationary</label>
								                          <div class="col-md-6">
								                            <input type="number" placeholder="" class="form-control">
								                          </div><div class="line"></div>
								                            <label class="col-md-3 form-control-label"><i class="fa fa-coffee fa-2x" aria-hidden="true"> &nbsp;</i>Refreshments </label>
								                          <div class="col-md-6">
								                            <input type="text" placeholder="" class="form-control">
								                          </div><div class="line"></div>
								                          <label class="col-md-3 form-control-label"><i class="fa fa-plus fa-2x" aria-hidden="true"> &nbsp;</i>Other Expenses</label>
								                          <div class="col-md-6">
								                            <input type="text" placeholder="" class="form-control">
								                          </div>
								                        </div>
								                      </div>
								                    </div>
								                </div>
											</div>
										</div>
										<!-----------------Sunday school--- -->
										<div class="col-lg-6">
											<div class="card">
												<div class="card-block">	
												<div class="card-header d-flex align-items-center">
											<h1 class="h3 display">MINISTRY EXPENSES</h1>
												</div>
												
													<p>Fill in amount form Sunday school as appropriate.</p>
													<div class="col-sm-12">
														<div class="row">
						
															<div class="col-md-6">
																<label for="YOffering">Youth:</label>
																<input name="YOffering	"type="text" placeholder=" Amount" class="form-control">
															</div>
															<div class="col-md-6">
																<label for="YThanksgiving">KAMA:</label>
																<input type="text" name ="YThanksgiving" placeholder= "Amount "" class="form-control">
															</div>
															<div class="col-md-6">
																<label for="YThanksgiving">Mothers Union:</label>
																<input type="text" name ="YThanksgiving" placeholder= "Amount "" class="form-control">
															</div>
															<div class="col-md-6">
																<label for="YThanksgiving">Children:</label>
																<input type="text" name ="YThanksgiving" placeholder= "Amount "" class="form-control">
															</div>
															<div class="col-md-6">
																<label for="YThanksgiving">Donations:</label>
																<input type="text" name ="YThanksgiving" placeholder= "Amount "" class="form-control">
															</div>
														
													</div>
												</div>
												</div>
											</div>
										</div>
										
										<!-----------------------other givings and forms------------------- -->
										<div class="col-lg-12	">
											<div class="card">
												<div class="card-header d-flex align-items-center">
													<h2 class="h5 display">EXPENSE SHEETS</h2>
												</div>
												<div class="card-block">
													<p>Attached Signed forms for the expenses in this period.</p>
													<form class="form-inline">
													 <span><div class="form-group">
   														 <input class="form-control" type="file" value="Upload forms"" id="">
  														 </div></span>
																												&nbsp; &nbsp; &nbsp; 
														 
														
														<div class="form-group">
															<input type="submit" value="Submit" class="mx-sm-6 btn btn-primary">
														</div>
													</form>
												</div>
											</div>
										</div>
										
										
																			
									</div>
								</div>
							</section>
						</form>
							<?php include ("footer.php");?>
						</div>
						<!-- Javascript files-->
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
						<script src="js/tether.min.js"></script>
						<script src="js/bootstrap.min.js"></script>
						<script src="js/jquery.cookie.js"> </script>
						<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
						<script src="js/jquery.nicescroll.min.js"></script>
						<script src="js/jquery.validate.min.js"></script>
						<script src="js/front.js"></script>
						<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
						<!---->
						<script>
						(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
						function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
						e=o.createElement(i);r=o.getElementsByTagName(i)[0];
						e.src='//www.google-analytics.com/analytics.js';
						r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
						ga('create','UA-XXXXX-X');ga('send','pageview');
						</script>
					</body>
				</html>