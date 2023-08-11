<div class="elementContent">
    <div class="metaLabelContainer">
        <label for="<?php echo $field_id ?>"><?php echo $opt['name'] ?></label>
    </div>
    <div class="contentMetaDesc selectContainer">
        <select class="select selectMetabox" name="<?php echo $field_id ?>" id="<?php echo $field_id ?>">
                <?php if(!empty($opt['default_option'])){ ?>
					<option value="default"><?php echo $opt['default_option']; ?></option>
				<?php }else{ ?>
					<option value="default">Select an Option</option>
				<?php } ?>
                <?php if(!empty($opt['options'])){ ?>
                    <?php foreach ($opt['options'] as $opt_value=>$opt_name): ?>
                            <option <?php isset($value_field)? selected($value_field, $opt_value) : '' ?> value="<?php echo $opt_value?>"><?php echo $opt_name?></option>
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
						foreach ( $user_query->results as $user ) { ?>
							<option <?php isset($value_field)? selected($value_field, ($opt['return_by'] == 'id')? $user->ID : $user->display_name  ) : ''?> value="<?php echo ($opt['return_by'] == 'id')? $user->ID : $user->display_name; ?>"><?php echo $user->display_name ?></option>
					<?php }
					}
				}elseif($opt['post_type'] == 'taxonomy'){
					$taxonomy_args = array('orderby' => 'name');
					$taxonomies_type = $opt['taxonomy_type'];
					$taxonomies = get_terms($taxonomies_type,$taxonomy_args);
					foreach ( $taxonomies as $taxonomy ) { ?>
						<option <?php isset($value_field)? selected($value_field, ($opt['return_by'] == 'id')? $taxonomy->term_id : $taxonomy->name ) : '' ?> value="<?php echo ($opt['return_by'] == 'id')? $taxonomy->term_id : $taxonomy->name ?>"><?php echo $taxonomy->name ?></option>
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
					$select_posts = get_posts($post_args);
					foreach ($select_posts as $key => $select_post) {	
						setup_postdata( $select_post );
						?>
					<option <?php selected($value_field, ($opt['return_by'] == 'id')? $select_post->ID : $select_post->post_title)?> value="<?php echo ($opt['return_by'] == 'id')? $select_post->ID : $select_post->post_title; ?>"><?php echo $select_post->post_title ?></option>
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