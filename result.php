<?php
session_start();
?>
<html>
<head>
<title>Online Quiz  - Result </title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_SESSION);
$rs=mysqli_query($con,"select t.test_name,t.total_que,r.test_date,r.score from mst_test t, mst_result r where
t.test_id=r.test_id and r.login='$login'",$cn) or die(mysqli_error());

echo "<h1 class=head1> Result </h1>";
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=style2><td width=300>Test Name <td> Total<br> Question <td> Score";
while($row=mysqli_fetch_row($rs))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[3]";
}
echo "</table>";

?>
<br><br><br><br><footer class="page-footer font-small stylish-color-dark pt-5">
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
