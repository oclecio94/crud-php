<?php

include_once 'php_action/db_connect.php';

include_once 'includes/header.php';

if(isset($_GET['id'])):

    $id =$_GET['id'];
    
    $sql = "SELECT * FROM clientes WHERE id = '$id' ";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);

endif;

?>


<div class="d-flex flex-column justify-content-center align-items-center">
 <h3>Editar Cliente</h3>

 <form action="php_action/update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $dados['nome']; ?>">
    </div>
    <div class="mb-3">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $dados['email']; ?>">
    </div>
    <div class="mb-3">
        <label for="idade" class="form-label">idade</label>
        <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $dados['idade']; ?>">
    </div>
       <button type="submit" class="btn btn-primary" name="btn-editar">Atualizar</button>
       <a class="btn btn-success" href="index.php" role="button">Lista de clientes</a>
  </form>

</div>



<?php

include_once "includes/footer.php";


?>