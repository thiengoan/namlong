<?php
$gallery_ids = array();
if(isset($value['id'])){
	$gallery_ids = explode(",", $value['id']);
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
		<input id="<?php echo $id ?>_url" class="galleryURLs" type="hidden" name="<?php echo $id ?>[url]" value="<?php echo isset($value['url'])? $value['url'] : '' ?>" />
		<input id="<?php echo $id ?>_id" class="galleryIDs" type="hidden" name="<?php echo $id ?>[id]" value="<?php echo isset($value['id'])? $value['id'] : '' ?>" />
		<input id="<?php echo $id ?>_title" class="galleryTitles" type="hidden" name="<?php echo $id ?>[title]" value="<?php echo isset($value['title'])? $value['title'] : '' ?>" />
		<input id="<?php echo $id ?>_alt" class="galleryAlts" type="hidden" name="<?php echo $id ?>[alt]" value="<?php echo isset($value['alt'])? $value['alt'] : '' ?>" />
		<input id="<?php echo $id ?>_edit" class="galleryEdits" type="hidden" name="<?php echo $id ?>[edit]" value="<?php echo isset($value['edit'])? $value['edit'] : '' ?>" />
		<input class="manage_gallery button" title="Manage gallery" type="button" value="Manage gallery" />
		<input class="clear_gallery button" title="clear gallery" type="button" value="clear gallery" />
	</div>
</div>