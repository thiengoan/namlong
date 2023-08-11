<?php
$fieldsArray = array('text', 'password', 'textarea', 'url', 'email', 'date', 'DateTime', 'time', 'num', 'checkbox', 'multicheckbox', 'radio', 'select', 'multiselect', 'color', 'image', 'gallery', 'file', 'embed', 'slider', 'editor');
$count_repeat = 0;
$data = (self::gsmb_get($id) == null)? get_post_meta($post->ID,$id,true) : array();
$data = $data ? $data : array();
?>
<div class="containerAddNew">
	<div class="contentRepeater">
    <?php
    do{ 
    ?>
    <div class="repeaterWrapper">
      <?php
      foreach ($repeat_fields as $opt){
        $value_field;
        $field_id =  $id .'[' .$count_repeat . '][' . $opt['id'] .']';
        if(!isset($data[$count_repeat][$opt['id']])) {
          $value_field = isset($opt['std'])? $opt['std'] : '';
        }
        if(!isset($opt['std'])) {
          $opt['std'] = '';
        }
        $value_field = isset($data[$count_repeat][$opt['id']])? $data[$count_repeat][$opt['id']] : $opt['std'];
        if (in_array($opt['type'], $fieldsArray)) {
          include( 'repeated-fields/'. $opt['type'] .'.php' );
        }
        
        $fieldopt = $opt;
        $fieldopt['id'] = $field_id;
        $fieldopt['value'] = $value_field;
        do_action('gs_add_custom_repeated_field_type', $fieldopt);
        ?>
      <?php
      } ?>
      <span class="removeMeta icon-cancel-circled" data-number_metabox="<?php echo self::$count_metabox ?>" data-number="<?php echo $repeat_count_add; ?>"></span>                        
      </div>
      <?php
      $count_repeat++;
    }while($count_repeat < count($data));
    self::$count_repeat_js[self::$count_metabox][$repeat_count_add] = $count_repeat; 
    ?>
  </div>
  <span class="addNewMeta" data-number_metabox="<?php echo self::$count_metabox ?>" data-number="<?php echo $repeat_count_add; ?>"><?php echo __('Add New'); ?></span>
</div>
<?php
self::$count_metabox++;
$repeat_count_add++;

$type = '';
$name = '';
$id = '';
$desc = '';

$opt['type'] = '';
$opt['name'] = '';
$opt['id'] = '';
$opt['desc'] = '';
$opt['std'] = '';
$opt['placeholder'] = '';
$opt['tab'] = '';
$opt['options'] = array();
$opt['post_type'] = '';
$opt['default_option'] = '';
$opt['taxonomy_type'] = array();
$opt['selected_taxonomy'] = array();
$opt['relation'] = 'OR';
$opt['return_by'] = '';
$opt['user_args'] = array();
$opt['time_zone'] = FALSE;
$opt['date_format'] = 'yy-mm-dd';
$opt['time_format'] = 'hh-mm tt';
?>