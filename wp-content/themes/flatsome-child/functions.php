<?php

define('ASSET_PATH', get_template_directory_uri()  . '-child/assets' );

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'add_scripts' );
add_action( 'init', 'add_custom_fileds_slider');
add_action( 'init', 'add_custom_fileds_project');
// add_action( 'init', 'add_custom_fileds_news');
// add_action( 'init', 'add_custom_fileds_activity');
add_action( 'init', 'register_menu_project' );
add_action('admin_enqueue_scripts', 'add_script_admin');

function add_script_admin(){
  wp_enqueue_script( 'handle', get_admin_url() . 'js/script.js' );
}

function enqueue_styles() {
  wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', array(), 4.6 );
  wp_enqueue_style( 'slick-css', esc_url( ASSET_PATH . '/lib/slick/slick.css'), [], false, 'all' );
  wp_enqueue_style( 'awesome', esc_url( ASSET_PATH . '/lib/font-awesome/css/font-awesome.css'), [], false, 'all' );
  wp_enqueue_style( 'slick-theme-css', esc_url( ASSET_PATH . '/lib/slick/slick-theme.css'), ['slick-css'], false, 'all' );
  wp_enqueue_script( 'jquery',  'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', true);
}

function register_menu_project() {
  register_nav_menu('header-menu',__( 'Menu Dự Án' ));
}

function add_scripts() {
    wp_enqueue_script( 'carousel', esc_url( ASSET_PATH . '/lib/slick/slick.js'), true );
    wp_enqueue_script( 'main-js',  esc_url( ASSET_PATH . '/js/main.js'), true);
}

// function add_slider(){
//   if(is_front_page()){
//       get_template_part( 'layouts/slider');
//   }
// }

function add_custom_fileds_slider() {
  $args = [
      'public' => true,
      'label'  => 'Slider',
      'supports' => ['title', 'thumbnail', 'editor'],
      'menu_position' => 5
  ];
  register_post_type( 'slider', $args );
}

function add_custom_fileds_project() {
  $args = [
      'public' => true,
      'label'  => 'Dự án',
      'supports' => ['title','thumbnail','excerpt','editor'],
      'menu_position' => 6,
      'taxonomies'          => array( 'category' ),
  ];
  register_post_type( 'du-an', $args );
}

// function add_custom_fileds_news() {
//   $args = [
//       'public' => true,
//       'label'  => 'Tin tức',
//       'supports' => ['title', 'thumbnail','excerpt', 'editor'],
//       'menu_position' => 7,
//       'taxonomies'          => array( 'category' ),
//   ];
//   register_post_type( 'tin-tuc', $args );
// }

// function add_custom_fileds_activity() {
//   $args = [
//       'public' => true,
//       'label'  => 'Hoạt động',
//       'supports' => ['title', 'thumbnail','excerpt', 'editor'],
//       'menu_position' => 8,
//       'taxonomies'          => array( 'category' ),
//   ];
//   register_post_type( 'linh-vuc-hoat-dong', $args );
// }

// Add custom fields type project

add_action( 'add_meta_boxes', 'create_field' ) ;
add_action('save_post','save_field');

function create_field()
{
  add_meta_box('about_meta_box_id','Giới thiệu','show_about_field','du-an','normal','high');
  add_meta_box('local_meta_box_id','Vị trí','show_local_field','du-an','normal','high');
  add_meta_box('utility_meta_box_id','Tiện ích','show_utility_field','du-an','normal','high');
  add_meta_box('ground_meta_box_id','Mặt bằng','show_ground_field','du-an','normal','high');
  add_meta_box('design_meta_box_id','Thiết kế','show_design_field','du-an','normal','high');
  add_meta_box('progress_meta_box_id','Tiến độ','show_progress_field','du-an','normal','high');
  add_meta_box('pay_meta_box_id','Thanh toán','show_pay_field','du-an','normal','high');
  //add_meta_box('logo_meta_box_id','Logo','show_logo_field','du-an','normal','high');
}

// function show_logo_field($post) {
//   global $content_width, $_wp_additional_image_sizes;

// 	$image_id = get_post_meta( $post->ID, '_listing_image_id', true );

// 	$old_content_width = $content_width;
// 	$content_width = 254;

// 	if ( $image_id && get_post( $image_id ) ) {

// 		if ( ! isset( $_wp_additional_image_sizes['post-thumbnail'] ) ) {
// 			$thumbnail_html = wp_get_attachment_image( $image_id, array( $content_width, $content_width ) );
// 		} else {
// 			$thumbnail_html = wp_get_attachment_image( $image_id, 'post-thumbnail' );
// 		}

// 		if ( ! empty( $thumbnail_html ) ) {
// 			$content = $thumbnail_html;
// 			$content .= '<p class="hide-if-no-js"><a href="javascript:;" id="remove_listing_image_button" >' . esc_html__( 'Xóa logo', 'text-domain' ) . '</a></p>';
// 			$content .= '<input type="hidden" id="upload_listing_image" name="_listing_cover_image" value="' . esc_attr( $image_id ) . '" />';
// 		}

// 		$content_width = $old_content_width;
// 	} else {

// 		$content = '<img src="" style="width:' . esc_attr( $content_width ) . 'px;height:auto;border:0;display:none;" />';
// 		$content .= '<p class="hide-if-no-js"><a title="' . esc_attr__( 'Upload Logo', 'text-domain' ) . '" href="javascript:;" id="upload_listing_image_button" data-uploader_title="' . esc_attr__( 'Chọn ảnh', 'text-domain' ) . '" data-uploader_button_text="' . esc_attr__( 'Upload Logo', 'text-domain' ) . '">' . esc_html__( 'Upload Logo', 'text-domain' ) . '</a></p>';
// 		$content .= '<input type="hidden" id="upload_listing_image" name="_listing_cover_image" value="" />';

// 	}

// 	echo $content;
// }

function show_pay_field($post)
{
  global $wbdb;
  $meta = 'pay_meta';
  $display = get_post_meta( $post->ID,$meta, true );  
  wp_editor( $display, 'pay_meta_box_text', array('textarea_rows' => '8'));  
}

function show_ground_field($post)
{
  global $wbdb;
  $meta = 'ground_meta';
  $display = get_post_meta( $post->ID,$meta, true );  
  wp_editor( $display, 'ground_meta_box_text', array('textarea_rows' => '8'));  
}

function show_design_field($post)
{
  global $wbdb;
  $meta = 'design_meta';
  $display = get_post_meta( $post->ID,$meta, true );  
  wp_editor( $display, 'design_meta_box_text', array('textarea_rows' => '8'));  
}

function show_progress_field($post)
{
  global $wbdb;
  $meta = 'progress_meta';
  $display = get_post_meta( $post->ID,$meta, true );  
  wp_editor( $display, 'progress_meta_box_text', array('textarea_rows' => '8'));  
}

function show_utility_field($post)
{
  global $wbdb;
  $meta = 'utility_meta';
  $display = get_post_meta( $post->ID,$meta, true );  
  wp_editor( $display, 'utility_meta_box_text', array('textarea_rows' => '8'));  
}

function show_about_field($post)
{
  global $wbdb;
  $meta = 'about_meta';
  $display = get_post_meta( $post->ID,$meta, true );  
  wp_editor( $display, 'about_meta_box_text', array('textarea_rows' => '8'));     
}

function show_local_field($post)
{
  global $wbdb;
  $meta = 'local_meta';
  $display = get_post_meta( $post->ID,$meta, true );  
  wp_editor( $display, 'local_meta_box_text', array('textarea_rows' => '8'));     
}

function save_field($post)
{
  $fields = array('about','local','utility','ground','design','progress','pay');
  foreach($fields as $item){
    update_post_meta(  $post, $item.'_meta', $_POST[$item.'_meta_box_text']);

  }
  if( isset( $_POST['_listing_cover_image'] ) ) {
		$image_id = (int) $_POST['_listing_cover_image'];
		update_post_meta( $post, '_listing_image_id', $image_id );
	}
}

// Add hotline Settings bar
add_action('admin_init', 'my_general_section');  

function my_general_section() {  
    add_settings_section(  
        'my_settings_section', // Section ID 
        'Thông tin công ty', // Section Title
        '', // Callback
        'general'// What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
      'company_name', // Option ID
      'Tên công ty', // Label
      'my_textbox_callback', // !important - This is where the args go!
      'general', // Page it will be displayed (General Settings)
      'my_settings_section', // Name of our section
      array( // The $args
          'company_name', // Should match Option ID
      )  
    );

    add_settings_field( // Option 1
      'company_add', // Option ID
      'Địa chỉ', // Label
      'my_textbox_callback', // !important - This is where the args go!
      'general', // Page it will be displayed (General Settings)
      'my_settings_section', // Name of our section
      array( // The $args
          'company_add' // Should match Option ID
      )  
    ); 
    
    add_settings_field( // Option 1
        'hotline_1', // Option ID
        'Hotline', // Label
        'my_hotline_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_section', // Name of our section
        array( // The $args
            'hotline_1' // Should match Option ID
        )  
    ); 
    
    add_settings_field( // Option 2
        'hotline_2', // Option ID
        'Zalo', // Label
        'my_hotline_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'hotline_1' // Should match Option ID
        )  
    ); 

    register_setting('general','company_name', 'esc_attr');
    register_setting('general','company_add', 'esc_attr');
    register_setting('general','hotline_1', 'esc_attr');
    register_setting('general','hotline_2', 'esc_attr');
}

function my_section_options_callback() { // Section Callback
    echo '<p>A little message on editing info</p>';  
}

function my_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input class="regular-text ltr" type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

function my_hotline_callback($args) {  // Textbox Callback
  $option = get_option($args[0]);
  echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

add_shortcode( 'wp_site_name', 'wp_site_name' );
function wp_site_name( $atts ) {
	return get_option('company_name');
}