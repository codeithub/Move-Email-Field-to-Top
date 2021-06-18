/**
 * @snippet       Move Email Field To Top
 * @author        codeithub.com
 */
  
add_filter( 'woocommerce_billing_fields', 'codeithub_move_checkout_email_field' );
 
function codeithub_move_checkout_email_field( $address_fields ) {
    $address_fields['billing_email']['priority'] = 1;
    return $address_fields;
}
