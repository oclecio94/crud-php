<?php

session_start();
if(isset($_SESSION['mensagem'])):
  echo $_SESSION['mensagem'];
endif;

session_unset();

include_once "php_action/db_connect.php";

include_once "includes/header.php";


?>
<h3>Clientes</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Email</th>
      <th scope="col">Idade</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($connect, $sql);


    if(mysqli_num_rows($resultado) > 0):


    while($dados = mysqli_fetch_array($resultado)):

    ?>
    <tr>
      <td><?php echo $dados['nome'] ?></td>
      <td><?php echo $dados['sobrenome'] ?></td>
      <td><?php echo $dados['email'] ?></td>
      <td><?php echo $dados['idade'] ?></td>
      <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-outline-dark"><i class="fa-solid fa-pen-to-square"></i></a></td>
      <td><a href="#modal<?php echo $dados['id']; ?>" data-bs-toggle="modal" data-bs-target="#modal" class="btn btn-outline-dark"><i class="fa-solid fa-trash"></i></a></td>


      <div class="modal" tabindex="-1" id="modal<?php $dados['id']; ?>">
         <div class="modal-dialog">
           <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title">Opa!</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
         <div class="modal-body">
           <p>Tem certeza que deseja excluir esse cliente?</p>
         </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
             <!-- <button type="button" class="btn btn-primary"></button> -->
             <form action="php_action/delete.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
              <button type="submit" name="btn-deletar" class="btn btn-danger">quero deletar!</button>
             </form>
           </div>
           </div>
         </div>
      </div>


    </tr>

    <?php

     endwhile;
     else: 
    
    ?>

    <tr>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
    </tr>


    <?php

    endif;
    
    ?>


  </tbody>
</table>
<br>
<a class="btn btn-success" href="adicionar.php" role="button">Adicionar Cliente</a>









<?php

include_once "includes/footer.php";

?>