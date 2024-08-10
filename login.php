
<?php
session_start();


require 'database.php'; 
if (!empty($_POST['email']) && (!empty($_POST['password']))) {
    $records = $conn->prepare('SELECT id, email,password   FROM usuario WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if(count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['usuario_id'] = $results['id'];
        header('location: /Restaurante log');
    }
   
}

?>

<?php include 'header.php'; ?>

<h1>Inicia Sesion en tu cuenta:</h1>

<span>          
No tienes cuenta? <a href="sign up.php">Crea tu cuenta aqui.</a>

</span>

<?php if(!empty($message)) : ?>

<p> <?= $message ?>    </p>
 <?php endif;  ?>


<section    class="bg-dark text-light pt-4 mt-5">
<ul class="list-unstyled">
<form action="login.php" method="post"  class="">

<input type="text" name="email" value=""  placeholder="Tu email">

<br> <br>

<input type="password" name="password" placeholder="Tu contrasena">
<br> <br>

<input type="submit" name="" value="Send"    class="btn btn-primary">
<br>

</form>
</ul>
</section>



<?php include 'footer.php'; ?>

