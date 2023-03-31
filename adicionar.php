<?php


include_once "includes/header.php";


?>


<div class="d-flex flex-column justify-content-center align-items-center"> 
<h3>Adicionar Cliente</h3>

 <form action="php_action/create.php" method="POST">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="insira seu nome...">
       </div>
       <div class="mb-3">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="insira seu sobrenome...">
       </div>
       <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="insira seu email...">
       </div>
       <div class="mb-3">
        <label for="idade" class="form-label">idade</label>
        <input type="number" class="form-control" id="idade" name="idade" placeholder="insira sua idade...">
       </div>
       <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
       <a class="btn btn-success" href="index.php" role="button">Lista de clientes</a>
 </form>

</div>



<?php

include_once "includes/footer.php";

?>