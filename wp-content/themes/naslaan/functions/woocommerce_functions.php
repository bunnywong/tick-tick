<?php	

class naslaan_woocommerce_functions {
	
		function __construct() {
		
			add_filter( 'woocommerce_enqueue_styles', array( $this, 'naslaan_dequeue_styles') );
			
			add_filter( 'woocommerce_show_page_title', '__return_false' );
			remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
			add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 30 );
			remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );	
			add_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 20 );
			
			remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
			remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
			add_action( 'woocommerce_before_shop_loop_item', array( $this, 'woocommerce_template_loop_product_wrap_open'), 10 );
			add_action( 'woocommerce_after_shop_loop_item', array( $this, 'woocommerce_template_loop_product_wrap_close'), 5 );
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
			add_action( 'woocommerce_before_shop_loop_item_title', array( $this, 'woocommerce_template_loop_product_thumbnail'), 10 );
			add_action( 'woocommerce_before_shop_loop_item_title', array( $this, 'woocommerce_template_loop_product_thumbnail_open'), 5 );
			add_action( 'woocommerce_before_shop_loop_item_title', array( $this, 'woocommerce_template_loop_product_thumbnail_close'), 20 );
			remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
			add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_product_title', 20 );
			add_action( 'woocommerce_after_shop_loop_item_title', array( $this, 'woocommerce_template_loop_product_content_open'), 1 );
			add_action( 'woocommerce_after_shop_loop_item_title', array( $this, 'woocommerce_template_loop_product_content_close'), 30 );
			remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
			add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 40 );
			add_action( 'woocommerce_after_shop_loop_item_title', array( $this, 'woocommerce_template_loop_product_btn_close'), 50 );
			
			remove_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10 );
			add_action( 'woocommerce_shop_loop_subcategory_title', array( $this, 'woocommerce_template_loop_category_title'), 10 );
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				add_filter( 'loop_shop_columns', array( $this, 'woocommerce_shop_loop_columns') );
				add_filter( 'loop_shop_per_page', array( $this, 'woocommerce_products_per_page' ) );
			}
			
			remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
			add_action( 'woocommerce_checkout_after_order_review', 'woocommerce_checkout_payment', 10 );
			
			add_filter('get_product_search_form', array( $this, 'naslaan_widget_product_search_form'), 100 );
			
			remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
			add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_rating', 10 );
			
		
			
			add_action( 'after_setup_theme', array( $this, 'naslaan_wc_product_gallery'), 100 );
		
		}

		function naslaan_wc_product_gallery() {
			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
			add_theme_support( 'wc-product-gallery-slider' );
		}
		
		function naslaan_dequeue_styles( $enqueue_styles ) {
			return $enqueue_styles;
		}
		
		function woocommerce_template_loop_product_wrap_open() {
			echo '<div class="productWrap">';
		}
		
		function woocommerce_template_loop_product_wrap_close() {
			echo '</div>';
		}
		
		function woocommerce_template_loop_product_thumbnail_open() {
			echo '<div class="product-thumbnail">';
		}
		
		function woocommerce_template_loop_product_thumbnail_close() {
			echo '</div>';
		}
		
		function woocommerce_template_loop_product_thumbnail() {
			echo '<a href="' . get_the_permalink() . '">';
			echo woocommerce_get_product_thumbnail();
			echo '</a>';
		}
		
		function woocommerce_template_loop_product_content_open() {
			echo '<div class="product-content">';
		}
		
		function woocommerce_template_loop_product_content_close() {
			echo '</div>';
			echo '<div class="product-btn">';
		}
		
		function woocommerce_template_loop_product_btn_close() {
			echo '</div>';
		}
		
		function woocommerce_products_per_page() {
			
			$shop_products_per_page = 12;
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$shop_products_per_page = fw_get_db_settings_option('shop_products_per_page');
			}
			return $shop_products_per_page;
		}
		
		function woocommerce_shop_loop_columns() {
			$shop_products_per_row = 3;
		
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$shop_products_per_row = fw_get_db_settings_option('shop_products_per_row');
			}
			return $shop_products_per_row;
		}
		
		function woocommerce_template_loop_category_title( $category ) {
			?>
			<h3>
				<?php echo esc_html($category->name); ?>
			</h3>
			<?php
			if ( $category->count > 0 ){
				echo apply_filters( 'woocommerce_subcategory_count_html', ' <mark class="count">' . $category->count . '</mark>', $category );
			}
						
		}
		
		function woocommerce_cross_sell_display( $posts_per_page = 4, $columns = 4, $orderby = 'rand' ) {
			wc_get_template( 'cart/cross-sells.php', array(
			
			'posts_per_page' => $posts_per_page,
			'orderby' => $orderby,
			'columns' => $columns
			
			) );
		}
		
		function woocommerce_template_before_cart() {
			echo '<div class="row"><div class="col-md-8">';
		}
		
		function woocommerce_template_shipping_calculator() {
			$index = 0;
			if ( is_cart() && ! $index ) :
				woocommerce_shipping_calculator();
			elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) :
				woocommerce_shipping_calculator();
			endif;
		}
		
		function woocommerce_template_after_cart() {
			echo '</div>';
		}
		
		function woocommerce_template_cart_coupon(){
			echo '<div class="col-md-4">';
			
				if ( wc_coupons_enabled() ) {
				echo '<form action="'.esc_url( wc_get_cart_url() ).'" method="post">';
					echo '<div class="coupon">';

						echo '<label for="coupon_code">'.__( 'Coupon', 'naslaan' ).':</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="'.esc_attr__( 'Coupon code', 'naslaan' ).'" /> <input type="submit" class="button" name="apply_coupon" value="'.esc_attr__( 'Apply Coupon', 'naslaan' ).'" />';

						do_action( 'woocommerce_cart_coupon' );
						
					echo '</div>';
				echo '</form>';
				}
			
		}
		
		function woocommerce_template_cart_collaterals(){
			
				do_action( 'woocommerce_cart_collaterals' );
			
			echo '</div></div>';
		}
		
		function woocommerce_template_out_of_stock_badge(){
		
			global $product;
		
			if ( !$product->is_in_stock() ) {
			
				$on_sale = '';
				
				if ($product->is_on_sale()) {
					$on_sale = ' on-sale-products';
				}
				
				echo '<span class="lpd-out-of-s'.$on_sale.'">';
				
				esc_html_e( 'Out of Stock', 'naslaan' );
				
				echo '</span>';
				
			}
			
		}
		
		function naslaan_widget_product_search_form( $form ) {
		    $form = '<form role="search" method="get" class="woocommerce-product-search" action="' . esc_url(home_url('/')) . '" >
			    <label><span class="screen-reader-text">' . esc_html__( 'Search for:', 'naslaan' ) . '</span>
			        <input type="search" class="search-field"
			            placeholder="' . esc_html__( 'Search Products', 'naslaan' ) . '"
			            value="' . get_search_query() . '" name="s"
			            title="' . esc_html__( 'Search for:', 'naslaan' ) . '" />
			    </label>
			    <button type="submit" id="search-submit" hidden="hidden"></button>
			    <input type="hidden" name="post_type" value="product" />
			    
			</form>';

		    return $form;
		}
	
}
