<!DOCTYPE html>
<html>
<head>
<title>circular</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

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

body{
    width:100vw;
  margin:0;
  border:0;
  padding: 0;
  position:sticky;
  top:0;
  left:0;

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
<body background="1.jpg">

  <ul>
<li class="links" id="l1"><a href="loggedhome.php">Home</a></li>
<li class="links" id="l2"><a href="que paper.php" >Question papers</a></li>
<li class="links" id="l3"><a href="ebooksdisplay.php">EBooks</a></li>
<li class="links" id="l4"><a href="pdf.php">PDFs</a></li>
<li class="links" id="l5"  style=" background-color:rgba(100,100,100,1);"><a href="circular.php">Circulars</a></li>
<li class="links" id="l6"><a href="syllabus.php">Syllabus</a></li>
<li class="links" id="l7"><a href="posters.php">Posters</a></li>
<li class="links" id="l8"><a href="uploadpdf.php">UPLOAD</a></li>
</ul>


<h1 style=color:white;font-size:50px;text-align:center>Circulars</h1>
<p></p>

<div class="container">
  <img src="cir2.jpeg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Permission for extension of in-time.</div>
  </div>
</div>
<div class="container">
  <img src="cir3.jpeg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">End semester clarification day for R-19 students.</div>
  </div>
</div>
<div class="container">
  <img src="cir4.jpeg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Corona virus awareness program.</div>
  </div>
</div>
<div class="container">
  <img src="cir5.jpeg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Introduction of "Kavalan SOS" app.</div>
  </div>
</div>
<div class="container">
  <img src="cir6.jpeg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Renewation of hostel library.</div>
  </div>
</div>
<div class="container">
  <img src="cir7.jpeg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Suspension of classes for "Kurukshetra2020".</div>
  </div>
</div>
<div class="container">
  <img src="cir8.jpeg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Suspension of classes for "Techofes2020" . </div>
  </div>
</div>
<div class="container">
  <img src="cir9.jpeg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Additional classes for improvement of communication skills of students. </div>
  </div>
</div>
<div class="container">
  <img src="cir10.jpeg" alt="Avatar" class="image" style="width:400px;height:500px">
  <div class="overlay">
    <div class="text">Declaration of election holidays.</div>
  </div>
</div>
</body>
</html>
