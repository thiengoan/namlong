<div class="elementContent">
  <div class="metaLabelContainer">
      <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
  </div>
  <div class="contentMetaDesc">
      <input type="text" class="gs-color" name="<?php echo $field_id ?>" id="<?php echo $field_id ?>"
       value="<?php echo isset($value_field)? $value_field : '' ?>" />
	</div>
	<?php 
		if(isset($opt['desc'])) {
      echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
    }
  ?>
</div>