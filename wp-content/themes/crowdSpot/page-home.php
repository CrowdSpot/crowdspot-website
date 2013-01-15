
<?php
/*
Template Name: Home Template
*/
?>





<div class="clearboth"></div>	

<?php get_template_part('templates/page', 'header'); ?>

        
      
<?php get_template_part('templates/content', 'page'); ?>





<div id="home-break"></div>
<div id="feature-header"><h2>How it works</h2></div>

<?php
				$loop = new WP_Query(array('post_type' => 'feature', 'posts_per_page' => 3));
				$count =0;
			?>
			<div id="feature-wrapper" >
				<ul id="feature-list">
				
				<?php if ( $loop ) :
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
												<?php $infos = get_post_custom_values('_url'); ?>
						
						<div class="span3" id="mobile-fix">
						<li <?php echo strtolower($tax); ?>>
							
							<div class="thumb"><?php the_post_thumbnail( array(400, 160) ); ?>
							</div>
							<h3><?php the_title(); ?></h3>
							<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
							
						
						</li>
						</div>
						
					<?php endwhile; else: ?>
					<li class="error-not-found">Sorry, no feature entries for while.</li>
				<?php endif; ?>
				</ul>
				<div class="clearboth"></div>
				
				
			
			</div> <!-- end #feature-wrapper-->
			
			<div id="feature"><a href="crowdspot/how-it-works/"><h2>Find out more</h2></a></div>
			
	<div id="home-break"></div>		
	<div id="feature-header"><h2>Our Projects</h2></div>		
			<?php
				$loop = new WP_Query(array('post_type' => 'project', 'posts_per_page' => 4));
				$count =0;
			?>
			
						
			
			<div id="project-small-wrapper">
			<ul class="thumbnail-homes">
					<?php if ( $loop ) :while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $infos = get_post_custom_values('_url'); ?>
			
					<li class="span2">
						<div class="thumbnail-home">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(162, 162) ); ?>
									</a>
									<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									</div>
									
					</li>
					<?php endwhile; else: ?>
				<?php endif; ?>
							
			</ul>									
			</div>
		<div class="clearboth"></div>	
			
			
	
<div id="feature"><h2><a href="crowdspot/projects/">See more of our Projects</h2></div>
			