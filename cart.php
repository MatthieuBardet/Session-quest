<?php require 'inc/head.php';
require 'inc/data/products.php';

if (!isset($_SESSION['loginname'])) {
    header('location: index.php');
}
?>
    <section class="cookies container-fluid">
        <div class="row">
            <?php if (isset($_SESSION['cart'])):
                foreach ($_SESSION['cart'] as $product): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center">
                            <img src="assets/img/product-<?= $product; ?>.jpg" alt="<?= $catalog[$product]['name']; ?>"
                                 class="img-responsive">
                            <figcaption class="caption">
                                <h3><?= $catalog[$product]['name']; ?></h3>
                                <p><?= $catalog[$product]['description']; ?></p>
                            </figcaption>
                        </figure>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div>Your cart is empty</div>
            <?php endif; ?>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>