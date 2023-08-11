<div class="elementContent">
    <div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
        <input type="email" name="<?php echo $field_id ?>" id="<?php echo $field_id ?>"
         <?php if(isset($opt['placeholder']) && !empty($opt['placeholder'])){  ?> placeholder="<?php echo $opt['placeholder'] ?>" <?php } ?> value="<?php echo esc_attr($value_field) ?>" />
		</div>
		<?php 
			if(isset($opt['desc'])) {
        echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
      }
		?>
</div>