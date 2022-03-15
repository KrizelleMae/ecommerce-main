<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Checkout</title>
</head>
<body>
     <div class="container">
            <ol class="breadcrumb breadcrumb-custom">
           <li class="breadcrumb-item"> <a href="user.php">Cart</a></li>
            <li class="breadcrumb-item fw-600">Information</li>
            <li class="breadcrumb-item active" aria-current="page"> Payment</li>
        </div>
        <div class="container">
           
            
            <div class="row">
          
                <div class="col-lg-6 p-0 ">
               
                   <div class="container ">
                   <div class="lead fs-5">Shipping information <div class=" fs-4 ml-3 text-warning bx bxs-paper-plane"></div> </div>
                        <form action="">
                            
                            <div class="row mt-5">
                                <input type="text" name="first" id="" class="form-control" value="<?php echo $_SESSION['user'];?>">
                                
                            </div>

                            <div class="row mt-4">
                                <input type="text" name="street" id="" class="form-control" placeholder="Street, Drive, etc.">
                            </div>

                            <div class="row mt-4">
                                <input type="text" name="barangay" id="" class="form-control" placeholder="Barangay">
                            </div>

                            <div class="row mt-4">
                                <input type="text" name="city" id="" class="form-control col-sm mr-3" value="Zamboanga City">
                                <input type="text" name="region" id="" class="form-control col-sm" value="Region IX">
                            </div>

                            <div class="row mt-4">
                                <input type="tel" name="phone" id="" class="form-control" placeholder="Contact number" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-lg bg-light container rounded px-5">
                <div class="lead fs-6 mb-3">Order summary: </div>
                
               
                        <hr class="mt-5 ">
                        <div class="row pr-0">
                            <input type="text" class="col-sm-7 mr-3 form-control" placeholder="Voucher code">
                            <a href="" class="btn btn-warning col-sm float-right">Apply</a>
                        </div>

                        <hr>
                        <div class="container">
                        <div class="card bg-white shadow" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Total:</h5>
                                <p class="card-text"><div id="total"></div></p>

                                <h6 class="card-subtitle mb-2 text-muted mt-4">Payment Method: </h6>
                                <form action="" method="post">
                                    <input type="radio" name="pay_method" class="mr-2 mt-3">Cash on Delivery <br>
                                    <input type="radio" name="pay_method" class="mr-2">GCash <br>
                                    <input type="radio" name="pay_method" class="mr-2">Credit Card
                                </form>
                                <a href="" class="btn btn-warning">Place order</a>
                                
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
  
</body>
</html>