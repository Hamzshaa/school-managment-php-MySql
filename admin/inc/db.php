<?php
    $db['db_host'] = "localhost";
    $db["db_user"] = "trident";
    $db["db_password"] = "trident";
    $db["db_name"] = "school";
    
    foreach($db as $key => $value){
        define(strtoupper($key), $value);
    }
    
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    // check if connection is successful

    if(!$con){
        echo "Connection failed";
    }
?>