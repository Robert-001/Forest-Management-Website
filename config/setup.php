<?php 
    $connection = mysql_connect("localhost","root"); 
    if(!$connection) { 
    die("Database connection failed: " . mysql_error()); 
    }else{
    $db_select = mysql_select_db("webapp",$connection); 
        if (!$db_select) { 
            die("Database selection failed:: " . mysql_error()); 
        } 
    }

    $site_title = 'Gujarat Forest Website';
    $page_title = 'Home';
 ?>
 