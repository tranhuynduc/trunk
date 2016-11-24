
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin - Category</title>
</head>
<body>
<?php require '../../views/admin/common/menu.tpl.php'; ?>
<table width="100%" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Category name</th>
        <th>Status</th>
        <th>Created Day</th>
        <th>Modified Day</th>
        <th>Action</th>
    </tr>
    <?php while($category = mysqli_fetch_assoc($category_list)): ?>
        <tr>
            <td><?php echo $category['category_id']; ?></td>
            <td><a  href="<?php echo SITE_URL . 'admin/category/edit.php?category_id=' .  $category['category_id']; ?>"><?php echo $category['name'];  ?></a></td>
            <td><?php echo ($category['status'] == 1) ? 'Activate' : 'Deactivate'; ?></td>
            <td><?php $date = new DateTime($category['created']); echo $date->format('d-m-Y H:i:s');?></td>
            <td><?php $date = new DateTime($category['modified']); echo $date->format('d-m-Y H:i:s');?></td>
            <td><a  href="<?php echo SITE_URL . 'admin/category/delete.php?category_id='  . $category['category_id']; ?>">Delete</a></td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>