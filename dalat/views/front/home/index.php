<html>
<head>
    <title>Flower Shop</title>
    <link rel="stylesheet" href="templates/front/css/main.css" text="text/css" />
    <link rel="stylesheet" href="templates/front/css/default.css" text="text/css" />
    <link rel="stylesheet" href="templates/front/css/bootstrap.min.css" text="text/css" />


</head>
<body>

<div class="wrapper">
    <div class="header-container">
        <div class="container top-link">

        </div>

        <div class="header-logo container">
            <img src="images/logo.png">
        </div>

        <div class="navbar-container">
            <div class="container">
                <div class="nav-item nav-item-icon">
                    <a href="index.php"><img src="images/home.png" width="25"  height="25"></a>
                </div>

                <?php while($category_active = mysqli_fetch_assoc($category_active_list)): ?>
                    <div class="nav-item">
                        <a  href="<?php echo SITE_URL . 'product-list.php?category_id=' .  $category_active['category_id']; ?>"><?php echo  $category_active['name']; ?></a>
                    </div>
                <?php endwhile; ?>


            </div>
        </div>

        <?php include 'silder.php'?>

    </div>

</div>
<script src="templates/front/js/jquery-3.1.1.min.js"></script>
<script src="templates/front/js/bootstrap.min.js"></script>
<script src="templates/front/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.1.2/mustache.min.js"></script>
</body>


</html>