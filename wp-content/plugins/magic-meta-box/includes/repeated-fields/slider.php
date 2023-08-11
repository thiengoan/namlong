<div class="elementContent">
    <div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
        <div class="sliderMetaboxContainer">
			<span class="showSliderValue"><?php echo isset($value_field)? $value_field : $opt['slider_value']; ?></span>
			<div class="clearfix">
				<span class="minSlider"><?php echo $opt['min'] ?></span>
				<div class="sliderMetabox" data-content="0" data-animate="<?php echo $speed ?>" data-max="<?php echo $max ?>" data-min="<?php echo $min ?>" data-orientation="<?php echo $orientation ?>"
					 data-range="<?php echo $range ?>" data-step="<?php echo $step ?>" data-value="<?php echo isset($value_field)? $value_field : $opt['slider_value'] ?>" data-values="<?php echo $opt['slider_value'] ?>" 
					 name="<?php echo $field_id ?>_slider" id="<?php echo $id ?>-<?php echo $count_repeat ?>-<?php echo $opt['id'] ?>_slider"></div>
				<span class="maxSlider"><?php echo $opt['max'] ?></span>
			</div>
			<input type="hidden" class="inputSliderMetabox" name="<?php echo $id ?>[<?php echo $count_repeat ?>][<?php echo $opt['id'] ?>]" id="<?php echo $id ?>-<?php echo $count_repeat ?>-<?php echo $opt['id'] ?>" value="<?php echo isset($value_field)? $value_field : $opt['slider_value'] ?>" />
		</div>
	</div>
	<?php 
		if(isset($opt['desc'])) {
			echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
		}
	?>
</div>