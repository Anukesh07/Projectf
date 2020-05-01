<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="C:/Users/Anukesh/Desktop/style11.css">
<link href='https://fonts.googleapis.com/css?family=Coda' rel='stylesheet'>
<link rel="icon" type="image/jpg" href="C:/Users/Anukesh/Downloads/logo2.jpg">
<title>
HOME
</title>
</head>
<style @import url('https://fonts.googleapis.com/css?family=Audiowide&display=swap');>
.animation-area
{
	background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB, #E74C3C, #8E44AD);
	background-size: 400%;
	width: 100%;
	position: relative;
	animation: change 13s ease-in-out infinite;  
	font-family: Arial, Helvetica, sans-serif;
	background-repeat: no-repeat;
}
@keyframes change{
	0%{
	  background-position: 0% 50%;
	}
	50%{
	  background-position: 100% 50%;
	}
	100%{
	  background-position: 0% 50%;
	}
  }
.p
  {
  text-align: center;
  width: 100%;
  margin: auto;
  }
.m
{
font-size: 600%;
color: gold;
text-align: center;
}
.card {
	background-color:white;
	box-shadow: 0 4px 8px 0 rgba(0 0.2), 0, 0,;
	max-width: 300px;
	margin: auto;
	text-align: center;
	font-family: arial;
	float: right;
	z-index: 2;
  }
.button {
	background-color: green;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	-webkit-transition-duration: 0.4s;
	transition-duration: 0.4s;
  }
  
  .button1:hover {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  }
  
  .button2:hover {
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }
.l{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	height: 200px;
	background-color: #d8f0e5;
	margin: auto;
	text-align: center;
}
.l1
{
	color: red;
	font-size: 300%;
	position: relative;
    animation-name: left;
    animation-duration: 7s;
}
.l2
{
	color: red;
	font-size: 300%;
	position: relative;
    animation-name: right;
    animation-duration: 7s;
}
@keyframes left {
	0%   {left:-1000px;}
	50%  {left:0px;}
}
@keyframes right {
	0%   {right:-1000px;}
	50%  {right:0px;}
}
h1
{
color: black;
}
p
{
color: black;
}
.fontt{
    font-family: 'Audiowide', cursive;
    color:blue;
  }
.pos
{
	position: absolute;
	top: 1px;
	left: 165px;
}
.c
{
text-align: center;
width: 50%;
height: 400px;
margin: auto;
font-family: coda;
}
.c0
{
text-align: center;
width: 50%;
height: 400px;
margin: auto;
font-family: coda;
}
.c1
{
 background-image:url("ise.png")  ;
 background-size:  100% 100%;
border-radius: 50%;
width: 300px;
height: 300px;
display: inline-block;
float: left;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.c2
{
    background-image:url("ece3.png")  ;
    background-size:  100% 100%;
border-radius: 50%;
width: 300px;
height: 300px;
display: inline-block;
float: right;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.c3 
{
    background-image:url("mechanical.webp")  ;
 background-size:  100% 100%;
    border-radius: 50%;
    transform: rotate(45deg);
width: 300px;
height: 300px;
display: inline-block;
float: left;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	
}
.c4
{
    background-image:url("computer.png")  ;
 background-size:  100% 100%;
    background-image:url("computer.png")  ;
    border-radius: 50%;
width: 300px;
height: 300px;
display: inline-block;
float: right;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	
}
.i
{
	text-align: center;
	font-size: 200%;
}
#navbar 
	{
		overflow: hidden;
		background-color: #333;  
	}
	#navbar a 
	{
  		float: left;
  		display: block;
  		color: #f2f2f2;
  		text-align: center;
  		padding: 14px 40px;
  		text-decoration: none;
  		font-size: 17px;
	}
	#navbar a:hover 
	{
  		background-color: #ddd;
  		color: black;
	}
	#navbar a.active 
	{
 		background-color:  #0047b3;
  		color: white;
	}
	
	#navbar button.sign
	{
		float: right;
		display: block;
		background-color:#333;
		border:none;
  		color:#f2f2f2;
  		text-align: center;
  		padding: 14px 40px;
  		text-decoration: none;
  		font-size: 17px;
	}
	#navbar button.sign:hover 
	{
  		background-color: #ddd;
  		color: black;
	}
	.sticky 
	{
  		position: fixed;
  		top: 0;
  		width: 100%;
	}
	.sticky + .content 
	{
  		padding-top: 60px;
	}
.me{
		padding: 10px;
		font-size: 20px;
		width: 20px;
		text-align: center;
		text-decoration: none;
		margin: 5px 2px;
	  }
.me:hover {
          opacity: 0.7;
}
.rt{
    float: right;
}
</style>
<body class="animation-area">
<a style="text-decoration:none;"href="Profile.php"><h1 class="fontt">XCH<span style="color:#03f4eb;">ange</span><i class="fa fa-paper-plane" aria-hidden="true"></i></h1></a>
<div id="navbar">
<a  href="Profile.php"><i class="fa fa-user"></i>&nbsp Profile</a>
   <a  href="questions.php"><i class="fa fa-question"></i>ASK</a>
   <a href="allques.php">Questions &nbsp<i class="fa fa-question"></i></a>
   <a  href="about.html"><i class="fa fa-address-book"></i>&nbsp About Us</a>
   <a class="active" href="teacher.php"><i class="fa fa-address-book"></i>&nbsp Teachers</a>
   <div class='rt'>	<a href="logout.php" class="buttton">Logout</a>
</div>
</div>

<pre>

</pre>
<div class="f">
<div class="c">

<div class="c1">
<a href="ISE.php">
<h1 align="center" style="color: white;" class="d1">
<br><br>ISE
</h1>
</a>
</div>
&nbsp

<div class="c2">
<a href="ECE.php" >
<br><br><br><br>
<h1 align="center" style="color: black; font-size:40px ;" class="d1">
ECE
</h1>
<p align="center" class="p1">
</p>
</a>
</div>
</div>
<br>
<div class="c0">
<div class="c3">
<a href="MECHANICAL.php">
    <br><br><br><br>
<h2 style="transform: rotate(-45deg);color: white;"align="center" class="d1">
<br>MECHANICAL
</h1>
<p align="center" class="p1">
</p>
</a>
</div>
&nbsp
<div class="c4">
<a href="CSE.php">
<h1 align="center" style="color:white;" class="d2">
<br><br>CSE
</h1>
</a>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="t">
<footer>
  <a href="#" class="fa fa-facebook me"></a>
  <a href="#" class="fa fa-linkedin me"></a>
  <a href="#" class="fa fa-instagram me"></a>
  <a href="#" class="fa fa-reddit me"></a>
  <a href="#" class="fa fa-youtube me"></a>
  <pre style="color:white;">&copy; Copyright 2019 XCHange Corporation&#174;
Partnered with Stack Overflow&trade;</pre>
</footer>
</div>
<script>
var navbar = document.getElementById("navbar") ;
var sticky = navbar.offsetTop ;
window.onscroll =  function(){myFunction()} ;
function myFunction()  
{
	if (window.pageYOffset >= sticky) 
	{
    		navbar.classList.add("sticky") ;
  	}
	else 
	{
    		navbar.classList.remove("sticky");
  	}
}       //from here
document.getElementById("prof").style.display="none";
function on() {                                            
  document.getElementById("prof").style.display="block";
}                                                       
function off() {
	document.getElementById("prof").style.display="none";
}     //till here
</script>
</body>
</html>