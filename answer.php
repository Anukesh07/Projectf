<?php
$con= mysqli_connect('localhost','root','') or die(mysql_error()) ;
mysqli_select_db($con,'demo1') or die("cannot select DB");
if(!$con)
{
	echo'connection error:'.mysqli_connect_error() ;
}
session_start() ;
$vv= $_SESSION['submit'] ;
$email= $_SESSION['sess_user'] ;
$vv=$vv+0 ;
$sql = 'select * from ans where question_id='.$vv ;
$result = mysqli_query($con, $sql) ;
$queses = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
mysqli_free_result($result) ;
$mysqli = new mysqli('localhost','root','','demo1') ;
if(isset($_GET['post1']))
{
    $question=mysqli_real_escape_string($con,$_POST['question']) ;
	$_SESSION['question']=$question ;
	$x=rand() ;
    $sql="Insert into ans (question_id,answer_id,email,answers) values('$vv','$x','$email','$question')" ;
    $x=$x+1 ;
    if(mysqli_query($con,$sql))
    {
		echo 'successfully submitted : let\'s wait for the answers !' ;
		header('Location:answer.php') ;

    }
    else
    {
        echo 'error:'.mysqli_error($con) ;
    }
}
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> QUEStions </title>
</head>
<style @import url('https://fonts.googleapis.com/css?family=Audiowide&display=swap');>

	.animation-area
	{
  		background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB, #E74C3C, #8E44AD);
  		background-size: 600%;
		background-repeat:no-repeat ;
  		position: relative;
  		animation: change 13s ease-in-out infinite;

	}

	@keyframes change
	{
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
    .rt{
	float:right;
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

	#navbar .sign
	{
		float :right ;
	}

	.fontt
	{
          font-family: 'Audiowide', cursive;
          color: #03f4eb;
	}

	.pos
	{
		position:absolute ;
		top:1px ;
		left:170px ;
	}

	.boxx
	{
		box-shadow: 5px 5px #666;
		margin-top:40px ;
		margin-left:300px ;
		background:rgba(0,0,0,0.35) ;
		background-image:url(".jpg") ;
		background-position: center;
		padding:10px ;
		text-align:center ;
		width: 60% ;
		border-radius:10% ;
	}


	::placeholder
	{
		color:black ;
	}

	button
	{
  		background-color:#0047b3;;
  		color:black;
		font-size:20 ;
  		padding: 20px;
  		border-radius: 25px;
  		cursor: pointer;
  		width:30%;
  		opacity: 0.9;
	}

	button:hover
	{
		outline: none;
  		opacity: 1;
		outline: none;
	}
	button:active
	{
		outline: none;
  		background-color: #001a66;
  		box-shadow: 0 5px #666;
  		transform: translateY(4px);
	}

	.me
	{
  		padding: 10px;
		  font-size: 20px;
  		width: 20px;
  		text-align: center;
  		text-decoration: none;
  		margin: 5px 2px;
	}
	.me:hover
	{
    		opacity: 0.7;
	}
 	.right
	{
  		float: right;
	}
	::placeholder
	{
		font-style:italic;
  		color: #191966;
  		font-size: 25px;

	}
	textarea
	{
		background:rgba(255, 255, 179,0.3) ;
		outline:none ;
  		width: 80%;
  		padding: 12px 20px;
  		margin: 8px 0;
  		display: inline-block;
  		border-radius: 40px;
		font-size: 19px;
	}
	#put
	{
  		background-color:#0047b3;;
  		color:black;
		font-size:20 ;
  		padding: 20px;
  		border-radius: 25px;
  		cursor: pointer;
  		width:30%;
  		opacity: 0.9;
	}

	#put:hover
	{
			outline: none;
  		opacity: 1;
		outline: none;
	}
.buttonn {
	background-color: green;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 1px 1px;
	cursor: pointer;
	-webkit-transition-duration: 0.4s;
	transition-duration: 0.4s;
  }
  .buttonn:hover {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  }

  #navbar button.sign                                        /* changes mainly in name and colour */
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
</style>
<body>
<a style="text-decoration:none;"href="Profile.php"><h1 class="fontt">XCH<span style="color:red;">ange</span><i class="fa fa-paper-plane" aria-hidden="true"></i></h1></a>
<div id="navbar">
<a href="Profile.php"><i class="fa fa-user"></i>&nbspHome</a>
<a href="questions.php"><i class="fa fa-question"></i>ASK&nbsp</a>
<a class="active" href="allques.php">Questions&nbsp<i class="fa fa-question"></i></a>
<a href="about.php">About Us&nbsp<i class="fa fa-address-book"></i></a>
<div class='rt'>	<a href="logout.php" class="button">Logout</a>
</div>
</div>
<?php
$sql4 = 'select questions from ques where question_id='.$vv ;
$result = mysqli_query($con, $sql4) ;
$queses4 = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
foreach ($queses4 as $value3) {
	// code...
	?><h1 style="text-align: center"><?php echo $value3['questions'];?></h1><?php
}
?>
<?php foreach($queses as $ques)
{?>
	<div class="boxx">
    <h4 style="color:#ffccff; font-size:25px ;"><i>Answered by :- </i>    <?php echo htmlspecialchars($ques['email']) ;?></h4>
    <h4 style="font-size:15px ;font-family:Comic Sans MS, cursive, sans-serif;color:#ffffe6 ;"> <?php echo htmlspecialchars($ques['answers']) ;?></h4>
	</div>
<?php } ?>

<div class="boxx">
<h1 style="color:#000080 ;font-size:100px;margin-bottom:10px ;margin-top:10px ;display:inline ;">  A  </h1>
<h1 style="color:#000080 ;font-size:100px;margin-bottom:10px ;margin-top:10px ;display:inline ;">  N  </h1>
<h1 style="color:#000080 ;font-size:100px;margin-bottom:10px ;margin-top:10px ;display:inline ;">  S  </h1>
<h1 style="color:#990000 ;font-size:100px;margin-bottom:10px ;margin-top:10px ;display:inline ;">  W  </h1>
<h1 style="color:#990000 ;font-size:100px;margin-bottom:10px ;margin-top:10px ;display:inline ;">  E  </h1>
<h1 style="color:#990000 ;font-size:100px;margin-bottom:10px ;margin-top:10px ;display:inline ;">  R  </h1>
<br>
<form  action="answer.php" method="post" enctype="multipart/form-data" autocomplete="off" >
 <textarea id="place" placeholder="write your answer here" style="padding:100px ;" name="question" required ></textarea>   <br><br>
 <input id="put" type="submit"  value="POST" name="post1" />
</form>
<form action="" method="post">
<input id="put" type="submit"  value="Mark Solved" name="post2" />
</form>
<?php
$vv= $_SESSION['submit'] ;
$email= $_SESSION['sess_user'] ;
$vv=$vv+0 ;
$sql456 = "SELECT * FROM ques WHERE email='".$email."' AND question_id=".$vv ;
$result456 = mysqli_query($con, $sql456) ;
if($queses456 = mysqli_fetch_all($result456, MYSQLI_ASSOC)) {
	if(isset($_POST["post2"])){
		$con=mysqli_connect('localhost','root','') or die(mysql_error());
		mysqli_select_db($con,'demo1') or die("cannot select DB");

		$query456=mysqli_query($con,"UPDATE ques SET flag=1 WHERE question_id =".$vv);
		if($query456){
			echo 'success';
		}
		else{
			echo 'unsucess';
		}
	}
}
else {
	echo 'not your question';
}
?>
</div>

<br><br>
<footer>
  <a href="#" class="fa fa-facebook me"></a>
  <a href="#" class="fa fa-linkedin me"></a>
  <a href="#" class="fa fa-instagram me"></a>
  <a href="#" class="fa fa-reddit me"></a>
  <a href="#" class="fa fa-youtube me"></a>
  <span style="color:white;"class="right">&copy; Copyright 2019 XCHange Corporation &#174;<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Partnered with Stack Overflow&trade;</span>

</footer>

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
}

function required()
{
	var ques = document.getElementById("place").value ;
	if(ques.length==0)
	{
		alert("first write your doubt") ;
		return false ;
	}
}
document.getElementById("prof").style.display="none";
function on() {
  document.getElementById("prof").style.display="block";
}
function off() {
	document.getElementById("prof").style.display="none";
}

</script>
</body>
</style>
</html>