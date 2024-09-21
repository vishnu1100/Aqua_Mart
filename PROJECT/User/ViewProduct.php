<?php
ob_start();
include('Header.php');
include('../Asset/Connection/connection.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Product</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    .custom-alert-box {
        z-index: 1;
        width: 100%;
        max-width: 300px;
        position: fixed;
        bottom: 20px;
        right: 20px;
        left: auto;
    }
    .alert {
        display: none;
    }
</style>
</head>

<body>




<div class="container ">

    <div class="custom-alert-box">
        <div class="alert alert-success">Successfully Added to Cart !!!</div>
        <div class="alert alert-danger">Failed to Add Cart !!!</div>
        <div class="alert alert-warning">Already Added to Cart !!!</div>
    </div>

    <div class="order_area">
        <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-70">
                            <h3>Our Products</h3>
                            <p>Fresh Food Health good</p>
                        </div>
                    </div>
                </div>
            <div class="row">
            <?php
            $i = 0;
            $sel = "select * from tbl_product p inner join tbl_category c on p.Cat_id=c.Cat_id where seller_id=" . $_GET['sid'];
            $res = $conn->query($sel);
            while ($row = $res->fetch_assoc()) {
                $i++;
            ?>
                <div class="col-xl-4 col-md-6 card">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="../Asset/Files/User/Photo/<?php echo $row['product_photo'] ?>" alt="" height="300">
                            <div class="order_prise">
                                <span><?php echo $row["product_price"] ?></span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a><?php echo $row["product_name"] ?></a></h3>
                            <p><?php echo $row["product_details"] ?>
                            </p>
                            <?php
                                           
                                           $stock = "select sum(stock_quantity) as stock from tbl_stock where product_id = '" . $row["product_id"] . "'";
                                            $result2 =$conn->query($stock);
                                           $row2=$result2->fetch_assoc();


                                           $stocka = "select sum(cart_qty) as stock from tbl_cart where product_id = '" . $row["product_id"] . "'";
                                           $result2a = $conn->query($stocka);
                                          $row2a=$result2a->fetch_assoc();

                                          $stock = $row2["stock"] - $row2a["stock"];
                                          if ($stock > 0) {
                                       ?>
                                       <a class="boxed_btn"  onclick="addCart('<?php echo $row['product_id'] ?>')"   >Add to Cart</a>
                                       <?php
                                       } else if ($stock== 0) {
                                       ?>
                                       <a class="boxed_btn">Out of Stock</a>
                                       <?php
                                           }
                                        else {
                                       ?>
                                       <a class="boxed_btn">Stock Not Found</a>
                                       <?php
                                           }
                                       ?>
                                      
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
              
            </div>
        </div>
    </div>
   
</div>

<script src="../Asset/JQ/jQuery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
 function addCart(id) {
    $.ajax({
        url: "../Asset/AjaxPages/AjaxAddtoCart.php?id=" + id,
        success: function(response) {
            if (response.trim() === "Added to Cart") {
                $(".alert-success").fadeIn(300).delay(1500).fadeOut(400);
            } else if (response.trim() === "Already Added to Cart") {
                $(".alert-warning").fadeIn(300).delay(1500).fadeOut(400);
            } else {
                $(".alert-danger").fadeIn(300).delay(1500).fadeOut(400);
            }
        }
    });
 }
</script>
</body>
</html>

   <!-- order_area_start -->
 
    <!-- order_area_end -->

<?php
include('Footer.php');
ob_flush();
?>
