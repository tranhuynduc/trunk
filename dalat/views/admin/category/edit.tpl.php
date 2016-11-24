<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>QAdmin - Category - Edit</title>
</head>
<body>
<?php require '../../views/admin/common/menu.tpl.php'; ?>
<form name="edit" method="POST" action="">
    <?php if(isset($_SESSION['success'])): ?>
        <p style="color:green;">Category is edited successfully!</p>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <p>
        <label>Category Name:</label>
        <input type="text" name="name" value="<?php echo $category['name']; ?>" />
    </p>
    <p>
        <label>Status:</label>
        <input  type="checkbox" name="status" value="1" <?php echo  ($category['status'] == 1) ? 'checked="checked"' : ''; ?> />
    </p>
    <p>
        <input type="submit" value="Edit" />
    </p>
</form>

</body>
</html>