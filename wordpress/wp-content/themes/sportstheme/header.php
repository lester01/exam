<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sports</title>
	<?php wp_head(); ?>

	<script type="text/javascript">
	$(document).ready(function () {
		var url = window.location.pathname;
		var urlPath = url.split("/");
		var urlSelectPath = urlPath[2];

		//console.log(urlSelectPath);

		if(urlSelectPath == "home") {
			$('#home').addClass('active');
		}
		if(urlSelectPath == "about-us") {
			$('#aboutus').addClass('active');
		}
		if(urlSelectPath == "teams") {
			$('#team').addClass('active');
		}
		if(urlSelectPath == "fans") {
			$('#fans').addClass('active');
		}
		if(urlSelectPath == "blog") {
			$('#blog').addClass('active');
		}
		if(urlSelectPath == "contact-us") {
			$('#contact').addClass('active');
		}

	});

	</script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Sign Up <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">|</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">|</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">RSS Feedds</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">|</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Archived News</a>
      </li>
    </ul>
   <ul class="navbar-nav ml-auto">
	  <li class="nav-item">
	    <div class="has-search">
	      <span class="fa fa-search form-control-feedback"></span>
	      <input type="text" class="form-control" placeholder="Search">
	    </div>
	  </li>
	</ul>
</nav>


<div class="container-fluid bg-4 text-center bg-banner">
	<div class="row">
		 <div class="col-sm-12"><img src="<?php echo get_template_directory_uri(); ?>/image/lakerslogo.png" class="img-responsive" width="300" height="200" style="" alt="Image"></div><br>
	</div>
</div>

<hr>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarMenu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" id="home">
        <a class="nav-link" href="/wordpress/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">|</a>
      </li>
      <li class="nav-item" id="aboutus">
        <a class="nav-link" href="/wordpress/about-us">About Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link">|</a>
      </li>
      <li class="nav-item" id="team">
        <a class="nav-link" href="/wordpress/team">Team</a>
      </li>
       <li class="nav-item">
        <a class="nav-link">|</a>
      </li>
      <li class="nav-item" id="fans">
        <a class="nav-link" href="/wordpress/fans">Fans</a>
      </li>
       <li class="nav-item">
        <a class="nav-link">|</a>
      </li>
      <li class="nav-item" id="blog">
        <a class="nav-link" href="/wordpress/blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">|</a>
      </li>
      <li class="nav-item" id="contact">
        <a class="nav-link" href="/wordpress/contact-us">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<hr>
<br>
<br>