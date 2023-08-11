<div class="elementContent">
 	<div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
		<div class="imageUploadMeta <?php echo !empty($value_field['url'])? 'activeImage' : '' ?>">
			<div class="filesContent">
				<div class="metaboxImage">
					<?php if(strrpos($value_field['url'],'.jpg') || strrpos($value_field['url'],'.jpeg') || strrpos($value_field['url'],'.png') || strrpos($value_field['url'],'.gif') ){ ?>
						<img src="<?php echo isset($value_field['url'])? $value_field['url'] : '' ?>" id="<?php echo $id ?>_file" />
					<?php }elseif(strrpos($value_field['url'],'.mp4') || strrpos($value_field['url'],'.webm') || strrpos($value_field['url'],'.mkv') || strrpos($value_field['url'],'.flv') || strrpos($value_field['url'],'.vob') || strrpos($value_field['url'],'.ogv') || strrpos($value_field['url'],'.ogg') || strrpos($value_field['url'],'.drc') || strrpos($value_field['url'],'.mng') || strrpos($value_field['url'],'.avi') || strrpos($value_field['url'],'.mov') || strrpos($value_field['url'],'.wmv') || strrpos($value_field['url'],'.yuv') || strrpos($value_field['url'],'.rmvb') || strrpos($value_field['url'],'.rm') || strrpos($value_field['url'],'.m4p') || strrpos($value_field['url'],'.m4v') || strrpos($value_field['url'],'.mpg') || strrpos($value_field['url'],'.mp2') || strrpos($value_field['url'],'.svi') || strrpos($value_field['url'],'.mxf') || strrpos($value_field['url'],'.qt')){ ?>
						<img src="<?php echo includes_url() ?>images/media/video.png" id="<?php echo $id ?>_file" /> 
					<?php }elseif(strrpos($value_field['url'],'.mp3') || strrpos($value_field['url'],'.mpc') || strrpos($value_field['url'],'.msv') || strrpos($value_field['url'],'.wav') || strrpos($value_field['url'],'.mmf') || strrpos($value_field['url'],'.m4a') || strrpos($value_field['url'],'.wma') || strrpos($value_field['url'],'.wv')){ ?>
						<img src="<?php echo includes_url() ?>images/media/audio.png" id="<?php echo $id ?>_file" /> 
					<?php }else{ ?>
						<img src="<?php echo includes_url() ?>images/media/document.png" id="<?php echo $id ?>_file" />
					<?php } ?>
					<div class="removeImage"></div>
				</div>
				<div class="metaboxImageTitle">
					<a href="<?php echo isset($value_field['edit'])? $value_field['edit'] : ''  ?>">
						<p><?php echo isset($value_field['title'])? $value_field['title'] : '' ?></p>
					</a>
				</div>
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
		    <input type="button" class="meta-file-button button" value="<?php _e( 'Upload File or Image', 'gs_metabox' )?>" />
	    </div>
    </div>
    <?php 
		if(isset($opt['desc'])) {
			echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
		}
	?>
</div>