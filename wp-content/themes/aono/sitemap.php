<?php /* Template Name: sitemap */ ?>
<?php get_header(); ?>

<div id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>">ホーム</a>
				</li>
				<li>サイトマップ</li>
			</ol>

			<h1 class="block-title">サイトマップ</h1>


			<ul class="sitemap-list">
				<li>
					<i class="fa fa-chevron-right"></i>
					<a href="<?php bloginfo('url') ?>">ホーム</a>
				</li>
				<li>
					<i class="fa fa-chevron-right"></i>
					<span>特色</span>
					<ul class="sitemap-detail-list">
						<li>
							<a href="advantage1">特色1 移管型にも対応</a>
						</li>
						<li>
							<a href="advantage2">特色2 金型、安価材料の提案によるコスト削減</a>
						</li>
					</ul>
				</li>
				<li>
					<i class="fa fa-chevron-right"></i>
					<a href="product">製品ギャラリー</a>
				</li>
				<li>
					<i class="fa fa-chevron-right"></i>
					<span>生産・品質</span>
					<ul class="sitemap-detail-list">
						<li>
							<a href="process">一貫生産体制</a>
						</li>
						<li>
							<a href="factory">生産工場</a>
						</li>
						<li>
							<a href="quality">品質保証</a>
						</li>
					</ul>
				</li>
				<li>
					<i class="fa fa-chevron-right"></i>
					<span>会社案内</span>
					<ul class="sitemap-detail-list">
						<li>
							<a href="profile">会社概要</a>
						</li>
						<li>
							<a href="message">経営方針・沿革</a>
						</li>
						<li>
							<a href="recruit">リクルート</a>
						</li>
					</ul>
				</li>
				<li>
					<i class="fa fa-chevron-right"></i>
					<span>
						<a href="contact">お問い合わせ</a>
					</span>
				</li>
				<li>
					<i class="fa fa-chevron-right"></i>
					<span>
						<a href="privacy">プライバシーポリシー</a>
					</span>
				</li>
			</ul>


		</div>
	</div>

<?php get_footer(); ?>
