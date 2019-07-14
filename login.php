<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="assets/css/login.css">

	
</head>
<body>
	<div class="container">
		<div class="row">
			
	<!-- Mixins-->
	<!-- Pen Title-->
	<div class="pen-title">
	  <h1>Material Login Form</h1>
	</div>
	<div class="container">
	  <div class="card"></div>
	  <div class="card">
	    <h1 class="title">Login</h1>
	    <form>
	      <div class="input-container">
	        <input type="text" id="Username" required="required"/>
	        <label for="Username">Username</label>
	        <div class="bar"></div>
	      </div>
	      <div class="input-container">
	        <input type="password" id="Password" required="required"/>
	        <label for="Password">Password</label>
	        <div class="bar"></div>
	      </div>
	      <div class="button-container">
	        <button><span>Go</span></button>
	      </div>
	      <div class="footer"><a href="#">Forgot your password?</a></div>
	    </form>
	  </div>
	  <div class="card alt">
	    <div class="toggle"></div>
	    <h1 class="title">Register
	      <div class="close"></div>
	    </h1>
	    <form>
	      <div class="input-container">
	        <input type="text" id="Username" required="required"/>
	        <label for="Username">Username</label>
	        <div class="bar"></div>
	      </div>
	      <div class="input-container">
	        <input type="password" id="Password" required="required"/>
	        <label for="Password">Password</label>
	        <div class="bar"></div>
	      </div>
	      <div class="input-container">
	        <input type="password" id="Repeat Password" required="required"/>
	        <label for="Repeat Password">Repeat Password</label>
	        <div class="bar"></div>
	      </div>
	      <div class="button-container">
	        <button><span>Next</span></button>
	      </div>
	    </form>
	  </div>
	</div>
	<!-- Portfolio--><a id="portfolio" href="http://pkshopy.com/farooqshad/" title="View my portfolio!"><i class="fa fa-link"></i></a>
		</div>
	</div>
	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).rseady(function(){
		$('.toggle').on('click', function() {
		  $('.container').stop().addClass('active');
		});

		$('.close').on('click', function() {
		  $('.container').stop().removeClass('active');
		});

		});
	</script>
</body>
</html>

