@extends('layouts.app')

@section('content')


<?php 
 function getIp(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                    return $ip;
                }
            }
        }
    }
}
echo getIp();
echo Request::ip();

if(strstr(Request::ip(),"192.168.1"){
    //test
    
}
?>

<iframe width="100%" height="100%" src="http://192.168.1.20"></iframe>
<iframe width="100%" height="100%" src="http://192.168.1.20"></iframe>
 @endsection
