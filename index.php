<?php get_header(); ?>

<!-- masonry
================================================== -->
<section id="bricks">
	
   	<div class="row masonry">
		
   		<!-- brick-wrapper -->
		<div class="bricks-wrapper">
			
         	<div class="grid-sizer"></div>
			
         	<?php /*?><div class="brick entry featured-grid animate-this">
         		<div class="entry-content">
				<div id="featured-post-slider" class="flexslider">
				<ul class="slides">		
				<?php
				
				query_posts('posts_per_page=1');
				
				while(have_posts()) : the_post(); ?>
				
				<li>
				<div class="featured-post-slide">
				
				<div class="post-background" style="background-image:url('images/thumbs/featured/featured-1.jpg');"></div>
				
				<div class="overlay"></div>			   		
				
				<div class="post-content">
				<ul class="entry-meta">
				<li>September 06, 2016</li> 
				<li><a href="#" >Naruto Uzumaki</a></li>				
				</ul>	
				
				<h1 class="slide-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1> 
				</div> 				   					  
				
				</div>
				</li> <!-- /slide -->
				
				
				<!--<div>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_excerpt(); ?></p>
				</div>-->
				
				<?php endwhile; wp_reset_query(); ?>
				
				
				
				<li>
				<div class="featured-post-slide">
				
				<div class="post-background" style="background-image:url('images/thumbs/featured/featured-2.jpg');"></div>
				
				<div class="overlay"></div>			   		
				
				<div class="post-content">
				<ul class="entry-meta">
				<li>August 29, 2016</li>
				<li><a href="#">Sasuke Uchiha</a></li>					
				</ul>	
				
				<h1 class="slide-title"><a href="single-standard.html" title="">Enhancing Your Designs with Negative Space</a></h1>
				</div>		   				   					  
				
				</div>
				</li> <!-- /slide -->
				
				<li>
				<div class="featured-post-slide">
				
				<div class="post-background" style="background-image:url('images/thumbs/featured/featured-3.jpg');;"></div>
				
				<div class="overlay"></div>			   		
				
				<div class="post-content">
				<ul class="entry-meta">
				<li>August 27, 2016</li>
				<li><a href="#" class="author">Naruto Uzumaki</a></li>					
				</ul>	
				
				<h1 class="slide-title"><a href="single-standard.html" title="">Music Album Cover Designs for Inspiration</a></h1>
				</div>
				
				</div>
				</li> <!-- end slide -->
				
				</ul> <!-- end slides -->
				</div> <!-- end featured-post-slider -->        			
         		</div> <!-- end entry content -->         		
			</div><?php  */?>
			
			
			<?php
				
			query_posts('posts_per_page=10');
				
			while(have_posts()) : the_post(); ?>
			
         	<article class="brick entry format-standard animate-this">
				
				<div class="entry-thumb">
					<a href="single-standard.html" class="thumb-link">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumbs/diagonal-building.jpg" alt="<?php the_title(); ?>">             
					</a>
				</div>
				
				<div class="entry-text">
					<div class="entry-header">
						
						<div class="entry-meta">
							<span class="cat-links">
								<a href="#">Design</a> 
								<a href="#">Photography</a>               				
							</span>			
						</div>
						
						<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						
					</div>
					<div class="entry-excerpt"><?php the_excerpt(); ?></div>
				</div>
				
			</article> <!-- end article -->
			<?php endwhile; wp_reset_query(); ?>
			
            
			
		</div> <!-- end brick-wrapper --> 
		
	</div> <!-- end row -->
	
   	<?php /*?><div class="row">
   		
   		<nav class="pagination">
			<span class="page-numbers prev inactive">Prev</span>
		   	<span class="page-numbers current">1</span>
		   	<a href="#" class="page-numbers">2</a>
			<a href="#" class="page-numbers">3</a>
			<a href="#" class="page-numbers">4</a>
			<a href="#" class="page-numbers">5</a>
			<a href="#" class="page-numbers">6</a>
			<a href="#" class="page-numbers">7</a>
			<a href="#" class="page-numbers">8</a>
			<a href="#" class="page-numbers">9</a>
		   	<a href="#" class="page-numbers next">Next</a>
		</nav>
		
	</div><?php */?>
	
</section> <!-- end bricks -->

<?php get_footer(); ?>