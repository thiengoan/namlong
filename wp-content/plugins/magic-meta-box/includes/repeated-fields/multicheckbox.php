<div class="elementContent">
    <div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc">
        <?php
        if(!empty($opt['options'])){
        	foreach ($opt['options'] as $opt_value=>$opt_name) { ?>
				<input type="checkbox" name="<?php  echo $id ?>[<?php echo $count_repeat ?>][<?php echo $opt['id'] ?>][<?php echo $opt_value ?>]"
				id="<?php  echo $id ?>[<?php echo $count_repeat ?>][<?php echo $opt['id'] ?>]<?php echo $opt['name'] ?>[<?php echo $opt_value ?>]" <?php isset($value_field[$opt_value])? checked($value_field[$opt_value], 'true') : '' ?> value="true" />
				<label for="<?php  echo $id ?>[<?php echo $count_repeat ?>][<?php echo $opt['id'] ?>]<?php echo $opt['name'] ?>[<?php echo $opt_value ?>]"><?php echo $opt_name ?></label><br />
			<?php }
        }elseif($opt['post_type'] == 'taxonomy'){
			$taxonomy_args = array(
					'orderby' => 'name',
					'parent' => 0,
					'hide_empty' => false,
					);
			$taxonomies_type = $opt['taxonomy_type'];
			$taxonomies = get_terms($taxonomies_type,$taxonomy_args);
			?>
			<?php
			foreach ( $taxonomies as $taxonomy ) { ?>
				<div class="multiCheckMetaBox">
					<input type="checkbox" name="<?php echo $id ?>[<?php echo $count_repeat ?>][<?php echo $opt['id'] ?>][<?php echo $taxonomy->name ?>]" id="<?php echo $id ?>[<?php echo $count_repeat ?>][<?php echo $opt['id'] ?>][<?php echo $taxonomy->name ?>]" <?php isset($value_field[$taxonomy->name])? checked($value_field[$taxonomy->name], 'true') : '' ?> value="true" />
					<label for="<?php echo $id ?>[<?php echo $count_repeat ?>][<?php echo $opt['id'] ?>][<?php echo $taxonomy->name ?>]"><?php echo $taxonomy->name ?></label><br />
				</div>
					<?php 
					$sub_taxonomies = get_term_children( $taxonomy->term_id, $taxonomies_type[0] );
					if(!empty($sub_taxonomies)){
						foreach ( $sub_taxonomies as $sub_taxonomy ) {
							$term = get_term_by( 'id', $sub_taxonomy, $taxonomies_type[0] );
							
							?>
							<div class="multiCheckMetaBox childTaxonomy">
								<input type="checkbox" name="<?php echo $id ?>[<?php echo $count_repeat ?>][<?php echo $opt['id'] ?>][<?php echo $term->name ?>]" id="<?php echo $id ?>[<?php echo $count_repeat ?>][<?php echo $opt['id'] ?>][<?php echo $term->name ?>]" <?php isset($value_field[$term->name])? checked($value_field[$term->name], 'true') : '' ?> value="true" />
								<label for="<?php echo $id ?>[<?php echo $count_repeat ?>][<?php echo $opt['id'] ?>][<?php echo $term->name ?>]"><?php echo $term->name ?></label>
							</div>
					<?php }
					}
					?>
				<?php
			} ?>
			<?php
        } ?>
	</div>
	<?php 
		if(isset($opt['desc'])) {
			echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
		}
	?>
</div>