<?php

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
  
    <meta charset="UTF-8">
    <title>Personal Website</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" http-equiv="x-ua-compatible">        
	<title>Patrick Viker - Home</title>
	<meta name="description" content="">

	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
	<link rel="stylesheet" href="/css/style.css">
        
	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
	<script src='https://use.fontawesome.com/0945576479.js'></script>
	<script src="/js/index.js"></script>

  </head>

  <body data-spy="scroll" data-target=".navbar"  data-offset="50">

  	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
								data-target="#navbar-collapse" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand nav-link-center page-scroll nav-hover" href="#about-me">PV</a>
	    </div>
	    
	    <div class="collapse navbar-collapse" id="navbar-collapse">
	      	<ul class="nav navbar-nav navbar-right">
		        <li class="nav-link-center"><a class="page-scroll nav-hover" href="#about-me" >About</a></li>
				<li class="nav-link-center"><a class="page-scroll nav-hover" href="#profile" >Profile</a></li>
				<li class="nav-link-center"><a class="page-scroll nav-hover" href="#contact">Contact</a></li>
			</ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav><!-- /.collapsible-nav -->
	
	
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="container-fluid">
				
				<!-- START ABOUT-ME SECTION -->
				<section id="about-me" class="about-me-section">
					<div class="jumbotron jumbo-color">
						<div class="wrap-text">
							<div class="row">
								<div class="col-sm-6">
									<h1 class="margin-top-h1 h1-font">About  Me</h1>
								</div>
							</div>
							<p>
								I am currently working full-time as a manager at 
								Music Go Round Roseville and Burnsville, MN.<br><br>
		
								I just graduated in May with a degree in Computer Information Technology. 
								<img class="img-responsive img-circle right-float" 
									src="img/profilepic.jpg">
								I have learned a great deal about computer networking and security, 
								software development, web development, operating systems, and multiple 
								programming/scripting languages and services. I have had a passion for web 
								development since age 12 when I created a website for my band with 
								writing HTML from scratch with Microsoft Notepad. I have created 
								multiple websites for friends and family since then. Going to 							
								school helped me gain a greater understanding of development 
								best practices along with using the right methodologies. <br><br>
		
								Specialties: Java, Java EE, HTML5, CSS3, JavaScript, JQuery, JSP, MySQL, 
								Bootstrap, PHP, Perl, Linux, Eclipse, and RegEx.<br><br>
		
								Please feel free to reach out to me at pviker@me.com. 
								You can also view my personal	homepage at www.patrickviker.com or 
								view my git repository at <a href="http://github.com/pviker">github.com/pviker</a>.
							</p>
						</div> <!-- /.wrap-text -->
					</div> <!--  /jumbotron -->
				</section> <!-- /About Me section -->
				
				
				<!-- START PROFILE SECTION -->
				
				<section id="profile" class="profile-section">
					<div class="jumbotron" id="profile">
						<h1 class="margin-top-h1 h1-font">Profile - Under Construction</h1>
						<div class="row">
							<div class="col-sm-6 flex-container">
								<img src="img/learninghubthumbnail.jpg" class=" profile-img img-rounded flex-item">
							</div>
							<div class="col-sm-6 flex-container">
								<img src="img/learninghubthumbnail.jpg" class="img-rounded profile-img flex-item ">
							</div>
							<div class="col-sm-6 flex-container">
								<img src="img/learninghubthumbnail.jpg" class="img-rounded profile-img flex-item ">
							</div>
							<div class="col-sm-6 flex-container">
								<img src="img/learninghubthumbnail.jpg" class="img-rounded profile-img flex-item ">
							</div>
							<div class="col-sm-6 flex-container">
								<img src="img/learninghubthumbnail.jpg" class="img-rounded profile-img flex-item ">
							</div>
							<div class="col-sm-6 flex-container">
								<img src="img/learninghubthumbnail.jpg" class="img-rounded profile-img flex-item ">
							</div>
						</div>
					</div> <!-- /jumbotron -->
				</section>
				
				<!-- /profile section -->
				
				<!-- START CONTACT SECTION -->
				
				<section id="contact" class="contact-section">
					<div class="jumbotron jumbo-color">
						<h1 class="margin-top-h1 h1-font">Contact - Under Construction</h1><br>
 						<div class="row">
 							<div class="col-sm-12">
 								<form action="#">
									<div class="form-group">
								    	<label for="name">Name</label>
								    	<input type="text" class="form-control" id="inputName" placeholder="Name">
								  	</div>
								  	<div class="form-group">
								    	<label for="email">Email</label>
								    	<input type="email" class="form-control" id="inputEmail" placeholder="Email">
								  	</div>
								  	<div class="form-group">
								    	<label for="inputComments">Comments</label>
								    	<textarea class="form-control" rows="3"></textarea>
								  	</div>
								  	<button type="submit" class="btn btn-default">
								  		<span class="glyphicon glyphicon-send" aria-hidden="true"></span> Submit
								  	</button>
								</form>
							</div>
						</div>
					</div>
				</section><!-- /social section -->
				
			</div> <!-- /container-fluid -->
		</div> <!-- /column -->
	</div> <!-- /row -->
	
	<!-- Start social media/get in touch -->
	<div class="jumbotron">
		<div class="row">
			<div class="col-sm-3 col-sm-offset-8 text-center">
				<p class="strong">Get in touch</p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-3 col-sm-offset-8 flex-container">
				<a href="https://twitter.com/pvikerMplsMN" target="_blank" class="text-muted flex-item intouch">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<a href="https://www.facebook.com/pviker" target="_blank" class="text-muted flex-item intouch">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
				  		<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<a href="https://www.instagram.com/pvikermplsmn/" target="_blank" class="text-muted flex-item intouch">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
				  		<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
					</span>
				</a>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-3 col-sm-offset-8 flex-container">
				<a href="https://www.linkedin.com/in/patrickviker" target="_blank" class="text-muted flex-item intouch">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
				  		<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<a href="https://github.com/pviker" target="_blank" class="text-muted flex-item intouch">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
				  		<i class="fa fa-github fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<a href="http://codepen.io/pviker/" target="_blank" class="text-muted flex-item intouch">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
				  		<i class="fa fa-codepen fa-stack-1x fa-inverse"></i>
					</span>
				</a>
			</div>
		</div>
	</div> <!-- /jumbotron -->
	<!-- /end get in touch -->
	
	<hr> <!-- dividing line -->
	<h5 class="text-center">Coded by Patrick Viker</h5><br>
	
	
   
  </body>

</html>
