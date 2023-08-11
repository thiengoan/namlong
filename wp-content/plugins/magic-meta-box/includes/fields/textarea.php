<textarea name="<?php echo $id ?>" id="<?php echo $id ?>" 
			rows="<?php echo isset($row)? $row : '5' ?>" cols="<?php echo isset($cols)? $cols : '50' ?>" 
			<?php if(isset($placeholder) && !empty($placeholder)){  ?> placeholder="<?php echo $placeholder ?>" <?php } ?> ><?php echo esc_attr($value); ?></textarea>