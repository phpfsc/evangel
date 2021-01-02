<?php
/**
 * Checkout Order Receipt Template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/order-receipt.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>


<div class="container-fluid">
	<div class="container form_class">
		<div class="ordrec">
            <ul class="order_details">
            	<!--<li class="order">
            		//<//?php esc_html_e( 'Order number:', 'woocommerce' ); ?>
            		<strong><//?php echo esc_html( $order->get_order_number() ); ?></strong>
            	</li>-->
            	<li class="date">
            		<?php esc_html_e( 'Date:', 'woocommerce' ); ?>
            		<strong><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></strong>
            	</li>
            	<li class="total">
            		<?php esc_html_e( 'Total:', 'woocommerce' ); ?>
            		<strong><?php echo wp_kses_post( $order->get_formatted_order_total() ); ?></strong>
            	</li>
            	<?php if ( $order->get_payment_method_title() ) : ?>
            	<li class="method">
            		<?php esc_html_e( 'Payment method:', 'woocommerce' ); ?>
            		<strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
            	</li>
            	<?php endif; ?>
            </ul>
            <h2>Your Orders</h2>
            <ul class="woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr( $args['list_class'] ); ?> oddpage">
        		<?php
        			do_action( 'woocommerce_before_mini_cart_contents' );
        
        			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
        				$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
        
        				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
        					$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
        					$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
        					$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
        					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
        					?>
        					<li class="woocommerce-mini-cart-item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
        						<div class="col-md-2">
            						<?php if ( ! $_product->is_visible() ) : ?>
            							<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . $product_name . '&nbsp;'; ?>
            						<?php else : ?>
            							<a href="<?php echo esc_url( $product_permalink ); ?>">
            								<div class="ordmyimg"><?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) ; ?></div>
            							</a>
            						<?php endif; ?>
        						</div>
        						<div class="col-md-10">
    							    <a href="<?php echo esc_url( $product_permalink ); ?>">
    								<?php echo str_replace( array( 'http:', 'https:' ), '', $product_name ) . '&nbsp;'; ?>
        							</a>
        							   
        						<?php echo WC()->cart->get_item_data( $cart_item ); ?>
        
        						<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
            					</div>
        					</li>
        					<?php
        				}
        			}
        
        			do_action( 'woocommerce_mini_cart_contents' );
        		?>
	        </ul>

            <?php do_action( 'woocommerce_receipt_' . $order->get_payment_method(), $order->get_id() ); ?>
            
            <div class="clear"></div>
        </div>
    </div>
</div>