<select class="selectMetabox" name="<?php echo $id ?>" id="<?php echo $id ?>">
<?php if(!empty($default_option)){ ?>
	<option value="default"><?php echo $default_option ?></option>
<?php }else{ ?>
	<option value="default">Select an Option</option>
<?php } ?>
<?php if(!empty($options)){ ?>
	<?php foreach ($options as $opt_value=>$opt_name): ?>
		<option <?php selected($value, $opt_value)?> value="<?php echo $opt_value ?>"><?php echo $opt_name?></option>
	<?php endforeach ?>
<?php }elseif($post_type == 'user'){
		if(!empty($user_args)){
			$user_args = $user_args;
		}else{
			$user_args = array(
				'orderby' => 'id',
			);
		}
		$user_query = new WP_User_Query($user_args);
		if ( ! empty( $user_query->results ) ) {
			foreach ( $user_query->results as $user ) { 
				?>
				<option <?php selected($value, ($return_by == 'id')? $user->ID : $user->display_name )?> value="<?php echo ($return_by == 'id')? $user->ID : $user->display_name; ?>"><?php echo $user->display_name ?></option>
		<?php }
		}
	}elseif($post_type == 'taxonomy'){
		$taxonomy_args = array(
			'orderby' => 'name',
			'hide_empty' => false
		);
		$taxonomies_type = $taxonomy_type;
		$taxonomies = get_terms($taxonomies_type,$taxonomy_args);
		foreach ( $taxonomies as $taxonomy ) { ?>
			<option <?php selected($value, ($return_by == 'id')? $taxonomy->term_id : $taxonomy->name )?> value="<?php echo ($return_by == 'id')? $taxonomy->term_id : $taxonomy->name ?>"><?php echo $taxonomy->name ?></option>
		<?php }
	}else{
		$taxonomy_query = array();
		if(isset($relation) && !empty($relation)){
			$taxonomy_query = array(
				'relation' => $relation,
			);
		}
		if(isset($selected_taxonomy) && !empty($selected_taxonomy)){
			foreach ($selected_taxonomy as $taxonomy_key => $taxonomy_value) {
					$taxonomy_query[] = array(
						'taxonomy' => $taxonomy_key,
						'field'    => 'slug',
						'terms'    => $taxonomy_value,
					);		
			}
		}
		$post_args = array(
			'post_type' => $post_type,
			'posts_per_page' => -1,
			'tax_query' => $taxonomy_query
		);
		$select_posts = get_posts($post_args);
		foreach ($select_posts as $key => $select_post) {	
			setup_postdata( $select_post );
			?>
		<option <?php selected($value, ($return_by == 'id')? $select_post->ID : $select_post->post_title)?> value="<?php echo ($return_by == 'id')? $select_post->ID : $select_post->post_title; ?>"><?php echo $select_post->post_title ?></option>
		<?php 
		}
		wp_reset_postdata();
} ?>
</select>