<html>
<head>
	<title>Create Group</title>

	<style type='text/css'>
.imgteaser {
	margin: 0;
	overflow: hidden;
	float: left;
	position: relative;
}
.imgteaser a {
	text-decoration: none;
	float: left;
}
.imgteaser a:hover {
	cursor: pointer;
}
.imgteaser a img {
	float: left;
	margin: 0;
	border: none;
	padding: 10px;
	background: #fff;
	border: 1px solid #ddd;
	position: relative;
	
}
.imgteaser a .desc {	display: none; }
.imgteaser a:hover .epimg { visibility: hidden;}
.imgteaser a .epimg {
	position: absolute;
	right: 10px;
	top: 10px;
	font-size: 12px;
	color: #fff;
	background: #000;
	padding: 4px 10px;
	filter:alpha(opacity=65);
	opacity:.65;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=65)";
	
}
.imgteaser a:hover .desc{
	display: block;
	font-size: 11px;
	padding: 10px 0;
	background: #111;
	filter:alpha(opacity=75);
	opacity:.75;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=75)";
	color: #fff;
	position: absolute;
	bottom: 11px;
	left: 11px;
	padding: 4px 10px;
	margin: 0;
	width: 125px;
	border-top: 1px solid #999;
	
}
.pos
{
	position:absolute;
	top:91px;
	left:350px;
	
}
.form
{
	position:absolute;
	left:410px;	
}


</style>
</head>
<body>
	<?php 
		function getAllObjectsAsSelect(){

			$query = "SELECT * FROM MOBJECTT WHERE otyid IN ('0','1','4','3')";
			//echo $query;
			$result = mysql_query($query);
			$objects = "<option value=''></option>";
			while($row = mysql_fetch_array($result)) {
				$objects .= "<option value='".$row["oid"]."'>".$row["obname"]."</option>";
			}

			return $objects;

		}
	?>

	<form method='post' accept-charset='UTF-8' enctype='multipart/form-data' align='center'>
			<fieldset >
				<legend><h2>Create Group</h2></legend>
				<table align='center'>
					<tr>
						<td>Your Group Name*:</td><td> <input type='text' name='name' id='name' maxlength="50" required='true'/></td>	
					</tr>
					<tr>
						<td>Group Image:</td><td><input type='file' width='20' name='image'></td>
					</tr>	
					<tr>
						<td>Members*</td><td><select data-placeholder="Choose a Person..." class="chzn-select" multiple style="height:100%;width:350px;" tabindex="4" name='mem[]'><?php echo getAllObjectsAsSelect();?></select>
        				</td>
					</tr>
					<tr align='center'><td colspan= '2' ><input type='submit' name='submit' value='Submit' /></td></tr>
				</table>
			</fieldset>
		</form>
		<?php
			require_once '../modules/groups/group.php';
			if(isset($_POST['submit']))
			{
				
				$name=$_POST['name'];
				$memarr=$_POST['mem'];

				$mem = implode(",", $memarr);
				echo $mem;

				$date = strtotime(date("m.d.y"));

				$image=$_FILES['image']['name'];
				    if($image!=NULL) 
                    {
                            $filename = stripslashes($_FILES['image']['name']);
                            $extension = getExtension($filename);
                            $extension = strtolower($extension);
                            if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
                            {
                            	notifyerr('Unknown extension!');
                            	$errors=1;
                            }
                            else
                            {
                            	$size=filesize($_FILES['image']['tmp_name']);
                            	if ($size > 1000*1024)
                        	{	
                                    notifyerr('You have exceeded the size limit!');
                                    $errors=1;
                                    break;
                                }
                                 $img=mysql_query("select * from MIMGT");
                                $num=mysql_num_rows($img);
                                $image_name= time().'.'.$extension;
                                $newname="../images/others/".$image_name;
                                $imguri="images/others/".$image_name;
                                $copied = copy($_FILES['image']['tmp_name'], $newname);
                                if (!$copied)
                                {
                                   	$errors=1;
                                        notifyerr('You have Not copied!');
                                        
                                }
                                else
                                {

                                	$errors=0;
                                  //echo "<script type='text/javascript'>alert(' copied $errors ');</script>";
                                }
                            }

                    } 
	
                    if($errors==0)
                    {

                    	$imgid=addImg($imguri);
			
                    	$g = new Group();
               	        $g->create($name,$imgid,$date,",$mem,");
						notify("Successfully Created!!! :)");

                   }
             	}
		?>
		<link rel="stylesheet" href="../modules/groups/harvest/chosen/chosen.css" />
	
	 <script src="../modules/groups/harvest/chosen/chosen.jquery.js" type="text/javascript"></script>
  <script type="text/javascript"> $(".chzn-select").chosen(); $(".chzn-select-deselect").chosen({allow_single_deselect:true}); </script>
 
</body>

