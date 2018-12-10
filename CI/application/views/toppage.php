<style>
/* The grid: Three equal columns that floats next to each other */
.column {
    float: left;
    width: 33%;
    padding: 50px;
    text-align: center;
    font-size: 25px;
    cursor: pointer;
    color: white;
}

.containerTab {
    padding: 20px;
    color: white;
	max-width: 1100px;
	margin-left: 75px;
}
.row3{
	max-width:1280px;
	margin-left:10px;
	margin-bottom: 15px;
}
/* Clear floats after the columns */
.row3:after {
    content: "";
    display: table;
    clear: both;
}

/* Closable button inside the container tab */
.closebtn {
    float: right;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
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
.table{
	padding: 10px;
}
</style>

<div class="row3" style="padding-top:10px;">
	<div class="column" onclick="openTab('b1');" style="background:#b3b3cc;">
		VRD Top Charts
	</div>
	<div class="column" onclick="openTab('b2');" style="background:#b3b3cc;">
		International Top Charts
	</div>
	<div class="column" onclick="openTab('b3');" style="background:#b3b3cc;">
			Indonesian Top Charts
	</div>
</div>

<div id="b1" class="containerTab" style="display:none;background:#8585ad">
	<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
	<h2>VRD Top Charts</h2>
	<br>
	<table cellpadding='10'>
		<tr>
			<th style="font-size: 40px;padding: 20px">1.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img21.jpg" style="width:150px; padding:10px"></th>
			<th style="padding:30px ;font-size:40px">Marron 5</th>
			<th style='padding:30px ;font-size:40px'>Girls Like You</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 35px;padding: 20px">2.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img23.jpg" style="width:130px; padding:10px"></th>
			<th style="padding:30px ;font-size:35px">Drake</th>
			<th style='padding:30px ;font-size:35px'>Gods Plan</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 30px;padding: 20px">3.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img20.jpg" style="width: 110px; padding:10px"></th>
			<th style="padding:30px ;font-size:30px">Fourtwnty</th>
			<th style='padding:30px ;font-size:30px'>Zona Nyaman</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">4.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img8.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Queen</th>
			<th style='padding:30px ;font-size:25px'>Love Of My Life</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">5.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img3.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">BlackPink</th>
			<th style='padding:30px ;font-size:25px'>Ddu-Du Ddu-Du</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">6.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img9.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Honne</th>
			<th style='padding:30px ;font-size:25px'>Day 1</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">7.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img18.png" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Rendy Pandugo</th>
			<th style='padding:30px ;font-size:25px'>I Dont Care</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">8.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img11.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Jennie</th>
			<th style='padding:30px ;font-size:25px'>Solo</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">9.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img19.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Bob Marley</th>
			<th style='padding:30px ;font-size:25px'>No Woman No Cry</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">10.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img5.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Calum Scott</th>
			<th style='padding:30px ;font-size:25px'>You Are The Reason</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 20px;padding: 20px">11.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img28.jpg" style="width: 75px; padding:10px"></th>
			<th style="padding:30px ;font-size:20px">Madcon</th>
			<th style='padding:30px ;font-size:20px'>Beggin</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 20px;padding: 20px">12.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img13.jpg" style="width: 75px; padding:10px"></th>
			<th style="padding:30px ;font-size:20px">Barasuara</th>
			<th style='padding:30px ;font-size:20px'>Mengunci Ingatan</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 20px;padding: 20px">13.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img27.jpg" style="width: 75px; padding:10px"></th>
			<th style="padding:30px ;font-size:20px">Ras Muhamad</th>
			<th style='padding:30px ;font-size:20px'>Lion Roar</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 20px;padding: 20px">14.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img6.jpg" style="width: 75px; padding:10px"></th>
			<th style="padding:30px ;font-size:20px">Adithia Sofyan</th>
			<th style='padding:30px ;font-size:20px'>Sesuatu Di Jogja</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 20px;padding: 20px">15.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img16.jpg" style="width: 75px; padding:10px"></th>
			<th style="padding:30px ;font-size:20px">Pharrell Williams</th>
			<th style='padding:30px ;font-size:20px'>Happy</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
	</table>
 </div>

<div id="b2" class="containerTab" style="display:none;background:#8585ad">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>International Top Charts</h2>
  <br>
	<table cellpadding='10'>
		<tr>
			<th style="font-size: 40px;padding: 20px">1.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img8.jpg" style="width:150px; padding:10px"></th>
			<th style="padding:30px ;font-size:40px">Queen</th>
			<th style='padding:30px ;font-size:40px'>Love Of My Life</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 35px;padding: 20px">2.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img21.jpg" style="width:130px; padding:10px"></th>
			<th style="padding:30px ;font-size:35px">Maroon 5</th>
			<th style='padding:30px ;font-size:35px'>Girls Like You</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 30px;padding: 20px">3.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img3.jpg" style="width: 110px; padding:10px"></th>
			<th style="padding:30px ;font-size:30px">BlackPink</th>
			<th style='padding:30px ;font-size:30px'>Ddu-Du Ddu-Du</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">4.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img23.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Drake</th>
			<th style='padding:30px ;font-size:25px'>Gods Plan</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">5.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img19.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Bob Marley</th>
			<th style='padding:30px ;font-size:25px'>No Woman No Cry</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">6.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img26.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">John Mayer</th>
			<th style='padding:30px ;font-size:25px'>New Light</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">7.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img18.png" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Rendy Pandugo</th>
			<th style='padding:30px ;font-size:25px'>I Dont Care</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">8.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img4.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Khalid</th>
			<th style='padding:30px ;font-size:25px'>American Teen</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">9.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img2.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Bruno Mars</th>
			<th style='padding:30px ;font-size:25px'>24K Magic</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">10.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img5.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Calum Scott</th>
			<th style='padding:30px ;font-size:25px'>You Are The Reason</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
	</table>
</div>

<div id="b3" class="containerTab" style="display:none;background:#8585ad">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Indonesian Top Charts</h2>
  <br>
	<table cellpadding='10'>
		<tr>
			<th style="font-size: 40px;padding: 20px">1.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img20.jpg" style="width:150px; padding:10px"></th>
			<th style="padding:30px ;font-size:40px">Fourtwnty</th>
			<th style='padding:30px ;font-size:40px'>Zona Nyaman</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 35px;padding: 20px">2.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img15.jpg" style="width:130px; padding:10px"></th>
			<th style="padding:30px ;font-size:35px">RAN</th>
			<th style='padding:30px ;font-size:35px'>Dekat Di Hati</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 30px;padding: 20px">3.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img10.jpg" style="width: 110px; padding:10px"></th>
			<th style="padding:30px ;font-size:30px">Rizky Febian</th>
			<th style='padding:30px ;font-size:30px'>Menari</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">4.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img6.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Adithia Sofyan</th>
			<th style='padding:30px ;font-size:25px'>Sesuatu Di Jogja</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">5.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img12.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">GAC</th>
			<th style='padding:30px ;font-size:25px'>Love Will Stay</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">6.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img13.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Barasuara</th>
			<th style='padding:30px ;font-size:25px'>Mengunci Ingatan</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">7.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img18.png" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Rendy Pandugo</th>
			<th style='padding:30px ;font-size:25px'>I Dont Care</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">8.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img25.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Tulus</th>
			<th style='padding:30px ;font-size:25px'>Teman Hidup</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">9.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img22.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Banda Neira</th>
			<th style='padding:30px ;font-size:25px'>Sampai Jadi Debu</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
		<tr>
			<th style="font-size: 25px;padding: 20px">10.</th>
			<th><img src="<?php echo base_url() ?>assets/images/img27.jpg" style="width: 90px; padding:10px"></th>
			<th style="padding:30px ;font-size:25px">Ras Muhamad</th>
			<th style='padding:30px ;font-size:25px'>Lion Roar</th>
			<th><button class="button">Lyric</button></th>
			<th><button class="button">Video </button></th>
		</tr>
	</table>
</div>

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>

</body>