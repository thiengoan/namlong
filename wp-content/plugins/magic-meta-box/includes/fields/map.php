<div class="mapMetaboxContainer">
	<?php 
		$fieldattrs = $field;
		$fieldattrs['id'] = $id;
		$fieldattrs['value'] = $value;
		do_action('add_map_fields', $fieldattrs); 
	?>
	<input type="text" name="mapInput" class="controls" id="mapInput" />
	<div class="mapMetabox" style="width: 100%;height: 300px;"></div>
	<input type="hidden" class="markerPositionLat" name="<?php echo $id; ?>[lat]" id="<?php echo $id; ?>[lat]" value="<?php echo (isset($value['lat']) && !empty($value['lat']))? $value['lat'] : 27.0881198382541 ?>" />
	<input type="hidden" class="markerPositionLng" name="<?php echo $id; ?>[lng]" id="<?php echo $id; ?>[lng]" value="<?php echo (isset($value['lng']) && !empty($value['lng']))? $value['lng'] : 29.756923124999958 ?>" />
	<input type="hidden" class="mapZoom" name="<?php echo $id; ?>[zoom]" id="<?php echo $id; ?>[zoom]" value="<?php echo (isset($value['zoom']) && !empty($value['zoom']))? $value['zoom'] : 4 ?>" />
	<input type="button" class="button shortcodePreviewButton" value="Show Shortcode">
	<code class="shortcodePreview"></code>
</div>
<?php
$map_dinamic_options = array(
	'lat' => (isset($value['lat']) && !empty($value['lat']))? $value['lat'] : 27.0881198382541,
	'lng' => (isset($value['lng']) && !empty($value['lng']))? $value['lng'] : 29.756923124999958,
	'zoom' => (isset($value['zoom']) && !empty($value['zoom']))? $value['zoom'] : 4
);

wp_register_script('googleMapJS', 'https://maps.googleapis.com/maps/api/js?libraries=places&key='. $key);
wp_enqueue_script('googleMapJS');

wp_localize_script('mapJS', 'map_dinamic_options', $map_dinamic_options);
wp_enqueue_script('mapJS');
?>