<link rel="stylesheet" href="aux/bootstrap/css/bootstrap.css"
	type="text/css" media='screen'>
<style>
.menu {
	list-style: none;
	float: left;
	margin-left: -2;
}

.menu li {
	display: block;
	margin-bottom: 2px;
	
}
.selected {
	background: cyan;
}

.btn.danger,.alert-message.danger,.btn.danger:hover,.alert-message.danger:hover,.btn.error,.alert-message.error,.btn.error:hover,.alert-message.error:hover,.btn.success,.alert-message.success,.btn.success:hover,.alert-message.success:hover,.btn.info,.alert-message.info,.btn.info:hover,.alert-message.info:hover
	{
	color: #ffffff;
}

.btn.danger,.alert-message.danger,.btn.error,.alert-message.error {
	background-color: #c43c35;
	background-repeat: repeat-x;
	background-image: -khtml-gradient(linear, left top, left bottom, from(#ee5f5b),
		to(#c43c35) );
	background-image: -moz-linear-gradient(top, #ee5f5b, #c43c35);
	background-image: -ms-linear-gradient(top, #ee5f5b, #c43c35);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ee5f5b),
		color-stop(100%, #c43c35) );
	background-image: -webkit-linear-gradient(top, #ee5f5b, #c43c35);
	background-image: -o-linear-gradient(top, #ee5f5b, #c43c35);
	background-image: linear-gradient(top, #ee5f5b, #c43c35);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ee5f5b',
		endColorstr='#c43c35', GradientType=0 );
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	border-color: #c43c35 #c43c35 #882a25;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}

.btn.success,.alert-message.success {
	background-color: #57a957;
	background-repeat: repeat-x;
	background-image: -khtml-gradient(linear, left top, left bottom, from(#62c462),
		to(#57a957) );
	background-image: -moz-linear-gradient(top, #62c462, #57a957);
	background-image: -ms-linear-gradient(top, #62c462, #57a957);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #62c462),
		color-stop(100%, #57a957) );
	background-image: -webkit-linear-gradient(top, #62c462, #57a957);
	background-image: -o-linear-gradient(top, #62c462, #57a957);
	background-image: linear-gradient(top, #62c462, #57a957);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#62c462',
		endColorstr='#57a957', GradientType=0 );
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	border-color: #57a957 #57a957 #3d773d;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}

.btn.info,.alert-message.info {
	background-color: #339bb9;
	background-repeat: repeat-x;
	background-image: -khtml-gradient(linear, left top, left bottom, from(#5bc0de),
		to(#339bb9) );
	background-image: -moz-linear-gradient(top, #5bc0de, #339bb9);
	background-image: -ms-linear-gradient(top, #5bc0de, #339bb9);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5bc0de),
		color-stop(100%, #339bb9) );
	background-image: -webkit-linear-gradient(top, #5bc0de, #339bb9);
	background-image: -o-linear-gradient(top, #5bc0de, #339bb9);
	background-image: linear-gradient(top, #5bc0de, #339bb9);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bc0de',
		endColorstr='#339bb9', GradientType=0 );
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	border-color: #339bb9 #339bb9 #22697d;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}

.btn {
	cursor: pointer;
	display: inline-block;
	background-color: #e6e6e6;
	background-repeat: no-repeat;
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff),
		color-stop(25%, #ffffff), to(#e6e6e6) );
	background-image: -webkit-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
	background-image: -moz-linear-gradient(top, #ffffff, #ffffff 25%, #e6e6e6);
	background-image: -ms-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
	background-image: -o-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
	background-image: linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',
		endColorstr='#e6e6e6', GradientType=0 );
	padding: 5px 14px 6px;
	text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
	color: #333;
	font-size: 13px;
	line-height: normal;
	border: 1px solid #ccc;
	border-bottom-color: #bbb;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px
		rgba(0, 0, 0, 0.05);
	-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px
		rgba(0, 0, 0, 0.05);
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px
		rgba(0, 0, 0, 0.05);
	-webkit-transition: 0.1s linear all;
	-moz-transition: 0.1s linear all;
	-ms-transition: 0.1s linear all;
	-o-transition: 0.1s linear all;
	transition: 0.1s linear all;
}

.btn:hover {
	background-position: 0 -15px;
	color: #333;
	text-decoration: none;
}

.btn:focus {
	outline: 1px dotted #666;
}

.btn.primary {
	color: #ffffff;
	background-color: #0064cd;
	background-repeat: repeat-x;
	background-image: -khtml-gradient(linear, left top, left bottom, from(#049cdb),
		to(#0064cd) );
	background-image: -moz-linear-gradient(top, #049cdb, #0064cd);
	background-image: -ms-linear-gradient(top, #049cdb, #0064cd);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #049cdb),
		color-stop(100%, #0064cd) );
	background-image: -webkit-linear-gradient(top, #049cdb, #0064cd);
	background-image: -o-linear-gradient(top, #049cdb, #0064cd);
	background-image: linear-gradient(top, #049cdb, #0064cd);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#049cdb',
		endColorstr='#0064cd', GradientType=0 );
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	border-color: #0064cd #0064cd #003f81;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}

.btn:active {
	-webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.25), 0 1px 2px
		rgba(0, 0, 0, 0.05);
	-moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.25), 0 1px 2px
		rgba(0, 0, 0, 0.05);
	box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.25), 0 1px 2px
		rgba(0, 0, 0, 0.05);
}

.btn.disabled {
	cursor: default;
	background-image: none;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled=  false );
	filter: alpha(opacity = 65);
	-khtml-opacity: 0.65;
	-moz-opacity: 0.65;
	opacity: 0.65;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.btn[disabled] {
	cursor: default;
	background-image: none;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled=  false );
	filter: alpha(opacity = 65);
	-khtml-opacity: 0.65;
	-moz-opacity: 0.65;
	opacity: 0.65;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.btn.large {
	font-size: 15px;
	line-height: normal;
	padding: 9px 14px 9px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}

.btn.small {
	padding: 7px 9px 7px;
	font-size: 11px;
}

:root .alert-message,:root .btn {
	border-radius: 0 \0;
}

button.btn::-moz-focus-inner,input[type=submit].btn::-moz-focus-inner {
	padding: 0;
	border: 0;
}

.close {
	float: right;
	color: #000000;
	font-size: 20px;
	font-weight: bold;
	line-height: 13.5px;
	text-shadow: 0 1px 0 #ffffff;
	filter: alpha(opacity = 20);
	-khtml-opacity: 0.2;
	-moz-opacity: 0.2;
	opacity: 0.2;
}

code,pre,.box {
	font-family: Monaco, Andale Mono, Courier New, monospace;
	font-size: 12px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

pre,.box {
	background-color: #f5f5f5;
	display: block;
	font-size: 12px;
	border: 1px solid #ccc;
	border: 1px solid rgba(0, 0, 0, 0.15);
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	white-space: pre;
}
</style>
<script>
	function update_progress(text,by){
		var bar = document.getElementById("bar");
		var status = document.getElementById("status");		
		
		bar.style.width = by+"%";
		status.innerHTML = "<h3>Creating Tables</h3>";
		

	}
	function inject(){
	
		var el = document.getElementById("setupdb");
		html = "<div class='progress progress-danger progress-striped active' style='background:white'><divclass='bar' id='bar' style='width: 0%;'></div></div>";
		el.innerHTML = html + el.innerHTML;
	}
</script>
<?php
function show_basic_html(){
	if($_GET["phase"] == NULL){
		$phase = 0;
	}
	else{
		$phase = $_GET["phase"];
	}
	echo "<div class='container-fluid'><div class = 'row-fluid'><div class='span3'><br>".progress_stages($phase)."</div>";
	echo "<div class='span9'><br><center><h2>FreeEdu - Installation</h2><div class='alert alert-info'><h3>
		".getHeading($phase)."</h3></div></center>";
		
	controller($phase); 
		echo "</fieldset></div></div></div>";
}
function getHeading($phase){

	switch($phase){

		case 0: return "Requirements";
		case 1: return "Setting up the Database";
		case 2: return "Adding Defaults into the Database";
		case 3: return "Adding an Administrator Account";
		case 4: return "Setting up branches & regulations";

	}


}
function progress_stages($phase){
	$stages = "<div class='well sidebar-nav'>";
	$stages .= "<ul class='nav nav-list' >";
	$stages .= "<li class='nav-header'>Phases Of Installation</li>";
	$phase==0? $stages .="<li class='active'><a>Requirements</a></li>":$stages .= "<li>Requirements</li>";
	$phase==1? $stages .="<li class='active'><a>Setting up the Database</a></li>":$stages .= "<li>Setting up the Database</li>";
	$phase==2? $stages .="<li class='active'><a>Adding Defaults into the Database</a></li>":$stages .= "<li>Setting up branches & regulations</li>";
	$phase==3? $stages .="<li class='active'><a>Adding an Administrator Account</a></li>":$stages .= "<li>Adding an Administrator Account</li>";
	$phase==4? $stages .="<li class='active'><a>Setting up branches & regulations</a></li>":$stages .= "<li>Setting up branches & regulations</li>";


	$stages .=  "</ul></div>";
	return $stages;

}
function stages($ph){
	return "<div class='well'><ul class='nav nav-list'>...<li><a><i class='icon-book'></i>Library</a></li>...</ul></div>";

}
function update_progress($text,$by){
	echo "<script>update_progress(\"$text\",$by)</script>";

}
function inject($element){
	echo "<script>inject()</script>";

}
function create_tables($host,$user,$pass,$db){

	$tables = array("ADATAT" => array("aid"=>"text","adata"=>"text","pa"=>"text"),
				"MADMINT" => array("adid"=>"text","adname"=>"text","adfunc"=>"text","brfilter"=>"text"),
				"MATDT" => array						("aid"=>"text","fid"=>"text","batid"=>"text","sec"=>"text","dayid"=>"text","sessionid"=>"text","subid"=>"text"), 					"MAVAILT"=>array		("mrid"=>"text","batid"=>"text","doex"=>"text","ros"=>"text","akayr"=>"text"),
				"MBACKLOGT" => array("bid"=>"text","sid"=>"text","subid"=>"text","int"=>"text","ext"=>"text","doex"=>"text"),
				"MBATCHT" => array("batid"=>"text","brid"=>"text","regid"=>"text","batyr"=>"text","akayr"=>"text"),
				"MBRANCHT"=> array("brid"=>"text","brname"=>"text"),
				"MDETAINT"=> array("did"=>"text","srno"=>"text","from"=>"text","to"=>"text","akayr"=>"text"),
				"MFACULTYT"=> array("fid"=>"text","fname"=>"text","imgid"=>"text","fbio"=>"text","deptid"=>"text","fcourse"=>"text"),
				"MIMGT"=> array("imgid"=>"text","imguri"=>"text"),
				"MMARKST" => array("mid"=>"text","sid"=>"text","subid"=>"text","intm"=>"text","extm"=>"text","cre"=>"text","mrid"=>"text"), 
				"MMETAT" => array("id"=>"text","value"=>"text","extra"=>"text"),
				"MMODULET" => array("mid"=>"text","mod_name"=>"text","mod_tag"=>"text","mod_file"=>"text","mod_authtoken"=>"text","mod_read"=>"text", "mod_update"=>"text"),
				"MOBJECTT"=>array("oid"=>"text","obname"=>"text","obhandle"=>"text","otyid"=>"text","oimgid"=>"text","ologin"=>"text","opwd"=>"text","oref"=>"text"),
				"MODCONFT"=> array("modtag"=>"text","key"=>"text","value"=>"text"),
				"MREGT" => array("regid"=>"text","regname"=>"text"),
				"MSCHEDULET" => array("sec"=>"text","weekid"=>"text","sessionstring"=>"text","batid"=>"text"),
				"MSTUDENTT" => array("sid"=>"text","srno"=>"text","sname"=>"text","scontact"=>"text","sbio"=>"text","imgid"=>"text","batid"=>"text","sec"=>"text","did"=>"text","tap"=>"text"),
		         	"MSUBJECTT" => array("subid"=>"text","subcode"=>"text","subname"=>"text","imgid"=>"text"
	,"year"=>"text","inmax"=>"text","exmax"=>"text","exmin"=>"text","cre"=>"text","subshort"=>"text","books"=>"text","suid"=>"text"),
				"MSUBST"=>  array("subid"=>"text","regid"=>"text","brid"=>"text","subsid"=>"text","subcode"=>"text","subname"=>"text","imgid"=>"text"
	,"inmax"=>"text","exmax"=>"text","exmin"=>"text","cre"=>"text","subshort"=>"text","books"=>"text"),
				"OTYPET"=>array("tyid"=>"text","tyname"=>"text","tytab"=>"text","matcher"=>"text","tag"=>"text"),
				"SAVAILT"=>array("subid"=>"text","regid"=>"text","brid"=>"text"),
				"SMETAT"=>array("smid"=>"text","batid"=>"text","sec"=>"text","pid"=>"text","timeinfo"=>"text"));

	$r = "";
	$con = mysql_connect($host,$user,$pass);
	mysql_select_db($db, $con);
	$slice = 100.0/count($tables);
	$s = $slice;
	foreach($tables as $key=>$value){
		$query = "CREATE TABLE $key (";
		$r = "Creating Table $key ......";
		foreach($value as $k=>$v){
			$query .= "$k $v,";

		}
		$query = substr($query,0,-1);
		$query .= ")";
		//echo $query."<br>";
		mysql_query($query);
		update_progress($r,ceil($slice));
		$slice += $s;
	}

}

function controller($context){

	switch($context){
		case 0: $t = show_requirements();break;
		case 1: $t = setup_db();break;
		case 2: $t = add_admin_account();break;
	}
	
	return $t;
}
function setup_db(){
	$r = "";
	echo "<div class='well' id='setupdb'>";
	echo "<div id='status'></div>";
	
	if(!isset($_POST["submit"])){
		echo "<center><h3>Database Connectivity Parameters</h3><form action='' method='post'>";
		echo "<table cellpadding=10>";
		echo "<tr><td>Database Host</td><td><input type='text' style='height:auto' name='dbhost'></input></td></tr>";
		echo "<tr><td>Database Username</td><td><input type='text' style='height:auto' name='dbuname'></input></td></tr>";
		echo "<tr><td>Database Password</td><td><input type='text' style='height:auto' name='dbpass'></input></td></tr>";
		echo "<tr><td>Database Name</td><td><input type='text' style='height:auto' name='dbname'></input></td></tr>";
		echo "<tr><td></td><td><input type='submit' class='btn primary large' name='submit' value='Continue &raquo;'name='dbhost'></input></td></tr>";
		echo "</table></form></center>";
	}
	if(isset($_POST["submit"]))	{
		echo show_progress_bar();
		$host = $_POST["dbhost"];
		$uname = $_POST["dbuname"];
		$pass = $_POST["dbpass"];
		$db = $_POST["dbname"];

		$link = mysql_connect($host,$uname,$pass);
		if (!$link) {

			echo "<script type='text/javascript'>alert('Wrong Credentials!!');window.location='install.php?phase=1'</script>"	;
		}
		else if(!mysql_select_db($db)){
			echo "<script type='text/javascript'>alert('Cant Connect to Database		!!');window.location='auth.php'</script>";
		}
			
		$x = gen($host,$uname,$pass,$db,"");
		$op = fopen("lib/connection.php","w");
		fwrite($op,$x);
		echo "<div id='status'></div>";
		
		create_tables($host,$uname,$pass,$db);
		echo "<center><a href='?phase=2' class='btn primary large'>Continue &raquo;</a></center>";
	}
    
	echo "</div>";
	return $r;

}

function add_admin_account(){
	$r = "";
	echo "<div class='well' id='setupdb'>";
	echo "<div id='status'></div>";
	echo show_progress_bar();
	if(!isset($_POST["submit"])){
		echo "<center><h3>Database Connectivity Parameters</h3><form action='' method='post'>";
		echo "<table cellpadding=10>";
		echo "<tr><td>Database Host</td><td><input type='text' style='height:auto' name='dbhost'></input></td></tr>";
		echo "<tr><td>Database Username</td><td><input type='text' style='height:auto' name='dbuname'></input></td></tr>";
		echo "<tr><td>Database Password</td><td><input type='text' style='height:auto' name='dbpass'></input></td></tr>";
		echo "<tr><td>Database Name</td><td><input type='text' style='height:auto' name='dbname'></input></td></tr>";
		echo "<tr><td></td><td><input type='submit' class='btn primary large' name='submit' value='Continue &raquo;'name='dbhost'></input></td></tr>";
		echo "</table></form></center>";
	}
	if(isset($_POST["submit"]))	{

		$host = $_POST["dbhost"];
		$uname = $_POST["dbuname"];
		$pass = $_POST["dbpass"];
		$db = $_POST["dbname"];

		$link = mysql_connect($host,$uname,$pass);
		if (!$link) {

			echo "<script type='text/javascript'>alert('Wrong Credentials!!');window.location='install.php?phase=1'</script>"	;
		}
		else if(!mysql_select_db($db)){
			echo "<script type='text/javascript'>alert('Cant Connect to Database		!!');window.location='auth.php'</script>";
		}
			
		$x = gen($host,$uname,$pass,$db,"");
		$op = fopen("lib/connection.php","w");
		fwrite($op,$x);
		echo "<div id='status'></div>";
		
		create_tables($host,$uname,$pass,$db);
	}
    echo "<center><a href='?phase=2' class='btn primary large'>Continue &raquo;</a></center>";
	echo "</div>";
	return $r;

}
function gen($dbhost,$dbuser,$dbpass,$dbname,$cname){
	return "<?php \n$"."con = mysql_connect(\"$dbhost\", \"$dbuser\",\"$dbpass\");\nmysql_select_db(\"$dbname\", "."$"."con);\n?>";
}
function show_progress_bar(){
	$bar = "<div class='progress progress-danger progress-striped active' style='background:white'>
  <div class='bar' id='bar'
       style='width: 0%;'></div>
</div>";
	return $bar;
}
function show_requirements(){

	$f = str_split(substr(sprintf('%o', fileperms('images')), -3));
	$okay = FALSE;
	echo "<center><form action='' method='get'>";
	if(_iscurlinstalled()){
		echo  "<div class='alert alert-success' style=''><b>CURL Extenstion</b> is loaded</div>";
		$okay = TRUE;
	}

	else{
		echo  "<div class='alert alert-danger' style=''><b>CURL Extenstion</b> is not loaded</div>";
		$okay = FALSE;
	}
	if((int)$f[1] >= 5 && (int)$f[2] >= 5 && (int)$f[0] == 7){
		echo "<div class='alert alert-success' style=''><b>images/</b> directory is writable</div>";
		$okay = TRUE;
	}

	else{
		echo "<div class='alert alert-danger' style=''><b>images/</b> directory is not writable</div>";
		$okay = FALSE;
	}
	if($okay){
		echo "<div class='well'><input style='' type='submit' value='Continue to the next phase &raquo;' class='btn primary large'></input></div>";
	}
	echo "<input type='hidden' name='phase' value='1'></input></form></center>";
	
}
function _iscurlinstalled() {
	if  (in_array  ('curl', get_loaded_extensions())) {
		return true;
	}
	else{
		return false;
	}
}
echo show_basic_html();
?>





