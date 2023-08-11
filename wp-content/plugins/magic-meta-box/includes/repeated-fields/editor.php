<div class="elementContent">
 	<div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc tinymceContentMetaDesc">
    	<div id="wp-<?php echo $id ?>-<?php echo $count_repeat ?>-<?php echo $opt['id'] ?>-media-buttons" class="wp-media-buttons">
    		<a href="#" class="button insert-media add_media" data-editor="<?php echo $id ?>-<?php echo $count_repeat ?>-<?php echo $opt['id'] ?>" title="Add Media">
    			<span class="wp-media-buttons-icon"></span> Add Media
    		</a>
    	</div>
		<textarea class="textareaTinyMCE" id="<?php echo $id ?>-<?php echo $count_repeat ?>-<?php echo $opt['id'] ?>" name="<?php echo $field_id ?>" style="min-height: 200px;"><?php echo isset($value_field)? $value_field : '' ?></textarea>
		<?php 
		if(isset($opt['desc'])) {
			echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
		}	
		?>	
	</div>
</div>