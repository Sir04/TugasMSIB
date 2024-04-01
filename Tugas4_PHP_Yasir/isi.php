<div style="height : 500px">
    <!-- Halaman depan -->
    <?php
    //indek.php?hal=produk
    $hal = $_GET['hal'];
    if (!empty($hal)) {
        include_once $menu_bawah[$hal];
    } else {
        include_once "home.php";
    }
    ?>
</div>