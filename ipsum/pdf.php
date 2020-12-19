<!DOCTYPE html>
<html>
<head>
<title>My folder</title>
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
  

#frame1{
  border:0;
position:fixed;
top:20vh;
left:33vw;
width:75vw;
height:100vh;
}

#form1{
  position: fixed;
  top:20vh;
  width: 25vw;
}


span{
  font-weight:bold;
}

</style>
<body>

<?php include "header.php"?>

  <form id="form1" method="post" enctype="multipart/form-data" action="display.php" target="iframe1">
    <fieldset id="f2">
        <span>DEPARTMENT: (required)</span><br>
        <select name="department"  id="select3" required>
           <option value="electronics and communication engineering">ELECTRONICS AND COMMUNICATION ENGINEERING</option>
           <option value="electrical and electronic engineering">ELECTRICAL AND ELECTRONICS ENGINEERING</option>
           <option value="information science and technology">INFORMATION SCIENCE AND TECHNOLOGY</option>
        </select><br><br>
       <span>SEMESTER: (required)</span><br><br>
          <input type="radio" id="1" class="sem" name="sem" onclick="sel1()" value="1" required>1
          <input type="radio" id="2" class="sem" name="sem" onclick="sel2()" value="2" required>2
          <input type="radio" id="3" class="sem" name="sem" onclick="sel3()" value="3" required>3
          <input type="radio" id="4" class="sem" name="sem" onclick="sel4()" value="4" required>4
          <input type="radio" id="5" class="sem" name="sem" onclick="sel5()" value="5" required>5
          <input type="radio" id="6" class="sem" name="sem" onclick="sel6()" value="6" required>6
          <input type="radio" id="7" class="sem" name="sem" onclick="sel7()" value="7" required>7
          <input type="radio" id="8" class="sem" name="sem" onclick="sel8()" value="8" required>8
        
        <br><br><span>SUBJECT:</span><br>
        <select name="subject"  id="select1">
          <option id="s1" value=""></option>
          <option id="s2" value=""></option>
          <option id="s3" value=""></option>
          <option id="s4" value=""></option>
          <option id="s5" value=""></option>
          <option id="s6" value=""></option>
        </select><br><br>
        <span>NAME OF THE DOCUMENT:</span><br><br>
        <input type="text" name="name"><br><br>
        <span>TEACHER:</span><br><br>
        <input type="text" name="teacher" placeholder="Teacher Incharge"><br><br>
        <span>DATE:</span><br>
        <input type="date" name="dat">
         <br><br>  <input style="width:4cm;height:1cm;"type="submit" id="b1" value="SEARCH">
         </fieldset>
</form>

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
<iframe src="display.php" name="iframe1" id="frame1"></iframe>
</body>
