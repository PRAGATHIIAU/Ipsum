<!DOCTYPE html>
<head>
<title>Register</title>
<link rel="stylesheet" href="register.css">
<head>
<body>
<form method="POST" action="register.php">
<fieldset style="text-align:center;">

<h1 style="float:center;color: white">REGISTER HERE!</h1>
<div class="n">
<div class="a">
<div class="b">
<h4 id="b">PERSONAL DETAILS<h4>
</div>
<div class="c">
<b><i style="color:red;font-size:25px;">*</i>FIRST NAME:</b><br>
<input name="fn" placeholder='Enter First Name' class="z" required><br><br></input>
<b><i style="color:red;font-size:25px;">*</i>LAST NAME:</b><br>
<input name="ln" placeholder="Enter Last Name" class="z" required><br><br></input>
<b><i style="color:red;font-size:25px;">*</i>EMAIL:</b><br><input type="email" class="z" name="em" placeholder="Enter Email"><br><br>
<b><i style="color:red;font-size:25px;">*</i>PASSWORD:</b><br><input type="password" name="pass"  id="pass" placeholder="Enter Password" required></input><br><br><br>
<b><i style="color:red;font-size:25px;">*</i>CONFIRM PASSWORD:</B><br><input type="password" name="pass1" id="pass1" placeholder="Re-type Password" required></input><br><br>
</div></div>
<div class="d">
<div class="e">

<h4 id="a">
EDUCATIONAL DETAILS</h4></div>
<div class="f">
<b><i style="color:red;font-size:25px;">*</i>REGISTER NO:</b><br><b>
<input type="number" size=10 name="regno" class="z"  placeholder="Enter register number" required><br><br></input>
<i style="color:red;font-size:25px;">*</i>YEAR:<br>
<input type="radio"  name="year" value="1">1<br></radio>
<input type="radio"  name="year" value="2">2<br></radio>
<input type="radio"  name="year" value="3">3<br></radio>
<input type="radio"  name="year" value="4">4<br></radio>
<br>

<i style="color:red;font-size:25px;">*</i>SEMESTER:<br>
<input type="radio"  name="sem" value="1">1</radio>
<input type="radio"  name="sem" value="2">5<br></radio>
<input type="radio"  name="sem" value="3">2</radio>
<input type="radio"  name="sem" value="4">6<br></radio>
<input type="radio"  name="sem" value="5">3</radio>
<input type="radio"  name="sem" value="6">7<br></radio>
<input type="radio"  name="sem" value="7">4</radio>
<input type="radio"  name="sem" value="8">8</radio>
<br><br><i style="color:red;font-size:25px;">*</i>DEPARTMENT:<br>
<select name="dept" class="z" required>
<option value="geology"></option>
  <option value="geology">GEOLOGY</option>
  <option value="chemistry">CHEMISTRY</option>
  <option value="civil engineering">CIVIL ENGINEERING</option>
  <option value="computer science and engineering">COMPUTER SCIENCE AND ENGINEERING</option>
  <option value="electronics and communication engineering">ELECTRONICS AND COMMUNICATION ENGINEERING</option>
  <option value="electrical and electronic engineering">ELECTRICAL AND ELECTRONICS ENGINEERING</option>
  <option value="industrial engineering">INDUSTRIAL ENGINEERING</option>
  <option value="management studies">MANAGEMENT STUDIES</option> 
  <option value="manufacturing engineering">MANUFACTURING ENGINEERING</option>
  <option value="mathematics">MATHEMATICS</option>
  <option value="mechanical engineering">MECHANICAL ENGINEERING</option>
  <option value="media sciences">MEDIA SCIENCES</option>
  <option value="mining engineering">MINING ENGINEERING</option>
  <option value="printing technology">PRINTING TECHNOLOGY</option>
  <option value="physics">PHYSICS</option>
  <option value="information science and technology">INFORMATION SCIENCE AND TECHNOLOGY</option>
</select>
</div>
</div></div>
<div class="m">
<button type="submit" id="m">SIGN UP >></button>
</div>
</fieldset>

</body>
</html>

