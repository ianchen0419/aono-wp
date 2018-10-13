<?php /* Template Name: sitemap */ ?>
<?php get_header(); ?>

<div id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
				</li>
				<li>サイトマップ</li>
			</ol>

			<h1 class="block-title"><?php echo (get_current_blog_id()==1)?'サイトマップ':'Sitemap' ?></h1>


			<ul class="sitemap-list">
				<li>
					<i class="fa fa-chevron-right"></i>
					<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
				</li>
				<li>
					<i class="fa fa-chevron-right"></i>
					<span><?php echo (get_current_blog_id()==1)?'特色':'Feature' ?></span>
					<ul class="sitemap-detail-list">
						<li>
							<a href="advantage1"><?php echo (get_current_blog_id()==1)?'特色1 移管型にも対応':'Feature 1) Compatible with transfer mold' ?></a>
						</li>
						<li>
							<a href="advantage2"><?php echo (get_current_blog_id()==1)?'特色2 金型、安価材料の提案によるコスト削減':'Feature 2) Cost reduction by proposing molding and inexpensive material' ?></a>
						</li>
					</ul>
				</li>
				<li>
					<i class="fa fa-chevron-right"></i>
					<a href="product"><?php echo (get_current_blog_id()==1)?'製品ギャラリー':'Product gallery' ?></a>
				</li>
				<li>
					<i class="fa fa-chevron-right"></i>
					<span><?php echo (get_current_blog_id()==1)?'生産・品質':'Production / Quality' ?></span>
					<ul class="sitemap-detail-list">
						<li>
							<a href="process"><?php echo (get_current_blog_id()==1)?'一貫生産体制':'Production system' ?></a>
						</li>
						<li>
							<a href="factory"><?php echo (get_current_blog_id()==1)?'生産工場':'Factory' ?></a>
						</li>
						<li>
							<a href="quality"><?php echo (get_current_blog_id()==1)?'品質保証':'Quality assurance' ?></a>
						</li>
					</ul>
				</li>
				<li>
					<i class="fa fa-chevron-right"></i>
					<span><?php echo (get_current_blog_id()==1)?'会社案内':'Company profile' ?></span>
					<ul class="sitemap-detail-list">
						<li>
							<a href="profile"><?php echo (get_current_blog_id()==1)?'会社概要':'Company outline' ?></a>
						</li>
						<li>
							<a href="message"><?php echo (get_current_blog_id()==1)?'経営方針・沿革':'Philosophy / History' ?></a>
						</li>
						<li class="en-hide">
							<a href="recruit">リクルート</a>
						</li>
					</ul>
				</li>
				<li>
					<i class="fa fa-chevron-right"></i>
					<span>
						<a href="contact"><?php echo (get_current_blog_id()==1)?'お問い合わせ':'Contact us' ?></a>
					</span>
				</li>
				<li class="en-hide">
					<i class="fa fa-chevron-right"></i>
					<span>
						<a href="privacy">プライバシーポリシー</a>
					</span>
				</li>
			</ul>


		</div>
	</div>

<?php get_footer(); ?>
