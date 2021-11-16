<?php
if ( ! function_exists( 'engitech_page_header' ) ) {
    function engitech_page_header (){
        $pheader = '';
        if ( function_exists('rwmb_meta') ) {
            $pheader = rwmb_meta('pheader_switch');
            if( is_home() || is_archive() || is_search() || is_singular('post') ){
                $pheader = rwmb_meta('pheader_switch', "type=switch", get_option( 'page_for_posts' ));
            }
            if( class_exists( 'woocommerce' ) ){
                if( is_shop() || is_product_category() || is_product_tag() || is_product() ){
                    $pheader = rwmb_meta('pheader_switch', "type=switch", get_option( 'woocommerce_shop_page_id' ));
                }
            }
            if( !$pheader ){
                return;
            }
        }
        if( !engitech_get_option('pheader_switch') && !$pheader ) {
            return;
        }else{
            $bg     = '';
            $title  = '';
            $output = array();

            if ( is_home() ) {
                $title = get_the_title(get_option('page_for_posts'));
            } elseif ( is_search() ) {
                $title = esc_html__('Search Results for: ', 'engitech') . get_search_query();
            } elseif ( is_archive() ) {
                $title = get_the_archive_title();
            } elseif ( is_singular('post') ) {
                $title = engitech_get_option( 'ptitle_post' ) ? engitech_get_option( 'ptitle_post' ) : get_the_title();
            } else {
                $title = get_the_title();
            }
            
            if (!function_exists('rwmb_meta')) {
                $bg = engitech_get_option( 'pheader_img' );
            } else {
                if( is_home() ) {
                    $images = rwmb_meta('pheader_bg_image', "type=image", get_option( 'page_for_posts' ));
                }elseif( class_exists( 'woocommerce' ) && is_shop() ){
                    $images = rwmb_meta('pheader_bg_image', "type=image", get_option( 'woocommerce_shop_page_id' ));
                }else{
                    $images = rwmb_meta('pheader_bg_image', "type=image");
                }
                if (!$images) {
                    $bg = engitech_get_option( 'pheader_img' );
                } else {
                    foreach ($images as $image) {
                        $bg = $image['full_url'];
                        break;
                    }
                }
            }

            if ($title) {
                $output[] = sprintf('%s', $title);
            }
        ?>        
            
        <?php
        }
    }
}