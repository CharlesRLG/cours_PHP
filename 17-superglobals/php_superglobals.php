<?php
header('Content-Type: application/json; charset=utf-8');


function getGlobals() {
    $myGlobals = array();
    foreach($GLOBALS as $key => $value ) {
        if ($key == 'GLOBALS') { 
            continue; 
        } else {
        $myGlobals[$key] = $value;
        }
    }
    return $myGlobals;
}


function f() {
    $superglobals = explode(' ','$GLOBALS $_SERVER $_REQUEST $_POST $_GET $_FILES $_ENV $_COOKIE $_SESSION');
    $array = [];
    foreach($superglobals as $k  => $v) {
        $array['$GLOBALS'] = getGlobals();  
        $array['$_SERVER'] = $_SERVER;
        $array['$_REQUEST'] = $_REQUEST;
        $array['$_POST'] = $_POST;
        $array['$_GET'] = $_GET;
        $array['$_FILES'] = $_FILES;
        $array['$_ENV'] = $_ENV;
        $array['$_COOKIE'] = $_COOKIE;
        $array['$_SESSION'] = $_SESSION ?? null;
    }   
    return $array;
}

// f();
$GLOBALS['a']='a';
echo json_encode(f(),JSON_PRETTY_PRINT);   

