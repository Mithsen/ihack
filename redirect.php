<!DOCTYPE html>
<html lang="en">

<head>
  <title>O+ blood</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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


<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="frm" align="center">
		<form action="pdfgen.php" method="POST" >
			<p>
				<label>Username </label>
				<input type="text" id="user" name="user" />
			</p>
			<p>
				<label>Password </label>
				<input type="password" id="pass" name="pass" />
			</p>
			<p > 
				<input type="submit" id="btn1" value="LOGIN" />
			</p>
		</form>
	</div>
	
</body>




  <br></br>
  <div>
  <img src="foot.jpg" style="width:100%">
  </div>

</body>


</html>
