<div class="elementContent">
	<div class="metaLabelContainer">
	    <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
	</div>
	<div class="contentMetaDesc selectContainer">
	    <select class="select selectMetabox multiSelect" name="<?php echo $field_id ?>[]" id="<?php echo $field_id ?>" multiple>
            <?php if(!empty($opt['options'])){ ?>
                <?php foreach ($opt['options'] as $opt_value=>$opt_name): 
                	$selectedMulti = '';
					if(isset($value_field)){
						foreach($value_field as $valueSelect){
							if($valueSelect == $opt_value){
								$selectedMulti = selected($valueSelect, $opt_value,false);
							}
						}
					}
                	?>
                        <option <?php echo $selectedMulti; ?> value="<?php echo $opt_value?>"><?php echo $opt_name?></option>
                <?php endforeach ?>
            <?php }elseif($opt['post_type'] == 'user'){
				if(!empty($opt['user_args'])){
					$user_args = $opt['user_args'];
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
						if($opt['return_by'] == 'id') {
							$userInfo = $user->ID;
						}else {
							$userInfo = $user->display_name;
						}
						if(isset($value_field)){
							foreach($value_field as $valueSelect){
								if($valueSelect == $userInfo){
									$selectedMulti = selected($valueSelect, ($opt['return_by'] == 'id')? $user->ID : $user->display_name,false);
								}
							}
						}
						?>
						<option <?php echo $selectedMulti; ?> value="<?php echo ($opt['return_by'] == 'id')? $user->ID : $user->display_name; ?>"><?php echo $user->display_name ?></option>
				<?php }
				}
			}elseif($opt['post_type'] == 'taxonomy'){
				$taxonomy_args = array(
					'orderby' => 'name',
					'hide_empty' => false,
				);
				$taxonomies_type = $opt['taxonomy_type'];
				$taxonomies = get_terms($taxonomies_type,$taxonomy_args);
				foreach ( $taxonomies as $taxonomy ) {
					$selectedMulti = '';
					$taxonomyInfo;
					if($opt['return_by'] == 'id') {
						$taxonomyInfo = $taxonomy->term_id;
					}else {
						$taxonomyInfo = $taxonomy->name;
					}
					if(isset($value_field)){
						foreach($value_field as $valueSelect){
							if($valueSelect == $taxonomyInfo){
								$selectedMulti = selected($valueSelect, ($opt['return_by'] == 'id')? $taxonomy->term_id : $taxonomy->name,false);
							}
						}	
					}
					 ?>
					<option <?php echo $selectedMulti; ?> value="<?php echo ($opt['return_by'] == 'id')? $taxonomy->term_id : $taxonomy->name ?>"><?php echo $taxonomy->name ?></option>
				<?php }
			}else{
				if(isset($opt['relation']) && !empty($opt['relation'])){
					$taxonomy_query = array(
						'relation' => $opt['relation'],
					);
				}
				if(isset($opt['selected_taxonomy']) && !empty($opt['selected_taxonomy'])){
					foreach ($opt['selected_taxonomy'] as $taxonomy_key => $taxonomy_value) {
							$taxonomy_query[] = array(
								'taxonomy' => $taxonomy_key,
								'field'    => 'slug',
								'terms'    => $taxonomy_value,
							);		
					}
				}
				$post_args = array(
					'post_type' => $opt['post_type'],
					'posts_per_page' => -1,
					'tax_query' => $taxonomy_query
				);
				$multi_select_posts = get_posts($post_args);
				foreach ($multi_select_posts as $key => $multi_select_post) {
					setup_postdata( $multi_select_post );
					$selectedMulti = '';
					$postInfo;
					if($opt['return_by'] == 'id') {
						$postInfo = $multi_select_post->ID;
					}else {
						$postInfo = $multi_select_post->post_title;
					}
					foreach($value_field as $valueSelect){
						if($valueSelect == $postInfo){
							$selectedMulti = selected($valueSelect, ($opt['return_by'] == 'id')? $multi_select_post->ID : $multi_select_post->post_title,false);
						}
					}
					?>
					<option <?php echo $selectedMulti ?> value="<?php echo ($opt['return_by'] == 'id')? $multi_select_post->ID : $multi_select_post->post_title; ?>"><?php echo $multi_select_post->post_title ?></option>
					<?php 
				}
				wp_reset_postdata();
			} ?>
	    </select>
	</div>
	<?php 
		if(isset($opt['desc'])) {
			echo '<p class="metaboxDescription">'.$opt['desc'].'</p>';
		}
	?>
</div>