<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin - User - List</title>
</head>
<body>
<?php require '../../views/admin/common/menu.tpl.php'; ?>
<table width="100%" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Account</th>
        <th>Name</th>
        <th>Status</th>
        <th>Birthday</th>
        <th>Modfied Day</th>
        <th>Action</th>
    </tr>
    <?php while($user = mysqli_fetch_assoc($user_list)): ?>
        <tr>
            <td><?php echo $user['user_id']; ?></td>
            <td><a  href="<?php echo SITE_URL . 'admin/user/edit.php?user_id=' .  $user['user_id']; ?>"><?php echo $user['username'];  ?></a></td>
            <td><?php echo $user['fullname']; ?></td>
            <td><?php echo ($user['status'] == 1) ? 'Actived' : 'Non Actived'; ?></td>
            <td><?php $date = new DateTime($user['created']); echo $date->format('d-m-Y H:i:s');?></td>
            <td><?php $date = new DateTime($user['modified']); echo $date->format('d-m-Y H:i:s');?></td>
            <td><a  href="<?php echo SITE_URL . 'admin/user/delete.php?user_id=' .  $user['user_id']; ?>">Delete</a></td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>