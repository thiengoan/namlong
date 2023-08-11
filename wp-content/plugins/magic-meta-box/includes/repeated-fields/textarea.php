<div class="elementContent">
    <div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
    	<textarea class="textarea" name="<?php echo $field_id ?>" rows="5" cols="50" 
            <?php if(isset($opt['placeholder']) && !empty($opt['placeholder'])){  ?> placeholder="<?php echo $opt['placeholder'] ?>" <?php } ?>><?php echo esc_attr($value_field); ?></textarea>
    </div>
	<?php 
    	if(isset($opt['desc'])) {
    	   echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
    	}
	?>
</div>