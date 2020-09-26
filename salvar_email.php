<?php

include "helper.php";
  
try {


    /**
     * Aqui você deve implementar o código que deve:
     *    - Capturar informações (No caso email) de formulario html
     *    - Verificar se o email é válido. 
     *       - Se o email for válido salvar no banco de dados e mostrar a mensagem "Email "<email informado no formulário>" salvo com sucesso"
     *       - Se o email não form válido mostrar a mensagem "Email inválido!"
     */
    
    $email = $_POST["email"];

    if(!validarEmail($email)){
        echo 'Email inválido!';
    }else{
        //$email = "meu@email.com";  
        salvarEmailNoBanco($email); 
        echo "Email ",$email," salvo com sucesso"; 
       
    } 
    
    
    /**
     * Para salvar no banco de dados você pode usar a função "salvarEmailNoBanco"
     * Exemplo de uso:  
     *    $email = "meu@email.com";  
     *    salvarEmailNoBanco($email);
     */
    
} catch (\PDOException $e) {
    die($e->getMessage());
}



