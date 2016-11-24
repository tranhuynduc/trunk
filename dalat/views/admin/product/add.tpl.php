<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin - Product - Add New</title>
</head>
<body>
<?php require '../../views/admin/common/menu.tpl.php'; ?>
<form name="add" method="POST" enctype="multipart/form-data" action="">
    <?php if(isset($_SESSION['success'])): ?>
        <p style="color:green;">Product is added successfully!</p>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <p>
        <label>Category:</label>
        <select name="category_id">
            <?php while($category_active = mysqli_fetch_assoc($category_active_list)): ?>
                <option  value="<?php echo $category_active['category_id'];  ?>"><?php echo $category_active['name']; ?></option>
            <?php endwhile; ?>
        </select>
    </p>
    <p>
        <label>Product Name:</label>
        <input type="text" name="name" value="" />
    </p>
    <p>
        <label>Detail:</label>
        <textarea name="detail"></textarea>
    </p>
    <p>
        <label>Image:</label>
        <input type="file" name="image" />
    </p>
    <p>
        <label>Price:</label>
        <input type="text" name="price" value="" />
    </p>
    <p>
        <label>Status:</label>
        <input type="checkbox" name="status" value="1" />
    </p>
    <p>
        <input type="submit" value="Add New" />
    </p>
</form>

</body>
</html>