<?php

function getPost($key){
    if(isset($_POST[$key])){
        return $_POST[$key];
    }
}

function getGet($key){
    if(isset($_GET[$key])){
        return $_GET[$key];
    }
}

function getMD5($value){
    return md5($value);
}