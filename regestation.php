<html>
<title > registation </title>
	<body style="background-color:powderblue;">
	<img src="pp.png" align ="left" width="200px" height="100px">
	<h2 style = "color:green" align="center" ><u>Welcome To Pet Shop</u> </h2>
	<br>
	
<h1 style = "color:black" align ="center "><u>Registation Form</u> </h1>
<br>
	<br>
<br>
<h3>Fillup The Following Requirement</h3>
<?php
$isPost=false;
$email="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$email=$_POST["uname"];
	//echo "button clicked!";
}
?>
<form action="#" method="post">
 Email : <input type="text" id="uname" name="uname">
<?php
if($isPost==true && $email=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>

<?php
$isPost=false;
$username="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked!";
}
?>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
<?php
$isPost=false;
$password="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["pass"]!="")
		$password=$_POST["pass"];
	//echo "button clicked!";
}
?>
<?php
$isPost=false;
$password="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["pass"]!="")
		$password=$_POST["pass"];
	//echo "button clicked!";
}
?>
<br>
<br>
<form action="#" method="post">
Password:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $password=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
<form action="#" method="post">
Confirm Password:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $password=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
<?php
$isPost=false;
$phnno="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$phnno=$_POST["phno"];
	//echo "button clicked!";
}
?>
<form action="#" method="post">
Phone No:<input type="text" id="phno" name="phno">
<?php
if($isPost==true && $phnno=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
<?php
$isPost=false;
$gender="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$gender=$_POST["uname"];
	//echo "button clicked!";
}
?>
<form action="#" method="post">
Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
if($isPost==true && $gender=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>

<br><br>
<?php
$isPost=false;
$skills="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$skills=$_POST["uname"];
	//echo "button clicked!";
}
?>
<?php
$isPost=false;
$pet="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$pet=$_POST["uname"];
	//echo "button clicked!";
}
?>
<form action="#" method="post">
Pet:<select name="pet">
<option value="cat">Cat</option>
<option value="dog">Dog</option>
<option value="bird">Bird</option>
</select>
<?php
if($isPost==true && $pet=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br>


<br><br>
<?php
$isPost=false;
$address="";

if(isset($_POST["btnlogin"]))

{
	$isPost=true;
	if($_POST["uname"]!="")
		$address=$_POST["uname"];
	//echo "button clicked!";
}
?>
<form action="#" method="post">
Address:
<textarea name="address" value="uname" ></textarea>
<br>


<?php
if($isPost==true && $address=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}

?>
<br>
<input type="submit" value="Submit" name="btnlogin">


</form>
</body>
</html>