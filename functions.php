<?php

function christina_setup() {
	register_nav_menus(
		array(
			'header' => 'меню в шапке'
		)
	);
	register_nav_menus(
		array(
			'autho' => 'авторизация'
		)
	);
	register_nav_menus(
		array(
			'burger' => 'бургер меню'
		)
	);
	add_filter( 'nav_menu_link_attributes', 'christina_filter_nav_menu_link_attributes', 10, 4 );
	function christina_filter_nav_menu_link_attributes($atts, $item, $args, $depth) {
	if ($args->menu === 'header') {
		$atts['class'] .= ' mainblock__link';
	}

  return $atts;
    }
}

function mytheme_add_woocommerce_suppot() {
    add_theme_support('woocommerce');
	}
	add_action('after_setup_theme', 'mytheme_add_woocommerce_suppot');
	
    add_action( 'after_setup_theme', 'christina_setup' );
    
    add_action( 'wp_enqueue_scripts', function(){
    wp_deregister_style( 'woocommerce-general' );
    wp_deregister_style( 'woocommerce-layout' );
    });
    
    add_shortcode('woocommerce_register','new_form_register');
    
    
    
    add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
  
function custom_override_checkout_fields( $fields ) {
  //unset($fields['billing']['billing_first_name']);// имя
  //unset($fields['billing']['billing_last_name']);// фамилия
  unset($fields['billing']['billing_company']); // компания
  //unset($fields['billing']['billing_address_1']);//
  unset($fields['billing']['billing_address_2']);//
  //unset($fields['billing']['billing_city']);
  //unset($fields['billing']['billing_postcode']);
  //unset($fields['billing']['billing_country']);
  //unset($fields['billing']['billing_state']);
  //unset($fields['billing']['billing_phone']);
  //unset($fields['order']['order_comments']);
  //unset($fields['billing']['billing_email']);
  //unset($fields['account']['account_username']);
  //unset($fields['account']['account_password']);
  //unset($fields['account']['account_password-2']);

 
  unset($fields['billing']['billing_company']);// компания
  unset($fields['billing']['billing_postcode']);// индекс 
    return $fields;
}
