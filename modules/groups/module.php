<?php

    class groups_ModuleInfo extends ModuleInfo
    {
        
        public function module_getInfo()
        {
            $array = array(
                           
                           "name" => "Groups",
                           "mod_name" => "mod_groups",
                           "mod_tag" => "groups",
                           "authors" => array("Divya","�nitha","�khila","Neeraja","Bhavya"),
                           "dependencies" => array("mod_core"),
                           "css" => array("a.css","b.css")
                            
                           );
            return $array;
            
        }
        public function module_dbaccess()
        {
            $array = array("create" => array(
                                    array("name" => "groups",
                                    "sql" => "create table groups(id int,name text,imgid text,mem text,date text)"),
                                    array("name" => "posts",
                                    "sql" => "create table posts(id int,gid int,object int,subject text,post text,date text)")
                                ),
                           "read" => array("MOBJECTT","MSTUDENTT","MBATCHT","MBRANCHT","MREGT","MFEEDBACKT","FBAVAILT","MFACULTYT"),
                           "update" => array("MFEEDBACKT","FBAVAILT")
                           );
            return $array;
            
        }
        public function module_getLinkInfo()
        {
            $array = array(
                            array(
                                    "title" => "Groups",
                                    "type" => "parent",
                                    "parent" => "/",
                                    "createMenuItem" => "yes",
                                    "perms" => array("sudo","student","faculty"),
                                    "tag" => "groups",
                                  ),
                            array(
                                    "mode" => "groups_create",
                                    "title" => "Create A Group",
                                    "file" => "groups_create.php",
                                    "type" => "child",
                                    "parent" => "groups",
                                    "createMenuItem" => "yes",
                                    "perms" => array("sudo","student","faculty"),
                                    "tag" => "groups.create"
                                  ),
                            array(
                                    "mode" => "get_groups",
                                    "title" => "View Groups",
                                    "file" => "get_groups.php",
                                    "type" => "child",
                                    "parent" => "groups",
                                    "createMenuItem" => "yes",
                                    "perms" => array("sudo","student","faculty"),
                                    "tag" => "groups.viewall"
                                  ),
                         array(
                                    "mode" => "view_group",
                                    "title" => "Access Group",
                                    "file" => "view_group.php",
                                    "type" => "child",
                                    "parent" => "groups",
                                    "createMenuItem" => "no",
                                    "perms" => array("sudo","student","faculty"),
                                    "tag" => "groups.view"
                                  ), /*
			    array(
                                    "mode" => "edit_group",
                                    "title" => "Edit Group",
                                    "file" => "edit_group.php",
                                    "type" => "child",
                                    "parent" => "groups",
                                    "createMenuItem" => "yes",
                                    "perms" => array("sudo","student","faculty"),
                                    "tag" => "groups.edit"
                                  ),

			  array(
                                    "mode" => "delete",
                                    "title" => "delete Group",
                                    "file" => "delete.php",
                                    "type" => "child",
                                    "parent" => "groups",
                                    "createMenuItem" => "yes",
                                    "perms" => array("sudo","student","faculty"),
                                    "tag" => "groups.delete"
                                  ), */
			
                           
                           );   
            return $array;
        }
        public function module_space_switchboard(){
				return array("space1" => array("weight" => 0,"spaces"=>array("rayon.add_marks","roster.upload_attendance"))
							);
		}
        public function module_getConfigInfo(){
        	$mc = new Module_Config();
        	$mc->addKey("Max Rating","maxrating",$mc->TYPE_TEXT);
        	$mc->addKey("Min Rating","minrating",$mc->TYPE_TEXT);
        	return $mc;
        }
        public function module_getRenderData(){
			
				return array("getlist"=>array("table"=>"FBAVAILT","searchby"=>array("fbid","fbname","fbdatec","fbdatee","fbcid","batid","sec")),
							 "fbid" => array("table"=>"MFEEDBACKT","searchby"=>array("fbid","sid","fid","rating","date"),"as"=>"f","include"=>array(array("name"=>"sname","query"=>"select sname from MSTUDENTT s where s.sid=f.sid"),array("name"=>"fname","query"=>"select fname from MFACULTYT ft where ft.fid=f.fid")))
							);
		}
        public function module_setConfigInfo($params){
        	return "config_success";
        }
        public function module_after_install(){
			
			freeedu_add_css("a.css");
		}
    }

?>
