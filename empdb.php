<?php
    $serverName = "DESKTOP-SF7OLNN\SQLEXPRESS";
    $connectionInfo = array("Database"=>"test","UID"=>"sa","PWD"=>"12345","CharacterSet" => "UTF-8");
    $cone =sqlsrv_connect($serverName,$connectionInfo);

    if($cone) {
        /*echo "connection established.<br />";*/
        
    }else{
        echo "connection could not be established.<br/>";
        die(print_r( sqlsrv_errors(), true));
        
    }

?>