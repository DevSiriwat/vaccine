<?php
    // session_destroy();

    $json = array();

    if(session_destroy()){
        $json["status"] = 200;
    }else{
        $json["status"] = 404;
    }

    return $json;
?>