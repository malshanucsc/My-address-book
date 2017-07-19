<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/mycss.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
</head>
<body >
<div id="full_page" >
	<div id="header" class="col-md-8" >
		<div class= "col-md-2 " >
			<img width="100" id="logo" src="../images/logo.png" >
		</div>
		<div class="col-md-8 col-md-offset-1" id="topic">
		<h1>
			Sri Lankan Adventures 
			</h1>
		</div>
	</div>	
<br>
<div class="col-md-12" id="upmenu">

			<ul class="nav nav-pills ">
				<li role="presentation" class="active"><a href="Home.php">Home</a></li>
				<li role="presentation" class="dropdown"><a href="#" class="drpbtn">Activities</a>
						<div class="dropdown-content">
							<a href="sea_side.php"> sea side</a>
							<a href="river.php"> river side</a>
							<a href="wildlife.php"> wild life</a>
							
						</div>
				</li>
				<li role="presentation" class="dropdown"><a href="#" class="drpbtn">Places</a>
						<div class="dropdown-content">							
							<a href="culture.php"> culture</a>
							<a href="hill_country.php"> hill country</a>
							<a href="historical.php"> historical</a>
						</div>
				</li>
				<li role="presentation"><a href="reviews.php">Reviews</a></li>
				<li role="presentation"><a href="contact.php">Contact Us</a></li>
			</ul>
</div>

	<div id="upbanner" class="pull-right " >
	 <select id="select">
				  <option value="">Looking For..</option>
				  <option value="whale_watching.php">Whale Watching</option>
				  <option value="safari.php">Wild safari</option>
				  <option value="surfing.php">Surfing</option>
				  <option value="diving.php">Diving</option>
				  <option value="sunbathe.php">Sun bathing</option>
				  <option value="historical.php">Historical place visit</option>
				  <option value="hill_country.php">Hill country visit</option>
				  <option value="ayurveda.php">Ayurvedic spa</option> 
				  <option value="meditation.php">Meditation and Yoga</option>
				  </select>
		
&nbsp&nbsp&nbsp		<button type="button" class="pull-right" id="myBtn">Login</button>
		<script>
			document.getElementById("select").onchange=function(){
				if(this.selectedIndex!==0){
					window.location.href=this.value;
				}
			};
		</script>
	</div>
	<br>
	
	<div id="pagebody">
	
	<div class="container">
  
	<!-- Trigger the modal with a button -->
	<!-- <button type="button" class="btn btn-default btn-lg pull-right" id="myBtn">Login</button> -->

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header" style="padding:35px 50px;">
				<button type="button" class="close" data-dismiss="modal &times";></button>
				<h5><span class="glyphicon glyphicon-lock"></span> Login</h5>
			</div>
			<div class="modal-body" style="padding:40px 50px;">
			<form role="form" method="post" action="../actions/login.php">
				<div class="form-group">
					<label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
					<input type="text" name="email" class="form-control" id="usrname" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
					<input type="password"  name="password" class="form-control" id="psw" placeholder="Enter password">
				</div>
				<div class="checkbox">
					<label><input type="checkbox" value="" checked>Remember me</label>
				</div>
				<button type="submit" name="submit" class=" btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
			</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

				<p>Forgot <a href="#">Password?</a></p>
			</div>
		</div>
      
		</div>
	</div> 
	</div>
	<br>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

	<div class="col-md-12">
		<div id="first-slider" class="col-md-10">
			<div id="carousel-example-generic" class="carousel slide carousel-fade">
				<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						<li data-target="#carousel-example-generic" data-slide-to="5"></li>
						<li data-target="#carousel-example-generic" data-slide-to="6"></li>
						<li data-target="#carousel-example-generic" data-slide-to="7"></li>
					</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<!-- Item 1 -->
						<div class="item active slide1">
							<div class="row">
								<div class="container">
									<div class="col-md-9 text">
									<h3 data-animation="animated bounceInDown">WELCOME</h3>
									<h4 data-animation="animated bounceInUp">SRILANKA</h4>        
									</div>
								<div class="col-md-7 text-left">
									<!--   <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png"> -->
									    
								</div>
								</div>
							</div>
						</div> 
					<!-- Item 2 -->
					<div class="item slide2">
						<div class="row">
							<div class="container">
								<div class="col-md-9 text-left">
									<h3 data-animation="animated bounceInDown">CLIMATE VARIATION</h3>
									<h4 data-animation="animated bounceInUp">SRI LANKAN SEA SIDES </h4>
								 </div>
								<div class="col-md-5 text-right">
					  
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png"> -->
								</div>
							</div>
						</div>
					</div>
					<!-- Item 3 -->
					<div class="item slide3">
						<div class="row"><div class="container">
							<div class="col-md-9 text-left">
								<h3 data-animation="animated bounceInDown">PLENTY OF WILD LIFE</h3>
								<h4 data-animation="animated bounceInUp">SRI LANKAN RAIN FORESTS</h4>
							 </div>
							<div class="col-md-5 text-right">
								<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png"> -->
							</div>     
						</div></div>
					</div>
					<!-- Item 4 -->
					<div class="item slide4">
						<div class="row"><div class="container">
							<div class="col-md-9 text-left">
								<h3 data-animation="animated bounceInDown">SRI LANKAN CULTURE</h3>
								<h4 data-animation="animated bounceInUp">AYURVEDA MEDICINES</h4>
							 </div>
							<div class="col-md-5 text-right">
								<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> -->
							</div>  
						</div></div>
					</div>
					<!-- End Item 4 -->

                        <!-- Item 5 -->
					<div class="item slide5">
						<div class="row"><div class="container">
							<div class="col-md-9 text-left">
								<h3 data-animation="animated bounceInDown">SRI LANKAN UPPER HILLS</h3>
								<h4 data-animation="animated bounceInUp">SRI LANKAN WATERFALLS</h4>
							 </div>
							<div class="col-md-5 text-right">
								<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> -->
							</div>  
						</div></div>
					</div>
					<!-- End Item 5 -->

                        <!-- Item 6 -->
					<div class="item slide6">
						<div class="row"><div class="container">
							<div class="col-md-9 text-left">
								<h3 data-animation="animated bounceInDown">PROUD HISTORY</h3>
								<h4 data-animation="animated bounceInUp">SRI LANKAN CAVE TEMPLES</h4>
							 </div>
							<div class="col-md-5 text-right">
								<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> -->
							</div>  
						</div></div>
					</div>
					<!-- End Item 6 -->

                        <!-- Item 7 -->
					<div class="item slide7">
						<div class="row"><div class="container">
							<div class="col-md-9 text-left">
								<h3 data-animation="animated bounceInDown">PLENTY OF RIVERS</h3>
								<h4 data-animation="animated bounceInUp">PICTURESQUE VIEW</h4>
							 </div>
							<div class="col-md-5 text-right">
								<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> -->
							</div>  
						</div></div>
					</div>
					<!-- End Item 7 -->

                        
				</div>
				<!-- End Wrapper for slides-->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	 </div>




	<div id="paragraph">
	
		<p> Sri Lanka is an amazing tiny island surrounded by the bluish Indian Oean.Because of the enchanting beauty of this island it is named as the pearl of the Indian Ocean.It is the beauty queen all over the world
		and the calm and quite nature of her afford a great relaxation.</p>
	</div>
<br>
<div id="photoGallery">

<div class="gallery">
  <a  href="sea_side.php">
    <img src="../images/sri_lanka_turtle-700x394.jpg" alt="Fjords" width="300" height="200">
  </a>
  <div class="desc">Sea Side</div>
</div>

<div class="gallery">
  <a  href="culture.php">
    <img src="../images/traditional-dances-of-sri-lanka-august-2011-2.jpg" alt="Forest" width="300" height="200">
  </a>
  <div class="desc">Culture</div>
</div>

<div class="gallery">
  <a  href="historical.php">
    <img src="../images/5.jpg" alt="Northern Lights" width="300" height="200">
  </a>
  <div class="desc">Historical</div>
</div>

<div class="gallery">
  <a  href="hill_country.php">
    <img src="../images/tea.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc">Hill Country</div>
</div>

<div class="gallery">
  <a  href="wildlife.php">
    <img src="../images/deer.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc">Wild Life</div>
</div>

<div class="gallery">
  <a  href="river.php">
    <img src="../images/Mahaweli_Ganga_by_Gampola.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc">River Side</div>
</div>

</div>
<br><br><br><br><br><br>
<div id="service">
<br>
<h3>OUR SERVICE</h3>

<p>You will never feel strange when we are in your service.We accept the responsibility of providing a friendly and secure tour for you with full of trust.
We are eager to direct you to the places you love to visit, without any hesitation.
By contacting us you will be able to find out the best suited places for your journey according to your taste and also you can seek for most comfortable and safe places for accommodation.
From the arrival to Sri Lanka till the departure we will serve you heartfully creating remarkable memories of a wonderful journey in your heart. 
</p>
</div>
</div>
</div>

  <script type="text/javascript" src="../javascript/jquery.js"></script>
  <script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
<script src="../javascript/myjs.js"></script>
</body>
</html>
