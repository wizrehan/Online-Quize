<?php
session_start();
?>
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
include("header.php");
include("database.php");
echo "<h1 class='text-center bg-danger'>Select Subject to Give Quiz</h1>";
$rs=mysqli_query($con,"select * from mst_subject");
echo "<table class='table table-striped'>";
while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>
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
