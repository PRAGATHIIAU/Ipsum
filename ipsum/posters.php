<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
<title>posters</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
width:100vw;
height:100vh;
background-attachment:fixed;
}
.container {
  float:left;
  position: relative;
  width: 33.33%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 80%;
  opacity: 0;
  transition: .5s ease;
  background-color: white;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: black;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

ul{
  width:100vw;
  margin:0;
  border:0;
  padding: 0;
  position:fixed;
  top:0;
  left:0;
  background-color:rgba(0,0,0,1);
  text-decoration: none; 
  z-index:3;
}

li{
  background-color:rgba(0,0,0,1);
      float:left;
      list-style-type: none;
           
    }
    li a{
      color:rgba(255,255,255,1);
      text-decoration:none;
      margin:0;
      border: 0;
      display: block;
      padding:0.5cm;
           text-align:center;
           width:21.9vw;
           margin-left: 0;
           border: 0;

    }
    li:hover,li:active{
text-decoration:none;
background-color:rgba(0,184,230,1);

}

</style>
</head>
<ul>
<li class="links" id="l1"><a href="loggedhome.php">Home</a></li>
<li class="links" id="l2"><a href="que paper.php">Question papers</a></li>
<li class="links" id="l3"><a href="ebooksdisplay.php">EBooks</a></li>
<li class="links" id="l4"><a href="pdf.php">PDFs</a></li>
<li class="links" id="l5" ><a href="circular.php">Circulars</a></li>
<li class="links" id="l6"><a href="syllabus.php" >Syllabus</a></li>
<li class="links" id="l7" style=" background-color:rgba(100,100,100,1);"><a href="project.html">Posters</a></li>
<li class="links" id="l8"><a href="uploadpdf.php">UPLOAD</a></li>
</ul>
<body background="1.jpg";">

<h1 style=color:white;font-size:50px;text-align:center>Posters</h1>
<p></p>

<div class="container">
  <img src="kuru.jpg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Team CTF welcomes you all to India's biggest technical fest "kurukshetra".</div>
  </div>
</div>
<div class="container">
  <img src="astro.jpg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">To all the star gazers out there come on let's gaze at the stars together,come on join in astro club.</div>
  </div>
</div>
<div class="container">
  <img src="robo.jpg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Want to make robos and take them to robo wars come,join in robotics club.</div>
  </div>
</div>
<div class="container">
  <img src="gt.jpg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Wake up the journalist in you come join in guindy times to take interviews,write articles.</div>
  </div>
</div>
<div class="container">
  <img src="siru.jpg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Contribute something to the society by joining in the rotract club of CEG</div>
  </div>
</div>
<div class="container">
  <img src="aakriti.jpg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">To all the girls lets make our life bright by ourselves join yourselves in aakriti the girls forum of CEG.</div>
  </div>
</div>
<div class="container">
  <img src="enantra.jpg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Want to become the CEO of your dream company join in enantra. </div>
  </div>
</div>
<div class="container">
  <img src="acm.jpg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">To all the geeks out there join in ACM the official computer society of CEG </div>
  </div>
</div>
<div class="container">
  <img src="bloopers.jpg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Team Bloopers invities you all,come people let's rock the stage.</div>
  </div>
</div>
<div class="container">
  <img src="mafia.jpg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">The intra variety team of CEG welcomes you all come on join in "Mafias entertainment"</div>
  </div>
</div>
<div class="container">
  <img src="kuruk.jpg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Want to work in the India's largest technical fest?join in CTF the official technical club of CEG</div>
  </div>
</div>
</body>
</html>
