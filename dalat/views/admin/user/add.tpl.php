<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị - Thành viên - Thêm mới</title>
</head>
<body>

<?php require '../../views/admin/common/menu.tpl.php'; ?>
<form name="add" method="POST" action="">
    <?php if(isset($_SESSION['success'])): ?>
        <p style="color:green;">Thành viên đã được thêm mới thành công!</p>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <p>
        <label>Tài khoản:</label>
        <input type="text" name="username" value="" />
    </p>
    <p>
        <label>Mật khẩu:</label>
        <input type="password" name="password" value="" />
    </p>
    <p>
        <label>Họ tên:</label>
        <input type="text" name="fullname" value="" />
    </p>
    <p>
        <label>Email:</label>
        <input type="text" name="email" value="" />
    </p>
    <p>
        <label>Trạng thái:</label>
        <input type="checkbox" name="status" value="1" />
    </p>
    <p>
        <input type="submit" value="Thêm mới" />
    </p>
</form>

</body>
</html>