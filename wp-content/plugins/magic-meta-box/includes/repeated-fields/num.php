<div class="elementContent">
    <div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
        <input type="text" class="numberType" name="<?php echo $field_id ?>" id="<?php echo $field_id ?>"
         value="<?php echo esc_attr($value_field); ?>" />
		</div>
		<?php 
			if(isset($opt['desc'])) {
        echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
      }
		?>
</div>