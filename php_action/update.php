<?php 
session_start();

require_once 'db_connect.php';
    

    if(isset($_POST['btn-editar'])):
      $nome = $_POST['nome'];
      $sobrenome = $_POST['sobrenome'];
      $email = $_POST['email'];
      $idade = $_POST['idade']; 
      $id = $_POST['id'];
    
        
      $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";


        if(mysqli_query($connect, $sql)):
         $_SESSION['mensagem'] = "Atualizado com sucesso!";
         header('Location: ../index.php');
        else:
         $_SESSION['mensagem'] = "Erro ao Atualizar!";
         header('Location: ../index.php');

        endif;  
    endif;