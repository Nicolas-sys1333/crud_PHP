<!DOCTYPE html>
<html>
<head>
  <title>User Registration Form</title>
  <link rel="stylesheet" href="index.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php
session_start();
$usuarios = [];
if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

        $usuario = [
            'nome' => $nome,
            'idade' => $idade,
            'cidade' => $cidade,
            'email' => $email,
            'senha' => $senha
        ];
        $usuarios[] = $usuario;
    } else {
      $msg = "Preencha todos os campos";
      echo "<script>alert('$msg');</script>";
    }


?>


  <div class="login-wrap">
    <div class="login-html">
        <h2>Registrar-se</h2>
      <div class="login-form">
        <div class="sign-up-htm">
          <form action="" method="post">
            <table class="cadastro">
              <tr class="cadastro_tam">
                <td>Nome:</td>
                <td><input type="text" id="validationCustom01" class="form-control" name="nome" required></td>
                <div class="invalid-feedback">
              </tr>
              <tr>
                <td>Idade:</td>
              <td><input type="number" id="validationCustom02" class="form-control" name="idade" required></td>
              <div class="invalid-feedback">  
            </tr>
              <tr>
                <td>Cidade</td>
                <td><input type="text" id="validationCustom03"  class="form-control" name="cidade" required></td>
                <div class="invalid-feedback"> 
              </tr>
              <tr>
                <td>Email:</td>
                <td><input type="email" id="validationCustom04"  class="form-control" name="email" required></td>
                <div class="invalid-feedback"> 
              </tr>
              <tr>
                <td>Senha:</td>
                <td><input type="password" id="validationCustom05"  class="form-control" name="senha" required></td>
                <div class="invalid-feedback"> 
              </tr>
              <tr>
                <td colspan="2">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" name="submit">Salvar</button>
                      </div>    
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>

  <h2>Usuários registrados</h2>
<table class="table table-bordered border-primary table-sm">
<thead>    
<tr>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Cidade</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>
        <th scope="col">Ações</th>
    </tr>
  </thead>


<?php
if(count($usuarios) > 0){
    foreach($usuarios as $key => $usuario){
        echo "<tbody>";
        echo "<tr>";
        echo "<td>". $usuario['nome']. "</td>";
        echo "<td>". $usuario['idade']. "</td>";
        echo "<td>". $usuario['cidade']. "</td>";
        echo "<td>". $usuario['email']. "</td>";
        echo "<td>". $usuario['senha']. "</td>";
        echo "<td><a href='update.php?id=". $key. "'>Update</a> | <a href='delete.php?id=". $key. "'>Delete</a></td>";
        echo "</tr>";
        echo "</tbody>";
    }
}
?>
</table>



<?php
if(isset($usuarios[$id])){
    $id = $_GET['id'];
    if(isset($usuarios[$id])){
        $usuario = $usuarios[$id];
    }
}
?>

<br/>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>