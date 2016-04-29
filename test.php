<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 22.04.2016
 * Time: 21:42
 */


$apikey= "68972_dfba74f9db958420e3f9";

try {
    $page_output = @file_get_contents( 'https://api.dacast.com/v2//account/profile/personal?apikey=68972_dfba74f9db9584dfg20e3f9&_format=json' );

    if($page_output === false){
        throw new Exception('We cannot get your personal info');
    }
} catch (Exception $e){
    var_dump($e->getMessage());
}

var_dump($data);