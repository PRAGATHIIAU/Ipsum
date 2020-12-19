<!DOCTYPE html>
<html>
<head>
<title>e books</title>
<link rel="stylesheet" href="ebook.css">
<style>
	.links{
      float:left;
      list-style-type: none;
           
    }
    .links a{
      color:rgba(255,255,255,1);
      text-decoration:none;
      margin:0;
      border: 0;
      display: block;
      padding:0.5cm 3cm 0.5cm 0.5cm;
           text-align:center;
           width:4.4cm;
           margin-left: 0;
           border: 0;

    }
    .links:hover, .links:active{
text-decoration:none;
background-color:rgba(0,184,230,1);

}

#try{
  width:100%;
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

</style>
<script src="ebooks.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<ul id="try">
<li class="links" id="l1"><a href="loggedhome.php">Home</a></li>
<li class="links" id="l2"><a href="que paper.php">Question papers</a></li>
<li class="links" id="l3" style=" background-color:rgba(100,100,100,1);"><a href="">EBooks</a></li>
<li class="links" id="l4"><a href="pdf.php">PDFs</a></li>
<li class="links" id="l5" ><a href="circular.php"">Circulars</a></li>
<li class="links" id="l6"><a href="syllabus.php" >syllabus</a></li>
<li class="links" id="l7"><a href="posters.php">Posters</a></li>
<li class="links" id="l8" ><a href="uploadpdf.php">UPLOAD</a></li>
</ul>

<div id="h"><a href='loggedhome.php'><img src="ipsum.png" id="ip"></a><h3>YOUR BOOKS ARE JUST A TAP AWAY</h3></div><hr>
<div class="a" id="em" onclick="display(this.id)"><p name="a">ENGINEERING MATHEMATICS</p><p class="z" id="list"></p></div>
<div class="b"></div>
<div class="a" id="it" onclick="display(this.id)"><p name="a">IT ESSENTIALS</p><p class="z" id="list1"></p></div>
<div class="b"></div>
<div class="a" id="ep" onclick="display(this.id)"><p name="a">ENGINEERING PHYSICS</p><p class="z" id="list2"></p></div>
<div class="b"></div>
<div class="a" id="py" onclick="display(this.id)"><p name="a">PYTHON</p><p class="z" id="list3"></p></div>
<div class="b" ></div>
<div class="a" id="be" onclick="display(this.id)"><p name="a">BEEE</p><p class="z" id="list4"></p></div>
<div class="b"></div>
<div class="a" id="en" onclick="display(this.id)"><p name="a">ENGLISH</p><p class="z" id="list5"></p></div>
<div class="b"></div>
<div class="rating-box" id="rb">
<div class="ratings">
 <span class="fa fa-star-o"></span>
 <span class="fa fa-star-o"></span>
 <span class="fa fa-star-o"></span>
 <span class="fa fa-star-o"></span>
 <span class="fa fa-star-o"></span>
</div>
<input type="text" id="rating-value">
</div>
<script src="ebooks1.js"></script>
</body>
</html>
 















