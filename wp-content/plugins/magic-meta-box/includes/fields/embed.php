<div class="embedContainer">
	<textarea type="text" class="embed" rows="3" cols="50" name="<?php echo $id ?>" id="<?php echo $id ?>" <?php if(isset($placeholder) && !empty($placeholder)){  ?> placeholder="<?php echo $placeholder ?>" <?php } ?> ><?php echo esc_attr($value) ?></textarea>
	<input type="button" class="button embedButton" value="Preview">
	<div class="embedIframe"><?php echo isset($value)? $value : '' ?></div>
</div>