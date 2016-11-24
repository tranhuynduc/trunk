<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin - Category - Add New</title>

</head>
<body>
<?php require '../../views/admin/common/menu.tpl.php'; ?>
<form name="add" method="POST" action="">
    <?php if(isset($_SESSION['success'])): ?>
        <p style="color:green;">New category is added successfully!</p>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <p>
        <label>Category Name:</label>
        <input type="text" name="name" value="" />
    </p>
    <p>
        <label>Status::</label>
        <input type="checkbox" name="status" value="1" />
    </p>
    <p>
        <input type="submit" value="Thêm mới" />
    </p>
</form>

</body>
</html>