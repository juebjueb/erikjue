<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Erik Jue</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
	
	<style>
	body {
		background-color: rgba(250, 250, 240,1)
	}
		
	.carousel-control-prev-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
	}

	.carousel-control-next-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
	}
	</style>
	
  </head>
  
  <body>
	<div class="container" max-width: 768px>
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="7000">
			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ul>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" align="center">
				<div class="carousel-item active">
				  <img src="..meter-mix.png" alt="meter-mix device" height="400">
				  <div class="carousel-caption">
					<p>measure, mix, dispense</p>
				  </div>
				</div>
				
				<div class="carousel-item">
				  <img src="autoNAAT.png" alt="automated nucleic acid amplification testing" height="400">
				  <div class="carousel-caption">
					<p>20 min automated testing</p>
				  </div>
				</div>
				
				<div class="carousel-item">
				  <img src="cellphone.png" alt="cell phone fluorescence" height="400">
				  <div class="carousel-caption">
					<p>point-of-care fluorescence imager</p>
				  </div>
				</div>		
			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
				<span class="sr-only">Previous</span>
			</a>
			
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<span class="carousel-control-next-icon"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<div class="row mt-2"></div>
		<div class="row mt-2"></div>
		<div class="row mt-2"></div>
	</div>
	
	<div class="container">
		<div class="row"></div>
		 <div class="row">
			<div class="col-5">
				<img src="erikjue.jpg" class="img-fluid" alt="Erik Jue Headshot" >
				<h5 class="font-weight-bold"> Erik Jue, PhD </h5>
				<h6> Senior Microfluidic Lead Engineer <br /> 
				<a href = "https://alineinc.com/">ALine Inc. </a></h6>
				
				<hr/>
				<h6 class="font-weight-bold"> DEGREES: </h6>
				<p> PhD, Bioengineering, Caltech, 2020 <br />
				BS, Bioengineering, UCLA, 2014</p>
				
				<hr/>
				<h6 class="font-weight-bold"> EMAIL: </h6>
				<p> jue.erik (at) gmail (dot) com</p>
				
				<hr/>
				<h6 class="font-weight-bold"> CV: </h6>
				<p> EJ_CurriculumVitae.docx </p>
				
				<hr/>
				<p> <a href="https://www.linkedin.com/in/erikjue/"><img src="linkedin.png" alt="linkedIn" width="25" height="25"></a></p>
				
			</div>
			<div class="col-7">
				<h5 class="font-weight-bold"> About Me </h5>
				
				<p> I am a medical diagnostics expert with a propensity for problem solving and a passion for improving global health. I have a natural inclination for taking on difficult challenges and getting things done. Over the years, I have developed a rigorous approach to science and engineering coupled with a deep and broad technical skillset. I particularly enjoy leading teams, mentorship, and bringing out the best in others.
				</p>
			</div>
		</div> 
	</div>

  </body>
</html>