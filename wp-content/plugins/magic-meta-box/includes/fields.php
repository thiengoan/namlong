<?php
$fieldsArray = array('text', 'password', 'textarea', 'url', 'email', 'date', 'DateTime', 'time', 'num', 'checkbox', 'multicheckbox', 'radio', 'select', 'multiselect', 'color', 'image', 'gallery', 'file', 'embed', 'slider', 'map', 'wp_editor', 'editor');

if (in_array($type, $fieldsArray)) {
	include( 'fields/'. $type .'.php' );
}
$fieldattrs = $field;
$fieldattrs['id'] = $id;
$fieldattrs['value'] = $value;
do_action('gs_add_custom_field_type', $fieldattrs);

if (isset($desc)) {
    echo '<p class="metaboxDescription">' . $desc . '</p>';
}
$type = '';
$name = '';
$id = '';
$desc = '';
$std = '';
$placeholder = '';
$tab = '';
$options = array();
$post_type = '';
$default_option = '';
$taxonomy_type = array();
$selected_taxonomy = array();
$relation = 'OR';
$return_by = '';
$user_args = array();
$time_zone = FALSE;
$date_format = 'yy-mm-dd';
$time_format = 'hh-mm tt';
