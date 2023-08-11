<div class="elementContent">
    <div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
        <input type="text" class="timepicker" name="<?php echo $field_id ?>" id="<?php echo $field_id ?>" value="<?php echo $value_field ?>"
        data-time_format="<?php echo $opt['time_format'] ?>" data-time_zone="<?php echo $opt['time_zone'] ?>" 
        <?php if(isset($opt['placeholder']) && !empty($opt['placeholder'])){  ?> placeholder="<?php echo $opt['placeholder'] ?>" <?php } ?> readonly />
		</div>
		<?php 
			if(isset($opt['desc'])) {
        echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
      }
		?>
</div>