<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Web - Product Detail</title>
</head>
<body>
<?php require "$_SERVER[DOCUMENT_ROOT]/dalat/views/front/common/menu.tpl.php"; ?>
<div style="padding:10px;">
    <p>
        <img src="<?php echo SITE_URL . 'userfiles/' . $product_active['image']; ?>" />
    </p>
    <h4><?php echo $product_active['name']; ?></h4>
    <p><?php echo number_format($product_active['price'], 0, '', '.'); ?> VNĐ</p>
    <p><?php echo $product_active['detail']; ?></p>
</div>

</body>
</html>