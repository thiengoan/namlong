<div id="wp-<?php echo $id ?>-media-buttons" class="wp-media-buttons">
	<a href="#" class="button insert-media add_media" data-editor="<?php echo $id ?>" title="Add Media">
		<span class="wp-media-buttons-icon"></span> Add Media
	</a>
</div>
<textarea class="textareaTinyMCE" id="<?php echo $id ?>" name="<?php echo $id ?>" style="min-height: 300px;">
	<?php echo isset($value)? $value : '' ?>
</textarea>