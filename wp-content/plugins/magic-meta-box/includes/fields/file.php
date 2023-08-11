<div class="imageUploadMeta <?php echo !empty($value)? 'activeImage' : '' ?>">
	<div class="filesContent">
		<div class="metaboxImage">
			<?php 
			if(!empty($value['url'])){
				if(strrpos($value['url'],'.jpg') || strrpos($value['url'],'.jpeg') || strrpos($value['url'],'.png') || strrpos($value['url'],'.gif') ){ ?>
					<img src="<?php if ( isset ( $value['url'] ) ){ echo $value['url']; } ?>" id="<?php echo $id ?>_file" />
				<?php }elseif(strrpos($value['url'],'.mp4') || strrpos($value['url'],'.webm') || strrpos($value['url'],'.mkv') || strrpos($value['url'],'.flv') || strrpos($value['url'],'.vob') || strrpos($value['url'],'.ogv') || strrpos($value['url'],'.ogg') || strrpos($value['url'],'.drc') || strrpos($value['url'],'.mng') || strrpos($value['url'],'.avi') || strrpos($value['url'],'.mov') || strrpos($value['url'],'.wmv') || strrpos($value['url'],'.yuv') || strrpos($value['url'],'.rmvb') || strrpos($value['url'],'.rm') || strrpos($value['url'],'.m4p') || strrpos($value['url'],'.m4v') || strrpos($value['url'],'.mpg') || strrpos($value['url'],'.mp2') || strrpos($value['url'],'.svi') || strrpos($value['url'],'.mxf') || strrpos($value['url'],'.qt')){ ?>
						<img src="<?php echo includes_url() ?>images/media/video.png" id="<?php echo $id ?>_file" />
				<?php }elseif(strrpos($value['url'],'.mp3') || strrpos($value['url'],'.mpc') || strrpos($value['url'],'.msv') || strrpos($value['url'],'.wav') || strrpos($value['url'],'.mmf') || strrpos($value['url'],'.m4a') || strrpos($value['url'],'.wma') || strrpos($value['url'],'.wv')){ ?>
						<img src="<?php echo includes_url() ?>images/media/audio.png" id="<?php echo $id ?>_file" />
					<?php }else{ ?>
					<img src="<?php echo includes_url() ?>images/media/document.png" id="<?php echo $id ?>_file" />
				<?php } ?>
			<?php }else { ?>
					<img src="" id="<?php echo $id ?>_file" />	
			<?php } ?>
			<div class="removeImage"></div>
		</div>
		<div class="metaboxImageTitle">
			<a href="<?php echo isset($value['edit'])? $value['edit'] : ''  ?>">
				<p><?php echo isset($value['title'])? $value['title'] : '' ?></p>
			</a>
		</div>
	</div>
	<input type="hidden" class="holdURL" name="<?php echo $id ?>[url]" id="<?php echo $id ?>_url" value="<?php if ( isset ( $value['url'] ) ){ echo $value['url']; } ?>" />
	<input type="hidden" class="holdID" name="<?php echo $id ?>[id]" id="<?php echo $id ?>_id" value="<?php if ( isset ( $value['id'] ) ){ echo $value['id']; } ?>" />
	<input type="hidden" class="holdTitle" name="<?php echo $id ?>[title]" id="<?php echo $id ?>_title" value="<?php if ( isset ( $value['title'] ) ){ echo $value['title']; } ?>" />
	<input type="hidden" class="holdAlt" name="<?php echo $id ?>[alt]" id="<?php echo $id ?>_alt" value="<?php if ( isset ( $value['alt'] ) ){ echo $value['alt']; } ?>" />
	<input type="hidden" class="holdEditLink" name="<?php echo $id ?>[edit]" id="<?php echo $id ?>_edit" value="<?php if ( isset ( $value['edit'] ) ){ echo $value['edit']; } ?>" />
	<input type="button" class="meta-file-button button" value="<?php _e( 'Upload File or Image', 'gs_metabox' )?>" />
</div>