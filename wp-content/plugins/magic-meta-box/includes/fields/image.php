<div class="imageUploadMeta <?php echo !empty($value['url'])? 'activeImage' : '' ?>">
	<div class="metaboxImage">
		<img src="<?php if ( isset ( $value['url'] ) ){ echo $value['url']; } ?>" id="<?php echo $id ?>_image" />
		<div class="removeImage"></div>
	</div>
    <input type="hidden" class="holdURL" name="<?php echo $id ?>[url]" id="<?php echo $id ?>_url" value="<?php if ( isset ( $value['url'] ) ){ echo $value['url']; } ?>" />
    <input type="hidden" class="holdID" name="<?php echo $id ?>[id]" id="<?php echo $id ?>_id" value="<?php if ( isset ( $value['id'] ) ){ echo $value['id']; } ?>" />
    <input type="hidden" class="holdTitle" name="<?php echo $id ?>[title]" id="<?php echo $id ?>_title" value="<?php if ( isset ( $value['title'] ) ){ echo $value['title']; } ?>" />
    <input type="hidden" class="holdAlt" name="<?php echo $id ?>[alt]" id="<?php echo $id ?>_alt" value="<?php if ( isset ( $value['alt'] ) ){ echo $value['alt']; } ?>" />
    <input type="hidden" class="holdEditLink" name="<?php echo $id ?>[edit]" id="<?php echo $id ?>_edit" value="<?php if ( isset ( $value['edit'] ) ){ echo $value['edit']; } ?>" />
    <input type="button" class="meta-image-button button" value="<?php _e( 'Upload Image', 'gs_metabox' )?>" />
</div>