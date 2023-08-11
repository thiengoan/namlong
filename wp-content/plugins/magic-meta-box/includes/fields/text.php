<input type="text" name="<?php echo $id ?>" id="<?php echo $id ?>" value="<?php echo esc_attr($value); ?>" 
		<?php if(isset($pattern) && !empty($pattern)){  ?> pattern="<?php echo $pattern ?>" <?php } ?> 
		<?php if(isset($placeholder) && !empty($placeholder)){  ?> placeholder="<?php echo $placeholder ?>" <?php } ?>  />