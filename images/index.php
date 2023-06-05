<head>
    <meta name="google-site-verification" content="sR7gXDBjd7mQKW_ZO43e4gW2Hw94zVLTJzSzWImPIkY" />
<!-- tags -->
<title>Infomaths- Institute for MCA Entrance,  NDA, CLAT, IITJAM, Bank PO/SSC, BCA B.Sc. subject classes, Career after +2</title>
<meta name="description" content="Prepare for MCA entrance, SSC CGL, Bank PO, IIT JAM and other entrance exams or mathematic courses from experienced teachers. Info Maths Online help you in clear entrance exams successfully."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png">
<!-- tags -->
<!-- css links -->
<?php
include 'meta_info.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- css links -->
<style>
	.hero_image_slider {
  background-image: url("images/slider2.jpg"); /* The image used */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
.home_image{
	padding-top: 100px;
	padding-left: 30px;
	padding-right: 30px;
	padding-bottom: 30px;
	text-align: center;
	color: #fff;
}
.home_image p{
	margin-bottom: 50px;
}
.pt100{
    padding-top: 160px;
}
.bcc{
    color:black;
}
@media only screen and (max-width: 600px) {
  .slider_button{
	padding: 2px;
	font-size: 10px;
}
}

</style>
</head>
<body>
<header>
	
        <?php
        include 'header-menu.php';
        ?>
    </header>




<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
  	<?php
    $resuhlt=mysqli_query($link,"select * from tbl_homeslider order by id desc");
	if(mysqli_num_rows($resuhlt)>0){
    $idd=0;
    while($rowww=mysqli_fetch_array($resuhlt)){
 	$idd++;					
	?>
    <li data-target="#demo" data-slide-to="<?=$idd;?>" class="<? if($idd=="1") echo "active"; ?>"></li>
    <?php
	}
	}
   	else{
   	}
    ?>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
  	<?php
    $resuhlt=mysqli_query($link,"select * from tbl_homeslider order by id desc");
	if(mysqli_num_rows($resuhlt)>0){
    $idd=0;
    while($rowww=mysqli_fetch_array($resuhlt)){
 	$idd++;					
	?>
    <div class="carousel-item <? if($idd=="1") echo "active"; ?> ">
    	<div class="slider-overlay"></div>
      <img src="super_admin/<?= $rowww['file']; ?>" width="100%">
      <div class="carousel-caption">
        <h1 class="slider_button"><b>Welcome To Infomaths</b></h1>
        <a href="#contact"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd slider_button" style="margin: 10px;"><b>Enquire Now</b></button></a>
		<a href="online-course.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd slider_button" style="margin: 10px;"><b>Online Course</b></button></a>
		
		<?php			
		   $resultt=mysqli_query($link,"select * from tbl_header_btn where sset='Home' limit 1");
		   while($rowr=mysqli_fetch_array($resultt)){
	        ?>
	        <a href="<?= $rowr['hlink']?>"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd slider_button" style="margin: 10px;"><b><?= $rowr['page_title']?></b></button></a>
	        <?php
			}
		?>
		
      </div> 
    </div>
    
    <?php
	}
	}
   	else{
   	}
    ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
		<!-- <center>
			<h1><b>Welcome To Infomaths</b></h1>
			<a href="#contact"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd" style="margin: 10px;"><b>Enquire Now</b></button></a>
			
			<a href="online-course.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd" style="margin: 10px;"><b>Online Course</b></button></a>
		</center> -->
		    
		
		



<!-- <div class="hero_image_slider">
	<div class="home_image pt40">
	    <div class=" pb40">
	        <div class="pt100 lapy"></div>
		<div class="pt100">
		    <h1><b>Welcome To Infomaths</b></h1>
		<a href="#contact"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd" style="margin: 10px;"><b>Enquire Now</b></button></a>
		
		<a href="online-course.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd" style="margin: 10px;"><b>Online Course</b></button></a>
		
		</div>
		</div>
	</div>
</div> -->

  
<!---about--->
<div>
<div class="container pt20">
	<div class="row pt20">
	    <div class="col-sm-4 pt20">
		    <div class="btclr">
			  <h4 class="equal">
			    <div class="pt10"><b>Notice Board</b></div>&nbsp;&nbsp;&nbsp;
			    <div><img src="images/icons/icon9.png" width="60%"></div>
			  </h4>
			</div>
		    <div class="bxbdr">
		    	<ul style="padding-left: 0px; height: 270px;">
                	<marquee direction = "up" onMouseOver="this.stop()" onMouseOut="this.start()" style=" height: 270px;">
                		<?php			
						   $resffffult=mysqli_query($link,"select * from tbl_notice_board where sset='Home Page' order by Id desc limit 10");
						   while($rownews=mysqli_fetch_array($resffffult)){
				        ?>
                		<li class="notice_li">
                            <a href="notic-content.php?id=<?=$rownews['id'];?>"> <?= $rownews['title']; ?></a>
                        </li>
                        <?php
							}
						?>
                	</marquee>
                </ul>
		    </div>
		</div>
		<div class="col-sm-8 pt20">
		     <div class="btclr"><h4><b>About Us</b></h4></div>
		    <h6 class="fs17 pt20"><b><span class="myc">INFOMATHS</span> HAS ALWAYS STRIVED TO HELP STUDENTS ACHIEVE THEIR POTENTIAL THROUGH CUTTING <span class="myc">EDGE TECHNOLOGY</span></b></h6>
			<p class="btclr fs17 justify">
Started in a small room of 120 square feet in MARCH,1999 in CHANDIGARH with one centre INFOMATHS has completed more than 21 years of service to the student community – helping to build a promising career along the way of thousands of students. It has been a long and satisfying journey for infomaths and promoters who had chucked their high flying jobs to pursue their dream and passion !
<br>
<b>INFOMATHS is today acknowledged as a multi-location,</b> multi-programme training specialist run on corporate lines and offers a wide range of programmes not only for national and state-level entrance exams like the MCA ENTRANCE (JNU,DU,BHU, NIMCET,IP,PU,KU.....) ,JRF-NET MATHS ,IIT JAM ,BANK PO, SSC EXAMS,GOVT. EXAMS,CLAT, ...and many more.</p>
			<a href="about.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">More...</button></a>
		</div>
	</div>
</div>
</div>
<!---about--->

<!---services--->
<div class="pt60">
<div class="middle">
    <div class="container pt40 pb40">
	    <center class="btclr"><h3 class="wc"><b>Our Courses</b></h3>
		<p class="wc">We envision the institute network to go beyond the boundaries by providing offline / online studies to the students.</p></center>
		<div class="pt20">
	     <div class="row">
		    <div class="col-sm-3 zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/icon1.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title myc"><b>MCA Entrance</b></h5>
					<p class="card-text fs17">
					   MCA is a time bound 2 Yr. (4th-sem.) & 3 Yr. (6th-sem.) course, approved by All India Council of Technical Education...
					</p>
                    <a href="mca-entrance.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
                 </div>
              </div>
		    </div>
			<div class="col-sm-3 zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/icon2.png" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title myc"><b>Bank PO SSC</b></h5>
                    <p class="card-text fs17">Banking sector in India has always been one of the most preferred destinations for employment destination…</p>
                    <a href="bank-po-ssc.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
                 </div>
              </div>
		    </div>
			<div class="col-sm-3 zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/icon3.png" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title myc"><b>IIT JAM Maths</b></h5>
                    <p class="card-text fs17">From the year 2017, Examination of JAM led online for all Test Papers as Computer based Test (CBT). The greater part...</p>
                    <a href="iit-jam-maths.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
                 </div>
              </div>
		    </div>
			<div class="col-sm-3 zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/icon4.png" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title myc"><b>CSIR NET JRF</b></h5>
                    <p class="card-text fs17">This exam named as CSIR NET is conducted by CSIR (Council of Scientific and Industrial Research) with the objective…</p>
                    <a href="csir-net-jrf.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
                 </div>
              </div>
		    </div>
		 </div>
		</div>
		<div class="pt20">
	     <div class="row">
		    <div class="col-sm-3 zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/icon5.png" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title myc"><b>CLAT Entrance</b></h5>
					<p class="card-text fs17">
					   The Common Law Admission Test (CLAT) is an all India entrance examination conducted on rotation by 14 National…
					</p>
                    <a href="clat-entrance.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
                 </div>
              </div>
		    </div>
			<div class="col-sm-3 zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/icon6.png" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title myc"><b>B.Sc / BCA Classes</b></h5>
                    <p class="card-text fs17">Bachelor in computer application Computer applications are very diverse and in order to understand them one needs…</p>
                    <a href="bca.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
                 </div>
              </div>
		    </div>
			<div class="col-sm-3 zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/icon7.png" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title myc"><b>Career After +2</b></h5>
                    <p class="card-text fs17">The Civil Services Aptitude Test (earlier called as Civil Services Preliminary examination) is held by the UPSC…</p>
                    <a href="career-after-12th.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
                 </div>
              </div>
		    </div>
			<div class="col-sm-3 zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/icon8.png" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title myc"><b>6th To 12th Classes</b></h5>
                    <p class="card-text fs17">INFOMATHS capturing the spirit of IT – Industry was established in 1999 with a specific objective of producing introduction…</p>
                    <a href="6th-to-12th.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
                 </div>
              </div>
		    </div>
		    <div class="col-sm-12 zoom pt20">
		    	<center>
		    		<div class="pt20"> <a href="online-course.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Placement Test Preparation</button></a></div>
		    	</center>
		    </div>
		    
		 </div>
		</div>
	</div>
</div>
</div>
<!--our devision-->
<div class="container pt40 pb20">
	    <center class="btclr"><h3><b>Infomaths Divisions</b></h3></center>
		 <div class="pt40">
	     <div class="row">
		 <div class="col-sm-6">
		 <div class="card border-light bdrus0 mb-3">
         <div class="card-body">
		 		          <img src="images/icons/service-1.jpg" width="20%">
         <h5 class="card-title pt10 bluc"><b>Info Advancee</b></h5>
         <p class="card-text">Coaching for BCA/B.Sc (NM,IT,CS) is an initial investment for getting the best in life. You should…<a href="bca.php"> learn more...</a></p>
        </div>
        </div>
		</div>
		<div class="col-sm-6">
		 <div class="card border-light bdrus0 mb-3">
         <div class="card-body">
		                   <img src="images/icons/service-2.jpg" width="20%">
         <h5 class="card-title pt10 bluc"><b>Info Sciences</b></h5>
         <p class="card-text">we provide the students unmatchable coaching for M.Sc ENTRANCE and NET JRF mathematics…<a href="csir-net-jrf.php"> learn more...</a></p>
        </div>
        </div>
		</div>
		</div>
		</div>
		
		<div class="pt15">
	     <div class="row">
		 <div class="col-sm-6">
		 <div class="card border-light bdrus0 mb-3">
         <div class="card-body">
		 		            <img src="images/icons/service-3.jpg" width="20%">
         <h5 class="card-title pt10 bluc"><b>Legal Codes</b></h5>
         <p class="card-text">Under legal codes ,We prepare for CLAT, AILET, CET LAW PUNJAB, SET, ULSAT, OCET & Other Law Entrance…<a href="clat-entrance.php"> learn more...</a></p>
        </div>
        </div>
		</div>
		 <div class="col-sm-6">
		 <div class="card border-light bdrus0 mb-3">
         <div class="card-body">
		 		            <img src="images/icons/service-4.jpg" width="20%">
         <h5 class="card-title pt10 bluc"><b>Excelers</b></h5>
         <p class="card-text">Under EXCELERS we caters to the students of class VI to XII standard studying CBSE/ ICSE Board Curriculum...<a href="6th-to-12th.php"> learn more...</a></p>
        </div>
        </div>
		</div>
		</div>
		</div>
	</div>
	
	
<div id="contact">
<?php
include 'form_code.php';
?>
</div>
<!--faculty-->
<style>
	.faculty_bg {
	  background-image: url("images/faucl_bg.jpg"); /* The image used */
	  background-position: center; /* Center the image */
	  background-repeat: no-repeat; /* Do not repeat the image */
	  background-size: cover; /* Resize the background image to cover the entire container */
	}
</style>
<div class="faculty_bg">
	
    <div class="container pt40">
	    <center class="btclr"><h3><b class="bluc">Our Faculty</b></h3></center>
		<div class="row pt20 pb50">
		  <div class="col-sm zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/faculty/team4.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h6 class="card-title myc"><b>Mr. Sudhir Grover</b></h6>
                    <p class="card-text fs15">Sr. Faculty [Maths], 21+ Yr. Experience.</p>
                 </div>
              </div>
		    </div>
			<div class="col-sm zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/faculty/team5.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h6 class="card-title myc"><b>Ms. Arpana</b></h6>
                    <p class="card-text fs15">Sr. Faculty [English], 19+ Yr. Experience.</p>
                 </div>
              </div>
		    </div>
			<div class="col-sm zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/faculty/team1.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h6 class="card-title myc"><b>Mr. Ram Kumar</b></h6>
                    <p class="card-text fs15">Faculty [Aptitude], 6+ Yr. Experience.</p>
                 </div>
              </div>
		    </div>
			<div class="col-sm zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/faculty/team2.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h6 class="card-title myc"><b>Mr. Sanjay Gupta</b></h6>
                    <p class="card-text fs15">Sr. Faculty [Comp.], 18+ Yr. Experience.</p>
                 </div>
              </div>
		    </div>
			<div class="col-sm zoom pt20">
		      <div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/faculty/team3.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h6 class="card-title myc"><b>Mr. Saurabh</b></h6>
                    <p class="card-text fs15">Faculty [Aptitute], 5+ Yr. Experience.</p>
                 </div>
              </div>
		    </div>
		</div>
	</div>
</div>
<!--online-->
<div class="container pt40">
<center class="btclr"><h3><b>OUR HOT COURSES @coursEdu</b></h3></center>
     <div class="row pt20">
	     <div class="col-sm-3 zoom pt20">
	         <img src="images/hot/HOT COURSE 2.png" style="width: 100%">
	         <br><br>
	         <center>
	             <a href="https://play.google.com/store/apps/details?id=co.jarvis.cedu&hl=en_IN"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
	         </center>
		      <!--<div class="card" style="width:100%;">
                 <img class="card-img-top" src="images/icon2.png" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title myc"><b>Bank PO SSC</b></h5>
                    <p class="card-text fs17">Banking sector in India has always been one of the most preferred destinations for employment destination…</p>
                    <a href="#"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
                 </div>
              </div>-->
		 </div>
		 <div class="col-sm-3 zoom pt20">
		      <img src="images/hot/HOT COURSE 3.png" style="width: 100%">
	         <br><br>
	         <center>
	             <a href="https://play.google.com/store/apps/details?id=co.jarvis.cedu&hl=en_IN"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
	         </center>
		 </div>
		 <div class="col-sm-3 zoom pt20">
		      <img src="images/hot/HOT COURSE 4.PNG" style="width: 100%">
	         <br><br>
	         <center>
	             <a href="https://play.google.com/store/apps/details?id=co.jarvis.cedu&hl=en_IN"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
	         </center>
		 </div>
		 <div class="col-sm-3 zoom pt20">
		      <img src="images/hot/MCA HOT COURSE.PNG" style="width: 100%">
	         <br><br>
	         <center>
	             <a href="https://play.google.com/store/apps/details?id=co.jarvis.cedu&hl=en_IN"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">Know More...</button></a>
	         </center>
		 </div>
		 
	 </div>
</div>
<!--video lecture-->
<div class="pt60">
<div class="videobg">
    <div class="container pt40">
	    <center class="btclr"><h3 class="wc"><b>Video Lectures</b></h3></center>
		<center>
		<div class="wc col-sm-8 pt40">
		   <p>Our Aim is to be the most preffered institute in India and to create an education platform for the students to help them to prepare for various entrance exams.</p>
		</div>
		</center>
		<center>
		<div class="pt20 pb40">
		   <a href="video_lacture.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">View Video Tutorials</button></a>
		</div>
		</center>
	</div>
</div>
</div>


<div class="pt60 pb60">
	<div>
	    <div class="container">
			<div class="row pt20">
				<div class="col-sm-6">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/vPZYxSW3MOo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-sm-6">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/1bupI1OQ5CM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>


<!--lecture-->
<div class="greybclr pb60">
    <div class="container pt40">
	   <div class="col-sm-12">
	    <center class="bluc"><h3><b>Our Results</b></h3></center>
		<div class="row pt20">
		  <div class="col-sm-4 pt20">
		  	<center>
		  		<h5><b>Our MCA Results</b></h5>
		  	</center>
			  
			  	<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				  	
            		<?php			
					   $resultt=mysqli_query($link,"select * from tbl_result where result_type='MCA Entrance Result' order by Id desc limit 10");
					   $ir=0;
					   while($rowr=mysqli_fetch_array($resultt)){
					   $ir++;
			        ?>
			        <div class="carousel-item <?php if($ir==1) echo "active"; ?> ">
				      <img src="super_admin/<?= $rowr['file']; ?>" width="100%">
				      <center>
				  		<p class="pt10 myc"><b>Year <?= $rowr['years']; ?></b></p>
				  		</center>
				    </div>
                    <?php
						}
					?>
                    	
				    
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon slider_btn" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
				    <span class="carousel-control-next-icon slider_btn" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			  	<center>
			  		<div class="pt10">
				   	<a href="mca-result.php">
				   		<button type="button" class="btn bclryellow wc bdrus0 fs17 pd">View More</button>
			   		</a>
		   		   </div>
			  	</center>
		  </div>
		  
		  
		  <div class="col-sm-4 pt20">
		  	<center>
		  		<h5><b>Our Results</b></h5>
		  	</center>
		    <div id="carouselExampleIndicators22" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				  	<?php			
					   $resulto=mysqli_query($link,"select * from tbl_result where result_type='Other Couses Result' order by Id desc limit 20");
					   $iro=0;
					   while($rowo=mysqli_fetch_array($resulto)){
					   $iro++;
			        ?>
			        <div class="carousel-item <?php if($iro==1) echo "active"; ?> ">
				      <img src="super_admin/<?= $rowo['file']; ?>" width="100%">
				    </div>
                    <?php
						}
					?>
				    
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators22" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon slider_btn" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators22" role="button" data-slide="next">
				    <span class="carousel-control-next-icon slider_btn" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>
		   <center>
			   	<p class="pt10 myc"><b>Year 2020</b></p>
			   <div class="pt10"><a href="courses-result.php"><button type="button" class="btn bclryellow wc bdrus0 fs17 pd">View More</button></a></div>
			  </div>
			  <div class="col-sm-4 pt20">
			    <center class="bluc"><h5><b>Our Alumini</b></h5></center>
			    <div class="bxbdr">
			    	<ul style="padding-left: 0px; height: 440px;">
                    	<marquee direction = "up" onMouseOver="this.stop()" onMouseOut="this.start()" style="height: 440px;">
                    		<?php			
							   $result_alu=mysqli_query($link,"select * from tbl_alumini order by Id desc limit 30");
							   while($rowalu=mysqli_fetch_array($result_alu)){
					        ?>
                    		<li class="notice_li">
                    			<div class="row" style="margin: 0px;">
                    				<div class="col-sm-12" style="padding: 0px;"> 
                    					<center>
                    					<img src="super_admin/<?= $rowalu['file']; ?>" style="height: 100px; width: 100px; border-radius: 50%;">	
                    					</center>
                    				</div>
                    				<div class="col-sm-12" style="padding: 10px;">
                    					<center>
                    					<?= $rowalu['name']; ?>
                    					<br>
                    					<?= $rowalu['class_q']; ?>
                    					<br>
                    					<?php
                    					$ddtata=$rowalu['text'];
                    					 echo substr("$ddtata",0,150); ?>	
                    					</center>
                    					
                    				</div>
                    			</div>
                            </li>
                            <?php
								}
							?>
                    	</marquee>
                    </ul>
			    </div>
			  </div>
		   </center>
		   
		</div>
	  </div>	
	</div>
</div>
<!--counter-->
<div>
<div class="videobg">
    <div class="container pb0 pt40">
	    <div class="row text-center">
			<div class="col-md-3 col-xs-12">
				<div class="counter">
					<i class="fa fa-thumbs-o-up fa-2x"></i>
					<h2 class="timer count-title count-number" data-to="21" data-speed="2000"></h2>
					<p class="count-text ">Yr. Of Experience</p>
				</div>
			</div>
			<div class="col-md-3 col-xs-12">
				<div class="counter">
					<i class="fa fa-group fa-2x"></i>
					<h2 class="timer count-title count-number" data-to="51000" data-speed="2000"></h2>
					<p class="count-text ">Happy Students</p>
				</div>
			</div>
			<div class="col-md-3 col-xs-12">
				<div class="counter">
					<i class="fa fa-book fa-2x"></i>
					<h2 class="timer count-title count-number" data-to="3000" data-speed="2000"></h2>
					<p class="count-text ">E-Book PDF</p>
				</div>
			</div>
			<div class="col-md-3 col-xs-12">
				<div class="counter">
					<i class="fa fa-desktop fa-2x"></i>
					<h2 class="timer count-title count-number" data-to="2100" data-speed="2000"></h2>
					<p class="count-text ">Hour Online Videoss</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!--counter-->
<!---blue patti--->
<div>
<!--testimonials start--> 
<center>
<div class="container pt40 pb ">
<h2>Students Testimonials</h2>
	<div class="row">
		<div class="col-sm-6">			
			<div id="myCarousel444" class="carousel slide" data-ride="carousel">  
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					
					<?php			
					   $resultt=mysqli_query($link,"select * from tbl_testi order by id desc limit 10");
					   $ir=0;
					   while($rowr=mysqli_fetch_array($resultt)){
					   $ir++;
			        ?>
					<div class="item carousel-item <?php if($ir==1) echo "active"; ?>">
						<div class="row">
							<div class="col-sm-12 pt40">
								<div class="testimonial">
									<p>
										<?php        					
										$ddtata=$rowr['text'];        					
										echo substr("$ddtata",0,400); ?> ... 
									</p>
								</div>
								<div class="media">
									<div class="media-left d-flex mr-3">
										<img src="super_admin/<?= $rowr['file']; ?>">										
									</div>
									<div class="media-body">
										<div class="overview">
											<div class="name clr"><b><?= $rowr['name']; ?></b></div>
											<div class="details"><?= $rowr['position']; ?></div>
												<ul class="list-inline clr">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
										</div>										
									</div>
								</div>
							</div>
					  </div>
					</div>
					<?php
						}
					?>
					
				</div>
				<a class="carousel-control-prev" href="#myCarousel444" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon slider_btn" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#myCarousel444" role="button" data-slide="next">
				    <span class="carousel-control-next-icon slider_btn" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				<!-- Carousel controls -->
			</div>
		</div>
		
		
		
		
		
		<div class="col-sm-6">			
			<div id="myCarousel555" class="carousel slide" data-ride="carousel">  
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<?php			
					   $resultt=mysqli_query($link,"select * from tbl_video_testi order by id desc limit 10");
					   $ir=0;
					   while($rowr=mysqli_fetch_array($resultt)){
					   $ir++;
			        ?>
					<div class="item carousel-item <?php if($ir==1) echo "active"; ?>">
						<div class="row">
							<div class="col-sm-12">
								<!---->
			                     <div class="pt40">
								    <div class="embed-responsive embed-responsive-16by9">
								    	<?php
								    	$myvideolink = $rowr['hlink'];
										$url = $myvideolink;
										//echo $url;
										$keyb = 'be/'; 
										if (strpos($url, $keyb) == false) {
										} 
										else {
										$video_id = explode("be/", $myvideolink);
										$video_id = $video_id[1];
										}
								    	?>
		            					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $video_id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                            </div>
								 </div>
                      			<!---->
							</div>
					  </div>
					</div>
					<?php
						}
					?>
				</div>
				<a class="carousel-control-prev" href="#myCarousel555" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon slider_btn" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#myCarousel555" role="button" data-slide="next">
				    <span class="carousel-control-next-icon slider_btn" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				<!-- Carousel controls -->
			</div>
		</div>
	</div>
</div>
</center> 
 <!--testimonials end--> 
 <!--app-->
<div class="pt60">
<div class="greybclr">
    <div class="container pt40 pb20">
	    <center class="wc"><h3 class="bluc"><b>Mobile Application @CoursEdu</b></h3>
		<p class="pt10 bluc">Test prep at your fingertips. Learn anytime, anywhere</p></center>
		<div class="row">
		   <div class="col-sm-6 pt40 pb40">
		      <img src="images/app-mockup.png" width="100%">
		   </div>
		   <div class="col-sm-6">
		      <div class="lapy">
			    <div class="p50">
				    <li><b>Videos :</b> Classroom & Strategy</li>
                    <li><b>Articles :</b> Academic & Value added info.</li>
                    <li><b>Alerts :</b> College & Tests Alerts</li>
                    <li><b>Tests :</b> Booking & Analysis</li>
                    <li><b>Results :</b> Test Results</li>
                    <li><b>Workshops :</b> Book E-Lectures/Workshops</li>
					<div class="pt20"><a href="online-course.php"><button type="button" class="btn btn-light bdrus0 bclrgrey wc pd fs17">Explore Online Course</button></a></div>
					<div class="pt20"><a href="https://play.google.com/store/apps/details?id=co.jarvis.cedu"><img src="images/app.png" width="30%"></a></div>
					<div class="pt20"><a href="https://apps.apple.com/in/app/my-institute/id1472483563"><img src="images/play-png-ios-app.png" width="30%"></a></div>
					<p><b>Use Code "Cedu"</b></p>
				</div> 
			  </div>	
			  <div class="mobile">
			    <p>
				    <b>Videos :</b> Classroom & Strategy<br>
                    <b>Articles :</b> Academic & Value added info.<br>
                    <b>Alerts :</b> College & Tests Alerts</br>
                    <b>Tests :</b> Booking & Analysis<br>
                    <b>Results :</b> Test Results<br>
                    <b>Workshops :</b> Book E-Lectures/Workshops
				</p> 
				<div class="pb20"><a href="online-course.php"><button type="button" class="btn btn-light bdrus0 bclrgrey wc pd fs17">Explore Online Course</button></a></div>
				<div><a href="https://play.google.com/store/apps/details?id=co.jarvis.cedu"><img src="images/app.png" width="60%"></a></div>
				<div class="pt20"><a href="https://apps.apple.com/in/app/my-institute/id1472483563"><img src="images/play-png-ios-app.png" width="60%"></a></div>
				<p><b>Use Code "Cedu"</b></p>
			  </div>
		   </div>
		</div>
	</div>
</div>
</div>
 <!--app-->
 <!--blog-->
  <div>
    <div class="container pt40">
	    <center class="btclr"><h3><b>Our Blogs</b></h3></center>
		 <div class="row">		 	
		 	<?php						     
		 	$resultt=mysqli_query($link,"select * from tbl_blog where sset='Home Page' order by Id desc");			     
		 	while($rowr=mysqli_fetch_array($resultt)){	        
		 		?>
			<div class="col-sm-4 pt20">
		      <a href="blog_inside.php?id=<?= $rowr['id']; ?>" class="card bg-dark zoom text-white">
               <img class="card-img" src="<?php
               if($rowr['file']!=""){
               	echo "super_admin/".$rowr['file'];
               }else{
               	echo "images/videobg.jpg";
               }
               ?>" >
               <div class="slider-overlay"></div>
                <div class="card-img-overlay">
                	
                  <h6 class="card-title gyc"><?= $rowr['title']; ?></h6>
                  <p class="card-text">
                  	<?php        					
                  	$ddtata=$rowr['text'];        					
                  	echo substr("$ddtata",0,100); ?> ...
              	  </p>
                  <p class="card-text yyc">Last updated 
                  	<?php					
                  	$orgDate = $rowr['addon'];					
                  	$newDate = date("d-m-Y", strtotime($orgDate));					
                  	echo $newDate;					
                  	?>
                  </p>
                </div>
              </a>
		    </div>		    
		    <?php				
			}
			?>
		 </div>
	</div>
</div>
 <!--blog-->
 <!-- call phn-->



<!-- call phn--> 
  
 
 <!-- footer start -->
<?php
include 'footer-links.php';


?>
<!-- footer end --> 


<!--bootstrap script-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--bootstrap script-->



<?php
include 'footer_form_code.php';
?>
</body>
</html>
