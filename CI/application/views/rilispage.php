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
 background-color: black;
 color: white;
}
</style>
</head>
<body>
<div class="main">
<br>
<div id="myBtnContainer">
 <button class="btn" onclick="filterSelection('all')"> Show All</button>
 <button class="btn" onclick="filterSelection('global')"> Global</button>
 <button class="btn" onclick="filterSelection('local')"> Local </button>
</div>

<div class="row3">
 <div class="column local">
  <div class="content">
   <p><img src="<?php echo base_url() ?>assets/images/img6.jpg" style="width:25%">
   Adithia Sofyan - Sesuatu Di Jogja</p>
   <a href="<?php echo base_url() ?>Lirik/sdj"><button class="button" style='margin-left:130px'>Lyric</button></a>
   <a href="https://youtu.be/l2mI4vL95kU" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
  </div>
 </div>
 <div class="column local">
  <div class="content">
   <p><img src="<?php echo base_url() ?>assets/images/img12.jpg" style="width:25%">
   GAC - Love Will Stay</p>
   <p><button class="button" style='margin-left:130px'>Lyric</button></p>
   <a href="https://youtu.be/iEsxTk-Ye0I" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
  </div>
 </div>
 <div class="column global">
  <div class="content">
   <p><img src="<?php echo base_url() ?>assets/images/img3.jpg" style="width:25%">
   BlackPink - Ddu-Du Ddu-Du</p>
   <p><button class="button" style='margin-left:130px'>Lyric</button></p>
   <a href="https://youtu.be/IHNzOHi8sJs" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
  </div>
 </div>

 <div class="column global">
  <div class="content">
   <p><img src="<?php echo base_url() ?>assets/images/img5.jpg" style="width:25%">
   Calum Scott - You Are The Reason</p>
   <p><button class="button" style='margin-left:130px'>Lyric</button></p>
   <a href="https://youtu.be/ShZ978fBl6Y" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
  </div>
 </div>
 <div class="column local">
  <div class="content">
   <p><img src="<?php echo base_url() ?>assets/images/img10.jpg" style="width:25%">
   Rizky Febian - Menari</p>
   <p><button class="button" style='margin-left:130px'>Lyric</button></p>
   <a href="https://youtu.be/m_pS_N88Z8Q" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
  </div>
 </div>
 <div class="column global">
  <div class="content">
   <p><img src="<?php echo base_url() ?>assets/images/img11.jpg" style="width:25%">
   Jennie - Solo</p>
   <p><button class="button" style='margin-left:130px'>Lyric</button></p>
   <a href="https://youtu.be/b73BI9eUkjM" class="button gmr-trailer-popup"><button class="button" style='margin-left:127px'>Video</button></a>
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