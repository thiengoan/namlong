<div class="elementContent">
  <div class="metaLabelContainer">
      <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
  </div>
  <div class="contentMetaDesc">
      <input type="text" class="datepicker" name="<?php echo $field_id ?>" id="<?php echo $field_id ?>" 
            value="<?php echo $value_field ?>" data-date_format="<?php echo $opt['date_format'] ?>" 
             <?php if(isset($opt['placeholder']) && !empty($opt['placeholder'])){  ?> placeholder="<?php echo $opt['placeholder'] ?>" <?php } ?> readonly />
  </div>
  <?php 
  	if(isset($opt['desc'])) {
      echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
    }
  ?>
</div>