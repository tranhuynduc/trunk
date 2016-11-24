<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Main Page</title>
</head>
<body>
<img src="images/logo.png" width="297" height="89"/>
<?php require "$_SERVER[DOCUMENT_ROOT]/dalat/views/front/common/menu.tpl.php"; ?>
<?php while($product_latest = mysqli_fetch_assoc($product_latest_list)): ?>
    <div style="padding:10px;">
        <p >
            <img src="<?php echo SITE_URL . 'userfiles/' . $product_latest['image']; ?>" />
        </p>
        <h4>
            <a  href="<?php echo SITE_URL . 'product-detail.php?product_id=' .  $product_latest['product_id']; ?>"><?php echo  $product_latest['name']; ?></a>
        </h4>
        <p><?php echo number_format($product_latest['price'], 0, '', '.'); ?> VNĐ</p>
    </div>
<?php endwhile; ?>

</body>
</html>