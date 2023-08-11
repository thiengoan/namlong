<div class="elementContent">
    <div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
        <div class="embedContainer">
          <textarea type="text" class="embed" rows="3" cols="50" <?php if(isset($opt['placeholder']) && !empty($opt['placeholder'])){  ?> placeholder="<?php echo $opt['placeholder'] ?>" <?php } ?> name="<?php echo $field_id ?>" id="<?php echo $field_id ?>"><?php echo isset($value_field)? esc_attr($value_field) : '' ?></textarea>
          <input type="button" class="button embedButton" value="Preview">
          <div class="embedIframe"><?php echo isset($value_field)? $value_field : '' ?></div>
        </div>
  	</div>
  	<?php 
  		if(isset($opt['desc'])) {
        echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
      }
  	?>
</div>