<!-- user for override and initiating -->
<?php
function customBlogTheme_register_styles(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('customBlogTheme-style',get_template_directory_uri() . "/style.css", array('customBlogTheme-bootstrap'),$version,'all');
  wp_enqueue_style('customBlogTheme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(),'4.4.1','all');
  wp_enqueue_style('customBlogTheme-fontAwesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(),'5.13.0','all');
}

add_action('wp_enqueue_scripts','customBlogTheme_register_styles');
function customBlogTheme_register_scripts(){
  wp_enqueue_scripts('customBlogTheme-jquery-scripts',"https://code.jquery.com/jquery-3.4.1.slim.min.js",array(),'3.4.1');
  wp_enqueue_scripts('customBlogTheme-popperJs-scripts',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",array(),'1.16.0');
  wp_enqueue_scripts('customBlogTheme-bootstrap-scripts',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",array(),'4.4.1');
}

add_action('wp_enqueue_scripts','customBlogTheme_register_scripts');
?>