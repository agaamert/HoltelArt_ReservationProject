<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8" />
    <meta name = "viewport" content = "width=device-width, initial-scale=1" />
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #F0CB9E;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #f6eaea;
  color: black;
}

.topnav a.active {
  background-color: #a52a2a;
  color: white;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

/* Slide show of hotel images */

img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto ;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

/* Photo album / grid design */
.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create equal columns that sits next to each other */
.column {
  -ms-flex: 24.5%; /* IE10 */
  flex: 24.5%;
  max-width: 24.5%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}

footer {
  text-align: right;
  padding: 20px;
  background-color: DarkSalmon;
  color: black;
  }


</style>
</head>
<body style="background-color:#ffffe1;">

<div class="topnav">
  <img src="images/LOGO/ma_logo1.png" style="float: left; margin-left: 20px;" >  
  <a style="float: right;" href="contact.php">Contact</a>
  <a style="float: right;" href="rooms_booking.php">Rooms</a>
  <a style="float: right;" class="active" href="index.php">Home</a> <!-- Activate Home button -->
</div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="images/home_slide/ma1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="images/home_slide/ma2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="images/home_slide/ma3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="images/home_slide/ma4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="images/home_slide/ma5.jpg" style="width:100%">
</div>


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<br />
<img src="/images/red_bar.png" class="center">
<h1 style="text-align: center;">HotelArt MAAK, 5 stars – Accommodation in Athens, Greece</h1>
<img src="/images/red_bar.png" class="center">

<p style="text-align: left; font-size: 17pt; padding-right: 200px ;padding-left: 200px;">
HotelArt MAAK offers 16 spacious and comfortable modern rooms spread across 4 floors, and terrace at 5th floor with a Akropoli view, all accessible by lift. The hotel is situated in a newly renovated building in the heart of the city, in the center of Athens, accross the Greek Parliament. 2 minutes far from the Syntagma Metro Station. The hotel is an ideal choice for those who are looking for affordable accommodation near and in the immediate center of the city.
<br /><br />
The prices include breakfast, wireless internet connection. Unfortunately the hotel has not its own parking, but on request we can reserve paid parking at a distance of 300m near in Monastiraki Square. Reception is open 7/24, our receptionists are ready to advise you or help with any problem 24 hours a day.
<br /><br />
In the hotel lobby you can relax on comfortable sofas and refresh with tea or coffee which is complimentary, you just have to help yourself. Computer with internet or wifi connection is also free of charge.</p>

<img src="/images/red_bar.png" class="center">
<br />

<!-- Photo album / grid -->
<div class="container">
  <div class="row"> 
    <div class="column">
      <img src="/images/rooms/1.jpg" style="width:100%">
      <img src="/images/rooms/2.jpg" style="width:100%">
      <img src="/images/rooms/3.jpg" style="width:100%">
      <img src="/images/rooms/4.jpg" style="width:100%">
      <img src="/images/rooms/5.jpg" style="width:100%">
      <img src="/images/rooms/6.jpg" style="width:100%">
    </div>

    <div class="column">
      <img src="/images/rooms/7.jpg" style="width:100%">
      <img src="/images/rooms/8.jpg" style="width:100%">
      <img src="/images/rooms/9.jpg" style="width:100%">
      <img src="/images/rooms/10.jpg" style="width:100%">
      <img src="/images/rooms/11.jpg" style="width:100%">
      <img src="/images/rooms/12.jpg" style="width:100%">
    </div>  

    <div class="column">
      <img src="/images/rooms/16.jpg" style="width:100%">
      <img src="/images/rooms/13.jpg" style="width:100%">
      <img src="/images/rooms/14.jpg" style="width:100%">
      <img src="/images/rooms/15.jpg" style="width:100%">
      <img src="/images/rooms/17.jpg" style="width:100%">
      <img src="/images/rooms/18.jpg" style="width:100%">
    </div>

    <div class="column">
      <img src="/images/rooms/5.jpg" style="width:100%">
      <img src="/images/rooms/4.jpg" style="width:100%">
      <img src="/images/rooms/6.jpg" style="width:100%">
      <img src="/images/rooms/3.jpg" style="width:100%">
      <img src="/images/rooms/2.jpg" style="width:100%">
      <img src="/images/rooms/1.jpg" style="width:100%">
    </div>
  </div>
</div>

<br />
<img src="/images/red_bar.png" class="center">
<h1 style="text-align: center; font-size: 35px;">HOTELART MAAK, A LUXURY COLLECTION HOTEL, ATHENS</h1>
<img src="/images/red_bar.png" class="center" style="width: 30%;">

<p style="text-align: left; font-size: 15pt; padding-right: 200px ;padding-left: 200px;">
The hotel is located in the center of services of any kind. There are restaurants, bars, clubs, specialty shops on various topics. You can jog or relax at the pleasant walk in National Garden, near of the Greek Parliament.

Metro Syntagma is 2 minutes away from the Hotel.
</p>

<p style="text-align: left; font-size: 15pt; padding-right: 200px ;padding-left: 200px;"><b>
<br />
Vasileos Georgiou A' str., 
<br />Syntagma Square, Athens, Greece, 105 64
<br /><br />
Toll Free: +30-210-12300031
<br />
Fax: +30 210-12300032
<br /><br />
</b></p>
</body>

<footer>
  <p>© 2022 Mert Aga. All rights reserved.</p>
</footer>

<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>