<style>
    .menu-admin ul {
        float: left;
        list-style-type: none;

    }
    .menu-admin ul a {
        text-decoration: none;
    }
</style>
<div class="menu-admin">
    <ul>
        <li>
            <a href="<?php echo SITE_URL . 'admin'; ?>">Main Page</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="<?php echo SITE_URL . 'admin/category/list.php'; ?>">Category List</a>
        </li>
        <li>
            <a href="<?php echo SITE_URL . 'admin/category/add.php'; ?>">Add New Category</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="<?php echo SITE_URL . 'admin/product/list.php'; ?>">Product List</a>
        </li>
        <li>
            <a href="<?php echo SITE_URL . 'admin/product/add.php'; ?>">Add New Product</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="<?php echo SITE_URL . 'admin/user/list.php'; ?>">User List</a>
        </li>
        <li>
            <a href="<?php echo SITE_URL . 'admin/user/add.php'; ?>">Add New User</a>
        </li>
    </ul>

    <div style="clear:both;"></div>
</div>