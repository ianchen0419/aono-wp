<?php get_header();?>


<?php if($_SESSION['firstAccess']=='' && is_home()==true){ ?>
	<div id="visual" style="opacity: 0">
<?php }else{ ?>
	<div id="visual" class="showing">
<?php } ?>
		<div class="slider-area">
			<div id="sliderWrapper">
				<div class="slider-item">
					<div class="slider-image image-3"></div>
					<div class="slider-text"><?php echo (get_current_blog_id()==1)?'あなたの課題に、深く寄り添う。<br />そして一歩前へ。':'Solve your problems,<br />and step forward together.' ?></div>
				</div>
				<div class="slider-item">
					<div class="slider-image image-1"></div>
					<div class="slider-text"><?php echo (get_current_blog_id()==1)?'お困りのことありますよね？<br />"ある"という方は、弊社ウェブサイトをご覧ください。':'Do you have any problems?<br />If it\'s "Yes", please visit our website.' ?></div>
				</div>
				<div class="slider-item">
					<div class="slider-image image-2"></div>
					<div class="slider-text"><?php echo (get_current_blog_id()==1)?'向き合って、明日をつくる青野の技術':'Aono\'s technology for the future' ?></div>
				</div>
				<div class="slider-item">
					<div class="slider-image image-3"></div>
					<div class="slider-text"><?php echo (get_current_blog_id()==1)?'あなたの課題に、深く寄り添う。<br />そして一歩前へ。':'Solve your problems,<br />and step forward together.' ?></div>
				</div>
				<div class="slider-item">
					<div class="slider-image image-1"></div>
					<div class="slider-text"><?php echo (get_current_blog_id()==1)?'お困りのことありますよね？<br />"ある"という方は、弊社ウェブサイトをご覧ください。':'Do you have any problems?<br />If it\'s "Yes", please visit our website.' ?></div>
				</div>
			</div>
			<div class="slider-buttons">
				<button id="prev">
					<i class="fa fa-chevron-left"></i>
				</button>
				<div class="dots">
					<button class="dot active" id="left"></button>
					<button class="dot" id="center"></button>
					<button class="dot" id="right"></button>
				</div>
				<button id="next">
					<i class="fa fa-chevron-right"></i>
				</button>
			</div>
		</div>
	</div>
<div id="contact">
	<div class="wrapper-size full">
		<h1 class="title-1"><?php echo (get_current_blog_id()==1)?'特色':'Feature' ?></h1>
	</div>
	<div class="wrapper-size">
		<div class="advantage-area">
			<article class="center-article"><?php echo (get_current_blog_id()==1)?
				'射出成形・プラスチック成形・金型・プラスチック塗装・成形不良対策の事まで、一貫生産体制を構築しています。<br />
				成形に関するさまざまなお悩み・ご希望にスピーディーにお応えします。<br />
				350tクラスを保有し、ニーズに応える厚肉成形、超薄肉成形に対応しています。':
				'We have built an integrated production system from injection molding, plastic molding, mold, plastic coating, and molding defect countermeasures.<br />
				We respond quickly to your various worries and requests regarding on molding.<br />
				We have 350 ton class, and conduct thick molding and ultra thin molding to meet our clients\' needs.' ?></article>
			<div class="advantage-image-wrapper">
				<a href="advantage1">
					<div class="advantage-image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/top_advantage1.png" alt="移管型（移管金型）の成形にも対応"/>
						<p>
							<i class="fa fa-chevron-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'移管型（移管金型）の成形にも対応':'Compatible with forming of transfer mold' ?></span>
						</p>
					</div>
				</a>
				<a href="advantage2">
					<div class="advantage-image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/top_advantage2.png" alt="金型、安価材料の提案 勉強会の開催"/>
						<p>
							<i class="fa fa-chevron-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'金型、安価材料の提案<br />勉強会の開催':'Proposal of mold and inexpensive material<br />Holding a study group' ?></span>
						</p>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="wrapper-size full">
		<h1 class="title-1"><?php echo (get_current_blog_id()==1)?'製品ギャラリー':'Product gallery' ?></h1>
	</div>
	<div class="wrapper-size">
		<div class="gallery-area">
			
			<article class="center-article"><?php echo (get_current_blog_id()==1)?'これまで培ってきた技術を元に、IoT機器やスマートフォン、各種電池など新しい分野への挑戦を続けています。':'Based on the technology we have cultivated so far, we are continuing to challenge new fields such as IoT equipment, smart phones and various batteries.' ?></article>
			<div class="gallery-image-wrapper">
				<a href="product/#communication">
					<div class="gallery-image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_2_view.jpg" alt="通信機器_中継機器" />
						<p>
							<i class="fa fa-chevron-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'通信機器<br />（IoT、スマートフォン）':'Communication equipment<br />(IoT, Smartphone)' ?></span>
						</p>
					</div>
				</a>
				<a href="product/#battery">
					<div class="gallery-image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_1_view.jpg" alt="蓄電池" />
						<p class="mar_top25">
							<i class="fa fa-chevron-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'蓄電池':'Storage battery' ?></span>
						</p>
					</div>
				</a>
				<a href="product/#automobile">
					<div class="gallery-image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_8_view.jpg" alt="自動車関連" />
						<p class="mar_top25">
							<i class="fa fa-chevron-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'自動車関連':'Automobile related' ?></span>
						</p>
					</div>
				</a>
			</div>
		</div>
	</div>
	<?php if(get_current_blog_id()==1){ ?>

	<div class="wrapper-size full">
		<h1 class="title-1">お知らせ</h1>
	</div>
	<div class="wrapper-size">
		<div class="news-area">
			<?php while ( have_posts() ) : the_post();  ?>

			<div class="news-item">
				<div class="date"><?php the_time('Y.m.d') ?></div>
				<div class="news-title">
					<a href="
					<?php echo get_the_content() ? the_permalink(): "javascript:;"; ?>
					">
						<?php echo mb_strimwidth(get_the_title(), 0, 50, '...'); ?>
					</a>
				</div>
			</div>

			<?php endwhile; ?>

			<div class="right-text">
				<i class="fa fa-caret-right"></i>
				<a href="news">お知らせ一覧</a>
			</div>
		</div>
	</div>

	<?php }else{ ?>
	<?php } ?>
	
	
	</div>
<?php get_footer(); ?>
