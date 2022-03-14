<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome to Online Exam</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='text-center bg-danger'>Welcome to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table>';
   
		exit;
		

}


?>
<table width="100%" border="0">
  
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">Welcome to Online Exam by Brute Force </h1>
      <span class="style5"><img src="image/paathshala.jpg" width="129" height="100"><span class="style7"><img src="image/HLPBUTT2.JPG" width="50" height="50"><img src="image/BOOKPG.JPG" width="43" height="43"></span>        </span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#ff00ff">
<p align="left" class="style5">&nbsp;</p>
      <blockquote>
          <p align="left" class="style5"><span class="style7"> You need to login for the take the online exam.</span></p>
      </blockquote>
    </div></td>
    		<table align="center" border="0" WIDTH="50%" height="250">
			<h1 class="text-center bg-warning">LOGIN PAGE</h1>
		<form method="post" action="">
		<center>
		<img class="img-circle" src="image/1.jpg"  title="this is my profile pic" width="240px" height="160px" border="1" />
		</center>	<br>
	
				<tr>
					<th class="text-primary">LOGIN ID</th>
					<th>
					<input class="form-control"type="TEXT" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="10" size="25"  id="loginid2" name="loginid"/></tD>
				</th>
				<tr>
					<th class="text-primary">ENTER PASSWORD</th>
					<th><input class="form-control" type="password" name="pass" id="pass2"/></th>
					</tr>
					       <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
         <th></th>
				<th class="errors">
					<input class="btn btn-danger "type="submit" name="submit" id="submit" Value="Login"/>
				
        <a class="btn btn-success " href="signup.php">New user ? click here</a></th>
      </table>
      <div align="center">
        <a href="http://localhost/online_exam/admin/"><img src="images/admin.jpg" width="150" height="150">          </a>
        </div>
    </form></td>
  </tr>
</table>
<footer class="page-footer font-small stylish-color-dark pt-5">
  <div style="background-color: #66ffff;">
    <div class="container">
  <div class="footer-copyright text-center py-3">© 2020 Copyright by <br>
    <a href="https://web.facebook.com/ndcm">Md. Tanvir Ahmmed Rasel(19103095)</a><br>
    <a href="https://web.facebook.com/wizrehan">Md. Abu Raihan(18303059)</a><br>
    <a href="https://web.facebook.com/wizrehan">Sabiha Sultana(18203038)</a><br>
    <a href="https://web.facebook.com/wizrehan">Sahjahan Kabir Nayem(19103096)</a>
  </div>
</footer>
</body>
</html>
