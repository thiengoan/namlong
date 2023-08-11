<input type="text" class="datetimepicker" name="<?php echo $id ?>" id="<?php echo $id ?>" value="<?php echo $value ?>"
		data-date_format="<?php echo $date_format ?>" data-time_format="<?php echo $time_format ?>" data-time_zone="<?php echo $time_zone ?>"  
		<?php if(isset($placeholder) && !empty($placeholder)){  ?> placeholder="<?php echo $placeholder ?>" <?php } ?> readonly />