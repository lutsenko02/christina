<?php
	global $product;
?>
<a href="<?=the_permalink();?>" class="products__product">
    <div class="products__product product">
        <div ><img src="<?=the_post_thumbnail_url();?>" alt="<?=the_title();?>" class="products__img"></div>
        <div class="products__description">
            <p class="products__name"><?=the_title();?></p>
            <p class="products__name"><?=$product->get_price_html(); ?></p>
        </div>
    </div> 
</a>

	<?php
	echo apply_filters(
		'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
		sprintf(
			'<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
			isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
			esc_html( $product->add_to_cart_text() )
		),
		$product,
		$args
	);
	
	?>