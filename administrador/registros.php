<?php include("./template/header_admi.php");  ?>
<?php include("./config/conexionBD.php");  

  $sql = $conexion->prepare("SELECT * FROM usuarios_login");
  $sql->execute();

  $registros = $sql->fetchAll();

?>

<?php  
  // $nombreErr = $emailErr = "";
  // $nombre = $email = "";
  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // if (empty($_POST["nombre"])) {
  // $nombreErr = "Nombre es requerido";
  // }else {
  // $nombre = validar_input($_POST["nombre"]);
  // } 
  
  // if (empty($_POST["email"])) {
  // $emailErr = "Email es requerido";
  // }else {
  // $email = validar_input($_POST["email"]); 
  // // Verifica el correcto formato de email
  // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // $emailErr = "Formato de email invalido"; 
  // }
  // }
  // } 
    if($_POST){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
      }
      
      $sql = $conexion->prepare("INSERT INTO `usuarios_login` (`id`, `username`, `email`, `pass_word`) VALUES (NULL, '$username', '$email', '$password'); ");

      $sql->execute();

      $sqlRegistros = $sql->fetch();

      header("Location:./inicio.php");

    }else{
      
    } 


   
?>

<main class="" id="main-collapse">
  <form action="registros.php" method="POST" class="main-form">
    <input type="text" name="username" placeholder="Nombre" class="form">
    <input type="email" name="email" placeholder="Email" class="form">
    <input type="password" name="password" placeholder="Contraseña" class="form">
    <input type="submit" value="Registrarse" class="btn">
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