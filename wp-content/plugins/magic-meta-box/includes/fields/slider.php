<div class="sliderMetaboxContainer">
	<span class="showSliderValue"><?php echo $value; ?></span>
	<div class="clearfix">
		<span class="minSlider"><?php echo $min ?></span>
		<div class="sliderMetabox" data-content="<?php echo $value ?>" data-animate="<?php echo $speed ?>" data-max="<?php echo $max ?>" data-min="<?php echo $min ?>" data-orientation="<?php echo $orientation ?>"
			 data-range="<?php echo $range ?>" data-step="<?php echo $step ?>" data-value="<?php echo isset($value)? $value : $slider_value ?>" data-values="<?php echo $slider_values ?>" 
			 name="<?php echo $id ?>_slider" id="<?php echo $id ?>_slider"></div>
		<span class="maxSlider"><?php echo $max ?></span>
	</div>
	<input type="hidden" class="inputSliderMetabox" name="<?php echo $id ?>" id="<?php echo $id ?>" value="<?php echo $value ?>" />
</div>