<?php /* Template Name: quality */ ?>
<?php get_header(); ?>

<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/quality/quality_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/quality/quality.png" alt="品質保証" width="100%" /> 
		</picture>
		<div class="visual-title-area">
			<h1><?php echo (get_current_blog_id()==1)?'品質保証':'Quality assurance' ?></h1>
		</div>
	</div>
	<div id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
				</li>
				<li>
					<a href="process"><?php echo (get_current_blog_id()==1)?'生産・品質':'Production / Quality' ?></a>
				</li>
				<li><?php echo (get_current_blog_id()==1)?'品質保証':'Quality assurance' ?></li>
			</ol>	

			<article class="left-article">"<?php echo (get_current_blog_id()==1)?'大手企業様への納品実績多数。<br />最新・高精度な計測器を用いて品質保証を行っています。<br />簡単な形状測定から複雑な形状測定など様々な評価方法で対応します。':'We have dealt with a lot of leading companies.<br />Quality assurance is carried out using latest and high precision measuring instruments.<br />We support it by various evaluation methods such as simple shape to complicated shape measurement.' ?>"</article>

			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'主な計測機器':'Main measuring instruments' ?></span>
			</h2>


			<ul class="quality-image-list"> 
				<li class="quality-image-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/quality/001.jpg" alt="三次元測定器" />
				</li>
				<li class="quality-text-item">
					<i class="fa fa-caret-right"></i>
					<?php echo (get_current_blog_id()==1)?'▶ 三次元測定器<br />メーカ：ニコン<br />型式：CNC画像測定システムNEXIV VMR-3020<br />１/１０００ｍｍの寸法測定も可能です。<br />複雑な形状まで幅広く対応いたします。':'3D measuring instrument<br />Manufacturer: Nikon<br />Model: CNC image measurement system NEXIV VMR-3020<br />Dimension measurement of 1/1000 mm is possible.<br />Correspond to complicated shapes.' ?>
				</li>
				<li class="quality-image-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/quality/002.jpg" alt="三次元測定器" />
				</li>
				<li class="quality-text-item">
					<i class="fa fa-caret-right"></i>
					<?php echo (get_current_blog_id()==1)?'CNC画像測定システム NEXIV<br />メーカ：ニコン<br />型名：VMR-6555':'CNC image measurement system NEXIV<br />Manufacturer: Nikon<br />Model name: VMR-6555' ?>
				</li>
				<li class="quality-image-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/quality/003.jpg" alt="顕微鏡測定器" />
				</li>
				<li class="quality-text-item">
					<i class="fa fa-caret-right"></i>
					<?php echo (get_current_blog_id()==1)?'顕微鏡測定器<br />メーカ：ミツトヨ<br />型式：測定顕微鏡 TF-1020F<br />二次元形状の製品の測定に有効です。':'Microscope measuring instrument<br />Manufacturer: Mitsutoyo<br />Model: measuring microscope TF-1020F<br />It is effective for measuring products in two dimensions.' ?>
				</li>
				<li class="quality-image-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/quality/004.jpg" alt="デジタルHFマイクロスコープ" />
				</li>
				<li class="quality-text-item">
					<i class="fa fa-caret-right"></i>
					<?php echo (get_current_blog_id()==1)?'デジタルHFマイクロスコープ<br />メーカ：キーエンス<br />VH-8000<br />三次元画像で観察でき、寸法測定も出来ます。':'Digital HF Microscope<br />Manufacturer: KEYENCE<br />VH-8000<br />It can be observed with 3D images and dimension measurement is possible.' ?>
				</li>
				<li class="quality-image-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/quality/005.jpg" alt="恒温槽" />
				</li>
				<li class="quality-text-item">
					<i class="fa fa-caret-right"></i>
					<?php echo (get_current_blog_id()==1)?'恒温槽<br />メーカ：いすゞ製作所<br />型式：低温恒温恒湿器<br />環境を変化させてのサイクル試験を行います。':'Thermostat<br />Manufacturer: ISUZU<br />Model: Low temperature thermo-hygrostat<br />Conduct a cycle test by changing the environment.' ?>
				</li>
				<li class="quality-image-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/quality/006.jpg" alt="真円度測定機" />
				</li>
				<li class="quality-text-item">
					<i class="fa fa-caret-right"></i>
					<?php echo (get_current_blog_id()==1)?'真円度測定機<br />メーカ：東京精密<br />型式：真円度・円筒形状測定機 ロンコム30C<br />円筒形状の真円度を測定します。':'Roundness measuring machine<br />Manufacturer: ACCRETECH<br />Model: Roncom 30C, roundness/cylindrical shape measuring machine <br />Measure the roundness of the cylindrical shape.' ?>
				</li>
				<li class="quality-image-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/quality/007.jpg" alt="表面粗さ測定機" />
				</li>
				<li class="quality-text-item">
					<i class="fa fa-caret-right"></i>
					<?php echo (get_current_blog_id()==1)?'表面粗さ測定機<br />メーカ：ミツトヨ<br />型式：サーフテスト SJ-301<br />表面の粗さを測定数値化します。':'Surface roughness measuring machine<br />Manufacturer: Mitsutoyo<br />Model: Surf test SJ-301<br />Measure the surface roughness numerically.' ?>
				</li>
				<li class="quality-image-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/quality/008.jpg" alt="色彩色差計" />
				</li>
				<li class="quality-text-item">
					<i class="fa fa-caret-right"></i>
					<?php echo (get_current_blog_id()==1)?'色彩色差計<br />メーカ：ミノルタ<br />型式：色差計 CR-300<br />塗装、印刷等の色味の管理に使用します。':'Color difference meter<br />Manufacturer: Minolta<br />Model: CR-300, Color difference meter<br />It is used for management of colors such as painting and printing.' ?>
				</li>
				<li class="quality-image-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/quality/009.jpg" alt="密着評価機" />
				</li>
				<li class="quality-text-item">
					<i class="fa fa-caret-right"></i>
					<?php echo (get_current_blog_id()==1)?'密着評価機<br />メーカ：自社製造<br />型式：スライド密着試験機<br />塗装、印刷等の剥離試験を行います。':'Adhesion evaluation machine<br />Manufacturer: In-house manufacturing<br />Model: Slide contact tester<br />Perform peeling tests such as painting and printing.' ?>
				</li>
			</ul>


		</div>
	</div>

<?php get_footer(); ?>

