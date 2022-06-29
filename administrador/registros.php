<?php include("./template/header_admi.php");  ?>
<?php include("./config/conexionBD.php");  

  $sql = $conexion->prepare("SELECT * FROM usuarios_login");
  $sql->execute();

  $registros = $sql->fetchAll();

?>

<?php  
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
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

<h1>Registros</h1>
  <table class="table"> 
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>CONTRASEÑA</th>
        <th>CORREO</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($registros as $registro) { ?>
      <tr>
        <td><?php echo $registro['id'];  ?></td>
        <td><?php echo $registro['username'];  ?></td>
        <td><?php echo $registro['pass_word'];  ?></td>
        <td><?php echo $registro['email'];  ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
</main>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
  navActivePage();
});
</script>

<script type="text/javascript" src="../main.85741bff.js"></script>
</body>

</html>