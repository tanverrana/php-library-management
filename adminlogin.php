<?php session_start() ?>

<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_blue_trees - examples</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
 <style>
 .nmph{
 margin-top:20px;
 display: flex;
justify-content: center;
 }
 .login-div {
  width:430px;
  height: 600px;
  padding: 60px 35px 35px 35px;
  border-radius: 40px;
  background: #ecf0f3;
  box-shadow: 13px 13px 20px #cbced1,
              -13px -13px 20px #ffffff;
}
 .logo {
  background:url("style/graphic.png");
  width:100px;
  height: 100px;
  border-radius: 50%;
  margin:0 auto;
  box-shadow: 
  /* logo shadow */
  0px 0px 2px #5f5f5f,
  /* offset */
  0px 0px 0px 5px #ecf0f3,
  /*bottom right */
  8px 8px 15px #a7aaaf,
  /* top left */
  -8px -8px 15px #ffffff
  ;
}
 .title {
  text-align: center;
  font-size: 28px;
  padding-top: 24px;
  letter-spacing: 0.5px;
}
.sub-title {
  text-align: center;
  font-size: 15px;
  padding-top: 7px;
  letter-spacing: 3px;
}

.fields {
  width: 100%;
  padding: 75px 5px 5px 5px;
}
.fields input {
  border: none;
  outline:none;
  background: none;
  font-size: 18px;
  color: #555;
  padding:20px 10px 20px 5px;
}
.username, .password {
  margin-bottom: 30px;
  border-radius: 25px;
  box-shadow: inset 8px 8px 8px #cbced1,
              inset -8px -8px 8px #ffffff;
}
.fields svg {
  height: 22px;
  margin:0 10px -3px 25px;
}
.signin-button {
  outline: none;
  border:none;
  cursor: pointer;
  width:100%;
  height: 60px;
  border-radius: 30px;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Lato', sans-serif;
  color:#fff;
  text-align: center;
  background: #24cfaa;
  box-shadow: 3px 3px 8px #b1b1b1,
              -3px -3px 8px #ffffff;
  transition: 0.5s;
}
.signin-button:hover {
  background:#2fdbb6;
}
.signin-button:active {
  background:#1da88a;
}
.link {
  padding-top: 20px;
  text-align: center;
}
.link a {
  text-decoration: none;
  color:#aaa;
  font-size: 15px;
}
 </style>
</head>

<body>





  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Libary<span class="logo_colour"> Management Syestem</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.html">Home</a></li>
          <li class="selected"><a href="adminlogin.php">Admin Login</a></li>
          <li><a href="userlogin.php">User Login</a></li>
          
        </ul>
      </div>
    </div>
	<div class="nmph">
   <div class="login-div">
  <div class="logo"></div>
  <div class="title">Admin Login</div>
  <div class="sub-title">BETA</div>
  <div class="fields">
  <form action="admin.php" method="post">
    <div class="username"><input type="username" class="user-input" placeholder="username" name="uname" required /></div>
    <div class="password"><input type="password" class="pass-input" placeholder="password" name="upass" required /></div>
  </div>
  <button class="signin-button">Login</button>
  </form>
  <?php 
if(isset ($_SESSION['uname']))
	
echo "Incorrect userid and Password";
	session_destroy();
?>

</div>
</div>
    <div id="site_content">
      
      <div id="content">
       
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_blue_trees | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
  </div>
</body>
</html>
