<html>
<head>

<style type="text/css">

#dropmenudiv{
position:absolute;
border:1px solid black;
border-bottom-width: 0;
font:normal 12px Verdana;
line-height:18px;
z-index:100;
}

#dropmenudiv a{
width: 100%;
display: block;
text-indent: 3px;
border-bottom: 1px solid black;
padding: 1px 0;
text-decoration: none;
font-weight: bold;
}

#dropmenudiv a:hover{ /*hover background color*/
background-color: yellow;
}

</style>

<script type="text/javascript">

/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

//Contents for menu 1
var menu1=new Array()
menu1[0]='<a href="physics.html">e-Physics Class</a>'
menu1[1]='<a href="http://www.freewarejava.com">e-Chemistry Class</a>'
menu1[2]='<a href="http://codingforums.com">e-Maths Class</a>'


//Contents for menu 2, and so on
var menu2=new Array()
menu2[0]='<a href="http://cnn.com">CNN</a>'
menu2[1]='<a href="http://msnbc.com">MSNBC</a>'
menu2[2]='<a href="http://news.bbc.co.uk">BBC News</a>'
		
var menuwidth='165px' //default menu width
var menubgcolor='lightyellow'  //menu bgcolor
var disappeardelay=250  //menu disappear speed onMouseout (in miliseconds)
var hidemenu_onclick="yes" //hide menu when user clicks within menu?

/////No further editting needed

var ie4=document.all
var ns6=document.getElementById&&!document.all

if (ie4||ns6)
document.write('<div id="dropmenudiv" style="visibility:hidden;width:'+menuwidth+';background-color:'+menubgcolor+'" onMouseover="clearhidemenu()" onMouseout="dynamichide(event)"></div>')

function getposOffset(what, offsettype){
var totaloffset=(offsettype=="left")? what.offsetLeft : what.offsetTop;
var parentEl=what.offsetParent;
while (parentEl!=null){
totaloffset=(offsettype=="left")? totaloffset+parentEl.offsetLeft : totaloffset+parentEl.offsetTop;
parentEl=parentEl.offsetParent;
}
return totaloffset;
}


function showhide(obj, e, visible, hidden, menuwidth){
if (ie4||ns6)
dropmenuobj.style.left=dropmenuobj.style.top="-500px"
if (menuwidth!=""){
dropmenuobj.widthobj=dropmenuobj.style
dropmenuobj.widthobj.width=menuwidth
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover")
obj.visibility=visible
else if (e.type=="click")
obj.visibility=hidden
}

function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge(obj, whichedge){
var edgeoffset=0
if (whichedge=="rightedge"){
var windowedge=ie4 && !window.opera? iecompattest().scrollLeft+iecompattest().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj.contentmeasure=dropmenuobj.offsetWidth
if (windowedge-dropmenuobj.x < dropmenuobj.contentmeasure)
edgeoffset=dropmenuobj.contentmeasure-obj.offsetWidth
}
else{
var topedge=ie4 && !window.opera? iecompattest().scrollTop : window.pageYOffset
var windowedge=ie4 && !window.opera? iecompattest().scrollTop+iecompattest().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj.contentmeasure=dropmenuobj.offsetHeight
if (windowedge-dropmenuobj.y < dropmenuobj.contentmeasure){ //move up?
edgeoffset=dropmenuobj.contentmeasure+obj.offsetHeight
if ((dropmenuobj.y-topedge)<dropmenuobj.contentmeasure) //up no good either?
edgeoffset=dropmenuobj.y+obj.offsetHeight-topedge
}
}
return edgeoffset
}

function populatemenu(what){
if (ie4||ns6)
dropmenuobj.innerHTML=what.join("")
}


function dropdownmenu(obj, e, menucontents, menuwidth){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu()
dropmenuobj=document.getElementById? document.getElementById("dropmenudiv") : dropmenudiv
populatemenu(menucontents)

if (ie4||ns6){
showhide(dropmenuobj.style, e, "visible", "hidden", menuwidth)
dropmenuobj.x=getposOffset(obj, "left")
dropmenuobj.y=getposOffset(obj, "top")
dropmenuobj.style.left=dropmenuobj.x-clearbrowseredge(obj, "rightedge")+"px"
dropmenuobj.style.top=dropmenuobj.y-clearbrowseredge(obj, "bottomedge")+obj.offsetHeight+"px"
}

return clickreturnvalue()
}

function clickreturnvalue(){
if (ie4||ns6) return false
else return true
}

function contains_ns6(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide(e){
if (ie4&&!dropmenuobj.contains(e.toElement))
delayhidemenu()
else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
delayhidemenu()
}

function hidemenu(e){
if (typeof dropmenuobj!="undefined"){
if (ie4||ns6)
dropmenuobj.style.visibility="hidden"
}
}

function delayhidemenu(){
if (ie4||ns6)
delayhide=setTimeout("hidemenu()",disappeardelay)
}

function clearhidemenu(){
if (typeof delayhide!="undefined")
clearTimeout(delayhide)
}

if (hidemenu_onclick=="yes")
document.onclick=hidemenu

</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/edu.css">
<title>e-Edge Education Center</title>
<link rel="icon" href="images/book1.jpg">

<script type="text/javascript" language="JavaScript1.2" src="jsc/scrolimage.js"></script>

<script language="JavaScript">
var repeat=1 //enter 0 to not repeat scrolling after 1 run, othersise, enter 1
var title_1=document.title
var leng=title_1.length
var start=1
function titlemove() {
  titl=title_1.substring(start, leng) + title_1.substring(0, start)
  document.title=titl
  start++
  if (start==leng+1) {
    start=0
    if (repeat==0)
    return
  }
  setTimeout("titlemove()",140)
}
if (document.title)
titlemove()
</script>

<style type="text/css">
<!--
BODY {scrollbar-face-color: #FF99CC}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

</head>
<body onload="startDate()" bgcolor="#EEEEFF">
<TABLE border="0" cellpadding="0" cellspacing="0" width="100%" align="center" bgcolor="#EEEEFF" height="100%" valign="top">
<TR valign='top'><TD>

<table border="0" cellpadding="0" cellspacing="0" width="98%" align="center" bgcolor="#F2F2F2" >
<tr>
 <td colspan=3>
 <table border="0" width=100% cellpadding="0" cellspacing="0"><tr bgcolor="F5FFF5"><td width=70% align=left><p>&nbsp;&nbsp;
 <font style="color:#990000; font-family:sans-serif; font-size:19px;">e-<font style="color:#00aa00; font-family:sans-serif; font-size:15px;">Edge 
 <font style="color:#0000aa; font-family:sans-serif; font-size:15px;">Education
 <font style="color:#ff8844; font-family:sans-serif; font-size:15px;">Classes </font></p>
 </td>

<td width="15%" align=right><script type="text/javascript">
<!--
  // change_it();
//-->
</script></td>
</tr></table>
</td>
</tr>
<!-- top menu row -->
 <tr> <td colspan=3> 
	<script type="text/javascript" language="JavaScript1.2" src="jsc/topmenu.js"></script>
  </td>
 </tr>
<!-- date row -->
<tr>	<td bgcolor="#ffffee" align="left" valign="bottom" width="17%">
				<?php include 'date.php'; ?>
				<script type="text/javascript">
				var d= "<?= $phpVard ?>" ;
				var mm= "<?= $phpVarmm ?>";
				var j= "<?= $phpVarj ?>";
				var y= "<?= $phpVary ?>";
				function startDate(){
					document.getElementById('date').innerHTML=d+" "+mm+" "+j+" "+y
				}
				</script>
	<font color="#444444" size="2"><center><b><div id="date"></div></b></center></font>  
	</td>
	<td bgcolor="#fff0EE" align="left" valign="bottom" width="83%">
	  <marquee scrollamount=2><font style="color:#007000; font-family:sans-serif;"> Teaching is an art, in this process it covers <font style="color:#880000; font-family:sans-serif;"> learning, <font style="color:#888800; font-family:sans-serif;">applying, <font style="color:#990099; font-family:sans-serif;">understanding,<font style="color:#000099; font-family:sans-serif;"> experiencing, <font style="color:#cc7722; font-family:sans-serif;">sharing of knowledge.</marquee></font>
	 </td>
	</tr>

	
<!-- left menu + data row -->
 <tr>
<!-- left menu column-->
  <td valign='top' width=17% bgcolor="#C9DDEA"  height="430"><script type="text/javascript" language="JavaScript1.2" src="jsc/leftmenu.js"></script>
  </td>

<!-- data column  -->
  <td>
 <!-- make the changes from here  -->
    <table border="0" cellpadding="0" cellspacing="0"  background="images/physics.jpg" width="73%" height="100%" bgcolor=#F0FFF0 align=center>
     <tr><td colspan="2" height=330 valign="top">
		<p class="heading"><strong><font size="5">
		<a href="default.htm" onClick="return clickreturnvalue()" onMouseover="dropdownmenu(this, event, menu1, '150px')" onMouseout="delayhidemenu()">Physics Classes</a> 

 
	    
		<br><br><br><font size="4" font color="#ff6699">Hydrodynamics - 11`th class continue....</font>.<br>
	<font size="5" font color="#4AA02C">*</font><font size="4" font color="#ff6699">Fresh Batch of class 11`th ,12`th will start from <br> &nbsp;&nbsp;02/07/07.</font><br>
	<font size="5" font color="#4AA02C">*</font>		
	<font size="4" font color="#ff6699">Seperate Batches for those students who have <br>&nbsp;&nbsp;obtained 90% marks in class 10`th Board Exams.</font><br>
	<font size="5" font color="#4AA02C">*</font><font size="4" font color="#ff6699">Scholarship upto 50%.</font></strong>

 
<br><br><br>
   		 </td>



  	</tr>
 	</table>
<br><br><br>
 <!--up to here make the changes -->
 </td>
 </tr>
<!-- bottom menu row -->
 <tr  class="ftr"><td width="17%" height="15" > &nbsp;</td> <td colspan=2 > 
	<script type="text/javascript" language="JavaScript1.2" src="jsc/footer.js"></script>
  </td>
 </tr>
</table>



</TD></TR></TABLE>
</body>
</html>
<!--http://gintheartist.smugmug.com/keyword/stationary/1/17955944-->
