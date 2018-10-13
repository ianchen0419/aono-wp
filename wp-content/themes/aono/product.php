<?php /* Template Name: product */ ?>
<?php get_header(); ?>

<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/product/product_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product.png" alt="製品ギャラリー" width="100%" /> 
		</picture>
		<div class="visual-title-area">
			<h1><?php echo (get_current_blog_id()==1)?'製品ギャラリー':'Product gallery' ?></h1>
		</div>
	</div>
	<div id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
				</li>
				<li><?php echo (get_current_blog_id()==1)?'製品ギャラリー':'Product gallery' ?></li>
			</ol>	

			<h2 class="title-2" id="communication">
				<span><?php echo (get_current_blog_id()==1)?'通信機器':'Communication equipment' ?></span>
			</h2>

			<ul class="product-image-list"> 
				<li>

					<p class="image-title"><?php echo (get_current_blog_id()==1)?'スマートフォンカバー':'Smartphone cover' ?></p>
					<div class="image-list-item" data-index="0">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_1_view.jpg" alt="スマートフォンカバー" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'漆風UV塗装・蒸着':'Lacquered UV coating / vapor deposition' ?></p>
				</li>
				<li>

					<p class="image-title"><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></p>
					<div class="image-list-item" data-index="1">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_2_view.jpg" alt="携帯電話" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'UV塗装・蒸着部品':'UV coating / vapor deposition' ?></p>
				</li>
				<li>

					<p class="image-title"><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></p>
					<div class="image-list-item" data-index="2">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_3_view.jpg" alt="携帯電話" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'UV塗装・蒸着部品':'UV coating / vapor deposition' ?></p>
				</li>
				<li>

					<p class="image-title"><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></p>
					<div class="image-list-item" data-index="3">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_4_view.jpg" alt="携帯電話" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'マスキング UV塗装・蒸着部品':'Masking UV coating / vapor deposition' ?></p>
				</li>
				<li>

					<p class="image-title"><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></p>
					<div class="image-list-item" data-index="4">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_5_view.jpg" alt="携帯電話" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'マスキング UV塗装・蒸着部品':'Masking UV coating / vapor deposition' ?></p>
				</li>
				<li>

					<p class="image-title"><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></p>
					<div class="image-list-item" data-index="5">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_6_view.jpg" alt="携帯電話" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'メカ部品 ASSY部品':'Mechanical parts / ASSY parts' ?></p>
				</li>
				<li>

					<p class="image-title"><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></p>
					<div class="image-list-item" data-index="6">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_7_view.jpg" alt="携帯電話" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'メカ部品':'Mechanical parts' ?></p>
				</li>
				<li>

					<p class="image-title"><?php echo (get_current_blog_id()==1)?'IoT関連部品':'IoT related parts' ?></p>
					<div class="image-list-item" data-index="7">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_2_view.jpg" alt="IoT関連部品" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'ヘッドマウントディスプレー（ウェアラブルキーボード）<br />※塗装・アウトサート仕様　100t成形機':'Head Mounted Display (Wearable Keyboard)<br />*Painting / Outsert specification 100t molding machine' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'無線機部品':'Radio equipment parts' ?></p>
					<div class="image-list-item" data-index="8">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_8_view.jpg" alt="無線機部品" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'特定小電力トランシーバー（据え置き型ベース機）<br />※印刷・メッキ仕様  150t成形機':'Specified low power transceiver (stationary base machine)<br />*Printing / Plating specification 150t molding machine' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'IoT関連部品':'IoT related parts' ?></p>
					<div class="image-list-item" data-index="9">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_9_view.jpg" alt="IoT関連部品" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'給水ポンプ 表示窓部 ※150t成形機<br />ＰＣ透明マスキング塗装':'Water supply pump display window<br />*150t molding machine' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'WiFiケース':'WiFi case' ?></p>
					<div class="image-list-item" data-index="10">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_4_view.jpg" alt="WiFiケース" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'WiFiルーター ※180t成形機':'WiFi router *180t molding machine' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'WiFiケース':'WiFi case' ?></p>
					<div class="image-list-item" data-index="11">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_3_view.jpg" alt="WiFiケース" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'WiFiルーター':'WiFi router' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'海上用GPS部品':'Marine GPS parts' ?></p>
					<div class="image-list-item" data-index="12">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_7_view.jpg" alt="海上用GPS部品" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'GPS受信機 ※ねじ切り型・肉厚成形 220t成形機':'GPS receiver *Thread cutting type · thick wall molding 220t molding machine' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'海上用GPS部品':'Marine GPS parts' ?></p>
					<div class="image-list-item" data-index="13">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_5_view.jpg" alt="海上用GPS部品" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'ケース　※220成形':'Case *220 molding' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'ブースターケース':'Booster case' ?></p>
					<div class="image-list-item" data-index="14">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_6_view.jpg" alt="ブースターケース" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'映像分配器':'Video distributor' ?></p>
				</li>
			</ul>

			<h2 class="title-2" id="battery">
				<span><?php echo (get_current_blog_id()==1)?'蓄電池':'Storage battery' ?></span>
			</h2>

			<ul class="product-image-list"> 
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'蓄電池用ケース':'Resin case for storage battery' ?></p>
					<div class="image-list-item" data-index="15">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_view.jpg" alt="蓄電池用ケース" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'産業用リチウムイオン電池ケース ※350t成形機':'Industrial lithium ion battery case *350t molding machine' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'蓄電池用ケース':'Resin case for storage battery' ?></p>
					<div class="image-list-item" data-index="16">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_1_view.jpg" alt="蓄電池用ケース" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'産業用リチウムイオン電池ケース<br />※インサート(ナット27個)成形':'Industrial lithium ion battery case<br />* Insert (27 nuts) molding' ?></p>
				</li>
			</ul>

			<h2 class="title-2" id="automobile">
				<span><?php echo (get_current_blog_id()==1)?'自動車関連':'Automobile related' ?></span>
			</h2>

			<ul class="product-image-list"> 
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'カーエレクトロニクス':'Car electronics' ?></p>
					<div class="image-list-item" data-index="17">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_8_view.jpg" alt="カーエレクトロニクス" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'カーナビゲーション部品 PANEL鏡面仕上げ':'Car navigation parts' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'カーエレクトロニクス':'Car electronics' ?></p>
					<div class="image-list-item" data-index="18">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_7_view.jpg" alt="カーエレクトロニクス" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'カーナビゲーション部品 ※塗装・印刷仕様':'Car navigation parts *painting and printing specifications' ?></p>
				</li>
			</ul>

			<h2 class="title-2" id="automobile">
				<span><?php echo (get_current_blog_id()==1)?'その他製品':'Other products' ?></span>
			</h2>

			<ul class="product-image-list"> 
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'屈折計ケース':'Refractometer case' ?></p>
					<div class="image-list-item" data-index="19">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_3_view.jpg" alt="屈折計ケース" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'ポータブル屈折施光計　※メッキ・印刷・ヘアーライン仕様':'Portable refractive refractometer *plating / printing / hairline specification' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'糖度計ケース':'Saccharimeter case' ?></p>
					<div class="image-list-item" data-index="20">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_2_view.jpg" alt="糖度計ケース" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'ポケット糖度計':'Pocket saccharimeter' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'電流計部品':'Ammeter parts' ?></p>
					<div class="image-list-item" data-index="21">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_4_view.jpg" alt="電流計部品" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'※エラストマ インサート成形':'*Elastomer insert molding' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'カメラ用部品':'Camera parts' ?></p>
					<div class="image-list-item" data-index="22">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_5_view.jpg" alt="カメラ用部品" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'防犯カメラパーツ 50～100t成形機<br />ネジ切り型ラックモーター仕様':'Security camera parts 50-100t molding machine<br />Threaded rack motor specification' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'レギュレーター部品':'Regulator parts' ?></p>
					<div class="image-list-item" data-index="23">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_6_view.jpg" alt="レギュレーター部品" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'レギュレーター、外ネジ、内ネジ切り型 ラックギヤ仕様':'Regulator, external thread, internally threaded rack gear specification' ?></p>
				</li>
				<li>
					<p class="image-title"><?php echo (get_current_blog_id()==1)?'バルブ・電磁弁・空圧機器':'Valve, solenoid valve, pneumatic device' ?></p>
					<div class="image-list-item" data-index="24">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_1_view.jpg" alt="バルブ・電磁弁・空圧機器" />
					</div>
					<p class="image-info"><?php echo (get_current_blog_id()==1)?'※オリジナル調色対応も可　30～50t成形機':'* Original toning correspondence is also possible, 30 to 50t molding machine' ?></p>
				</li>
			</ul>

			<div id="imageGallery">
				<div class="image-header">
					<div class="image-index"> 
						<span id="counterIndex">1</span>
						<span>/ 25</span>
					</div>
					<div class="image-toolbar">
						<a href="javascript:;">
							<i class="fa fa-arrows-alt" id="full_btn"></i>
						</a>
						<a href="inc/img/product/product_9_2.jpg" id="dl_btn" download="青野工業" >	
							<i class="fa fa-download"></i>
						</a>
						<a href="javascript:;">
							<i class="fa fa-times" id="close_btn"></i>
						</a>
					</div>
				</div>
				<div id="imageGalleryWrapper">
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_1.jpg" alt="スマートフォンカバー" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'スマートフォンカバー':'Smartphone cover' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'漆風UV塗装・蒸着':'Lacquered UV coating / vapor deposition' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_2.jpg" alt="携帯電話" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'UV塗装・蒸着部品':'UV coating / vapor deposition' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_3.jpg" alt="携帯電話" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'UV塗装・蒸着部品':'UV coating / vapor deposition' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_4.jpg" alt="携帯電話" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'マスキング UV塗装・蒸着部品':'Masking UV coating / vapor deposition' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_5.jpg" alt="携帯電話" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'マスキング UV塗装・蒸着部品':'Masking UV coating / vapor deposition' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_6.jpg" alt="携帯電話" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'メカ部品 ASSY部品':'Mechanical parts / ASSY parts' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/aono_b_7.jpg" alt="携帯電話" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'携帯電話':'Cell phone' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'メカ部品':'Mechanical parts' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_2.jpg" alt="IoT関連部品" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'IoT関連部品':'IoT related parts' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'ヘッドマウントディスプレー（ウェアラブルキーボード）<br />※塗装・アウトサート仕様　100t成形機':'Head Mounted Display (Wearable Keyboard)<br />*Painting / Outsert specification 100t molding machine' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_8.jpg" alt="無線機部品" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'無線機部品':'Radio equipment parts' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'特定小電力トランシーバー（据え置き型ベース機）<br />※印刷・メッキ仕様 150t成形機':'Specified low power transceiver (stationary base machine)<br />*Printing / Plating specification 150t molding machine' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_9.jpg" alt="IoT関連部品" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'IoT関連部品':'IoT related parts' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'給水ポンプ 表示窓部 ※150t成形機<br />ＰＣ透明マスキング塗装':'Water supply pump display window * 150t molding machine<br />PC transparent masking painting' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_4.jpg" alt="WiFiケース" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'WiFiケース':'WiFi case' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'WiFiルーター ※180t成形機':'WiFi router *180t molding machine' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_3.jpg" alt="WiFiケース" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'WiFiケース':'WiFi case' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'WiFiルーター':'WiFi router' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_7.jpg" alt="海上用GPS部品" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'海上用GPS部品':'Marine GPS parts' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'GPS受信機 ※ねじ切り型・肉厚成形 220t成形機':'GPS receiver *Thread cutting type · thick wall molding 220t molding machine' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_5.jpg" alt="海上用GPS部品" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'海上用GPS部品':'Marine GPS parts' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'ケース　※220成形':'Case *220 molding' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_6.jpg" alt="ブースターケース" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'ブースターケース':'Booster case' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'映像分配器':'Video distributor' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9.jpg" alt="蓄電池用ケース" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'蓄電池用ケース':'Resin case for storage battery' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'産業用リチウムイオン電池ケース ※350t成形機':'Industrial lithium ion battery case *350t molding machine' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_9_1.jpg" alt="蓄電池用ケース" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'蓄電池用ケース':'Resin case for storage battery' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'産業用リチウムイオン電池ケース<br />※インサート(ナット27個)成形':'Industrial lithium ion battery case<br />* Insert (27 nuts) molding' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_8.jpg" alt="カーエレクトロニクス" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'カーエレクトロニクス':'Car electronics' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'カーナビゲーション部品 PANEL鏡面仕上げ':'Car navigation parts' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_7.jpg" alt="カーエレクトロニクス" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'カーエレクトロニクス':'Car electronics' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'カーナビゲーション部品 ※塗装・印刷仕様':'Car navigation parts *painting and printing specifications' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_3.jpg" alt="屈折計ケース" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'屈折計ケース':'Refractometer case' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'ポータブル屈折施光計　※メッキ・印刷・ヘアーライン仕様':'Portable refractive refractometer *plating / printing / hairline specification' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_2.jpg" alt="糖度計ケース" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'糖度計ケース':'Saccharimeter case' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'ポケット糖度計':'Pocket saccharimeter' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_4.jpg" alt="電流計部品" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'電流計部品':'Ammeter parts' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'※エラストマ インサート成形':'*Elastomer insert molding' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_5.jpg" alt="カメラ用部品" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'カメラ用部品':'Camera parts' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'防犯カメラパーツ 50～100t成形機<br />ネジ切り型ラックモーター仕様':'Security camera parts 50-100t molding machine<br />Threaded rack motor specification' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_6.jpg" alt="レギュレーター部品" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'レギュレーター部品':'Regulator parts' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'レギュレーター、外ネジ、内ネジ切り型 ラックギヤ仕様':'Regulator, external thread, internally threaded rack gear specification' ?></small>
						</div>
					</div>
					<div class="image-item">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/product/product_1.jpg" alt="バルブ・電磁弁・空圧機器" />
						<div class="image-footer">
							<span><?php echo (get_current_blog_id()==1)?'バルブ・電磁弁・空圧機器':'Valve, solenoid valve, pneumatic device' ?></span>
							<br />
							<small><?php echo (get_current_blog_id()==1)?'※オリジナル調色対応も可　30～50t成形機':'* Original toning correspondence is also possible, 30 to 50t molding machine' ?></small>
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

