<?php
session_start();
include "conn.php";
include "login.php";

$email = $_POST['email'];
$password = $_POST['password'];



    $sql = mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password'");
    if(!$sql || mysqli_num_rows($sql)==0){
        $qry = mysqli_fetch_array($sql);
        $_SESSION['login']='bien';
        $_SESSION['email'] = $qry['email'];
        $_SESSION['nom'] = $qry['nom'];
       
            header("location:UML.php");
            
    }else{
        ?>
        <script >
        swal("Email ou Mdp invalide", "Essayez de nouveau !", "warning");
          wait(4);
          $_SESSION['login']='login';
        </script>
         
        <?php
    }
    

    

?>
