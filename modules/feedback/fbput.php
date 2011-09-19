<?php

    
    include("fb_lib.php");
    $object = getObject($_COOKIE["object"]);
    $student = getStudent($object["obhandle"]);
    $batid = $student["batid"];
    $sec = $student["sec"];
    if(!isset($_GET['fbid']) && !isset($_POST["postbtn"]))
    {
       
    
        $entries = getFeedbackEntries($batid,$sec);
        echo "<table class='bttable' border='1'>";
        echo "<th class='blue'>Feedback Form Name</th>";
        echo "<th class='blue'>Creation Date</th>";
        echo "<th class='blue'>Subbmitable By:</th>";
         echo "<th class='blue'>Submitted?</th>";
        for($i=0;$i<count($entries);$i++)
        {
            
            echo "<tr>";
            if(!checkSubmitted($entries[$i]["Id"],$object["obhandle"]))
            {
                echo "<td><a href='".$entries[$i]["Link"]."'>".$entries[$i]['Name']."</a></td>";
                echo "<td>".$entries[$i]["Cdate"]."</td>";
                echo "<td>".$entries[$i]["Edate"]."</td>";
                echo "<td><center>No</center></td>";
            }
            else{
                echo "<td>".$entries[$i]['Name']."</td>";
                echo "<td>".$entries[$i]["Cdate"]."</td>";
                echo "<td>".$entries[$i]["Edate"]."</td>";
                echo "<td><center>Yes</center></td>";
            }
            echo "</tr>";
            
            
        }
        echo "</table>";
    }
    else if(isset($_GET["fbid"]) && !isset($_POST["postbtn"]))
    {
    
        $fbid = $_GET["fbid"];    
        $fbentry = getFeedbackEntry($fbid);
    
        if($batid!=$fbentry['batid'] || $sec!=$fbentry["sec"])
        {
            
            notifyerr("You Are Unauthorized To View This Page!");
            redirect("?m=fbput");
            
        }
        else
        {
            $get = getFacultyForClass($batid,$sec);
            echo "<form action='#' method='post'>";
            echo "<table class='bttable' border=1>";
            echo "<th class='blue'>Faculty</th>";
            echo "<th class='blue'>Rating</th>";
            $fbmin = $fbentry["fbmin"];
            $fbmax = $fbentry["fbmax"];
	
            for($i=0;$i<count($get);$i++)
            {
                $name = $get[$i]["Name"];
                $id = $get[$i]["Id"];
                $imguri = $get[$i]["imguri"];
                
                $object = getObjectByType(getFacultyType(),$id);
                $url = "m=p&id=".$object["oid"];
                
                $ret = "<select name='rating[][]'>";
                
                    for($j=$fbmin;$j<=$fbmax;$j++)
                    {
                    $ret .= "<option value='".$j.":".$id."'>".$j."</option>";
                    
                    }
                 $ret.="</select>";
            
                echo "<tr>";
                echo "<td><div class='img'><img src='../".$imguri."' width='100' height='100' style='padding-right:5px;z-index:1'></img><div class='desc'>".$name."</div></div></td>";
                echo "<td>".$ret."</td>";
                echo "</tr>";
                
            }
            echo "</table><br><input type='submit' name='postbtn'></input>
            <input type='hidden' name='fbid' value='".$fbid."'></input>
            </form>";
            
            
        }
        
    }
    else if(isset($_POST["postbtn"]))
    {
        
        $rating = $_POST["rating"];
        //print_r($rating);
        $feedback = array();
        for($i=0;$i<count($rating);$i++)
        {
            $data = explode(":",$rating[$i][0]);
            $rate = $data[0];
            $fid = $data[1];
            
            $feedback[$i] = array();
            $feedback[$i]["rating"] = $rate;
            $feedback[$i]["fid"] = $fid;
            
        }
        //print_r($feedback);
        putFeedback($object["obhandle"],$feedback,$_POST["fbid"]);
        notify("Feedback Submitted!");
        redirect("?m=fbput");
        
    }
?>  