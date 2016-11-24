<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Website - Product List</title>
</head>
<body>

<?php require "$_SERVER[DOCUMENT_ROOT]/dalat/views/front/common/menu.tpl.php"; ?>
<?php while($product_active = mysqli_fetch_assoc($product_active_list)): ?>
    <div style="padding:10px;">
        <p>
            <img src="<?php echo SITE_URL . 'userfiles/' . $product_active['image']; ?>" />
        </p>
        <h4>
            <a  href="<?php echo SITE_URL . 'product-detail.php?product_id=' .  $product_active['product_id']; ?>"><?php echo  $product_active['name']; ?></a>
        </h4>
        <p><?php echo number_format($product_active['price'], 0, '', '.'); ?> VNĐ</p>
    </div>
<?php endwhile; ?>

</body>
</html>