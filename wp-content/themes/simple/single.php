<?php get_header(); ?>
	<div class="main">
		<div class="container">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()): the_post(); ?>
					<article class="post">
						<h3>
    						<?php the_title(); ?>
						</h3>
						<div class="meta">
							Created By <?php the_author(); ?> on <?php the_date('l jS \of F Y h:i:s A'); ?>
                        </div>
                        <?php if(has_post_thumbnail()) : ?>
							<div class="post-thumbnail">
								<?php the_post_thumbnail() ?>
							</div>
						<?php endif; ?>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			<?php else: ?>
				<?php echo wpautop('Sorry, no posts were found.')?>
				<!-- wpautop converts double line breaks to paragraphs -->
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>