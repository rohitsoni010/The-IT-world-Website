<!doctype html>
<html>
<head>

<link rel="stylesheet" type="text/css"  href="css.css">

<link rel="shortcut icon" href="images/home.jpg">
<head>
	<script>
	function startTime() {
	  var today = new Date();
	  var h = today.getHours();
	  var m = today.getMinutes();
	  var s = today.getSeconds();
	  m = checkTime(m);
	  s = checkTime(s);
	  document.getElementById('txt').innerHTML =
	  h + ":" + m + ":" + s;
	  var t = setTimeout(startTime, 500);
	}
	function checkTime(i) {
	  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
	  return i;
	}
	</script>

<style>
.a, .b {
width: 33.2%;
float: left;
margin: 0.1%;}
.c {margin-right: 0%;
float: right;
margin: 0.1%;
width:33%;
}
.d{
	float: left;
	margin:0.1%;
	width: 49.8%;}

.e{
	float: right;
	margin: 0.1%;
	width:49.8%;
}
.text {
  background-image: url(images/img.jpg);
  background-color: blue;
  background-size: 100% 100%;
  text-underline-position: left;
  color: white;
  font-family: cursive;
  font-size: 16pt;
  padding: 16px 32px;
  text-align: right;
}

img{
  border-radius: 15pt;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
}

.containera:hover .middle {
  opacity: 1;
}

.containera:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.containera{
    position: fix;
    width: 30%;
    float: right;
    margin: 0.1%;
}
	input[type="submit"]
	{
		margin-left:15%;
	}

	form{
		padding: 20px;
		margin: auto;
	}

	body {
		background:url(images/12.jpg);
	    background-repeat: no-repeat;
	    background-attachment: fixed;
	    background-position:center;
			background-size: 100% 100%;
	}

	li{
		color:yellow;
	}
	</style>

<title>Contact us</title></head>
<body onload="startTime()">

	<div id="txt"
	style="position: absolute;
	padding: 20px;
	margin: auto;
	font-size: 15pt;
	color: white;"
	></div>
	<div class="logo">
	<h1 align="center"><a href="https://threejs.org/examples/?q=glitch#webgl_postprocessing_glitch">The World of Technology</h1>
	<div class="table" style="width:100%;font-size:20px">
	<li class="sty" style="margin:0 2%;"><a href="Homepage.php">Home</a></li>
	<li class="sty" style="margin:0 2%;"><a href="future.php">Future of Technology</a></li>
	<li class="sty" style="margin:0 2%;"><a href="india.php">India & Technology</a></li>
	<li class="sty" style="margin:0 2%;"><a href="news.php"> News & Events</a></li>
	<li class="sty" style="margin:0 2%;"><a href="idea.php">Your Ideas</a></li>
	<li class="sty" style="margin:0 2%;"><a href="contact.php">Contact Us</a></li>
	</div>
	</div>
<br>


</div>
<div class="form"
style="
font-family:comic sans ms;
font-size:15pt;
">
<form action="form.php" method="post">
	<legend class="title"> Please Enter the Following Information</legend>
	<p>
		<label>Your Name :
			<input type="text" name="Name" size="35" required style="margin-left:50px;"></label> &nbsp&nbsp&nbsp
		<br/>
		<label>Email:
			<input type="email" name="email" size="35" style="margin-left:108px;"></label><br/>
		<label>Contact Number:
				<input type="number" name="contact" min="1000000" max="9999999999"size="35" style="margin-left:5px;"></label> <br/>
				<select name="select" value="select" style="padding:5px; margin-left:170px;">
					<option name="suggestion" value="Suggestion">Suggestion</option>
					<option value="Idea" >Idea</option>
					<option value="Daily life Problem">Daily Life Problem</option>
				</select><br/>
				<br/>
				<label> Comment Box: </label>
		<input style="padding:20px; width: 200px; height: 40px; margin-left: 30px;" required type="text" name="Comments" size="100">
	</p>

<input type="submit" value="Submit" />

</form></div>
<footer
	style="position: absolute;
    top: 30px;
		right:10px;
    width: 280px;
    height: 40px;">
<div id="bottom"><table>
	<td>follow us&nbsp</td>
	<td><a href="https://www.facebook.com/"><img src="images/if_social_facebook_box_white_60824.png" height="30px" width="30px"></a></td>
	<td><a href="https://www.twitter.com/"><img src="images/if_social_twitter_box_white_60858.png" height="30px" width="30px"></a></td>
	<td><a href="https://www.youtube.com/"><img src="images/if_Youtube_381369.png" height="30px" width="30px"></a></td>
	<td><a href="https://www.instagram.com/"><img src="images/if_Instagram_381384.png" height="30px" width="30px"></a></td>
</div>

</footer>
</body>
</html>
