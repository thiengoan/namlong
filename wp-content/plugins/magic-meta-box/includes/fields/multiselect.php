<select class="selectMetabox" name="<?php echo $id ?>[]" id="<?php echo $id ?>" multiple>
<?php if(!empty($options)){ ?>
	<?php foreach ($options as $opt_value=>$opt_name):
		$selectedMulti = '';
		foreach($value as $valueSelect){
			echo $valueSelect . ' - ' . $opt_value;
			if($valueSelect == $opt_value){
				$selectedMulti = selected($valueSelect, $opt_value,false);
			}
		}
		?>
		<option <?php echo $selectedMulti ?> value="<?php echo $opt_value ?>"><?php echo $opt_name?></option>
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
				$selectedMulti = '';
				$userInfo;
				if($return_by == 'id') {
					$userInfo = $user->ID;
				}else {
					$userInfo = $user->display_name;
				}
				foreach($value as $valueSelect){
					if($valueSelect == $userInfo ){
						$selectedMulti = selected($valueSelect, ($return_by == 'id')? $user->ID : $user->display_name,false);
					}
				}
				?>
				<option <?php echo $selectedMulti ?> value="<?php echo ($return_by == 'id')? $user->ID : $user->display_name; ?>"><?php echo $user->display_name ?></option>
		<?php }
		}
	}elseif($post_type == 'taxonomy'){
		$taxonomy_args = array(
			'orderby' => 'name',
			'hide_empty' => false
		);
		$taxonomies_type = $taxonomy_type;
		$taxonomies = get_terms($taxonomies_type,$taxonomy_args);
		foreach ( $taxonomies as $taxonomy ) {
			$selectedMulti = '';
			$taxonomyInfo;
			if($return_by == 'id') {
				$taxonomyInfo = $taxonomy->term_id;
			}else {
				$taxonomyInfo = $taxonomy->name;
			}
			foreach($value as $valueSelect){
				if($valueSelect == $taxonomyInfo){
					$selectedMulti = selected($valueSelect, ($return_by == 'id')? $taxonomy->term_id : $taxonomy->name,false);
				}
			}
			 ?>
			<option <?php echo $selectedMulti ?> value="<?php echo ($return_by == 'id')? $taxonomy->term_id : $taxonomy->name ?>"><?php echo $taxonomy->name ?></option>
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
		$multi_select_posts = get_posts($post_args);
		foreach ($multi_select_posts as $key => $multi_select_post) {
			setup_postdata( $multi_select_post );
			$selectedMulti = '';
			$postInfo;
			if($return_by == 'id') {
				$postInfo = $multi_select_post->ID;
			}else {
				$postInfo = $multi_select_post->post_title;
			}
			foreach($value as $valueSelect){
				if($valueSelect == $postInfo){
					$selectedMulti = selected($valueSelect, ($return_by == 'id')? $multi_select_post->ID : $multi_select_post->post_title,false);
				}
			}
			?>
			<option <?php echo $selectedMulti ?> value="<?php echo ($return_by == 'id')? $multi_select_post->ID : $multi_select_post->post_title; ?>"><?php echo $multi_select_post->post_title ?></option>
			<?php 
		}
		wp_reset_postdata();
	} ?>
</select>