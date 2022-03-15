<?php 

// $error = "";
session_start();


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <link rel="stylesheet" href="../css/all.css" />

      <title>My Cart</title>
      <?php 
         include "../includes/links.php";  
      ?>
   </head>
   <body class="bg-white">
      <div class="container my-5">
         <!-- Breadcrumb -->
         <div class="mt-5 pt-2">
            <nav class="breadcrumb text-dark fs-5">
               <ol class="breadcrumb fs-6">
                  <li class="breadcrumb-item">
                     <a href="./" class="text-primary text-decoration-none"
                        >Home</a
                     >
                  </li>
                  <li
                     class="breadcrumb-item active text-secondary"
                     aria-current="page"
                  >
                     All products
                  </li>
               </ol>
            </nav>
         </div>

         <div class="row mt-5">
            <div class="col-lg">
               <h4 class="fw-bolder text-uppercase">My Shopping Cart</h4>
               <div class="mt-4">
                  <!-- left cart -->

                  <div class="">
                     <table
                        class="table table-borderless w-100 table-responsive"
                     >
                        <tr>
                           <th width="20%">Item</th>
                           <th>Item name</th>
                           <th class="text-center">Price</th>
                        </tr>
                        <?php

                              include '../includes/connection.php';
                             
                              // $id = $_SESSION['id'];

                              $query= "select * from `cart`;";
                              $result = mysqli_query($con,$query);
                                     
                                while ($row = mysqli_fetch_array($result)) {
                         ?>

                        <tr class="border">
                           <td class="">
                              <img src="../<?php echo $row['img']; ?>"
                              class="cat alt="..." height="100px">
                           </td>

                           <td class="py-5">
                              <?php echo $row['item_name']; ?>
                           </td>

                           <td>
                              <div class="pt-4 text-center">
                                 &#8369;
                                 <?php echo $row['price']; ?>.00
                              </div>
                           </td>

                           <td>
                              <div class="mt-4 float-end">
                                 <a
                                 onclick="return confirm('Are you sure you want to delete this item?');" 
                                    href="../actions/add_to_cart.php?action=remove&id=<?php echo $row["item_id"]; ?>"
                                    class="btn btn-danger me-5"
                                    >Remove</a
                                 >
                              </div>
                           </td>
                        </tr>
                        <?php 
                                   }
                                   ?>

                        <tr class="border-top">
                           <td class="mt-5">
                              <div class="fw-bold pt-3">
                                 <i class="bx bx-chevron-left"></i>
                                 <a
                                    href="./"
                                    class="text-decoration-none text-dark"
                                    >Back to Shoppping</a
                                 >
                              </div>
                           </td>
                           <td></td>
                           <td class="text-center">
                              <div class="fw-bold pt-3">Subtotal:</div>
                           </td>
                           <td class="float-end">
                              <div class="fw-bold pt-3 fs-5">&#8369; 5000</div>
                           </td>
                        </tr>
                     </table>

                     <button
                        class="btn btn-dark rounded-pill py-2 px-5 float-end mt-5"
                     >
                        PROCEED TO CHECKOUT
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
