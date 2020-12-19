<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    
body{
  
  height:100%;
  outline:0;
  margin:0;
  padding-bottom:0;
  
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
  height:100%;
  width:100%;
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
        text-align:right;
        
}
#quote{
  color:wheat;
  font-size:0.5cm;
  text-align:center;
  width:100%;
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
#welcome
{
  color:white;
  font-size:0.7cm;
}
#txt
{
  color:white;
  font-size: 0.5cm;
}
#menu{
  background-color: black;
}
.col-lg-3{
  float:left;
  margin-left:10cm;
  margin-top:1cm;
  margin-right:-6cm;
}
.site-footer{
  background-color:black;
  color:white;
  height:10cm;
  overflow:auto;
  width:100%;
  position:relative;
  bottom:-5cm;
  left:0;
}
.text-center{
  position:absolute;
  bottom:0.5cm;
  width:100%;
  text-align:center;
}
#ipsum{
  height:2.5cm;
  width:2.5cm;
}
#ipsum,#title{
  float:left;
  position: relative;
  font-size:1cm;
  color:white;
  text-align: center;
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
        <span id="txt"></span>


   <a href='registerpage.php'><input id='signup' type=button value='SIGN UP'></a>
   <a href='login.php'><input id='login' type=button value='LOGIN'></a>

   
    <img src="ipsum.png" id="ipsum"><h1 id="title" > Kick-start your dreams with us!</h1>
  </div>
  <div id="top2"> 
  <br><br>
  <h1 id="name">IPSUM</h1>
  <p id="quote"><img src="ipsu.gif"></p>
  </div>
 </div>
 <div id="menu" class="menu" >
  <div class="box">
    <a href="login.php"><img class="icons" src="pdf.png" alt="PDF"></img></a>
    <p class="desc">PDF</p>
  </div>
  <div class="box">
    <a href="login.php"><img class="icons" src="ebook.png" alt="EBOOK"></img></a>
    <p class="desc">EBOOK</p>
  </div>
  <div class="box">
    <a href="login.php"><img class="icons" src="circulars.png" alt="circulars"></img></a>
    <p class="desc">CIRCULARS</p>
  </div>
  <div class="box">
    <a href="login.php"><img class="icons" src="poster.png" alt="php"></img></a>
    <p class="desc">POSTERS</p>
  </div>
  <div class="box">
    <a href="login.php"><img class="icons" src="qp.png" alt="question paper"></img></a>
    <p class="desc">QUESTION PAPER</p>
  </div>
  <div class="box">
    <a href="login.php"><img class="icons" src="syllabus.png" alt="syllabus"></img></a>
    <p class="desc">SYLLABUS</p>
  </div>
  <div class="box">
    <a href="login.php"><img class="icons" src="upload.png" alt="upload"></img></a>
    <p class="desc">UPLOAD</p>
  </div>
 </div>
    <footer class="site-footer">
      <div class="container">
    <div class="a">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">About Us</h2>
                <p>Created By Pragathii, Hema Nanthini, Meghaa </p>
        <img src="ipsum.png" id="ipsum">
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
                            <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
            
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
</body>

 