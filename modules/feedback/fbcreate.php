<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y",
			imgPath:"../aux/calendar/img/"
			
		});
	};
</script>
<?php
include("fb_lib.php");
if(!isset($_POST["phase1"]))
{
    echo "<fieldset><legend>Create A Feedback Form</legend><center><form action='#' method='post'>";
    echo "Name : <input type='text' name='fbname' required=true>&emsp;";
    echo "Assign To : ".getClassesAsSelect("bat[]")."&emsp;";
    echo "Completable By: <input type='text' name='date' id='inputField' required=true>";
    echo "<br><br>Minimum Rating:&emsp;<input type='number' name='min' required=true></input>";
    echo "&emsp;Maximum Rating:&emsp;<input type='number' name='max' required=true></input>";
    echo "<br><br><input type='submit' name='phase1'/>";
    echo "</form></center></fieldset>";
}
else
{
    $bat = $_POST['bat'][0];
    $barray = explode(':',$bat);
    $batid = $barray[0];
    $sec = $barray[1];
    
    $fbname = $_POST["fbname"];
    $cdate = strtotime(strtoupper(date("d-M-Y")));
    $edate = $_POST["date"];
    $oid = $_COOKIE["object"];
    $fbmin = $_POST["min"];
    $fbmax = $_POST["max"];
    
    $fbid = createFeedback($oid,$fbname,$cdate,$edate,$fbmin,$fbmax,$batid,$sec);
    notify("Feedback Created! See It <a href=?m=fbget&fbid=".$fbid.">Here</a>");
   // redirect("?m=fbcreate");
}
?>