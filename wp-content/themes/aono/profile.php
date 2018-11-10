<?php /* Template Name: profile */ ?>
<?php get_header(); ?>

<div id="visual">
	<picture> 
		<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/profile/profile_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/profile/profile.png" alt="会社案内" width="100%" /> 
		</picture>
		<div class="visual-title-area">
			<h1><?php echo (get_current_blog_id()==1)?'会社概要':'Outline' ?></h1>
		</div>
	</div>
	<div id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
				</li>
				<li>
					<a href="profile"><?php echo (get_current_blog_id()==1)?'会社案内':'About us' ?></a>
				</li>
				<li><?php echo (get_current_blog_id()==1)?'会社概要':'Outline' ?></li>
			</ol>	
			
			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'企業情報':'Company Information' ?></span>
			</h2>

			<table class="profile-table" width="90%">
				<tr>
					<th width="20%"><?php echo (get_current_blog_id()==1)?'商号':'Company name' ?></th>
					<td width="80%"><?php echo (get_current_blog_id()==1)?'株式会社青野工業':'Aono Industrial Co., Ltd.' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'設立':'Establishment' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'1971年8月（昭和46年8月）':'August 1971' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'資本金':'Capital' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'1,000万円':'JPY 10 million' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'代表者':'Representative' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'代表取締役社長　青野義樹':'CEO Yoshiki Aono' ?></td>
				</tr>
				<tr>
					<th rowspan="2"><?php echo (get_current_blog_id()==1)?'事業所':'Offices' ?></th>
					<td>
					<?php echo (get_current_blog_id()==1)?'本社<br />東京都品川区西大井6-7-2<br />TEL.03-3776-3144　/　FAX.03-3777-6896':'Headquarters<br />6-7-2, Nishioi, Shinagawa-ku, Tokyo, 140-0015, Japan<br />TEL.03-3776-3144　/　FAX.03-3777-6896' ?>
					</td>
				</tr>
				<tr>
					<td>
					<?php echo (get_current_blog_id()==1)?'茨城事業所<br />茨城県稲敷郡河内町金江津5505<br />TEL.0279-86-3661　/　FAX.0279-86-3665':'Ibaraki Factory<br />5505, Kanaetsu, Kawachi-machi Inashiki-gun, Ibaraki, 300-1403, Japan<br />TEL.0279-86-3661　/　FAX.0279-86-3665' ?>
					</td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'事業内容':'Business' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'プラスチック製品の成形、金型、塗装、印刷、メッキ、蒸着、組立までの一貫生産販売':'Integrated production/sales of molding, molds, painting, printing, plating, vapor deposition, assembly of plastic products ' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'生産品目':'Production item' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'情報家電・OA機器部品、携帯電話関係部品、通信機器部品、住宅及び工業用部品など':'Information appliances, OA equipment parts, mobile phone related parts, communication equipment parts, housing and industrial parts etc.' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'取引銀行':'Bank' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'三菱UFJ、芝信用金庫':'Mitsubishi UFJ, Shiba Shinkin' ?></td>
				</tr>
			</table>

			<div class="ios-area">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/profile/asr02.gif" alt="ios認証" />
				
					<div class="ios-item">
					<?php echo (get_current_blog_id()==1)?'ISO 9001:2015<br />- 登録番号:ASR-Q0462<br />- 登録日:2004年9月15日<br />- 改定日:2017年11月9日<br />- 有効期限:2019年9月14日':'ISO 9001:2015<br />- Registered number: ASR-Q0462<br />- Registered date: September 15th, 2004<br />- Revision date: November 9th, 2017<br />- Expiration date: September 14th, 2019' ?>
					</div>
					<div class="ios-item">
					<?php echo (get_current_blog_id()==1)?'ISO 14001:2015<br />- 登録番号:ASR-E0084<br />- 登録日:2006年2月20日<br />- 改定日:2017年9月5日<br />- 有効期限:2020年9月16日':'ISO 14001:2015<br />- Registered number: ASR-E0084<br />- Registered date: February 20th, 2006<br />- Revision date: September 5th, 2017<br />- Expiration date: September 16th, 2020' ?>
					</div>
					<div class="ios-item">
					<?php echo (get_current_blog_id()==1)?'パナソニック(株)セミコンダクター社<br />品質自主保証会社 認定<br />2009年12月1日 取得':'Panasonic Corporation<br />Certification: Quality voluntary guarantee company<br />Acquired: December 1st, 2009' ?>
					</div>
			</div>

			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'アクセス':'Access' ?></span>
			</h2>

			<div class="map-area">
				<div class="map-item">
					<div class="address">
						<i class="fa fa-caret-right"></i>
						<?php echo (get_current_blog_id()==1)?'本社<br />東京都品川区西大井6丁目7番2号<br />TEL : 03-3776-3144 FAX : 03-3777-6896':'Headquarters<br />6-7-2, Nishioi, Shinagawa-ku, Tokyo, 140-0015, Japan<br />TEL.03-3776-3144　/　FAX.03-3777-6896' ?>
					</div>
					<div id="officeMap"></div>
				</div>
				<div class="map-item">
					<div class="address">
						<i class="fa fa-caret-right"></i>
						<?php echo (get_current_blog_id()==1)?'▶ 茨城事業所<br />茨城県稲敷郡河内町金江津5505番地<br />TEL : 0297-86-3661 FAX : 0297-86-3665':'Ibaraki Factory<br />5505, Kanaetsu, Kawachi-machi Inashiki-gun, Ibaraki, 300-1403, Japan<br />TEL.0279-86-3661　/　FAX.0279-86-3665' ?>
					</div>
					<div id="factoryMap"></div>
				</div>
			</div>

			<h2 class="title-2　en-hide">
				<span class="en-hide">統合マネジメントシステム(ＩＭＳ方針)</span>
			</h2>

			<article class="left-article en-hide">
				株式会社青野工業は地球環境の保護に配慮しながらプラスチック製品を提供しお客様が喜んでいただける製品とサービスを提供いたします。<br>
				弊社は、この統合マネジメントシステム（ＩＭＳ）方針を達成するため法令を遵守し社員に周知徹底し、維持管理し、有効性の継続的改善に努めます。
			</article>

			<div class="profile-policy-item en-hide">
				<i class="fa fa-caret-right"></i>
				<span>品質マネジメントシステム重点実施事項</span>
				<ul class="profile-policy-list">
					<li>各部門長に品質方針を達成するための具体的な、年度毎の品質目標を設定させる。</li>
					<li>各部門は、これを達成するための活動を計画し、実行する。</li>
					<li>お客様のニーズに素早く対応できるシステムを構築する。</li>
					<li>品質向上に向けた継続的な改善に取り組む。</li>
				</ul>
			</div>

			<div class="profile-policy-item en-hide">
				<i class="fa fa-caret-right"></i>
				<span>環境マネジメントシステム重点実施事項</span>
				<ul class="profile-policy-list">
					<li>当社の生産活動に係わる環境影響を製品のライフサイクルの視点で認識し、環境目標を定め、環境汚染の予防及び環境保護を推進するとともに環境マネジメントシステムの継続的改善を図る。</li>
					<li>環境関連法規及び当社が同意したその他の要求事項を遵守する。</li>
					<li>当社で製造される製品が与える環境影響の中で、以下の項目を重点に環境マネジメント活動を行なう。</li>
					<li>省エネ</li>
					<li>省資源</li>
					<li>地球温暖化防止</li>
					<li>環境目標は定期的に見直しを行なう。</li>
					<li>全社員に環境教育を実施し、環境方針及び保全の重要性を認識させ意識向上に努める。</li>
				</ul>
			</div>

			<div class="profile-policy-item en-hide">
				<span>※適用範囲</span>
				<ol class="profile-policy-list">
					<li>適用事業（製品/サービス）<br>プラスチック製品の製造業務</li>
					<li>適用事業所<br>本社・工場：東京都品川区西大井6-7-2<br>茨城事業所：茨城県稲敷郡河内町金江津5505</li>
				</ol>
			</div>

			<p class="right-text en-hide">
				<span class="right-text-break">株式会社青野工業 代表取締役 青野義樹</span>
			</p>

		</div>
	</div>

	<?php get_footer(); ?>
