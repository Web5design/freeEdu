<?php
include("../lib/lib.php");
	include("../misc/constants.php");
$q=$_GET['q'];
if($q=='b')
{
	echo getBatches('bat[]',"id='bat'");

}
if($q=='c')
{
	echo getClassesAsSelect('cls[]',"id='cls'");

}
?>