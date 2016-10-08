
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
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
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
	
    
    <div class="login-page">
<div class="form">
    <form class="register-form">
      <input type="text" placeholder="name" id="user" name="user"/>
      <input type="password" placeholder="password" id="pass" name="pass" />
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username" id="user" name="user"/>
      <input type="password" placeholder="password" id="pass" name="pass" />
      <input type="submit" id="btn1" value="LOGIN"/>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
	
</body>




  <br></br>
  <div>
  <img src="foot.jpg" style="width:100%">
  </div>

</body>


</html>
