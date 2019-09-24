<!doctype html>
<html>
<head>
<style>
h1{
color:white;}

body {
  color:white;
	background-color: black ;
}

h4{
  font-size: 20pt;
}

p{
  font-family: cursive;
  font-size: 15pt;
}
</style>
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
<a href="https://threejs.org/examples/?q=youtube#css3d_youtube"><title>India and Technology</title>
</head>


<body onload="startTime()">
<div id="txt"
style="position: absolute;
padding: 20px;
margin: auto;
font-size: 15pt;
color:white"
></div>
  <div class="logo">

  <div class="logo">
  <h1 align="center" >The World of Technology</h1>
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


<div class="data">
  <h4>HOW COMPUTERS EVOLVED IN INDIA?</h4>
  <p>
 The development of computing in India is inextricably intertwined with two interacting forces; the political climate and the government policies, mainly driven by the technocrats and bureaucrats.Jawaharlal Nehru had great faith in science and technology as engines of economic growth.

  <h4>DURING 1960's</h4>
  <p>
  During the 1960s, computers were not considered a priority area that deserved foreign exchange outflow. IBM and the British Tabulating Machines were already selling mechanical accounting machines in India. Because importing computers using foreign exchange was difficult, IBM and ICL applied for licenses to manufacture computers in India.</p>
  <figure align="center">
    <img src="images/jnu.jpg" width="28%" align="center">
    <figcaption>PM Nehru With Computer in 1958</figcaption>
  </figure>
  <h4>DURING 1980's</h4>
  <p>
   A liberalized policy on minicomputers was announced in 1984 as soon as Rajiv Gandhi became the Prime Minister. It allowed private sector companies to manufacture 32-bit machines, removed constraints on the number of computers a company could manufacture, allowed assembled boards with microprocessors and interface electronics to be imported along with application software, and reduced import duty. The computerisation of the Indian Railways seat reservation system began in 1984 and was completed in 1986. The entire software effort was by done by Indian programmers with no “foreign consultants.” The reservation system using computers was an eye opener to the general public -- it demonstrated the advantages of using computers.</p>
  <h4>AFTER 2000's</h4>
   Digital India Programme being launched by Government of India and its being
  supported by millions. It is clearly evident that computers are now an inseparable part of our lives.
  Computers are undoubtedly the enormously powerful tools required to drive the Indian Development Engine at top speed. Additionally, with Digital India Programme being launched by Government <img src="digi.jpg" caption="Digital India">

  <h4>IMPORTANT PHASES OF COMPUTERS IN INDIA</h4>
  <ul type="disc">
    <li>1953: First Indian Analog Computer
    <li> 1955: HEC-2M ‘Hollerith Electronic Computer (model 2M)’ was the first electronic digital computer of India.
    <li> 1959: URAL-1
    <li>Second electronic digital computer bought in 1959 from Russia.
    <li>1960: TIFRAC
    <li>1991: PARAM 8000
    <li>PARAM Yuva-ll was the ninth supercomputer unveiled under the PARAM series in 2013.
  </ul>


  <h4>GROWTH OF IT SECTOR BY COMPUTERS</h4>
  <p>
  The Information Technology and Information Technology Enabled Services (IT-ITeS) sector is a field which is undergoing rapid
  evolution and is changing the shape of Indian business standards. This sector includes software development,
  consultancies, software management, online services and business process outsourcing (BPO).

  India's IT industry is expected to grow at a rate of 12-14 percent during 2016 - 2017 as per a report by India's software experts.industry body National Association of Software and Services Companies (NASSCOM.) This clearly shows that information
technology is a sector which will likely be one of the emerging markets in the days to come as India's economy requires.\paragraph{Indian software companies. Earnings from exports, which were around US \$ 128 million during 1990 1991 went up to around US \$1.76 billion in 1997 1998, an average growth of 45 percent each year. Indian software companies invented what is known as the global delivery model (GDM) and the 24- hour workday for the IT industry. </p>
<figure><center>
  <img align="center" width="40%" src="images/download.jpg">
  <figcaption>IT Companies</figcaption></figure>
</center>

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
