<?php include "php\cabecera.php" ?>
<?php
    if(isset($_POST['submit'])){
    
      $nombre =$_POST['nombre'];   
      $apellido =$_POST['apellido'];
      $usuario =$_POST['usuario'];
      $contrasena =$_POST['contrasena'];
      $grado =$_POST['grado'];
    }
?>

<body class="uno">
<div class="navegacion">

 <div class="manual">
  <a href="php/manual.php"><img style="float:left; margin: 0% 0% 0% 0%;" src="imagen/manual.png" width="30px" height="25px" /></a>
 </div>
    <a href="php/inicio.php" class="activo">Iniciar Sesión</a>
    <a href="php/conocenos.php">Conocenos</a>
</div>
 

 <div class="container">
 
 
 <form class="tres" method="post" href="php/login.php">
 <div class="logo">
 <a href="php/conocenos.php"><img style="float:center; margin: 1% 10% -10% 36%;" src="imagen/logo.png" width="25%" /></a>
 </div>
    	<h1>¡Registrate!</h1>
      
      <input type="text" name="nombre" placeholder="Nombre completo">

      <input type="text" name="apellido" placeholder="apellido">

      <input type="email" name="usuario" placeholder="usuario">

      <input type="password" name="contraseña" placeholder="Contraseña">
      
        <input type="submit" name="register">
    </form>
        <?php 
        include("php/registrar.php");
        ?>
       
 </div>
 





</body>
</html>