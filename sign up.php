<?php
 require 'database.php' ; 

 $message= '';

 if (!empty($_POST['email']) && !empty($_POST['password'])) {
    
    $sql = "INSERT INTO usuario (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$password);

    if ($stmt->execute()) {
        $message = 'Cuenta Creada exitosamente!';
        
         } else  {
            $message = 'Error, revise los requerimientos e intente de nuevo';
        
         }
        
            }
        
         ?>

<?php if (!empty($message)): ?>

    <p> <?php $message ?></p>
     <?php endif; ?>



<?php include 'header.php'; ?>



<h1>Crea tu cuenta!</h1>
<span>          
Ya tienes cuenta? <a href="login.php">Inicia sesion en tu cuenta.</a>

</span>

<section    class="bg-dark text-light pt-4 mt-5">
<ul class="list-unstyled">
<form action="login.php" method="post"  class="">

<input type="text"  name="Nombre" value=""  placeholder="Primer nombre">
<br><br> 

<input type="text"  name="Apellido" value=""  placeholder="Primer Apellido">
<br> <br> 

<input type="text"  name="email" value=""  placeholder="Coloca un email">
<br> <br> 

<input type="password"  name="password" placeholder="Crea una contrasena">
<br> <br> 

<input type="password"  name="confirm_password" placeholder="Repite tu contrasena">
<br><br> 


<input type="submit"    name="" value="Send"    class="btn btn-primary">
<br>

</form>
</ul>
</section>



<?php include 'footer.php'; ?>