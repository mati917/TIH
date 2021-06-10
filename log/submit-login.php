<?php
// Get DDBB data
include("../inc/db.php");

if(isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['email'])){
    
    // Getting user data
    $user   = $_POST['user'];
    $email  = $_POST['email'];
    $pass   = $_POST['pass'];

    // Inyección SQL
    $sql = "SELECT `User`,`Email`,`Password` FROM users WHERE `User`='$user' AND `Email`='$email' AND `Password`='$pass';";
    $query = mysqli_query($db, $sql);
    $row = mysqli_num_rows($query);

    // Verificación
    if($row){
        session_start();
        $_SESSION['user'] = $user;
        header('Location: ../');
    }else{
        header('Location: ../login.php');
    }

    
}else{
    die("¡Error de conexión!");
}