<head>
<style>
/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

.row3 {
    margin: 10px -16px;
	margin-bottom: 10px;
}

/* Add padding BETWEEN each column */
.row3,
.row3 > .column {
    padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: #b3b3cc;
    padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
	border: none;
	outline: none;
	padding: 12px 15px;
	background-color: #b3b3cc;
	cursor: pointer;
}

.btn:hover {
	background-color: black;
	color: white;
}

.btn.active {
	background-color: #666;
	color: white;
  
.button {
	border: none;	
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
</head>
<body>
<div class="main">
<br>
<div id="myBtnContainer">
	<button class="btn" onclick="filterSelection('all')"> Show All</button>
	<button class="btn" onclick="filterSelection('pop')"> Pop</button>
	<button class="btn" onclick="filterSelection('rnb')"> RnB </button>
	<button class="btn" onclick="filterSelection('trap')"> Trap </button>
	<button class="btn" onclick="filterSelection('rock')"> Rock </button>
	<button class="btn" onclick="filterSelection('indie')"> Indie </button>
	<button class="btn" onclick="filterSelection('hiphop')"> Hip Hop </button>
	<button class="btn" onclick="filterSelection('reggae')"> Reggae </button>
	<button class="btn" onclick="filterSelection('jazz')"> Jazz </button>
</div>

<div class="row3">
	<div class="column indie">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img6.jpg" style="width:25%">
			Adithia Sofyan - Sesuatu Di Jogja</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>

			<a href="https://youtu.be/l2mI4vL95kU" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>

			
		</div>
	</div>
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img12.jpg" style="width:25%">
			GAC - Love Will Stay</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>

			<a href="https://youtu.be/iEsxTk-Ye0I" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>

			
		</div>
	</div>
	<div class="column trap">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img3.jpg" style="width:25%">
			BlackPink - Ddu-Du Ddu-Du</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>

			<a href="https://youtu.be/IHNzOHi8sJs" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>


		</div>
	</div>

	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img5.jpg" style="width:25%">
			Calum Scott - You Are The Reason</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/ShZ978fBl6Y" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img10.jpg" style="width:25%">
			Rizky Febian - Menari</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/m_pS_N88Z8Q" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column hiphop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img11.jpg" style="width:25%">
			Jennie - Solo</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/b73BI9eUkjM" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	
	<div class="column rnb">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img2.jpg" style="width:25%">
			Bruno Mars - 24K Magic</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/UqyT8IEBkvY" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column rnb">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img4.jpg" style="width:25%">
			Khalid - American Teen</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/0NChtZCDCsY" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img7.jpg" style="width:25%">
			Alan Walker - Alone</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/1-xGerv5FOk" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	
	<div class="column indie">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img9.jpg" style="width:25%">
			Honne - Day 1</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/hWOB5QYcmh0" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column rock">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img8.jpg" style="width:25%">
			Queen - Love Of My Life</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/sUJkCXE4sAA" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column rock">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img13.jpg" style="width:25%">
			Barasuara - Mengunci Ingatan</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/2sER_XNhmoQ" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	
	<div class="column jazz,pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img14.jpg" style="width:25%">
			Payung Teduh - Akad</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/viW0M5R2BLo" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img15.jpg" style="width:25%">
			RAN - Dekat di Hati</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/07Dn-KDS-ag" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img16.jpg" style="width:25%">
			Pharrell Williams - Happy</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/ZbZSe6N_BXs" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img17.png" style="width:25%">
			SNSD - Gee</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/U7mPqycQ0tQ" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img18.png" style="width:25%">
			Rendy Pandugo - I Dont Care</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/O6plFAX3qRY" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column reggae">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img19.jpg" style="width:25%">
			Bob Marley - No Woman No Cry</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/jGqrvn3q1oo" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	
	<div class="column indie">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img22.jpg" style="width:25%">
			Banda Neira - Sampai Jadi Debu</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/isPWOKVBwAM" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img21.jpg" style="width:25%">
			Maroon 5 - Girls Like You</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/aJOTlE1K90k" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img20.jpg" style="width:25%">
			Fourtwnty - Zona Nyaman</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/OnfYLBNvrPw" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img23.jpg" style="width:25%">
			Drake - Gods Plan</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/xpVfcZ0ZcFM" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img24.jpg" style="width:25%">
			Raisa - Kali Kedua</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/SHj2kJzVi_g" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column pop, jazz">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img25.jpg" style="width:25%">
			Tulus - Teman Hidup</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/dt4Ueda_h6Y" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	
	<div class="column pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img26.jpg" style="width:25%">
			John Mayer - New Light</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/mQ055hHdxbE" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column reggae">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img27.jpg" style="width:25%">
			Ras Muhamad - Lion Roar</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/r8sra6sc2AM" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
	<div class="column hiphop, pop">
		<div class="content">
			<p><img src="<?php echo base_url() ?>assets/images/img28.jpg" style="width:25%">
			Madcon - Beggin</p>
			<p><button class="button" style='margin-left:130px'>Lyric</button></p>
			<a href="https://youtu.be/zrFI2gJSuwA" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
		</div>
	</div>
</div>
<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</body>
</body>