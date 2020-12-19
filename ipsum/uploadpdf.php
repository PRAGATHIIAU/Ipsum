
<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD PDF</title>
	<style>
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

	
table,th,td
		{
			border: 2px solid rgba(0,0,0,1);
			border-collapse: collapse;
	
		}
		th,td{
			padding:4px;
		}
		#t1,#select3
		{
			width: 4.5cm;
		}
		#select1{
			text-align: center;
			width:4.5cm;
		}
		#t3
		{
			width: 5cm;

		}
		#t4{
			width:2cm;
		}



		#t8,#td8{
	max-width:5cm;
}

form{
	position:relative;
	top:5cm;
}

	</style>	
</head>
<body>
<ul>
<li class="links" id="l1"><a href="loggedhome.php">Home</a></li>
<li class="links" id="l2"><a href="que paper.php">Question papers</a></li>
<li class="links" id="l3"><a href="ebooksdisplay.php">EBooks</a></li>
<li class="links" id="l4"><a href="pdf.php">PDFs</a></li>
<li class="links" id="l5" ><a href="circulars.php"">Circulars</a></li>
<li class="links" id="l6"><a href="syllabus.php" >syllabus</a></li>
<li class="links" id="l7"><a href="posters.php">Posters</a></li>
<li class="links" id="l8" style=" background-color:rgba(100,100,100,1);"><a href="uploadpdf.php">UPLOAD</a></li>
</ul>

	<form method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>UPLOAD PDF</legend>
			<table>
				<tr>
					<th id="t1">Department</th>
					<th id="t2">Name Of The Document</th>
					<th id="t3">Semester</th>
					<th id="t4">Subject</th>
					<th id="t5">Suject Code</th>
					<th id="t6">Teacher</th>
					<th id="t7">Date</th>
					<th id="t8">Document</th>
				</tr>
				<tr>
				<td>	<select name="department"  id="select3">
  <option value="electronics and communication engineering">ELECTRONICS AND COMMUNICATION ENGINEERING</option>
  <option value="electrical and electronic engineering">ELECTRICAL AND ELECTRONICS ENGINEERING</option>
  <option value="information science and technology">INFORMATION SCIENCE AND TECHNOLOGY</option>
</select>
   
				<td><input type="text" name="name" placeholder="Enter name of the document">
				<td><input type="radio" id="1" class="sem" name="sem" onclick="sel1()" value="1">1
					<input type="radio" id="2" class="sem" name="sem" onclick="sel2()" value="2">2
					<input type="radio" id="3" class="sem" name="sem" onclick="sel3()" value="3">3
					<input type="radio" id="4" class="sem" name="sem" onclick="sel4()" value="4">4
					<input type="radio" id="5" class="sem" name="sem" onclick="sel5()" value="5">5
					<input type="radio" id="6" class="sem" name="sem" onclick="sel6()" value="6">6
					<input type="radio" id="7" class="sem" name="sem" onclick="sel7()" value="7">7
					<input type="radio" id="8" class="sem" name="sem" onclick="sel8()" value="8">8
				<td><select name="subject"  id="select1">
					<option id="s1" value=""></option>
					<option id="s2" value=""></option>
					<option id="s3" value=""></option>
					<option id="s4" value=""></option>
					<option id="s5" value=""></option>
					<option id="s6" value=""></option>
				</select>
				<td><select name="scode">
					<option id="ss1" value=""></option>
					<option id="ss2" value=""></option>
					<option id="ss3" value=""></option>
					<option id="ss4" value=""></option>
					<option id="ss5" value=""></option>
					<option id="ss6" value=""></option>
				</select>

					<script type="text/javascript">
						function sel2()
						{
							var a=document.getElementById("select3").value;
							if(a=="information science and technology"){
	
							document.getElementById('s1').value="IT ESSENTIALS";
							document.getElementById('s2').value="Professional Communication";
							document.getElementById('s3').value="BEEE";
							document.getElementById('s4').value="EG";
							document.getElementById('s5').value="Maths";
							document.getElementById('s1').innerHTML="IT ESSENTIALS";
							document.getElementById('s2').innerHTML="Professional Communication";
							document.getElementById('s3').innerHTML="BEEE";
							document.getElementById('s4').innerHTML="EG";
							document.getElementById('s5').innerHTML="Maths";
							document.getElementById('ss1').value="IT5201";
							document.getElementById('ss2').value="HS5251";
							document.getElementById('ss3').value="EE5251";
							document.getElementById('ss4').value="GE5151";
							document.getElementById('ss5').value="MA5252";
							document.getElementById('ss1').innerHTML="IT5201";
							document.getElementById('ss2').innerHTML="HS5251";
							document.getElementById('ss3').innerHTML="EE5251";
							document.getElementById('ss4').innerHTML="GE5151";
							document.getElementById('ss5').innerHTML="MA5252";
						}

						}
						function sel1()
							{
							document.getElementById('s1').value="English";
							document.getElementById('s2').value="Maths";
							document.getElementById('s3').value="Physics";
							document.getElementById('s4').value="Chemistry";
							document.getElementById('s5').value="Python";
							document.getElementById('s1').innerHTML="English";
							document.getElementById('s2').innerHTML="Maths";
							document.getElementById('s3').innerHTML="Physics";
							document.getElementById('s4').innerHTML="Chemistry";
							document.getElementById('s5').innerHTML="Python";
							document.getElementById('ss1').value="HS5151";
							document.getElementById('ss2').value="MA5158";
							document.getElementById('ss3').value="PH5151";
							document.getElementById('ss4').value="CY5151";
							document.getElementById('ss5').value="GE5153";
							document.getElementById('ss1').innerHTML="HS5151";
							document.getElementById('ss2').innerHTML="MA5158";
							document.getElementById('ss3').innerHTML="PH5151";
							document.getElementById('ss4').innerHTML="CY5151";
							document.getElementById('ss5').innerHTML="GE5153";
						}
					</script>
				<td><input type="text" name="teacher" placeholder="Teacher Incharge" required>
				<td><input type="date" name="date" required>
				<td id="td8"><input type="file" name="document" required></td>

			</table>
					<p style="text-align: center; "><input style="width:4cm;height:1cm;"type="submit" id="b1" value="UPLOAD"></p>

		</fieldset>
</body>
<?php include "forupload.php"?>