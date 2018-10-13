<div id="footer">
	<div class="wrapper-size">
		<div class="sitemap-area">
			<ul class="sitemap-block">
				<li>
					<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'ホーム' ?></a>
				</li>
				<li><?php echo (get_current_blog_id()==1)?'特色':'Feature' ?></</li>
				<li class="child-list">
					<a href="advantage1"><?php echo (get_current_blog_id()==1)?'特色1 移管型にも対応':'Feature 1) Compatible with transfer mold' ?></a>
				</li>
				<li class="child-list">
					<a href="advantage2"><?php echo (get_current_blog_id()==1)?'特色2 コスト削減':'Feature 2) Cost reduction' ?></a>
				</li>
				<li>
					<a href="product"><?php echo (get_current_blog_id()==1)?'製品ギャラリー':'Product gallery' ?></a>
				</li>
			</ul>
			<ul class="sitemap-block">
				<li><?php echo (get_current_blog_id()==1)?'生産・品質':'Production / Quality' ?></li>
				<li class="child-list">
					<a href="process"><?php echo (get_current_blog_id()==1)?'一貫生産体制':'Production system' ?></a>
				</li>
				<li class="child-list">
					<a href="factory"><?php echo (get_current_blog_id()==1)?'生産工場':'Factory' ?></a>
				</li>
				<li class="child-list">
					<a href="quality"><?php echo (get_current_blog_id()==1)?'品質保証':'Quality assurance' ?></a>
				</li>
				<li>
					<a href="contact"><?php echo (get_current_blog_id()==1)?'お問い合わせ':'Contact us' ?></a>
				</li>
			</ul>
			<ul class="sitemap-block">
				<li><?php echo (get_current_blog_id()==1)?'会社案内':'About us' ?></li>
				<li class="child-list">
					<a href="profile"><?php echo (get_current_blog_id()==1)?'会社概要':'Contact us' ?></a>
				</li>
				<li class="child-list">
					<a href="message"><?php echo (get_current_blog_id()==1)?'経営方針・沿革':'Philosophy / History' ?></a>
				</li>
				<li class="child-list">
					<a href="recruit"><?php echo (get_current_blog_id()==1)?'リクルート':'Recruit' ?></a>
				</li>
				<?php echo (get_current_blog_id()==1)?'<li><a href="privacy">プライバシーポリシー</a></li>':'' ?>
				<li>
					<a href="sitemap"><?php echo (get_current_blog_id()==1)?'サイトマップ':'Sitemap' ?></a>
				</li>
			</ul>
		</div>
		<div class="copyright-area">Copyright © Aono Industrial Co., Ltd. All rights reserved.</div>
	</div>
</div>

</body>
<script src="<?php bloginfo('template_directory') ?>/base.js"></script>
<script>
	function motion(){
		header.style.display="none";
		menu.style.display="none";
		visual.style.opacity=0;
		contact.style.display="none";
		footer.style.display="none";

		setTimeout(function(){ 
			document.body.classList.remove('motion-body');

			header.style.display="";
			menu.style.display="";
			visual.style.opacity=1;
			contact.style.display="";
			footer.style.display="";

			header.classList.add('showing');
			menu.classList.add('showing');
			visual.classList.add('showing');
			contact.classList.add('showing');
			footer.classList.add('showing');

			if(innerWidth < 769){
				sliderWrapper.classList.add('play');
			}

		}, 4000);

	}
</script>


<?php if(is_page_template('profile.php')): ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHREQgV1IXGfh9-ZkkwricG1ZhNKy-MRQ&callback=initMap"
  async defer></script>
<?php endif; ?>
<?php $_SESSION['firstAccess']=true; ?>

</html>