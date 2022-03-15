

<?php
    session_start();

    include '../includes/connection.php';
    $item_id = $_GET["id"];
  
    
    if (isset($_POST["add-to-cart"])){
       
        $item_name = $_POST["item_name"];
        $price = $_POST["price"];
        $img = $_POST["img"];

            if (!mysqli_query($con, "INSERT INTO cart (item_id, img, item_name,price) VALUES('$item_id','$img','$item_name','$price');")) {
            
                  echo("Error description: " . mysqli_error($con));
                 

            } else {
                  echo (
                        "<script>
                        window.alert('Product added to cart');
                        window.location.href='../pages/all_products.php';
                        </script>"
                  );
            } 
      }

      if (isset($_GET["action"])){
        if ($_GET["action"] == "remove"){
              mysqli_query($con, "Delete from cart where item_id = $item_id");
           echo (
                        "<script>
                        window.alert('item removed from cart');
                        window.location.href='../pages/cart.php';
                        </script>"
                  );
        }
    }
 

?>

