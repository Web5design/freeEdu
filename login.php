<html>
<head>
<script	 type="text/javascript" src="aux/thickbox/jquery.js"></script>
<script type="text/javascript" src="aux/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="aux/thickbox/ThickBox.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="aux/demo.css"></link>
<link rel="stylesheet" type="text/css" href="aux/login.css"></link>
<title>FreeEdu-Login</title>
<link rel="icon" href="images/icon.png" type="image/x-icon" /> 
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon" />
<style>
.modal .modal-footer .btn {
  float: right;
  margin-left: 10px;
}
.btn {
  display: inline-block;
  background-color: #e6e6e6;
  background-repeat: no-repeat;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), color-stop(0.25, #ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(#ffffff, #ffffff 0.25, #e6e6e6);
  background-image: -moz-linear-gradient(#ffffff, #ffffff 0.25, #e6e6e6);
  background-image: -ms-linear-gradient(#ffffff, #ffffff 0.25, #e6e6e6);
  background-image: -o-linear-gradient(#ffffff, #ffffff 0.25, #e6e6e6);
  background-image: linear-gradient(#ffffff, #ffffff 0.25, #e6e6e6);
  padding: 4px 14px;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  color: #333;
  font-size: 13px;
  line-height: 18px;
  border: 1px solid #ccc;
  border-bottom-color: #bbb;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.btn:hover {
  background-position: 0 -15px;
  color: #333;
  text-decoration: none;
}
</style>

<?php
if(!isset($_POST['btnLogin']))
{
	setcookie("object","",time()+60);
}

?>
<script type="text/javascript">
function validator()
{
	var rotob = document.getElementById('rotate');
	
	var ologin = document.forms["login"]["ologin"].value
	var opass = document.forms["login"]["opass"].value
	if (ologin=="" || opass=="")
	{
		alert("Please Fill Required Fields.");
		document.getElementById("fail").innerHTML = "<div id='ufail'>One or More Fields Were Not Filled</div>";
		return false;
	}
}	
</script>

</head>
<body color=beige>
<center>
<div id="fail">
<?php
	

	if(isset($_POST['btnLogin']))
	{
		$ologin = $_POST['ologin'];
		$opass = $_POST['opass'];
		include("misc/constants.php");
		$clsname = "Constants";
		$batname = $clsname::$batname;
		$con = mysql_connect($clsname::$dbhost, $clsname::$dbuname,$clsname::$dbpass) or die(mysql_error());
		mysql_select_db($clsname::$dbname, $con);
		$result = mysql_query("SELECT oid FROM MOBJECTT where ologin='".$ologin."' and opwd='".$opass."'");
		$q = mysql_num_rows($result);
		if($q==0)
		{
			echo "<div id='ufail'>Username Password Conflict.</div>";
			
		}
		else
		{
			$row = mysql_fetch_array($result);
			setcookie('object',$row["oid"]);
			$url = $_GET["url"];
			if(array_key_exists("url",$_GET))
			{

				echo "<script type='text/javascript'>
				window.location = '".$url."';
				</script>";		
		
			}
			else
			{
				echo "<script type='text/javascript'>
				window.location = 'main/';
				</script>";		
			}
						
		

		}
	}	
?>	
<div id="additional">
</div>
<div id="formWrapper">
	<div id="formCasing">
		<center><img src='images/others/rotate.gif' id='rotate'></img></center>
		<h1><center>FreeEdu Login<center></h1>
		<div id="loginForm">	
			<form method="post" action="#" onsubmit="return validator()" name="login" id="login">
				<table cellspacing=10>
				<tr><td><label for="ologin" class='loginlabel'>Username</label></td>
				<td><input type="text" name="ologin" id="ologin" value="" style=''></input></td></tr><tr>
				<td><label for="opass" class='loginlabel'>Password</label></td>
				<td><input type="password" name="opass" value=""></input>&emsp;<input type="submit" class='btn' name="btnLogin" value="Submit" style="width:25%"></td>
				</table>
		
				</form>		
				
		</div>
			
	</div>
	<div id="formFooter"></div>

</div>
</div>
</center>
</body>
</html> 
