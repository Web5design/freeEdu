<?php

    function putAssignment($asname,$oid,$batid,$sec,$subid,$contents)
    {
	
        $result = mysql_query("select * from MASSIGNMENTT");
        $rows = mysql_num_rows($result);
        $docpath = "../modules/assignment/docs/".uniqid().".html";
        //echo $docpath;
        //$file = fopen($docname,'w');
        file_put_contents($docpath,$contents);
        //echo "insert into MASSIGNMENT values('".$rows."','".$asname."','".$oid."','".$batid."','".$sec."','".$docpath."')";
        mysql_query("insert into MASSIGNMENTT values('".$rows."','".$asname."','".$oid."','".$batid."','".$sec."','".$subid."','".strtotime(date("d-M-Y"))."','".$docpath."')");	
        
	return $rows;
    }
    function updateAssignment($asid,$contents)
    {
     
        $docpath = "../modules/assignment/docs/".uniqid().".html";
        file_put_contents($docpath,$contents);
        mysql_query("update MASSIGNMENTT set docpath='".$docpath."' where asid like '".$asid."'");	
        return $rows;
    }
    function getAssignmentContent($asid)
    {
     
        $result = queryMe("select * from MASSIGNMENTT where asid like '".$asid."'");
        $data = file_get_contents($result["docpath"]);
        return $data;
    }
    function getAssignment($asid)
    {
        $result = queryMe("select * from MASSIGNMENTT where asid like '".$asid."'");
        return $result;
    }
    function getAssignmentEntries($oid)
    {
	$query = "SELECT * From MASSIGNMENTT where oid like '".$oid."'";
	$result = mysql_query($query);
	$returnLinks = array();
	$i=0;
	while($row=mysql_fetch_array($result))
	{
	    $asid = $row["asid"];
	    $asname = $row["asname"];
	    $returnLinks[$i] = array();
	    $returnLinks[$i]["Name"] = $asname;
	    $returnLinks[$i]["Id"] = $asid;
	    $returnLinks[$i]["cdate"] = date("d-M-Y",$row['cdate']);
	    $returnLinks[$i]["subid"] = $row["subid"];
	    $returnLinks[$i]["Link"] = curPageURL()."&asid=".$asid;
	    $i++;
	}
       return $returnLinks;
    } 
    
    function getAssignmentEntriesForBatch($batid,$sec)
    {
	$query = "SELECT * From MASSIGNMENTT where batid like '".$batid."' and sec like '".$sec."'";
	$result = mysql_query($query);
	$returnLinks = array();
	$i=0;
	while($row=mysql_fetch_array($result))
	{
	    $asid = $row["asid"];
	    $asname = $row["asname"];
	    $returnLinks[$i] = array();
	    $returnLinks[$i]["Name"] = $asname;
	    $returnLinks[$i]["Id"] = $asid;
	    $returnLinks[$i]["cdate"] = date("d-M-Y",$row['cdate']);
	    $returnLinks[$i]["subid"] = $row["subid"];
	    $returnLinks[$i]["Link"] = curPageURL()."&asid=".$asid;
	    $i++;
	}
       return $returnLinks;
    } 
     
     
     
?>
