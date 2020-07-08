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
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ul>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" align="center">
				<div class="carousel-item active">
				  <img src="meter-mix.PNG" alt="meter-mix device" height="400">
				  <div class="carousel-caption">
					<p>measure, mix, dispense</p>
				  </div>
				</div>
				
				<div class="carousel-item">
				  <img src="autoNAAT.PNG" alt="automated nucleic acid amplification testing" height="400">
				  <div class="carousel-caption">
					<p>20 min automated testing</p>
				  </div>
				</div>
				
				<div class="carousel-item">
				  <img src="cellphone.PNG" alt="cell phone fluorescence" height="400">
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
			<div class="col-5 col-lg-4">
				<img src="erikjue.png" class="img-fluid" alt="Erik Jue Headshot" style="max-width:80%">
				<h4 class="font-weight-bold"> Erik Jue, PhD </h4>
				<h6> Senior Microfluidic Lead Engineer <br /> 
				<a href = "https://alineinc.com/">ALine Inc. </a></h6>
				
				<hr/>
				<h6 class="font-weight-bold"> DEGREES: </h6>
				<p> PhD in Bioengineering, Caltech 2020 <br />
				BS in Bioengineering, UCLA 2014</p>
				
				<hr/>
				<h6 class="font-weight-bold"> EMAIL: </h6>
				<p> jue.erik (at) gmail (dot) com</p>
				
				<hr/>
				<h6 class="font-weight-bold"> CV: </h6>
				<p> <a href="EJ_CurriculumVitae.docx">EJ_CurriculumVitae.docx </a></p>
				
				<hr/>
				<h6 class="font-weight-bold"> SOCIAL: </h6>
				<p> <a href="https://www.linkedin.com/in/erikjue/"><img src="linkedin.PNG" alt="linkedIn" width="25" height="25"></a></p>
				
			</div>
			<div class="col-7 col-lg-8" >
				<h4 class="font-weight-bold"> About Me </h4>
				<p> I am a multidisciplinary engineer and medical diagnostics expert with a propensity for problem solving and a passion for improving global health. I have a natural inclination for taking on difficult challenges and getting things done. Over the years, I have developed a rigorous approach to science and engineering coupled with a deep and broad technical skillset. I particularly enjoy leading teams, mentorship, and bringing out the best in others.
				</p>
				
				<h4 class="font-weight-bold"> Selected Publications </h4>
				
				<a href = "https://scholar.google.com/citations?user=58vEoZkAAAAJ&hl=en&oi=ao"> Google Scholar Profile </a>
				
				<div id="accordion">
				
				  <div class="card">
					<div class="card-header" id="headingOne">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						  1. Commercial stocks of SARS-CoV-2 RNA
						</button>
					  </h5>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					  <div class="card-body">
						<p>
						<b>Title: </b>Commercial stocks of SARS-CoV-2 RNA may report low concentration values, leading to artificially increased apparent sensitivity of diagnostic assays <br />
						<b>Authors: </b><b>Erik Jue</b> and Rustem F. Ismagilov <br />
						<b>Journal: </b><i>medRxiv </i> 2020 <br />
						<b><a href = "https://doi.org/10.1101/2020.04.28.20077602"> LINK </a></b>
						</p>
					  </div>
					</div>
				  </div>
				  
				  <div class="card">
					<div class="card-header" id="headingTwo">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						  2. Real-time kinetics in digital LAMP
						</button>
					  </h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					  <div class="card-body">
						<p>
						<b>Title: </b> Real-time kinetics and high-resolution melt curves in single-molecule digital LAMP to differentiate and study specific and nonspecific amplification <br />
						<b> Authors: </b> Justin C. Rolando, <b>Erik Jue</b>, Jacob Barlow, and Rustem F. Ismagilov <br />
						<b> Journal: </b> <i> Nucleic Acids Research </i> 2020 <br />
						<b><a href = "https://doi.org/10.1093/nar/gkaa099"> LINK </a></b>
						</p>
					  </div>
					</div>
				  </div>
				  
				  <div class="card">
					<div class="card-header" id="headingThree">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						  3. Two-phase wash
						</button>
					  </h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					  <div class="card-body">
						<p>
						<b>Title: </b>Two-phase wash to solve the ubiquitous contaminant-carryover problem in commercial nucleic-acid extraction kits. <br />
						<b>Authors: </b> <b>Erik Jue</b>, Daan Witters, and Rustem F. Ismagilov <br />
						<b>Journal: </b> <i>Scientific Reports </i> 2020 <br />
						<b><a href = "https://doi.org/10.1038/s41598-020-58586-3"> LINK </a></b>
						</p>
					  </div>
					</div>
				  </div>
				  
				  <div class="card">
					<div class="card-header" id="headingFour">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						  4. 3D-printed meter-mix device 
						</button>
					  </h5>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
					  <div class="card-body">
						<p>
						<b>Title: </b> Evaluating 3D printing to solve the sample-to-device interface for LRS and POC diagnostics: example of an interlock meter-mix device for metering and lysing clinical urine samples<br />
						<b>Authors: </b> <b>Erik Jue</b>, Nathan G. Schoepp, Daan Witters, and Rustem F. Ismagilov <br />
						<b>Journal: </b> <i> Lab on a Chip </i> 2016 <br />
						<b><a href = "https://doi.org/10.1039/c6lc00292g"> LINK </a></b>
						</p>
					  </div>
					</div>
				  </div>
				  
				  <div class="card">
					<div class="card-header" id="headingFive">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
						  5. Digital isothermal amplification with cell phones
						</button>
					  </h5>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
					  <div class="card-body">
						<p>
						<b>Title: </b> Reading out single-molecule digital RNA and DNA isothermal amplification in nanoliter volumes with unmodified camera phones <br />
						<b> Authors: </b> Jesus Rodriguez-Manzano, Mikhail A. Karymov, Stefano Begolo, David A. Selck, Dmitriy V. Zhukov, <b>Erik Jue</b>, and Rustem F. Ismagilov <br />
						<b> Journal: </b> <i> ACS Nano </i> 2016 <br />
						<b><a href = "https://doi.org/10.1021/acsnano.5b07338"> LINK </a></b>
						</p>
					  </div>
					</div>
				  </div>
				  
				  <div class="card">
					<div class="card-header" id="headingSix">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
						  6. Aqueous two-phase viral pre-concentration
						</button>
					  </h5>
					</div>
					<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
					  <div class="card-body">
						<p>
						<b>Title: </b> Using an aqueous two-phase polymer salt system to rapidly concentrate viruses for improving the detection limit of the lateral-flow immunoassay <br />
						<b> Authors: </b> <b>Erik Jue</b>, Cameron D. Yamanish, Ricky Y.T. Chiu, Benjamin M. Wu, and Daniel T. Kamei <br />
						<b> Journal: </b> <i> Biotechnology and Bioengineering </i> 2014 <br />
						<b><a href = "https://doi.org/10.1002/bit.25316"> LINK </a></b>
						</p>
					  </div>
					</div>
				  </div>
				  
				  <div class="card">
					<div class="card-header" id="headingSeven">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
						  7. Simultaneous concentration and detection of biomarkers on paper
						</button>
					  </h5>
					</div>
					<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
					  <div class="card-body">
						<p>
						<b> Authors: </b> Ricky Y.T. Chiu, <b>Erik Jue</b>, Allison T. Yip, Andrew R. Berg, Stephanie J. Wang, Alexandra R. Kivnick, Phuong T. Nguyen, and Daniel T. Kamei <br />
						<b> Journal: </b> <i> Lab on a Chip </i> 2014 <br />
						<b><a href = "https://doi.org/10.1039/c4lc00532e"> LINK </a></b>
						</p>
					  </div>
					</div>
				  </div>
				  

				</div>
				
				
				
			</div>
		</div> 
	</div>

  </body>
</html>