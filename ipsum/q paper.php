<!DOCTYPE html>
<html>
<head>
<style>
body{
width:100vw;
height:100vh;
background-attachment:fixed;
}


table,th,td{
border:1px solid black;
border-collapse:collapse;
}
table{
width:75%;
height:200px;
}
table.center {
  margin-left:auto; 
  margin-right:auto;
}
th,td{
padding:5px;
text-align:center;
}
th{
background-color:grey;
color:black;
height:40px;
}
td{
background-color:white;
color:black;
}
.hi:link {
  color: black;
}
.hi:visited {
  color: black;
}
.hi:hover {
  color: grey;
}
.hi:active {
  color: grey;
}

#try{
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

.links{
  background-color:rgba(0,0,0,1);
      float:left;
      list-style-type: none;
           
    }
    .links a{
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
    .links:hover,.links:active{
text-decoration:none;
background-color:rgba(0,184,230,1);

}

</style>
</head>
<body background="1.jpg";">

  <ul id="try">
<li class="links" id="l1"><a href="loggedhome.php">Home</a></li>
<li class="links" id="l2" style=" background-color:rgba(100,100,100,1);"><a href="">Question papers</a></li>
<li class="links" id="l3"><a href="">EBooks</a></li>
<li class="links" id="l4"><a href="pdf.php">PDFs</a></li>
<li class="links" id="l5" ><a href="circular.php">Circulars</a></li>
<li class="links" id="l6"><a href="" >Syllabus</a></li>
<li class="links" id="l7" ><a href="project.html">Posters</a></li>
<li class="links" id="l8"><a href="uploadpdf.php">UPLOAD</a></li>
</ul>

  

<h2 style=color:white;text-align:center;font-sixe:50px>Question Paper</h2>

<table class="center">
  <tr>
    <th>Semester</th>
    <th>IT</th> 
    <th>ECE</th>
  </tr><br>
  <tr>
    <td>SEM1</td>
    <td><a class="hi" href="apr2018.pdf">Engineering Mathematics</a></td>
    <td><a class="hi" href="apr2018.pdf">Mathematics-1</a></td>
  </tr><br>
  <tr>
    <td>SEM2</td>
    <td><a class="hi" href="apr2018.pdf">ITE</a></td>
    <td><a class='hi'href="apr2018.pdf">Circuit Theory</a></td>
  </tr><br>
  <tr>
    <td>SEM3</td>
    <td><a class="hi" href="apr2018.pdf">Software Engineering</a></td>
    <td><a class="hi" href="apr2018.pdf">Electronic Citcuits</a></td>
  </tr><br>
  <tr>
    <td>SEM4</td>
    <td><a class="hi" href="apr2018.pdf">Operating Systems</a></td>
    <td><a class="hi" href="apr2018.pdf">EM fields and waves</a></td>
  </tr><br>
  <tr>
    <td>SEM5</td>
    <td><a class="hi" href="apr2018.pdf">Compiler Engineering</a></td>
    <td><a class="hi" href="apr2018.pdf">Control sys Engineering</a></td>
  </tr><br>
  <tr>
    <td>SEM6</td>
    <td><a class="hi" href="apr2018.pdf">Cloud Computing</a></td>
    <td><a class="hi" href="apr2018.pdf">VLSI Design</a></td>
  </tr><br>
  <tr>
    <td>SEM7</td>
    <td><a class="hi" href="apr2018.pdf">Artificial Intelligence</a></td>
    <td><a class="hi" href="apr2018.pdf">Optical Communication</a></td>
  </tr><br>
  <tr>
    <td>SEM8</td>
    <td><a class="hi" href="apr2018.pdf">Elective</a></td>
    <td><a class="hi" href="apr2018.pdf">Elective</a></td>
  </tr><br>
 
</table>

</body>
</html>
