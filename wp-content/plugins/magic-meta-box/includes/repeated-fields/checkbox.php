<div class="elementContent">
  <div class="metaLabelContainer">
      <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
  </div>
  <div class="contentMetaDesc">
      <input type="checkbox" name="<?php echo $field_id ?>" id="<?php echo $field_id ?>" 
      <?php isset($value_field)? checked($value_field,'true') : '' ?> value="true" />
  </div>
	<?php 
		if(isset($opt['desc'])) {
      echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
    }
	?>
</div>