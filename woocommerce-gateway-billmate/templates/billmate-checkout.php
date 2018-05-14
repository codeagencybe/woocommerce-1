<form name="checkout" class="checkout woocommerce-checkout">
    <div id="billmate-checkout-wrapper">
        <div class="order-review">
            <?php woocommerce_order_review(); ?>
        </div>

        <div id="billmate-checkout-iframe-wrapper">
            <?php show_billmate_checkout(); ?>
        </div>
    </div>
</form>