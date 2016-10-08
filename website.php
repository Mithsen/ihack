<!DOCTYPE html>
<html lang="en">
<head>
  <title>O+ blood</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta name="Content-Script-Type" content="text/javascript">
  <meta name="Content-Style-Type" content="text/css">
  <link rel="stylesheet" href="bojq/bootstrap.min.css">
  <script src="bojq/jquery-3.1.0.min.js"></script>
  <script src="bojq/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 500px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;

      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #005aff;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
    * {
        color: #f5f5f5;
        box-sizing: border-box;
    }
  p {
      font-size: large;
      margin: 0 0 10px;
  }
    .button {
  padding: 15px 50px;
  font-size: 16px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #0374FB     ;
  border: 5px;
  border-radius: 10px;
  box-shadow: 2px 9px #1A43C5  ;
}

.buttonf  {
padding: 5px 5px;
font-size: 18px;
line-height: 1.3333333;
border-radius: 6px;
}

.button:hover {
    background-color: #c11919;
}
.button {
    padding: 15px 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: #fff;
    background-color: #f30000;
    border: 5px;
    border-radius: 1px;
    box-shadow: 2px 9px #bd0803;
}

.button1 {
    padding: 15px 90px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: #fff;
    background-color: #f30000;
    border: 5px;
    border-radius: 10px;
    box-shadow: 2px 9px #bd0803;
}


* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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



.active {
  background-color: #217171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 4s;
}

@-webkit-keyframes fade {
  from {opacity: .6}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .8}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
  </style>
</head>


</body>

<nav class="navbar navbar-inverse">

      <div>
      <img src="blood.jpg" style="width:100%">
      </div>

      <video hidden width="320" height="240" autoplay loop>
            <source src="videos/vd.webm" type="video/webm" />
      </video>

</nav>

<body background="back2.jpg" width="100%">



<div class="container-fluid text-center">
  <div class="col-sm-12 sidenav">
      <button class="button" onclick="window.location.href='new.html'">HOME</button>
      <button class="button" onclick="window.location.href='trix.html'">EVENTS</button>
      <button class="button" onclick="window.location.href='selflesson.html'">INSTRUCTION</button>
      <button class="button" onclick="window.location.href='gametrailers.html'">BLOOD DONATION</button>
      <button class="button" onclick="window.location.href='register.php'">REGISTER</button>
      <button class="button" onclick="window.location.href='login.php'">LOGIN</button>

  </div>

  <div class="row content" >
    <div class="col-sm-3 sidenav">
      <div class="container-fluid text-center">
        <div class="col-sm-12 sidenav">
         
          <button class="button1" onclick="window.location.href='wisheshanga.html'">HOME</button></br>
          <br><button class="button1" onclick="window.location.href='wisheshanga.html'">HOME</button></br>
          <br><button class="button1" onclick="window.location.href='wisheshanga.html'">HOME</button></br>
          <br><button class="button1" onclick="window.location.href='wisheshanga.html'">HOME</button></br>
          <br><button class="button1" onclick="window.location.href='wisheshanga.html'">HOME</button>
          
        </div>
      </div>

    </div>
    <div class="col-sm-6 sidenav" >

      <script type="text/javascript" >
      document.write ('<p>ආයුබෝවන්: <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
      if (document.getElementById) onload = function () {
      	setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
      }
      </script>

      <div class="slideshow-container" >
          <div class="mySlides fade" align="center">
          <img src="images/b2.jpg" style="width:580px" >
          </div>

          <div class="mySlides fade" align="center">
          <img src="images/bn1.jpg" style="width:580px">
          </div>

          <div class="mySlides fade" align="center">
          <img src="images/bn2.jpg" style="width:580px">
          </div>

          <div class="mySlides fade" align="center">
          <img src="images/b1.jpg" style="width:580px">
          </div>
          
          <div>
          </div>
      </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex> slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
      }
      </script>

    </div>
    <div class="col-sm-3 sidenav" >
      <img src="a.jpg"  >
    </div>
  </div>
  <div class="col-sm-12 sidenav">
      <img src="bot.jpg" style="width:100%">
  </div>
</div>

  <br></br>
  <div>
  <img src="foot.jpg" style="width:100%">
  </div>

</body>


</html>
