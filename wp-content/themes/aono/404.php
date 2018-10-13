<?php get_header(); ?>

	<div id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
				</li>
			</ol>
			<div class="single-news-title-area">
				<h1 class="single-news-title">
					<?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?>
				</h1>
			</div>
		</div>
	</div>


<?php get_footer(); ?>
