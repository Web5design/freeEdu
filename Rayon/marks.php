	<html>
	<head>
	<style type="text/css">

		table.imagetable {
		font-family: verdana,arial,sans-serif;
		font-size:14px;
		color:#333333;
		border-width: 4px;
		border-color: #8a879c;
		border-collapse: collapse;
		}

		table.imagetable th {
		background:#87CEFA url('cell-blue.jpg');
		font-size:14px;
		border-width: 3px;
		padding: 8px;
		border-style: solid;
		border-color: #999999;
		}

		table.imagetable td {
		background:#F5F5F5 url('cell-grey.jpg');
		border-width: 3px;
		padding: 8px;
		border-style: solid;
		border-color: #999999;
		}

		
    		div.box
		{
		width:220px;
		padding:10px;
		border:5px solid gray;
		margin:0px;
		}
    
		div.heading
		{
		text-transform:uppercase;	
		width:500px;
		padding:10px;
		border:3px solid gray;
		margin:0px;
		}

	</style>
	</head>
	<body>
	<?php
	include_once("../lib/connection.php");
		$year=$_GET["year"];
		$mrid=$_GET["mrid"];
		$suid=$_GET["subid"];
		$query=mysql_query("SELECT * FROM MSUBJECTT WHERE suid='$suid' AND year='$year'") or die(mysql_error());
	?>
		<center><form action="#" method="post">
		<select name="subid">
		<option value="-1">-----SELECT----</option>
	<?php
	while($result=mysql_fetch_array($query))
	{
		$subid=$result['subid'];
		$subcode= $result['subcode'];
		$subname= $result['subname'];
		echo '<option value='.$subid.'>'.$subcode." ".$subname.'</option>';
	}
	?>
		</select>
		<input type="submit" name="submit"/>
		</form></center></br></br>
	<?php
	if(isset($_POST['submit']))
	{
		
		$subid=$_POST['subid'];
		$query3=mysql_query("SELECT * FROM MSUBJECTT WHERE subid='$subid'") or die(mysql_error());
		$result3=mysql_fetch_array($query3);
		?><center><div class="heading"><center><?php echo "Marks Analysis of ".$result3['subname'];?></center></div>
		</center><?php
		$query1=mysql_query("SELECT * FROM MMARKST WHERE subid='$subid'") or die(mysql_error());
	?>
		</br><center><table class="imagetable">
		<tr>
		<th>Student Roll No.</th>
		<th>Student Name</th>
		<th>Internal Marks</th>
		<th>External Marks</th>
		<th>Total Marks</th>
		<th>Pass/Fail</th>		
		</tr>
	<?php
		$pass=0;
		$fail=0;
		$strength=0;
	while($result1=mysql_fetch_array($query1))
	{
	?>
		<tr>
	<?php
		$strength=(int)$strength+1;
		$sid=$result1['sid'];
		$intm=$result1['intm'];
		$extm=(int)$result1['extm'];
		$totm=$intm+$extm;
		$query2=mysql_query("SELECT * FROM MSTUDENTT WHERE sid='$sid'") or die(mysql_error());
		$result2=mysql_fetch_array($query2);
		$sname= $result2['sname'];
		$srno= $result2['srno'];
	?>
		<td><?php echo $srno;?></td>
		<td><?php echo $sname;?></td>
		<td><?php echo $intm;?></td>
		<td><?php echo $extm;?></td>
		<td><b><?php echo $totm;?></b></td>
	<?php
	  	
		$exmin=(int)$result3['exmin'];

		if($extm<$exmin)
		{
		$fail=(int)$fail+1;	
	?>
		<td><font color="red">FAIL</td>	
	<?php
		} 
		else
		{
		$pass=(int)$pass+1;	
	?>
		<td><font color="green">PASS</td>	
		
	<?php
		}
		?></tr>
	<?php	}?>
		</table></center></br>

		<center><div class="box">
      		
	<?php
		$passpercent=($pass/$strength)*100;
		echo "PASS PERCENTAGE:"."   ".$passpercent.'</br>'.'</br>';
		echo "NUMBER OF FAIL:"."    ".$fail;
	?>	
		</div></center>
	<?php
	}	
	?>

		</body>
		</html>

