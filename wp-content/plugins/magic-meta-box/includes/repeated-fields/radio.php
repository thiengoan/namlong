<div class="elementContent">
    <div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
        <?php foreach($opt['options'] as $opt_value=>$opt_name): ?>
                <label class="radioMetaRepeater">
                    <input type="radio" name="<?php echo $field_id ?>" 
                            id="<?php echo $field_id ?>_<?php echo $opt_value ?>" 
                            value="<?php echo $opt_value?>" <?php isset($value_field)? checked($value_field, $opt_value) : '' ?> />
                    <?php echo $opt_name ?>
                </label>
        <?php endforeach ?>	
    </div>
    <?php 
		if(isset($opt['desc'])) {
    		echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
    	}
	?>
</div>