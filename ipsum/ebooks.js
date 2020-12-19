function display(clicked_id)
{ var a=clicked_id;
if(a=="em")
{document.getElementById("list").innerHTML="<a href='try.html' class='book'>Greywal</a><br><a href='try.html' class='book'>Stuart J Murphy</a>";
document.getElementById("rb").style="display:block;	position:relative;left:26.5cm;bottom:19.3cm;";}
else if(a=="it")
{
document.getElementById("list1").innerHTML=a;
document.getElementById("rb").style="display:block;position:relative;left:24.5cm;bottom:15.3cm;";}
else if(a=="ep")
{
document.getElementById("list2").innerHTML=a;
document.getElementById("rb").style="display:block;position:relative;left:25.5cm;bottom:12.3cm;";}
else if(a=="py")
{
document.getElementById("list3").innerHTML="<a href='thinkpython.pdf' class='book'>ThinkPython</a>";
document.getElementById("rb").style="display:block;position:relative;left:22.5cm;bottom:9.3cm;";}
else if(a=="be")
{
document.getElementById("list4").innerHTML="<a href='' class='book'>VK.Mehta and Rohit Mehta</a>";
document.getElementById("rb").style="display:block;position:relative;left:22cm;bottom:6.2cm;";}
else if(a=="en")
{
document.getElementById("list5").innerHTML=a;
document.getElementById("rb").style="display:block;position:relative;left:23cm;bottom:2.8cm;";} 
}


