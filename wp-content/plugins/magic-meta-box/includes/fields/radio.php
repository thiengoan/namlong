<?php 
foreach($options as $opt_value=>$opt_name){ ?>
	<label class="radioMetabox">
		<input type="radio" name="<?php echo $id?>" id="<?php echo $id?>_<?php echo $opt_value ?>" value="<?php echo $opt_value?>" <?php checked($value, $opt_value)?> />
		<?php echo $opt_name ?>
	</label>
<?php 
} 
?>