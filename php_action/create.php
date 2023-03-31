<?php
session_start();

require_once 'db_connect.php';
    

    if(isset($_POST['btn-cadastrar'])):
      $nome = $_POST['nome'];
      $sobrenome = $_POST['sobrenome'];
      $email = $_POST['email'];
      $idade = $_POST['idade']; 
    
        
      $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";


        if(mysqli_query($connect, $sql)):
         $_SESSION['mensagem'] = "Cadastrado com sucesso!";
         header('Location: ../index.php');
        else:
         $_SESSION['mensagem'] = "Erro ao cadastrar!";
         header('Location: ../index.php');
        endif;  
    
    
    endif;