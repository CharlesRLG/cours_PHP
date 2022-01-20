<?php

    $http_response = [];

    $http_response['HTTP_REQUEST']['GENERAL']['URL'] = full_url( $_SERVER );
    $http_response['HTTP_REQUEST']['GENERAL']['PROTOCOL'] = $_SERVER['SERVER_PROTOCOL'];
    $http_response['HTTP_REQUEST']['GENERAL']['METHOD'] = $_SERVER['REQUEST_METHOD'];
    $http_response['HTTP_REQUEST']['GENERAL']['REMOTE_ADDR'] = get_remote_address() ;
    
    $http_response['HTTP_REQUEST']['HEADERS'] = getallheaders();

    $http_response['HTTP_REQUEST']['$_REQUEST'] = $_REQUEST;
    $http_response['HTTP_REQUEST']['$_COOKIE'] = $_COOKIE;
    $http_response['HTTP_REQUEST']['$_POST'] = $_POST;
    $http_response['HTTP_REQUEST']['$_GET'] = $_GET;

    $http_response['HTTP_REQUEST']['BODY'] = filter_var(file_get_contents('php://input'));

    header('Content-Type: application/json; charset=utf-8');

    $http_response['HTTP_RESPONSE']['CODE'] = http_response_code();
    $http_response['HTTP_RESPONSE']['HEADERS'] = headers_list();



    echo json_encode($http_response,JSON_PRETTY_PRINT);


    # %3Cscript%3Ealert%28%27xss%27%29%3C%2Fscript%3E
    # <script>alert('xss')</script>
    function get_remote_address() 
    {
        return 
            isset($_SERVER['HTTP_CLIENT_IP']) 
                ? $_SERVER['HTTP_CLIENT_IP'] 
                : (isset($_SERVER['HTTP_X_FORWARDED_FOR']) 
                    ? $_SERVER['HTTP_X_FORWARDED_FOR'] 
                    : $_SERVER['REMOTE_ADDR']);
    }
    



    function url_origin( $s, $use_forwarded_host = false )
    {
        $ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
        $sp       = strtolower( $s['SERVER_PROTOCOL'] );
        $protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
        $port     = $s['SERVER_PORT'];
        $port     = ( ( ! $ssl && $port=='80' ) || ( $ssl && $port=='443' ) ) ? '' : ':'.$port;
        $host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
        $host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
        return $protocol . '://' . $host;
    }

    function full_url( $s, $use_forwarded_host = false )
    {
        return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
    }

    $absolute_url = full_url( $_SERVER );


    // header_register_callback
    // header_remove
    // headers_list
    // if (headers_sent($file, $line)) echo "Headers sent in $file on line $line";


    /*
    Short version to output link on a webpage
    $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
    echo '<a href="' . $escaped_url . '">' . $escaped_url . '</a>';

    Full version
    function url_origin( $s, $use_forwarded_host = false )
{
    $ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
    $sp       = strtolower( $s['SERVER_PROTOCOL'] );
    $protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
    $port     = $s['SERVER_PORT'];
    $port     = ( ( ! $ssl && $port=='80' ) || ( $ssl && $port=='443' ) ) ? '' : ':'.$port;
    $host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
    $host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
    return $protocol . '://' . $host;
}

function full_url( $s, $use_forwarded_host = false )
{
    return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
}

$absolute_url = full_url( $_SERVER );
echo $absolute_url;


scheme://username:password@domain:port/path?query_string#fragment_id

/username:password not included
#fragment_id       not included

https://stackoverflow.com/questions/6768793/get-the-full-url-in-php
*/



    /*
    //=================================================== //


# https://(www.)example.com/subFolder/myfile.php?var=blabla#555
$_SERVER["DOCUMENT_ROOT"]  🡺 /home/user/public_html
$_SERVER["SERVER_ADDR"]    🡺 143.34.112.23
$_SERVER["SERVER_PORT"]    🡺 80(or 443 etc..)
$_SERVER["REQUEST_SCHEME"] 🡺 https                                         //similar: $_SERVER["SERVER_PROTOCOL"] 
$_SERVER['HTTP_HOST']      🡺         example.com (or with WWW)             //similar: $_SERVER["SERVER_NAME"]
$_SERVER["REQUEST_URI"]    🡺                       /subFolder/myfile.php?var=blabla
$_SERVER["QUERY_STRING"]   🡺                                             var=blabla
__FILE__                   🡺 /home/user/public_html/subFolder/myfile.php
__DIR__                    🡺 /home/user/public_html/subFolder              //same: dirname(__FILE__)
$_SERVER["REQUEST_URI"]    🡺                       /subFolder/myfile.php?var=blabla
parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)🡺  /subFolder/myfile.php 
$_SERVER["PHP_SELF"]       🡺                       /subFolder/myfile.php

// ==================================================================//
//if "myfile.php" is included in "PARENTFILE.php" , and you visit  "PARENTFILE.PHP?abc":
$_SERVER["SCRIPT_FILENAME"]🡺 /home/user/public_html/parentfile.php
$_SERVER["PHP_SELF"]       🡺                       /parentfile.php
$_SERVER["REQUEST_URI"]    🡺                       /parentfile.php?var=blabla
__FILE__                   🡺 /home/user/public_html/subFolder/myfile.php

// =================================================== //
// ================= handy variables ================= //
// =================================================== //
//If site uses HTTPS:
$HTTP_or_HTTPS = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']!=='off') || $_SERVER['SERVER_PORT']==443) ? 'https://':'http://' );            //in some cases, you need to add this condition too: if ('https'==$_SERVER['HTTP_X_FORWARDED_PROTO'])  ...

//To trim values to filename, i.e. 
basename($url)             🡺 myfile.php

//excellent solution to find origin
$debug_files = debug_backtrace();       
$caller_file = count($debug_files) ? $debug_files[count($debug_files) - 1]['file'] : __FILE__;
*/