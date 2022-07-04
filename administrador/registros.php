<?php include("./template/header_admi.php");  ?>
<!-- LISTANDO DATOS DE LA BD -->
<?php include("./config/conexionBD.php");  

  $sql = $conexion->prepare("SELECT * FROM usuarios_login");
  $sql->execute();

  $registros = $sql->fetchAll();

?>
<!-- GUARDANDO LOS DATOS DEL FORMULARIO, REGISTRANDOLOS EN LA BD Y VALIDANDOSE POR EL DOCUMENTO VALIDATEFORM -->
<?php  
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
    }
   
?>
<!-- ELIMINANDO LOS DATOS POR ELIMINACION FISICA -->
<?php
  if($_GET){
    $id = $_GET['borrar'];
    $consulta = "DELETE FROM `usuarios_login` WHERE `id`=".$id;
    $sql = $conexion->prepare($consulta);
    
    $sql->execute();
    
  }
?>

<main class="" id="main-collapse">
  <form action="registros.php" method="POST" class="main-form">
    <input type="text" name="username" placeholder="Nombre" class="form" value="<?php if(isset($username)) echo $username; ?>">
    <input type="text" name="email" placeholder="Email" class="form" value="<?php if(isset($email)) echo $email; ?>">
    <input type="password" name="password" placeholder="Contraseña" class="form" value="<?php if(isset($password)) echo $password; ?>">
    <input type="submit" value="Registrarse" class="btn" name="submit">
    <?php include("./config/validarForm.php"); ?>
  </form>
  <?php
    echo "\"Mucho Gusto\"dijo laura muy sorprendida";
?>
<h1>Registros</h1>
  <table class="table"> 
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>CONTRASEÑA</th>
        <th>CORREO</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($registros as $registro) { ?>
      <tr>
        <td><?php echo $registro['id'];  ?></td>
        <td><?php echo $registro['username'];  ?></td>
        <td><?php echo $registro['pass_word'];  ?></td>
        <td><?php echo $registro['email'];  ?></td>

      <td>
        <a href=""><img width="30" heigth="30" src="./img/icon/editar.png" alt=""></a> 
        <a href="?borrar=<?php echo $registro['id']?>" name="borrar" id="borrar"><img width="30" heigth="30" src="./img/icon/delete.png" alt=""></a>
      </td>

      </tr>
      <?php } ?>
    </tbody>
  </table>
  
</main>
<script>
  let eliminar = document.getElementById("borrar");

  a
  function borrar() {
    
  }
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
  navActivePage();
});
</script>
<script src="./js/script.js"></script>
<script type="text/javascript" src="../main.85741bff.js"></script>
</body>

</html>