<input type="text" class="datepicker" data-date_format="<?php echo $date_format ?>" name="<?php echo $id ?>" id="<?php echo $id ?>"
		value="<?php echo $value ?>" 
		<?php if(isset($placeholder) && !empty($placeholder)){  ?> placeholder="<?php echo $placeholder ?>" <?php } ?>  readonly />