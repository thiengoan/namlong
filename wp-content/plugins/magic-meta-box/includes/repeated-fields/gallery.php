<div class="elementContent">
 	<div class="metaLabelContainer">
        <label for="<?php  echo $id ?>[<?php echo $count_repeat ?>][<?php echo $opt['id'] ?>]"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
        <?php
        $gallery_ids = array();
        if(isset($value_field['id'])){
        	$gallery_ids = explode(",", $value_field['id']);
        }
	    //echo do_shortcode('[gallery link="none" ids="'.$value.'"]');
		?>
		<div class="galleryContainer">
			<div class="galleryImages">
				<?php
				foreach ($gallery_ids as $gallery_id) { 
					echo wp_get_attachment_image($gallery_id);	
				} ?>
			</div>
			<div class="metaboxGallery">
				<input type="hidden" class="galleryURLs" name="<?php echo $field_id ?>[url]" id="<?php echo $field_id ?>_url" 
	    				value="<?php if ( isset ( $value_field['url'] ) ){ echo $value_field['url']; } ?>" />
			   	<input type="hidden" class="galleryIDs" name="<?php echo $field_id ?>[id]" id="<?php echo $field_id ?>_id" 
			    		value="<?php if ( isset ( $value_field['id'] ) ){ echo $value_field['id']; } ?>" />
			    <input type="hidden" class="galleryTitles" name="<?php echo $field_id ?>[title]" id="<?php echo $field_id ?>_title" 
			    		value="<?php if ( isset ( $value_field['title'] ) ){ echo $value_field['title']; } ?>" />
			    <input type="hidden" class="galleryAlts" name="<?php echo $field_id ?>[alt]" id="<?php echo $field_id ?>_alt" 
			    		value="<?php if ( isset ( $value_field['alt'] ) ){ echo $value_field['alt']; } ?>" />
			    <input type="hidden" class="galleryEdits" name="<?php echo $field_id ?>[edit]" id="<?php echo $field_id ?>_edit" 
			    		value="<?php if ( isset ( $value_field['edit'] ) ){ echo $value_field['edit']; } ?>" />
				<input class="manage_gallery button" title="Manage gallery" type="button" value="Manage gallery" />
				<input class="clear_gallery button" title="clear gallery" type="button" value="clear gallery" />
			</div>
		</div>
	</div>
	 <?php 
		if(isset($opt['desc'])) {
			echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
		}
	?>
</div>