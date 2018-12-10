<head>
<style>
/* Slideshow container */
.slideshow-container {
  max-width: 700px;
  position: relative;
  margin: auto;
}
/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #black;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active, .dot:hover {
  background-color: #black;
}
/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 10000s;
}
@-webkit-keyframes fade {
  from {opacity: 1} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: 1} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


/*Meet the team*/
.column {
	float: left;
	margin-left: 10px;
	width: 140px;
	margin-bottom: 16px;
	padding: 2px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(200, 200, 200, 10);
}

.title {
	margin-left: 3px;
	font-size: 15px;
	margin-bottom: 0px;
	color: white;
}
.container2{
	width:150px;
}
.row2{
	width:700px;
}
.button {
  border: none;
  margin-left:17px;
  padding: 5px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100px;
}
.button:hover {
  background-color: #555;
}

</style>
<head>

<body>
<br>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="<?php echo base_url() ?>assets/images/image1.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="<?php echo base_url() ?>assets/images/image2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="<?php echo base_url() ?>assets/images/image3.png" style="width:100%">
</div>

</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every
}
</script>

<div class="container">
	<table class="table2">
        <tr><td><center><h5 style='font-size:20px; color:#ffffff; margin-left:300px'>TOP SONG<br></h5></center></td>
            <td><center><h5 style='font-size:20px; color:#ffffff; margin-left:500px'>WHAT'S HOT?<br></h5></center></td></tr>
      </table>
</div>
<table style="margin-left:860px">
	<tr style=''>
		<th></th>
		<th><p style="color:white;fonte-size:40px; margin-left: 35px">Genre</p></th>
		<th></th>
	</tr>
	<tr>
		<th style='width:111px'><img src="<?php echo base_url() ?>assets/images/pop.jpg" style="width:111px; padding:10px"></th>
		<th style='width:111px'><img src="<?php echo base_url() ?>assets/images/rnb.jpg" style="width:111px; padding:10px"></th>
		<th><img src="<?php echo base_url() ?>assets/images/indie.jpg" style="width:111px; padding:10px"></th>
	</tr>
	<tr>
		<th><a href="<?php echo base_url() ?>Kategori"><button class="button" style="width:270%" >Checkout Genre!</button><a/></th>
	</tr>
	<tr>
		<th></th>
		<th><p style="color:white;fonte-size:40px; margin-left: 30px; margin-top:10px; margin-bottom:-15x">Top List</p></th>
		<th></th>
	</tr>
	<tr>
		<th style='width:111px'><img src="<?php echo base_url() ?>assets/images/global.jpg" style="width:111px; padding:10px"></th>
		<th><img src="<?php echo base_url() ?>assets/images/local.jpg" style="width:111px; padding:10px"></th>
		<th></th>
	</tr>
	<tr>
		<th><a href="<?php echo base_url() ?>Top10"><button class="button" style="width:270%">Checkout Top List!</button></a></th>
	</tr>
</table>
<div class="row2" style="margin-top: -340px;">
	<div class="column" style="margin-left:110px">
	<div class="card">
		<img src="<?php echo base_url() ?>assets/images/img5.jpg" style="width:100%">
		<div class="container2">
			<p class="title">Calum Scott</p>
			<p style="color: #c5c5c5; margin-left:3px;font-size:10px">You Are The Reason</p>
			<p><button class="button">Lyric</button></p>
			<p><button class="button">Video</button></p>
		</div>
    </div>
	</div>
	<div class="column">
		<div class="card">
			<img src="<?php echo base_url() ?>assets/images/img2.jpg" style="width:100%">
			<div class="container2">
				<p class="title">Bruno Mars</p>
				<p style="color: #c5c5c5; margin-left:3px;font-size:10px">24K Magic</p>
				<p><button class="button">Lyric</button></p>
				<p><button class="button">Video</button></p>	
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="<?php echo base_url() ?>assets/images/img3.jpg" style="width:100%">
			<div class="container2">
				<p class="title">BlackPink</p>
				<p style="color: #c5c5c5; margin-left:3px ;font-size:10px">Ddu-Du Ddu-Du</p>
				<p><button class="button">Lyric</button></p>
				<p><button class="button">Video</button></p>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="<?php echo base_url() ?>assets/images/img4.jpg" style="width:100%">
			<div class="container2">
				<p class="title">Khalid</p>
				<p style="color: #c5c5c5; margin-left:3px;font-size:10px">American Teen</p>
				<p><button class="button">Lyric</button></p>
				<p><button class="button">Video</button></p>
			</div>
		</div>
	</div>
</div>
<br>

<div class="row2">
	<div class="column" style="margin-left:110px">
		<div class="card">
			<img src="<?php echo base_url() ?>assets/images/img6.jpg" style="width:100%">
			<div class="container2">
				<p class="title">Adhitia Sofyan</p>
				<p style="color: #c5c5c5; margin-left:3px;font-size:10px">Sesuatu Di Jogja</p>
				<p><button class="button">Lyric</button></p>
				<p><button class="button">Video</button></p>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="<?php echo base_url() ?>assets/images/img7.jpg" style="width:100%">
			<div class="container2">
				<p class="title">Alan Walker</p>
				<p style="color: #c5c5c5; margin-left:3px;font-size:10px">Alone</p>
				<p><button class="button">Lyric</button></p>
				<p><button class="button">Video</button></p>	
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="<?php echo base_url() ?>assets/images/img8.jpg" style="width:100%">
			<div class="container2">
				<p class="title">Queen</p>
				<p style="color: #c5c5c5; margin-left:3px ;font-size:10px">Love Of My Life</p>
				<p><button class="button">Lyric</button></p>
				<p><button class="button">Video</button></p>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="<?php echo base_url() ?>assets/images/img9.jpg" style="width:100%">
			<div class="container2">
				<p class="title">Honne</p>
				<p style="color:#c5c5c5; margin-left:3px;font-size:10px">Day 1</p>
				<p><button class="button">Lyric</button></p>
				<p><button class="button">Video</button></p>
			</div>
		</div>
	</div>
</div>
<br>

<body>