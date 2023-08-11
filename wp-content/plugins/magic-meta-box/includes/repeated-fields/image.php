<div class="elementContent">
 	<div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
		<div class="imageUploadMeta <?php echo !empty($value_field['url'])? 'activeImage' : '' ?>">
			<div class="metaboxImage">
				<img src="<?php echo isset($value_field['url'])? $value_field['url'] : '' ?>" id="<?php echo $id ?>_image" />
				<div class="removeImage"></div>
			</div>
		    <input type="hidden" class="holdURL" name="<?php echo $field_id ?>[url]" id="<?php echo $field_id ?>_url" 
		    		value="<?php if ( isset ( $value_field['url'] ) ){ echo $value_field['url']; } ?>" />
		   	<input type="hidden" class="holdID" name="<?php echo $field_id ?>[id]" id="<?php echo $field_id ?>_id" 
		    		value="<?php if ( isset ( $value_field['id'] ) ){ echo $value_field['id']; } ?>" />
		    <input type="hidden" class="holdTitle" name="<?php echo $field_id ?>[title]" id="<?php echo $field_id ?>_title" 
		    		value="<?php if ( isset ( $value_field['title'] ) ){ echo $value_field['title']; } ?>" />
		    <input type="hidden" class="holdAlt" name="<?php echo $field_id ?>[alt]" id="<?php echo $field_id ?>_alt" 
		    		value="<?php if ( isset ( $value_field['alt'] ) ){ echo $value_field['alt']; } ?>" />
		    <input type="hidden" class="holdEditLink" name="<?php echo $field_id ?>[edit]" id="<?php echo $field_id ?>_edit" 
		    		value="<?php if ( isset ( $value_field['edit'] ) ){ echo $value_field['edit']; } ?>" />
		    <input type="button" class="meta-image-button button" value="<?php _e( 'Upload Image', 'gs_metabox' )?>" />
	    </div>
    </div>
    <?php 
		if(isset($opt['desc'])) {
			echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
		}
	?>
</div>