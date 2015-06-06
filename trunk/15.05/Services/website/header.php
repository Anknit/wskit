<?php
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="html" lang="en" name="Webservice">
		<title>Web-Service</title>
		<script type="text/javascript" src="./../../Common/js/jquery/jquery.js"></script>
		<script type="text/javascript" src="./../../Common/js/bootstrap/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
		<link href="./../../Common/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="./../../Common/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
		<link href="./css/layout.css" rel="stylesheet" type="text/css"/>
		<link href="./css/utilities.css" rel="stylesheet" type="text/css"/>
	</head>
	<body ng-app="">
		<div class='page container-fluid'>
			<div class='header container-fluid'><!--
				<div class='col-lg-3 col-sm-12'>
					<a href='./index.php'>
						<img class='media-object logo-webservice' src='./images/schoolap.png' alt='WebService' />
					</a>
				</div>-->
				<nav class='navbar navbar-green navbar-fixed-top'>
					<div class='container-fluid'>
						<div class="navbar-header">
					      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-navbar-collapse-1">
					        	<span class="sr-only">Toggle navigation</span>
					        	<span class="icon-bar"></span>
					        	<span class="icon-bar"></span>
					        	<span class="icon-bar"></span>
					    	</button>
					    	<a class="navbar-brand" href="./index.php">Web-Service</a>
						</div>
						<div class="collapse navbar-collapse" id="menu-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">
								<li class="active"><a href="./">Home</a></li>
								<li><a href="./?action=school">Schools</a></li>
						        <li class="dropdown">
						        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Results <span class="caret"></span></a>
						          	<ul class="dropdown-menu" role="menu">
										<li><a href="./?action=result&class=10">Class X</a></li>
										<li><a href="./?action=result&class=12">Class XII</a></li>
										<li><a href="./?action=result&class=all">Internal</a></li>
									</ul>
						        </li>
								<li><a href="./?action=compare">Compare</a></li>
								<li><a href="./?action=ranking">Rankings</a></li>
						        <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admission <span class="caret"></span></a>
							        <ul class="dropdown-menu" role="menu">
										<li><a href="./?action=admission&param=process">Admission Process</a></li>
										<li><a href="./?action=admission&param=apply">Apply for admission</a></li>
						          </ul>
						        </li>
						        <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Scholarships <span class="caret"></span></a>
							        <ul class="dropdown-menu" role="menu">
										<li><a href="./?action=scholarship&param=central">Central Scholarships</a></li>
										<li><a href="./?action=scholarship&param=state">State Scholarships</a></li>
										<li><a href="./?action=scholarship&param=private">Private Scholarships</a></li>
						          </ul>
						        </li>
						        <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Career <span class="caret"></span></a>
							        <ul class="dropdown-menu" role="menu">
										<li><a href="./?action=joblist">Job Advertisements</a></li>
										<li><a href="./?action=appStatus">Application Status</a></li>
						          </ul>
						        </li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href='./login.php'><small>Login / Register</small></a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class='body container-fluid'>
				<div class='search-webservice text-center container-fluid col-md-6 col-sm-10 col-md-offset-3 col-sm-offset-1'>
					<h3>Find Schools, Compare Result, Apply for Admission</h3>
					<form role="search">
				        <div class="input-group">
				        	<input type="text" class="form-control" placeholder="Search">
				        	<span class="input-group-btn">
				        		<button class="btn btn-primary" type="button">
						        	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								</button>
				        	</span>
				        </div>
					</form>
				</div>
				<div class='content-webservice container-fluid col-md-12'>
					<div class='col-md-3 visible-md-block visible-lg-block'>
						<div>
							<ul class='left-panel-list list-group'>
								<li class="list-group-item">
									<div class="panel panel-primary">
										<div class="panel-heading">School Search</div>
										<div class="panel-body">
											<form role="search">
										        <div class="input-group">
										        	<div class="input-group-addon">
										        		<span class='glyphicon glyphicon-flag'></span>
										        	</div>
										        	<select class="form-control">
														<option selected="selected">Select City</option>
														<option value='1'>Delhi-NCR</option>
														<option value='2'>Agra</option>
														<option value='3'>Mathura</option>
														<option value='4'>Gwalior</option>
										        	</select>
										        </div>
										        <div class="input-group">
										        	<div class="input-group-addon">
										        		<span class='glyphicon glyphicon-screenshot'></span>
										        	</div>
										        	<select class="form-control">
														<option selected="selected">Select Location</option>
										        	</select>
										        </div>
											</form>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="panel panel-primary">
										<div class="panel-heading">Upcoming Events</div>
										<div class="panel-body">
											<form role="search">
										        <div class="input-group">
										        	<div class="input-group-addon">
										        		<span class='glyphicon glyphicon-flag'></span>
										        	</div>
										        	<select class="form-control">
														<option selected="selected">Select City</option>
														<option value='1'>Delhi-NCR</option>
														<option value='2'>Agra</option>
														<option value='3'>Mathura</option>
														<option value='4'>Gwalior</option>
										        	</select>
										        </div>
											</form>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="panel panel-primary">
										<div class="panel-heading">School Ranking</div>
										<div class="panel-body">
											<form role="search">
										        <div class="input-group">
										        	<div class="input-group-addon">
										        		<span class='glyphicon glyphicon-flag'></span>
										        	</div>
										        	<select class="form-control">
														<option selected="selected">Select City</option>
														<option value='1'>Delhi-NCR</option>
														<option value='2'>Agra</option>
														<option value='3'>Mathura</option>
														<option value='4'>Gwalior</option>
										        	</select>
										        </div>
										        <div class="input-group">
										        	<div class="input-group-addon">
										        		<span class='glyphicon glyphicon-filter'></span>
										        	</div>
										        	<select class="form-control">
														<option selected="selected">Select Criteria</option>
														<option value='1'>Result %</option>
														<option value='2'>Student Strength</option>
														<option value='3'>Facilities</option>
														<option value='4'>Sports</option>
										        	</select>
										        </div>
										        <div class="input-group center-block">
										        	<button class='btn btn-primary btn-block center-block'>Search</button>
										        </div>
											</form>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="panel panel-primary">
										<div class="panel-heading">View Result</div>
										<div class="panel-body">
											<form role="search">
										        <div class="input-group">
										        	<div class="input-group-addon">
										        		<span class='glyphicon glyphicon-flag'></span>
										        	</div>
										        	<select class="form-control">
														<option selected="selected">Select City</option>
														<option value='1'>Delhi-NCR</option>
														<option value='2'>Agra</option>
														<option value='3'>Mathura</option>
														<option value='4'>Gwalior</option>
										        	</select>
										        </div>
										        <div class="input-group">
										        	<div class="input-group-addon">
										        		<span class='glyphicon glyphicon-education'></span>
										        	</div>
										        	<select class="form-control">
														<option selected="selected">Select School</option>
										        	</select>
										        </div>
										        <div class="input-group">
										        	<div class="input-group-addon">
										        		<span class='glyphicon glyphicon-screenshot'></span>
										        	</div>
										        	<input type="text" class='form-control' placeholder='Class' />
										        </div>
										        <div class="input-group">
										        	<div class="input-group-addon">
										        		<span class='glyphicon glyphicon-screenshot'></span>
										        	</div>
										        	<input type="text" class='form-control' placeholder='Roll No' />
										        </div>
										        <div class="input-group center-block">
										        	<button class='btn btn-primary btn-block center-block'>Search</button>
										        </div>
											</form>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class='col-md-9 col-sm-12'>
						<div class='imageSlider'>
							<div class='image-container'>
								<img src='./images/homeSlider/1.jpg' alt='Web-Service' class='show'/>
								<img src='./images/homeSlider/2.jpg' alt='Web-Service' class='hidden'/>
								<img src='./images/homeSlider/3.jpg' alt='Web-Service' class='hidden'/>
							</div>
							<div class='slider-controls'>
								<span class='glyphicon glyphicon-chevron-left'></span>
								<span class='glyphicon glyphicon-chevron-right'></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='footer container-fluid'></div>
		</div>
	</body>
</html>