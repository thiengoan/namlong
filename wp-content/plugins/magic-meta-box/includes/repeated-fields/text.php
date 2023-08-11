<div class="elementContent">
    <div class="metaLabelContainer">
        <label for="<?php echo $field_id; ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
        <input type="text" name="<?php echo $field_id ?>" id="<?php echo $field_id ?>"
         value="<?php echo esc_attr($value_field) ?>" <?php if(isset($opt['pattern']) && !empty($opt['pattern'])){  ?> pattern="<?php echo $opt['pattern'] ?>" <?php } ?>
         <?php if(isset($opt['placeholder']) && !empty($opt['placeholder'])){  ?> placeholder="<?php echo $opt['placeholder'] ?>" <?php } ?> />
		</div>
		<?php 
			if(isset($opt['desc'])) {
      echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
    }
  ?>
</div>