<?php
function getRandomPassword($length, $chars){
    $password = '';
    for($i = 0; $i <= $length -1; $i++){
        $index = rand(0, strlen($chars) - 1);
        $char = substr($chars, $index, 1);
        $password .= $char;
    }
    return $password;
}