<!doctype html>
<html>
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
<link rel="stylesheet" type="text/css"  href="css.css">
<link rel="shortcut icon" href="images/home.jpg">
<style>

body{

background-image: url(images/c1.jpg);
background-position: center;
background-size: cover;

}

a:link {
    color:blue;
}

a:visited {
    color:black;
}

a:hover {
    color: yellow;
}

a:active {
    color: yellow;

li{
  background-color: white;
 }

</style>

<title>Contact us</title></head>


<body onload="startTime()">
  <div id="txt"
	style="position: absolute;
	padding: 20px;
	margin: auto;
	font-size: 15pt;"
	></div>
  <div class="logo"><a href="https://threejs.org/examples/?q=post#webgl_postprocessing_backgrounds">
  <h1 align="center" >The World of Technology</h1></a>
  <div class="table"
  style="
	margin: auto;
align : center;
	">
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
<br>
<h3 align="justify">
Address: <br>RGPV Boys Hostel,
UIT RGPV,
Airport Road,
Bhopal,
Madhya Pradesh(462003)
<br>
Contact Number : +91-8898363982,0755-7373388
<br>
email id:<a href="mailto:theitworld@gmail.com"> theitworld@gmail.com</a>
<br>
<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14656.807597708434!2d77.3533891234926!3d23.308432306942734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c663c3b5e410f%3A0x9fb873d56c2c8593!2sRgpv+Boys+Hostel!5e0!3m2!1sen!2sin!4v1510118104859" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</center>
</h3>


<footer
style="position: absolute;
    top: 30px;
		right:10px;
    width: 280px;
    height: 40px;">
<div id="bottom"><table><tr style="color:black;">
<td>follow us&nbsp</td>
<td><a href="https://www.facebook.com/"><img src="images/if_social_facebook_box_white_60824.png" height="30px" width="30px"></a></td>
<td><a href="https://www.twitter.com/"><img src="images/if_social_twitter_box_white_60858.png" height="30px" width="30px"></a></td>
<td><a href="https://www.youtube.com/"><img src="images/if_Youtube_381369.png" height="30px" width="30px"></a></td>
<td><a href="https://www.instagram.com/"><img src="images/if_Instagram_381384.png" height="30px" width="30px"></a></td>
</div>
</footer>

</body>
</html>
