<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_blue_trees - another page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  
  <style>
table {
  border-collapse: collapse;
  width: 50%;
  
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #362C20;
  color: white;
  
  
</style>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Library <span class="logo_colour">Management Syestem</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.html">Home</a></li>
          <li><a href="userlogin.php">User Login</a></li>
          <li><a href="adminlogin.php">Admin Login</a></li>
          <li class="selected"><a href="view.php">Book List</a></li>
          
        </ul>
      </div>
    </div>
	
	<h1 style="color:#00C6F0;text-align:center; font-size:30px;"><b>Book List</h1>
	<?php

$con1=mysqli_connect("localhost","root","","dblibrary");
$sql="SELECT * FROM `tbbook`";

$data=mysqli_query($con1,$sql);

	
	
    echo"<table>
  <tr>
    <th>Book Name</th>
    <th>Writter Name</th>
	 <th>department</th>
    <th>Book</th>
  </tr>";
  while($row=mysqli_fetch_array($data))
  {
	echo"<tr>
    <td>$row[name]</td>
    <td>$row[writer]</td>
    <td>$row[department]</td>
	<td>$row[file]<br>
	<a href=download.php?name=$row[name]>Download</a>
	</td>
  </tr>";
  }
  
 echo "</table>";
 
 ?>
 

    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_blue_trees | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
  </div>
</body>
</html>
