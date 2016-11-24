<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin - Product - Edit</title>
</head>
<body>
<?php require '../../views/admin/common/menu.tpl.php'; ?>
<form name="edit" method="post" enctype="multipart/form-data" action="">
    <?php if(isset($_SESSION['success'])): ?>
        <p style="color:green;">Product is edited successfully!</p>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <p>
        <label>Category:</label>
        <select name="category_id">
            <?php while($category_active = mysqli_fetch_assoc($category_active_list)): ?>
                <option  value="<?php echo $category_active['category_id']; ?>" <?php  echo ($product['category_id'] == $category_active['category_id']) ?  'selected="selected"' : ''; ?>><?php echo  $category_active['name']; ?></option>
            <?php endwhile; ?>
        </select>
    </p>
    <p>
        <label>Product Name:</label>
        <input type="text" name="name" value="<?php echo $product['name']; ?>" />
    </p>
    <p>
        <label>Detail:</label>
        <textarea name="detail"><?php echo $product['detail']; ?></textarea>
    </p>
    <p>
        <label>Image:</label>
        <input type="file" name="image" />
    </p>
    <p>
        <label>Price:</label>
        <input type="text" name="price" value="<?php echo $product['price']; ?>" />
    </p>
    <p>
        <label>Status:</label>
        <input  type="checkbox" name="status" value="1" <?php echo  ($product['status'] == 1) ? 'checked="checked"' : ''; ?> />
    </p>
    <p>
        <input type="submit" name="update" value="Edit" />
    </p>
</form>

</body>
</html>