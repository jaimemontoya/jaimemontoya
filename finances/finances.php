<?php
  session_start();
  include '../../db.inc';
  if (!isset($_POST['uname']) && !isset($_POST['psw']) && !isset($_SESSION["user"])) {
    $finances->content .=
    "\t\t\t<div>
     \t\t\t<h1>Finances</h1>
     \t\t\t<button onclick=\"document.getElementById('loginform').style.display='block'\" class=\"widthauto\">Login</button>
     \t\t\t<div id=\"loginform\" class=\"modal\">
     \t\t\t\t<form class=\"modal-content animate\" action=\"\" method=\"post\">
     \t\t\t\t\t<div class=\"imgcontainer\">
     \t\t\t\t\t\t<span onclick=\"document.getElementById('loginform').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
     \t\t\t\t\t\t<div class=\"logo\">
     \t\t\t\t\t\t\t<a href=\"/\" title=\"Finances\">Finances</a>
     \t\t\t\t\t\t</div>
     \t\t\t\t\t</div>
     \t\t\t\t\t<div class=\"container\">
     \t\t\t\t\t\t<label for=\"uname\"><b>Username</b></label>
     \t\t\t\t\t\t<input type=\"text\" placeholder=\"Enter Username\" name=\"uname\" required>
     \t\t\t\t\t\t<label for=\"psw\"><b>Password</b></label>
     \t\t\t\t\t\t<input type=\"password\" placeholder=\"Enter Password\" name=\"psw\" required>
     \t\t\t\t\t\t<button type=\"submit\">Login</button>
     \t\t\t\t\t\t<label>
     \t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"remember\"> Remember me
     \t\t\t\t\t\t</label>
     \t\t\t\t\t</div>
     \t\t\t\t\t<div class=\"container\">
     \t\t\t\t\t\t<button type=\"button\" onclick=\"document.getElementById('loginform').style.display='none'\" class=\"cancelbtn\">Cancel</button>
     \t\t\t\t\t</div>
     \t\t\t\t</form>
     \t\t\t</div>
     \t\t\t<script>
     \t\t\tvar modal = document.getElementById('loginform');
     \t\t\twindow.onclick = function(event) {
     \t\t\t\tif (event.target == modal) {
     \t\t\t\t\tmodal.style.display = \"none\";
     \t\t\t\t}
     \t\t\t}
     \t\t\t</script>
     \t\t</div>\n";
  }
  $user = 'jaimemontoya';
  $pass = 'jaimemontoya.com';
  if (isset($_POST['uname']) && isset($_POST['psw']) || isset($_SESSION["user"])) {
    if (($_POST['uname'] == $user) && ($_POST['psw'] == $pass) || (isset($_SESSION["user"]))) {
      if (isset($_POST['rememberme'])) {
        setcookie('username', $_POST['username'], time()+60*60*24*365, '/finances', 'www.jaimemontoya.com');
        setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/finances', 'www.jaimemontoya.com');
      } else {
        setcookie('username', $_POST['username'], false, '/finances', 'www.jaimemontoya.com');
		setcookie('password', md5($_POST['password']), false, '/finances', 'www.jaimemontoya.com');
      }
      $_SESSION["user"] = "jaimemontoya";
      $finances->content .=
      "\t\t\t<h1>Finances</h1>
      \t\t<form action=\""."index.php"."\" method=\"GET\">
      \t\t\t<div>Date format 'Y-m-d', e.g. 2023-01-18</div>
      \t\t\t<div>Start date:</div>
	  \t\t\t<div><input type=\"text\" name=\"startDateKey\" value=\"".$_GET['startDateKey']."\"></div>
	  \t\t\t<div>End date:</div>
	  \t\t\t<div><input type=\"text\" name=\"endDateKey\" value=\"".$_GET['endDateKey']."\"></div>
	  \t\t\t<div>Select categories:</div>
	  \t\t\t<div>";
      $sqlGetCategories = "SELECT * FROM DimCategory ORDER BY CategoryName ASC;";
      $resultCategories = $conn->query($sqlGetCategories);
      if ($resultCategories->num_rows > 0) {
        while($row = $resultCategories->fetch_assoc()) {
          $finances->content .=
          "\t\t\t\t<input type=\"checkbox\" name=\"category[]\" value=\"".$row['CategoryID']."\" ";
          if (in_array($row['CategoryID'], $_GET['category'])) {
            $finances->content .=
			"checked";
		  }
          $finances->content .=
		  " />".$row['CategoryName']." ";
        }
      } else {
        $finances->content .=
        "0 categories";
      }
	  $finances->content .=
	  "\t\t\t</div>
      \t\t\t<div><input type=\"submit\" value=\"Submit\"></div>
      \t\t</form>\n";
    } else {
      $finances->content .=
	  "\t\t\t<a href=\"/finances\"><button class=\"widthauto\">Try again</button></a>
	  \t\t\t<div>Username/Password invalid.</div>";
    }
  } else {
    $finances->content .=
    "\t\t\tYou must supply a username and password.\n";
  }
?>