
<?php
   if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass= $_POST['password'];

      if($email == 'admin@example.com' && $pass == 'admin@sms'){
         $_SESSION['login'] = true;
         header('Location:../index.php');
      }else{
         echo 'Invalid Credentials';
      }
     
   }
 

?>