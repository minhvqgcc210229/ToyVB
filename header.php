<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToyVB</title>
    <link rel="stylesheet" href="ShopVB.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        /* .navbar-nav div.dropdown{
            padding: 0 50px;
        } */
    </style>
</head>

<body>
    <header class="navbar navbar-expand-md navbar-dark bg-white">
        <div class="container-fluid">
            <a href="index.php"  ><img src="../ToyVB/images/ed54d6f3137fc3453f4ce4e03d2b7495.jpg" alt="ToyVB" width="100%" height="100px"></a>
            <a href="index.php" class="nav-item nav-link" style="color:black">ToyVB</a>
            <div class="navbar-nav">
                <div class="navbar-nav ms-auto">
                    <?php
                if(isset($_SESSION['user_name'])):
                ?>
                    <a  onclick="window.location.href='update_customer.php'"class="nav-item nav-link" style="color:black">Welcome,<?=$_SESSION['user_name']?></a>
                    <button onclick="window.location.href='logout.php'" type="button" class="nav-item nav-link"
                        style="color:black">Logout</button>
                    <?php
                    else:
                ?>
                    <button onclick="window.location.href='login.php'" type="button" class="nav-item nav-link"
                        style="color:black">Login</button>
                    <button onclick="window.location.href='register.php'" type="button" class="nav-item nav-link"
                        style="color:black">Register</button>
                    <?php
                endif;
                ?>
                </div>
            </div>
        </div>
    </header>



    <nav class="navbar navbar-expand-md" style="background-color:#0000FF;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarMain">
            <div class="navbar-nav col-md-8">
                <a class="nav-link active me-4 text-light" href="index.php">Home</a>
           
                <div class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown">Category</a>
                    <!--dropdown để sổ r sổ tiếp -->
                    <div class="dropdown-menu bg-dark">
                        <?php 
                            include_once('connect.php');
                            $c = new Connect();
                            $dblink = $c->connectToMySQL();
                            $sql = "SELECT * FROM category c join product p WHERE c.Category_id=p.Category_id GROUP BY Category_name ";
                            $re = $dblink->query($sql);
                            while($row= $re->fetch_row()):
                         ?>
                        <a class="dropdown-item text-light" href="search.php?search=<?=$row[2]?>&btnSearch=<?=$row[2]?>"><?=$row[2]?></a>
                        <?php
                             endwhile;
                        ?>
                    </div>
                </div>
               

                <a class="nav-link active me-4 text-light" href="cart.php">Cart</a>
                
                <div class="dropdown">
                    <a href ="#" class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown">Manager</a>
                             <div class="dropdown-menu bg-dark">
                                 <a class="dropdown-item text-light" href="category_management.php">Category</a>
                                 <a class="dropdown-item text-light" href="product_manger.php">Product</a>
                             </div>
                </div>

            </div>


            <div class="col-md-4 d-inline-flex ">
            <form class="example" action="search.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            </div>
        </div>
    </nav>
    <!-- <?php
	    include_once("connection.php");
        if(isset($_GET['page']))
    {
        $page = $_GET['page'];
        if($page=="register"){
            include_once("register.php");
        }
        elseif($page=="login"){
            include_once("login.php");
        }
        elseif($page=="category_management"){
            include_once("category_management.php");
        }
        elseif($page=="product_management"){
            include_once("product_management.php");
        }
        elseif($page=="add_category"){
            include_once("add_category.php");
        }
        elseif($page=="update_category"){
            include_once("update_category.php");
        }
        elseif($page=="logout"){
            include_once("logout.php");
        }
    }
    else{
        include("Content.php");
    }
	?> -->