<div style="padding:10px;">
    <ul>
        <li>
            <a href="<?php echo SITE_URL; ?>">Trang chủ</a>
        </li>
    </ul>

    <ul>
        <li>
            <a href="<?php echo SITE_URL . 'product-list.php'; ?>">Sản phẩm</a>
        </li>
        <?php while($category_active = mysqli_fetch_assoc($category_active_list)): ?>
            <li>
                <a  href="<?php echo SITE_URL . 'product-list.php?category_id=' .  $category_active['category_id']; ?>"><?php echo  $category_active['name']; ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
</div>