<?php /* Template Name: factory */ ?>
<?php get_header(); ?>

<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory.png" alt="生産工場" width="100%" /> 
		</picture>
		<div class="visual-title-area">
			<h1><?php echo (get_current_blog_id()==1)?'生産工場':'Factory' ?></h1>
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
				<li><?php echo (get_current_blog_id()==1)?'生産工場':'Factory' ?></li>
			</ol>	

			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'生産工場のご紹介':'Introduction of factory' ?></span>
			</h2>

			<article class="center-article m-left-article"><?php echo (get_current_blog_id()==1)?'理想的な生産環境に万全の安全管理、茨城最新鋭生産ロボット基地。<br />最新鋭の電動式成形機、取り出しロボットを備え24時間体制でお客様の要望に対応しています。':'We have thorough safety management in an ideal production environment.<br />We are equipped with state-of-the-art electric molding machines and take-out robots to meet customers\' requests on a 24-hour basis.' ?></article>

			<h2 class="factory-title"><?php echo (get_current_blog_id()==1)?'本社工場':'Head factory' ?></h2>
			<ul class="factory-image-list">
				<li data-index="0">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_1_view.jpg" alt="生産工場" width="300" height="225" />
				</li>
				<li data-index="1">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_2_view.jpg" alt="生産工場" width="300" height="225" />
				</li>
				<li data-index="2">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_3_view.jpg" alt="生産工場" width="300" height="225" />
				</li>
			</ul>

			<h2 class="factory-title mar_top50"><?php echo (get_current_blog_id()==1)?'茨城工場':'Ibaraki factory' ?></h2>

			<ul class="factory-image-list delay">
				<li data-index="3">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_4_view.jpg" alt="生産工場" width="300" height="225" />
				</li>
				<li data-index="4">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_5_view.jpg" alt="生産工場" width="300" height="225" />
				</li>
				<li data-index="5">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_6_view.jpg" alt="生産工場" width="300" height="225" />
				</li>
				<li data-index="6">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_7_view.jpg" alt="生産工場" width="300" height="225" />
				</li>
				<li data-index="7">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_8_view.jpg" alt="生産工場" width="300" height="225" />
				</li>
				<li data-index="8">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_9_view.jpg" alt="生産工場" width="300" height="225" />
				</li>
			</ul>

			

			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'生産設備概要':'Production facility outline' ?></span>
			</h2>

			<table class="factory-table">
				<thead>
					<tr>
						<th width="25%"><?php echo (get_current_blog_id()==1)?'カテゴリ':'Category' ?></th>
						<th width="30%"><?php echo (get_current_blog_id()==1)?'名称':'Machine' ?></th>
						<th><?php echo (get_current_blog_id()==1)?'本社':'Tokyo' ?></th>
						<th><?php echo (get_current_blog_id()==1)?'茨城':'Ibaraki' ?></th>
						<th><?php echo (get_current_blog_id()==1)?'計':'Total' ?></th>
						<th width="20%"><?php echo (get_current_blog_id()==1)?'メーカー':'Manufacturer' ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="center" rowspan="17"><?php echo (get_current_blog_id()==1)?'射出成形機':'Injection molding machine' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'KM-180B（油圧）':'KM-180B（Hydraulic）' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'川口鉄鋼':'KAWAGUCHI MACHINERY' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'KM-180B2（油圧）':'KM-180B2（Hydraulic）' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'川口鉄鋼':'KAWAGUCHI MACHINERY' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'KM-220B2（油圧）':'KM-220B2（Hydraulic）' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'川口鉄鋼':'KAWAGUCHI MACHINERY' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'J75EⅡ-P（アキュムレーター式油圧）':'J75EⅡ-P（Accumulator type hydraulic pressure）' ?></td>
						<td></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'日本製鋼所':'JAPAN STEEL WORKS' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'J100EⅡ-P（アキュムレーター式油圧）':'J100EⅡ-P（Accumulator type hydraulic pressure）' ?></td>
						<td></td>
						<td>3<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>3<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'日本製鋼所':'JAPAN STEEL WORKS' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'J110ELⅡ（電動式　特注）':'J110ELⅡ（Electric type custom order item）' ?></td>
						<td></td>
						<td>5<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>5<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'日本製鋼所':'JAPAN STEEL WORKS' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'J180ELⅡ（電動式　特注）':'J180ELⅡ（Electric type custom order item）' ?></td>
						<td></td>
						<td>3<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>3<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'日本製鋼所':'JAPAN STEEL WORKS' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'J55ELⅡ（電動式　特注）':'J55ELⅡ（Electric type custom order item）' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'日本製鋼所':'JAPAN STEEL WORKS' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'J85ELⅡ（電動式　特注）':'J85ELⅡ（Electric type custom order item）' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'日本製鋼所':'JAPAN STEEL WORKS' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'α-50iA（電動式　特注）':'α-50iA（Electric type custom order item）' ?></td>
						<td>4<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>4<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ファナック':'FANUC' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'α-30iA（電動式　特注）':'α-30iA（Electric type custom order item）' ?></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ファナック':'FANUC' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'S-2000i50t（電動式　特注）':'S-2000i50t（Electric type custom order item）' ?></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ファナック':'FANUC' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'S-2000i100t（電動式　特注）':'S-2000i100t（Electric type custom order item）' ?></td>
						<td>3<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>3<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ファナック':'FANUC' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'S-2000i150t（電動式　特注）':'S-2000i150t（Electric type custom order item）' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ファナック':'FANUC' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'S-2000i50B（電動式　特注）':'S-2000i50B（Electric type custom order item）' ?></td>
						<td></td>
						<td>13<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>13<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ファナック':'FANUC' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'S-2000i100B（電動式　特注）':'S-2000i100B（Electric type custom order item）' ?></td>
						<td></td>
						<td>5<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>5<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ファナック':'FANUC' ?></td>
					</tr>
					<tr>
						<td><?php echo (get_current_blog_id()==1)?'J350ADS-1400H（SCサイズ）':'J350ADS-1400H（SC Size）' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'日本製鋼所':'JAPAN STEEL WORKS' ?></td>
					</tr>
					<tr>
						<td class="center" rowspan="12"><?php echo (get_current_blog_id()==1)?'取出機':'Ejector' ?></td>
						<td>TS-900FMⅡ5</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>TS-800FMⅡ5</td>
						<td></td>
						<td>7<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>7<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>TS-800FM5</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>TS-800FMⅢ5</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>9<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>10<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>TS-600FMⅢ5</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>TS-800FMⅣ5</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>TS-600FMⅣ5</td>
						<td>5<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>5<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>GX-500S</td>
						<td>4<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>4<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>GX-700S</td>
						<td>3<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>3<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>VSX-α-70DL</td>
						<td></td>
						<td>12<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>12<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ユーシン':'U-Shin' ?></td>
					</tr>
					<tr>
						<td>YAx-70DL</td>
						<td></td>
						<td>6<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>6<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ユーシン':'U-Shin' ?></td>
					</tr>
					<tr>
						<td>GXW-1200SVI</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td class="center" rowspan="4"><?php echo (get_current_blog_id()==1)?'乾燥機':'Dryer' ?></td>
						<td>TK-50L</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ハーモ':'HARMO' ?></td>
					</tr>
					<tr>
						<td>FN-50S</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'シュトルツ':'STOLZ' ?></td>
					</tr>
					<tr>
						<td>MK-50</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'森田精機':'MORITA' ?></td>
					</tr>
					<tr>
						<td>SLM2-Ⅲ100</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'加藤埋機':'KATO' ?></td>
					</tr>
					<tr>
						<td class="center" rowspan="6"><?php echo (get_current_blog_id()==1)?'コンプレッサー':'Compressor' ?></td>
						<td>MIP-W-110</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'富士コンプレッサー':'FUJI Compressor' ?></td>
					</tr>
					<tr>
						<td>CM-11B</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'神戸製鋼':'KOBELCO' ?></td>
					</tr>
					<tr>
						<td>TLD110-10</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'アネスト岩田':'ANEST IWATA' ?></td>
					</tr>
					<tr>
						<td>W-150</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'富士コンプレッサー':'FUJI Compressor' ?></td>
					</tr>
					<tr>
						<td>HM15AD</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'神戸製鋼':'KOBELCO' ?></td>
					</tr>
					<tr>
						<td>ZV22AX-R</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'三井精機':'MITSUI SEIKI' ?></td>
					</tr>
					<tr>
						<td class="center" rowspan="7"><?php echo (get_current_blog_id()==1)?'ベルトコンベア':'Belt conveyor' ?></td>
						<td>PSY-30-200</td>
						<td>4<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>4<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'サンエイコンベアー':'SANEI' ?></td>
					</tr>
					<tr>
						<td>104-300-100</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'マルヤス機械':'MARUYASU' ?></td>
					</tr>
					<tr>
						<td>EC2000-3</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>5<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>6<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>EC2000-4</td>
						<td></td>
						<td>23<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>23<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>EC2000-6</td>
						<td></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>SEC2000-3Y</td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td>SEC4000-5CCB</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'スター精機':'STAR SEIKI' ?></td>
					</tr>
					<tr>
						<td class="center" rowspan="9"><?php echo (get_current_blog_id()==1)?'ホッパードライヤーローダー':'Hopper dryer loader' ?></td>
						<td>HN-25A, LNI-10</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'シュトルツ':'STOLZ' ?></td>
					</tr>
					<tr>
						<td>NC-52, LK-11</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'シュトルツ':'STOLZ' ?></td>
					</tr>
					<tr>
						<td>NC-53, LK-11</td>
						<td>6<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>12<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>18<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'シュトルツ':'STOLZ' ?></td>
					</tr>
					<tr>
						<td>NC-54, LK-11</td>
						<td></td>
						<td>4<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>4<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'シュトルツ':'STOLZ' ?></td>
					</tr>
					<tr>
						<td>MGD-15J</td>
						<td>3<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>3<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'松井製作所':'MATSUI' ?></td>
					</tr>
					<tr>
						<td>MGD-25J</td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'松井製作所':'MATSUI' ?></td>
					</tr>
					<tr>
						<td>HD2-25, JL24-4V-J</td>
						<td></td>
						<td>19<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>19<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'松井製作所':'MATSUI' ?></td>
					</tr>
					<tr>
						<td>HD2-50, JL24-4V-J</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'松井製作所':'MATSUI' ?></td>
					</tr>
					<tr>
						<td>NS-150</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'シュトルツ':'STOLZ' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'3次元CAD':'3D CAD' ?></td>
						<td>PRO-ENGINEER</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'武藤工業':'MUTOH' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'デジタルHFマイクロスコープ':'Digital HF microscope' ?></td>
						<td>VH-8000</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'キーエンス':'KEYENCE' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'デジマイクロ':'Digi micro' ?></td>
						<td>ME-501A</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ニコン':'Nikon' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'CNC画像測定システムNEXIV':'CNC image measurement system NEXIV' ?></td>
						<td>VMR-3020</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ニコン':'Nikon' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'CNC三次元測定器':'CNC 3D measuring instrument' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'BRT-504 Sシステム':'BRT-504 S System' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ミツトヨ':'Mitsutoyo' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'測定顕微鏡':'Measuring microscope' ?></td>
						<td>TR-1020F</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ミツトヨ':'Mitsutoyo' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'二次元データ処理装置':'2D data processing device' ?></td>
						<td>MPK-7</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>2<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ミツトヨ':'Mitsutoyo' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'真円度測定器':'Circularity measuring instrument' ?></td>
						<td>RONDCOM30C</td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'東京精密':'ACCRETECH' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'表面粗さ測定器':'Surface roughness measuring instrument' ?></td>
						<td>SJ-301/4MN</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ミツトヨ':'Mitsutoyo' ?></td>
					</tr>
					<tr>
						<td class="center">"<?php echo (get_current_blog_id()==1)?'環境試験機<br />-30℃ 〜 +120℃<br />加湿30% ~ 98%':'Environmental testing machine<br />-30℃ 〜 +120℃<br />Humidification 30% ~ 98%' ?>"</td>
						<td>HPAC-48-40</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'いすゞ製作所':'ISUZU' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'トルクゲージ':'Torque gauge' ?></td>
						<td>15kgf・cmBTG</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'トーニチ':'TOHNICHI' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'色差計':'Color difference meter' ?></td>
						<td>CR-300</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'ミノルタ':'MINOLTA' ?></td>
					</tr>
					<tr>
						<td class="center"><?php echo (get_current_blog_id()==1)?'アニール処理機':'Annealing machine' ?></td>
						<td>TRI</td>
						<td></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td>1<?php echo (get_current_blog_id()==1)?'台':'' ?></td>
						<td><?php echo (get_current_blog_id()==1)?'井内盛栄堂':'ASONE' ?></td>
					</tr>
				</tbody>
			</table>

			<div id="imageGallery">
				<div class="image-header">
					<div class="image-index"> 
						<span id="counterIndex">1</span>
						<span>/ 9</span>
					</div>
					<div class="image-toolbar">
						<a href="javascript:;">
							<i class="fa fa-times" id="close_btn"></i>
						</a>
					</div>
				</div>
				<div id="factoryGalleryWrapper">
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_1.jpg" alt="本社工場" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'本社工場':'Head factory' ?></span>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_2.jpg" alt="本社工場" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'本社工場':'Head factory' ?></span>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_3.jpg" alt="本社工場" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'本社工場':'Head factory' ?></span>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_4.jpg" alt="茨城工場" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'茨城工場':'Ibaraki factory' ?></span>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_5.jpg" alt="茨城工場" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'茨城工場':'Ibaraki factory' ?></span>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_6.jpg" alt="茨城工場" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'茨城工場':'Ibaraki factory' ?></span>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_7.jpg" alt="茨城工場" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'茨城工場':'Ibaraki factory' ?></span>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_8.jpg" alt="茨城工場" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'茨城工場':'Ibaraki factory' ?></span>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/factory/factory_9.jpg" alt="茨城工場" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'茨城工場':'Ibaraki factory' ?></span>
						</div>
					</div>
				</div>
				<div class="image-arrow">
					<button id="img_prev">
						<i class="fa fa-arrow-left"></i>
					</button>
					<button id="img_next">
						<i class="fa fa-arrow-right"></i>
					</button>
				</div>
			</div>

		</div>
	</div>

<?php get_footer(); ?>