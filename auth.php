
<header> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<?php      
session_start();
    include('conn.php');  
    $email = $_POST['email'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from user where email= '$email' and mdp = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['log']='good';
            header("location:form.php"); 

        }  
        else{  
            ?>
            <script >
         //   swal("Email ou Mdp invalide", "Essayez de nouveau !", "warning");
            
            
             document.location.href="/uml/login.php"

                      </script>
             
            <?php

        
        }     
?>  