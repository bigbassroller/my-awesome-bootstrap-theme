<?php 
/** 
* Redirect Users 
* http://codex.wordpress.org/Plugin_API/Action_Reference/template_redirect
*/


// Redirect Users to signup page
function my_page_template_redirect()
{
    if( is_page( 'goodies' ) && ! is_user_logged_in() )
    {
        wp_redirect( home_url( '/signup/' ) );
        exit();
    }
}
add_action( 'template_redirect', 'my_page_template_redirect' );
