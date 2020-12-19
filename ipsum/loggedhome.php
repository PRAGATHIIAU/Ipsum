<?php session_start()?>


    <!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
body{
	
	outline:0;
	margin:0;
	padding-bottom:0;
  overflow-x: hidden;
	
}
#topbar{
	background-image:url('startpage1.jpg');
	background-size:cover;
	background-repeat:none;
	height:600px;
	margin:0;
		

}
#top2{
	position:relative;
	top:0.5cm;
}
#signup,#login{
 height:1.5cm;
 width:4cm;
 float:right;
}
#login{
	margin-right:5px;
}
#name{
	
	
	text-align:center;
	font-size:4cm;
	color:white;
	text-shadow:olive 2px 2px 2px
	padding:0;
	margin-bottom:0;
	outline:0;font-family:Algerian;
}
#top1{
	padding:5px;
	height:10%;
	margin:0;
        
        
}
#quote{
	color:wheat;
	font-size:0.5cm;
	text-align:center;
	padding:0;
	margin:30;
	outline:0;
        background-color:rgba(245,255,250,0.2);
        font-family:Times New Roman;
}
#text2{
	
	color:white;
	font-size:0.75cm;
	text-align:center;
	width:100%;
	padding-bottom:0.5cm;
	text-shadow:2px 2px 2px green;
	margin:0;
	
}
.icons{
	height:1.5cm;
	width:2cm;
	padding:0.7cm;
	padding-bottom:0cm;
        position:relative;
        
       
}
.icons:hover{position:relative;height:1cm;width:2cm;
             }
.box{background-color:white;
	border:2px solid black;
        
	float:left;
	margin:0.5cm;position:relative;
	top:4cm;
}
.box:hover{position:relative;margin-top:1cm;margin-down:1cm;
    }
.desc{
	text-align:center;
}
marquee{
background-color:black;color:rgb(255,255,255,0.7);
outline:0px;
margin:0px;
padding:0px;
height:100%}

.signup:hover{
            background-color:aquamarine;
            color:black;
            padding:10px 26px;
            margin:3px 1px;}
.signup{padding: 12px 28px;
        margin:4px 2px;
        border:3px solid black;
        background-color:cyan;}
#title
{
	position: relative;
	font-size:1cm;
	color:white;
	text-align: center;
}
#welcome
{
	color:white;
	font-size:0.7cm;
}
#txt
{
  float:right;
	color:white;
	font-size: 0.5cm;
}
#menu{
	background-color: black;
}
</style>
<script>
function startTime() {
  var today = new Date();
  var y = today.getFullYear();
var month = today.getMonth();
var d = today.getDate();

  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =d+"/"+month+"/"+y+"   "+
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 1000);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i}; 
  return i;
}
</script>

 <title>Home</title>
</head>
<body onload="startTime()">
 <div id="topbar">
  <div id="top1">
  	<span id='welcome'>Hello <?php echo $_SESSION['name']?>!</span> 
    <a href='first.php'><button id='signup'>SIGN OUT</button></a>
  	    

   
    <h1 id="title" > Kick-start your dreams with us!</h1>
  </div>
  <span id="txt"></span>
  <div id="top2"> 
  <br><br>
  <h1 id="name">IPSUM</h1>
  <p id="quote"><img src="ipsu.gif"></p>
  </div>
 </div>
 <div id="menu" >
  <div class="box">
    <a href="pdf.php"><img class="icons" src="pdf.png" alt="PDF"></img></a>
    <p class="desc">PDF</p>
  </div>
  <div class="box">
    <a href="ebooksdisplay.php"><img class="icons" src="ebook.png" alt="EBOOK"></img></a>
    <p class="desc">EBOOK</p>
  </div>
  <div class="box">
    <a href=""><img class="icons" src="circulars.png" alt="circulars"></img></a>
    <p class="desc">CIRCULARS</p>
  </div>
  <div class="box">
    <a href="posters.php"><img class="icons" src="poster.png" alt="php"></img></a>
    <p class="desc">POSTERS</p>
  </div>
  <div class="box">
    <a href="que paper.php"><img class="icons" src="qp.png" alt="question paper"></img></a>
    <p class="desc">QUESTION PAPER</p>
  </div>
  <div class="box">
    <a href="syllabus.php"><img class="icons" src="syllabus.png" alt="syllabus"></img></a>
    <p class="desc">SYLLABUS</p></div>
   <div class="box">
    <a href="uploadpdf.php"><img class="icons" src="upload.png" alt="syllabus"></img></a>
    <p class="desc">UPLOAD</p>
  </div>
 </div>
</body>

  
  


    