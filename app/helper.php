<?php

if(!function_exists('randomString')){
    function randomString($length){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        
        $str = '';
        for($i=0;$i<$length;$i++){
            $index = rand(0,strlen($characters)-1);
            $str .= $characters[$index];
        }
        return $str;
    }
}

if(!function_exists('p')){
    function p($data){
        echo "<pre>";
        print_r($data);
        echo "<pre>";

    }
}

