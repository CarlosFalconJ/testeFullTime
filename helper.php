<?php

function salvarEmailNoBanco($email){
    $conexao = new PDO('sqlite:base.db');
    $sql = sprintf( "INSERT INTO newsletter (email) VALUES (\"%s\")", $email);
    $count  = $conexao->exec( $sql );

    return $count > 0;
}

function validarEmail($email){
if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
      return true;
    }
    else{
        return false;
}
}