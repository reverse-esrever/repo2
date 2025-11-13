<?php

//Прописали логику авторизации

$login = "user1";
$password = "12345678";

function checkCredentials($login, $password){
    if(strlen($login) < 3){
        echo("Длина логина меньше 3 символов");
    } 
    if(strlen($password) < 8){
        echo("Длина пароля меньше 8 символов");
    } 
}




