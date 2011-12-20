<?php
    require_once "../lib/classes.php";
    class feedback_ModuleInfo extends ModuleInfo
    {
        
        public function module_getInfo()
        {
            $array = array(
                           
                           "name" => "Feedback Forms",
                           "mod_name" => "mod_feedback",
                           "mod_tag" => "feedback",
                           "authors" => array("Ganesh Katrapati"),
                           "dependencies" => array("mod_core")
                            
                           );
            return $array;
            
        }
        public function module_dbaccess()
        {
            $array = array("create" => array(
                                    array("name" => "MFEEDBACKT",
                                    "sql" => "create table MFEEDBACKT(fbid text,fbname text,fbdatec text,fbdatee text,fbmin text,fbmax text,fbcid text,batid text,sec text)"),
                                    array("name" => "FBAVAILT",
                                    "sql" => "create table MFEEDBACKT(feedid text,sid text,fid text,rating text,date text,fbid text)")
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
                                    "mode" => "fb_create",
                                    "title" => "Create A Feedback",
                                    "file" => "fbcreate.php",
                                    "type" => "child",
                                    "parent" => "faculty",
                                    "createMenuItem" => "yes",
                                    "perms" => array("sudo"),
                                    "tag" => "feedback.create"
                                  ),
                            array(
                                    "mode" => "fb_get",
                                    "title" => "Analyse Feedback",
                                    "file" => "fbget.php",
                                    "type" => "child",
                                    "parent" => "faculty",
                                    "createMenuItem" => "yes",
                                    "perms" => array("sudo"),
                                    "tag" => "feedback.create"
                                  ),
                            array(
                                    "mode" => "fbput",
                                    "title" => "Submit A Feedback Form",
                                    "file" => "fbput.php",
                                    "type" => "child",
                                    "parent" => "feedback",
                                    "createMenuItem" => "yes",
                                    "perms" => array("student"),
                                    "tag" => "feedback.create"
                                  )
                           
                           );
            return $array;
        }
    }

?>