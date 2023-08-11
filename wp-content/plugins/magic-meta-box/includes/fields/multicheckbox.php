<?php
if(!empty($options)){
	foreach ($options as $key => $checkValue) { ?>
		<input type="checkbox" name="<?php echo $id ?>[<?php echo $checkValue ?>]" id="<?php echo $id ?>[<?php echo $checkValue ?>]" <?php isset($value[$checkValue])? checked($value[$checkValue], 'true') : '' ?> value="true" />
		<label for="<?php echo $id ?>[<?php echo $checkValue ?>]"><?php echo $checkValue ?></label><br />
	<?php }
}elseif($post_type == 'taxonomy'){
	$taxonomy_args = array(
			'orderby' => 'name',
			'parent' => 0,
			'hide_empty' => false,
			);
	$taxonomies_type = $taxonomy_type;
	$taxonomies = get_terms($taxonomies_type,$taxonomy_args);
	?>
	<div class="multiCheckContainer">
	<?php
	foreach ( $taxonomies as $taxonomy ) { ?>
		<div class="multiCheckMetaBox">
			<input type="checkbox" name="<?php echo $id ?>[<?php echo $taxonomy->name ?>]" id="<?php echo $id ?>[<?php echo $taxonomy->name ?>]" <?php isset($value[$taxonomy->name])? checked($value[$taxonomy->name], 'true') : '' ?> value="true" />
			<label for="<?php echo $id ?>[<?php echo $taxonomy->name ?>]"><?php echo $taxonomy->name ?></label><br />
		</div>
			<?php 
			$sub_taxonomies = get_term_children( $taxonomy->term_id, $taxonomies_type[0] );
			if(!empty($sub_taxonomies)){
				foreach ( $sub_taxonomies as $sub_taxonomy ) {
					$term = get_term_by( 'id', $sub_taxonomy, $taxonomies_type[0] );
					
					?>
					<div class="multiCheckMetaBox childTaxonomy">
						<input type="checkbox" name="<?php echo $id ?>[<?php echo $term->name ?>]" id="<?php echo $id ?>[<?php echo $term->name ?>]" <?php isset($value[$term->name])? checked($value[$term->name], 'true') : '' ?> value="true" />
						<label for="<?php echo $id ?>[<?php echo $term->name ?>]"><?php echo $term->name ?></label>
					</div>
			<?php } ?>
			<?php
			}
			?>
		</div>
		<?php
	} ?>
	<?php
}
?>