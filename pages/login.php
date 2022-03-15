<?php    

session_start();
require '../includes/connection.php';

if(isset($_POST['login'])){
       
  $email = $_POST['email'];
  $password = $_POST['password'];
     
  $sql = mysqli_query($con, "select * from users where email = '$email' AND password = '$password' limit 1");
      

   if(mysqli_num_rows($sql) > 0){ 
      while($row = mysqli_fetch_assoc($sql)){ 
        $email = $row["email"]; 
        
        if($row["role"] == "admin"){ 
          $_SESSION['admin_email'] = $row["email"]; 
          $_SESSION['admin_pass'] = $row["password"]; 
          $_SESSION['role'] = $row["role"]; 
          
          header("location: ../admin/"); 
        } elseif ($row['password'] != $password){ 
          echo "<script>alert('Wrong password')</script>";
        } else{
            $_SESSION['name'] = $row["name"];
            $_SESSION['role'] = $row["role"];
            $_SESSION['userid']  = $row['userid'];

            header("location: ./user_page.php"); 
         }  

      }
   }
}
      
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Login</title>
      <?php 
         include "../includes/links.php";  
      ?>

      <link rel="stylesheet" href="../css/all.css" />
   </head>
   <body>
      <div class="login-container">
         <div class="shadow-sm">
            <ul class="nav nav-tabs">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"
                     >Login</a
                  >
               </li>
               <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="./signup.php"
                     >Sign up</a
                  >
               </li>
            </ul>

            <div class="container p-5">
               <form action="login.php" method="POST">
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label"
                        >Email address</label
                     >
                     <input type="email" class="form-control" name="email"/>
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label"
                        >Password</label
                     >
                     <input type="password" class="form-control" name="password" required/>
                  </div>

                  <a href="#"><small class="fw-bold">Forgot password</small></a>

                  <button
                     type="submit"
                     class="btn btn-primary mt-4 rounded-pill col-md-12"
                     name="login"
                  >
                     Login
                  </button>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>
