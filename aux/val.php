<?php
	$ologin = $_POST['ologin'];
	$opass = $_POST['opass'];
	$v = val($ologin,$opass);
	if($v==0)
	{
		echo "<script type='text/javascript'>window.location = 'login.php?err=1'</script>";
		return 0;		
	}
	else
	{	
		require_once("../lib/connection.php");

		
		$result = mysql_query("SELECT oid FROM MOBJECTT where ologin='".$ologin."' and opass='".$opass."'");
		$row = mysql_fetch_array($result);
		setcookie('object',$row["oid"]);
		echo "<script type='text/javascript'>window.location = 'main/?'</script>";
	}
	function val($ologin,$opass)
	{
require_once("../lib/connection.php");

		$result = mysql_query("SELECT ologin,opass FROM MOBJECTT where ologin='".$ologin."' and opass='".$opass."'");
		return mysql_num_rows($result);

	}
?>
