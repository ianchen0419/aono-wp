<?php /* Template Name: advantage2 */ ?>
<?php get_header(); ?>

<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/advantage2/advantage2_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/advantage2/advantage2.png" alt="特色2" width="100%" /> 
		</picture>
		<div class="visual-title-area">
			<h1><?php echo (get_current_blog_id()==1)?'[ 特色 ]<br />金型、安価材料の提案<br>勉強会の開催':'[Feature]<br />Proposal of mold and inexpensive material Holding a study group' ?></h1>
		</div>
	</div>
	<div id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
				</li>
				<li>
					<a href="advantage1"><?php echo (get_current_blog_id()==1)?'特色':'Advantage' ?></a>
				</li>
				<li><?php echo (get_current_blog_id()==1)?'特色2 金型、安価材料の提案によるコスト削減、勉強会の開催':'Feature 2) Cost reduction by proposing molding and inexpensive material' ?></li>
			</ol>	

			<h1 class="title-1"><?php echo (get_current_blog_id()==1)?'金型費を削減':'Reduction of mold cost' ?></h1>

			<article class="left-article">
			<?php echo (get_current_blog_id()==1)?
			'取り数が最小限となり、金型変更・改造に対し、低コストでの対応が可能となります。<br />
			それにより、量産金型を起型の際には、取り数の多い量産金型での変更が削減され、試作型での問題点も反映されることで、量産金型コストが削減できます。':
			'Minimizing the number of items to be taken, it is possible to respond to mold change / remodeling at low cost.<br />
			Our clients are able to reduce the cost for mold mass production.' ?></article>

			<p>
				<strong><?php echo (get_current_blog_id()==1)?'（試作・量産）カセット型':'(Prototype / mass production) cassette type' ?></strong>
				<br />
				<span><?php echo (get_current_blog_id()==1)?'モールドベースは固定されており、中駒のみを製作するためコスト削減に繋がります。':'The mold base is fixed and it costs less to manufacture only the middle frame.' ?></span>
			</p>

			<p>
				<strong><?php echo (get_current_blog_id()==1)?'（量産）異形状多数個取り型':'(Mass production) Heterogeneous shape multiple mold type' ?></strong>
				<br />
				<span><?php echo (get_current_blog_id()==1)?'4種類の形状が異なる製品を同時成形します。':'Simultaneously form products of 4 different shapes.' ?></span>
			</p>

			<h1 class="title-1"><?php echo (get_current_blog_id()==1)?'勉強会 / 工場見学会':'Study group / Factory tour' ?></h1>

			<article class="left-article"><?php echo (get_current_blog_id()==1)?
			'成形はもちろんのこと、成形加工に欠かせない金型含めて、二次加工の「塗装加工」「印刷加工」等の、工場見学をその道の匠からレクチャーを受ける勉強会を開催しています。<br />
			参加無料ですので、お気軽にお問い合わせください。お問い合わせは':
			'We hold a study group to receive lectures from craftsmen at factories such as "painting processing", "printing processing" and etc. of secondary processing.<br />
			Because it is free of charge, please feel free to' ?>
				<a href="contact" class="txt-red"><?php echo (get_current_blog_id()==1)?'こちら':'contact us' ?></a>
				<?php echo (get_current_blog_id()==1)?'。':'.' ?>
				
			</article>


			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'金型メーカーでの工場見学と金型に関する基礎を受講':'Attend factory tour and take lectures on basic knowledge about molding.' ?></span>
			</h2>

			<ol>
				<li><?php echo (get_current_blog_id()==1)?'金型の製作過程を説明':'Explain the manufacturing process of the mold' ?></li>
				<li><?php echo (get_current_blog_id()==1)?'製作の3Dモデルからの、金型の型構造の検討内容を説明':'Explain the examination of mold structure from the 3D model of production.' ?></li>
				<li>
					<p><?php echo (get_current_blog_id()==1)?'型構造に関する説明':'Explain the mold structure' ?></p>
					<p class="fw-normal"><?php echo (get_current_blog_id()==1)?'例）パーティングの設定、スライド型の構造、傾斜ピンの機構説明、イジェクターピンの設置位置':'Example) Setting of parting, structure of slide, explanation of mechanism of inclined pin and setting position of inductor pin' ?></p>
				</li>
				<li>
					<p><?php echo (get_current_blog_id()==1)?'現場にて工場見学':'Factory tour' ?></p>
					<p class="fw-normal"><?php echo (get_current_blog_id()==1)?'金型製作工程毎の加工機の見学と説明':'Take the explanation of processing machine for each mold manufacturing process.' ?></p>
				</li>
			</ol>

			<div class="advantage-image-list">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/advantage2/advantage2_7.png" alt="工場見学" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/advantage2/advantage2_6.png" alt="工場見学" />
			</div>

			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'二次加工メーカーでの工場見学と金型に関する基礎を受講':'Attend factory tours at the secondary processing maker and take lectures about the foundation on molds.' ?></span>
			</h2>

			<ol>
				<li><?php echo (get_current_blog_id()==1)?'製作過程を説明':'Explain the production process.' ?></li>
				<li>
					<p><?php echo (get_current_blog_id()==1)?'型構造に関する説明':'Explain the mold structure' ?></p>
					<p class="fw-normal"><?php echo (get_current_blog_id()==1)?'例）印刷加工、シルク印刷、パッド印刷、ホットスタンプ加工':'Example) Print processing, silk printing, pad printing, hot stamp processing' ?></p>
				</li>
				<li>
					<p><?php echo (get_current_blog_id()==1)?'現場にて工場見学':'Factory tour' ?></p>
					<p class="fw-normal"><?php echo (get_current_blog_id()==1)?'金型製作工程毎の加工機の見学と説明':'Take the explanation of processing machine for each mold manufacturing process.' ?></p>
				</li>
			</ol>

			<div class="advantage-image-list">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/advantage2/advantage2_3.png" alt="工場見学" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/advantage2/advantage2_2.png" alt="工場見学" />
			</div>

			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'成形工場（弊社）見学と成形に関する基礎を受講':'Join the tour at our molding factory and learn the basics about basics of molding' ?></span>
			</h2>

			<ol>
				<li><?php echo (get_current_blog_id()==1)?'成形工程に関するレクチャー':'Lecture on molding process' ?></li>
				<li><?php echo (get_current_blog_id()==1)?'ゲート方式、樹脂に関するレクチャー':'Lecture on gating method and resin' ?></li>
				<li>
					<p><?php echo (get_current_blog_id()==1)?'現場にて工場見学':'Factory tour' ?></p>
					<p class="fw-normal">
						<span><?php echo (get_current_blog_id()==1)?'実際の生産工程を確認':'Confirm actual production process.' ?></span>
						<ul>
							<li><?php echo (get_current_blog_id()==1)?'成形機の見学と説明':'Get the explanation about the molding machine.' ?></li>
							<li><?php echo (get_current_blog_id()==1)?'検査ラインの見学':'Learn about inspection line.' ?></li>
							<li><?php echo (get_current_blog_id()==1)?'付帯設備（測定器等）の見学':'Tour of incidental facilities (measuring instruments etc.)' ?></li>
						</ul>
					</p>
				</li>
				<li>
					<p><?php echo (get_current_blog_id()==1)?'二次加工の見学':'Tour of secondary processing' ?></p>
					<p class="fw-normal">
						<ul>
							<li><?php echo (get_current_blog_id()==1)?'ASSY工程の見学':'Tour of the ASSY process' ?></li>
						</ul>
					</p>
				</li>
			</ol>

			<div class="advantage-image-list">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/advantage2/advantage2_4.jpg" alt="工場見学" />
				<img src="<?php bloginfo('template_directory') ?>/inc/img/advantage2/advantage2_5.jpg" alt="工場見学" />
			</div>

		</div>
	</div>

<?php get_footer(); ?>

