<?php
include_once 'connect.php';
include_once 'header.php';
?>

<div class="row">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active d-flex" data-bs-interval="3000">
                <img src="../ToyVB/images/banner6.webp" width="100%" height="400px" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="../ToyVB/images/khai-truong-khu-vui-choi-17.jpg" width="100%" height="400px" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="../ToyVB/images/slider-img1.webp" width="100%" height="400px" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="section_services pt-4">
    <div class="container">
        <div class="row promo-box">
            <div class="col-lg-3 md-3 col-sm-6 col-6">
                <div class="promo-item">
                    <div class="info">
                        <span> Nationwide shipping</span>
                        <br>
                        Payment on delivery
                    </div>
                </div>
            </div>
            <div class="col-lg-3 md-3 col-sm-6 col-6 ">
                <div class="promo-item">
                    <div class="info">
                        <span>Quality</span>
                        <br>
                        Product quality guarantee
                    </div>
                </div>
            </div>
            <div class="col-lg-3 md-3 col-sm-6 col-6">
                <div class="promo-item ms-1">
                    <div class="info">
                        <span>Make a payment</span>
                        <br>
                        with many methods
                    </div>
                </div>
            </div>
            <div class="col-lg-3 md-3 col-sm-6 col-6">
                <div class="promo-item">
                    <div class="info">
                        <span>Change new product</span>
                        <br>
                        If the product is defective
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="Section_hot_product pt-4">
    <div class="container">
        <div class="title_modules text-center" style="color:coral">
            <h2>
                <a>
                    <span>NEW PRODUCT</span>
                </a>
            </h2>
        </div>
    </div>
  
    <div class="row">
    <?php
  
  $sql = "SELECT * FROM `product` ORDER by Product_id DESC LIMIT 4";
  //1
  $re = $dblink->query($sql);
  $re->data_seek(0);     //Lấy tại vị trí đầu tiên trong cơ sở dữ liệu 
  if ($re->num_rows > 0): //Sử dụng : thay {}
      while ($row = $re->fetch_assoc()):                     //fetch_assoc Gọi theo tên của cột trong cơ sở dữ liệu              
?>
        <div class="col-md-3 pb-3">
            <div class="card">
                <img src="./images/<?= $row['image']?>" class="card-img-top" 
                    style="margin: auto; width: 300px;" />
            </div>
                <div class="card-body">     
                    <a href="detail.php?id=<?=$row['Product_name']?>" class="text-decoration-none">
                        <h5 class="card-title"><?=$row['Product_name']?></h5>
                    </a>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$row['Price']?><span>&#8363;</span></h6>
                    <a href="cart.php?id=<?=$row['Product_id']?>" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        <?php
endwhile;
else:
    
    echo "Not found";
endif;
        ?>
        </div>
</section>

<?php
include_once "footer.php";
?>