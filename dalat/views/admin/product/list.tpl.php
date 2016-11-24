<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin - Product - List</title>
</head>
<body>
<?php
require '../../views/admin/common/menu.tpl.php';
?>
<table width="100%" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Product Name</th>
        <th>Prices</th>
        <th>Status</th>
        <th>Created Date</th>
        <th>Modified Day</th>
        <th>Action</th>
    </tr>
    <?php while($product = mysqli_fetch_assoc($product_list)): ?>
        <tr>
            <td><?php echo $product['product_id']; ?></td>
            <td><img src="<?php echo SITE_URL . 'userfiles/' . $product['image']; ?>" width="20" height="20" /></td>
            <td><a  href="<?php echo SITE_URL . 'admin/product/edit.php?product_id=' .  $product['product_id']; ?>"><?php echo $product['name'];  ?></a></td>
            <td><?php echo number_format($product['price'], 0, '', '.'); ?> VNĐ</td>
            <td><?php echo ($product['status'] == 1) ? 'Activate' : 'Deactivate'; ?></td>
            <td><?php $date = new DateTime($product['created']); echo $date->format('d-m-Y H:i:s');?></td>
            <td><?php $date = new DateTime($product['modified']); echo $date->format('d-m-Y H:i:s');?></td>
            <td><a  href="<?php echo SITE_URL . 'admin/product/delete.php?product_id=' .  $product['product_id']; ?>">Delete</a></td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>