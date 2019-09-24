<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css"  href="css.css">
<link rel="shortcut icon" href="images/home.jpg">

<script src="jvscript.js"></script>

<style>

.containera{
    position: relative;
    width: 49.8%;
    float: left;
    margin: 0.1%;
}

.container {
    position: relative;
    width: 33%;
    float: left;
    margin: 0.1%;
}

.image {
  opacity: 1;
  display: inline;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
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


.text {
  background-image: url(images/img.jpg);
  background-color: blue;
  background-size: 100% 100%;
  text-underline-position: left;
  color: white;
  font-family: cursive;
  font-size: 16pt;
  padding: 16px 32px;
  text-align: center;
}

img{
  border-radius: 15pt;
}
.marquee {

  position: fixed;
  animation: marquee 2s linear infinite;
  text-align:center;
  color:#ffffff;
}
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


body {
		background:url(images/img.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position:center;
		background-size: 100% 100%;
}

li{
align:center;
}

h1{
color:white;
}

h3{
color:white;
}

p{
color: white;
font-size:30pt;
}
</style>
<title>
The World of Technology</title>
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
</head>

<body onload="startTime()">

<div id="txt"
	style="position: absolute;
	padding: 20px;
	margin: auto;
	font-size: 15pt;
  color:white"
	></div>

<div class="logo"><center>

  <h1 class="ml1">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <a href="https://threejs.org/examples/?q=sprite#css3d_sprites"><span class="letters">The World of Technology</span>
  </span>
</h1>

</div>
	<div class="table" style="width:100%;font-size:20px">
	<li class="sty" style="margin:0 2%;"><a href="Homepage.php">Home</a></li>
	<li class="sty" style="margin:0 2%;"><a href="future.php">Future of Technology</a></li>
	<li class="sty" style="margin:0 2%;"><a href="india.php">India & Technology</a></li>
	<li class="sty" style="margin:0 2%;"><a href="news.php"> News & Events</a></li>
	<li class="sty" style="margin:0 2%;"><a href="idea.php">Your Ideas</a></li>
	<li class="sty" style="margin:0 2%;"><a href="contact.php">Contact Us</a></li>
	</div>
<br>
<hr>
	<marquee behavior="scroll" direction="right" loop="infinite" scrollamount="15">
	<img src="images/92.jpg" width="390" height="260" />
	<img src="images/93.jpg" width="390" height="260" />
	<img src="images/94.jpg" width="390" height="260" />
	<img src="images/95.jpg" width="390" height="260" />
	<img src="images/96.jpg" width="390" height="260" />
	<img src="images/97.jpg" width="390" height="260" />
	<img src="images/98.jpg" width="390" height="260" />
	<img src="images/99.jpg" width="390" height="260" />
	<img src="images/100.jpg" width="390" height="260" />
	<img src="images/101.jpg" width="390" height="260" />
	<img src="images/102.jpg" width="390" height="260" />
	<img src="images/103.jpg" width="390" height="260" />
	<img src="images/104.jpg" width="390" height="260" />
	<img src="images/105.jpg" width="390" height="260" />
	<img src="images/106.jpg" width="390" height="260" />
	<img src="images/107.jpg" width="390" height="260" />
	</marquee>
<hr>

<div class="container">
  <img src="images/idea.jpg" class="image" style="width:100%">
  <div class="middle">
    <a href="idea.php"><div class="text">Got an Idea<br> click here<br> and share it with us</div><a/>
  </div>
</div>

<div class="container">
  <img src="images/problem.jpg" class="image" style="width:100%">
  <div class="middle">
    <a href="idea.php"><div class="text">Got a Tech Problem<br>or you believe Technology can solve it?<br>Click here</div><a/>
  </div>
</div>

<div class="container">
  <img src="images/new.png" class="image" style="width:100%">
  <div class="middle">
    <a href="news.php"><div class="text">Checkout The Latest</div><a/>
  </div>
</div>


<div class="containera" size="100">
  <img src="images/future.png" class="image" style="width:100%">
  <div class="middle">
    <a href="future.php"><div class="text">Wanna see the future?</div><a/>
  </div>
</div>


<div class="containera">
  <img src="images/5.jpg" class="image" style="width:100%">
  <div class="middle">
    <a href="india.php"><div class="text">Lets see the Progress of India</div><a/>
  </div>
</div>

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
