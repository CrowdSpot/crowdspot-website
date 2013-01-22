<?php
/*
Template Name: Portfolio 2 Columns
*/
?>


		<div id="primary">
			<div id="content" role="main">
					<header>
						<h1 class="entry-title"><?php the_title(); ?></h1>
      
					</header>
			
			<?php
				 $terms = get_terms("tagportfolio");
				 $count = count($terms);
				 echo '<ul id="portfolio-filter" class="nav nav-tabs">';
				 echo '<li><a href="#all" title="">All</a></li>';
				 if ( $count > 0 ){
						foreach ( $terms as $term ) {
							$termname = strtolower($term->name);
							$termname = str_replace(' ', '-', $termname);
							echo '<li><a href="#'.$termname.'" title="" rel="'.$termname.'">'.$term->name.'</a></li>';
						}
				 }
				 echo "</ul>";
			?>
			<?php
				$loop = new WP_Query(array('post_type' => 'project', 'posts_per_page' => -1));
				$count =0;
			?>
			<div id="portfolio-wrapper">
				<ul id="portfolio-list">
				<?php if ( $loop ) :
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php
						$terms = get_the_terms( $post->ID, 'tagportfolio' );
						if ( $terms && ! is_wp_error( $terms ) ) :
							$links = array();
							foreach ( $terms as $term )
							{
								$links[] = $term->name;
							}
							$links = str_replace(' ', '-', $links);
							$tax = join( " ", $links );
						else :
							$tax = '';
						endif;
						?>
						<?php $infos = get_post_custom_values('_url'); ?>
						<li class="portfolio-item <?php echo strtolower($tax); ?> all">
							<div class="thumb"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(220, 170) ); ?></a></div>
							<div class="portfolio_thumb_details">
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<p class="excerpt"><a href="<?php the_permalink() ?>"><?php excerpt('22'); ?></a></p>
							</div>
							
						</li>
					<?php endwhile; else: ?>
					<li class="error-not-found">Sorry, no portfolio entries for while.</li>
				<?php endif; ?>
				</ul>
				<div class="clearboth"></div>
			</div> <!-- end #portfolio-wrapper-->
			<script>
				jQuery(document).ready(function() {
					jQuery("#portfolio-list").filterable();
				});
			</script>
			</div><!-- #content -->
		</div><!-- #primary -->

