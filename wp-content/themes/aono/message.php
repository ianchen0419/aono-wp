<?php /* Template Name: message */ ?>
<?php get_header(); ?>

<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/message/message_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/message/message.png" alt="経営理念" width="100%" /> 
		</picture>
		<div class="visual-title-area">
			<h1><?php echo (get_current_blog_id()==1)?'経営方針<br />沿革':'Philosophy /<br />History' ?></h1>
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
				<li><?php echo (get_current_blog_id()==1)?'経営方針・沿革':'Philosophy / History' ?></li>
			</ol>	
			
			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'経営方針・沿革':'Philosophy / History' ?></span>
			</h2>

			<div class="message-text">
				<?php echo (get_current_blog_id()==1)?'当社は創業より、情報通信機器、OA機器、精密工業用部品、バッテリーパック部品の分野でプラスチック成形の専門メーカーとして、金型製作、成形から塗装、メッキ、シルク印刷、組立等一貫した物作りが出来る事でお客様のニーズに合わせた企業として成長して参りました。<br />当社の経営理念である「お客様に喜ばれるモノづくり」は、図面からお客様の意図を読み取り、それ以上の付加価値が付けられるかということを日々考え、実践しております。<br />お客様の安心と喜びを、私達全社員の喜びとしてモノづくりをすることで、大変有り難いことにお客様からも高い評価を頂いております。<br />また、当社社員も仲間同士お互いを喜ばせる仕事をし、全員一致団結して日々業務を行っております。<br />将来を見据えた世代交代により、当社も若手社員に技術承継が行われることで、未来ある強い企業へと益々成長していきたいと考えております。<br />今後とも、ご支援を賜りますようお願い申し上げます。':'Since its founding in 1971, we have been consistent in mold manufacturing, molding, painting, plating, silk printing, assembly, etc. as a professional manufacturer of plastic molding in the fields of information communication equipment, office automation equipment, precision industrial parts and battery pack parts.<br />"Manufacturing that is pleasing to customers" is our management philosophy.  We have understand the customer\'s intent from the drawings and practiced every day to add more value.<br />We\'ve put our clients\' satisfaction to the top priority, and fotunately achieved high evaluation from them.<br />Also, our employees work to please each other, all of them work cooperate and work together.<br />By changing generations with a view toward the future, we hope to continue to grow as a result of technology succession to younger employees.<br />I look forward to your continued support in the future.' ?>
			</div>
			<div class="message-photo">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/message/aono_ceo.png" alt="代表取締役 青野義樹" />
				<p class="center-text"><?php echo (get_current_blog_id()==1)?'代表取締役 青野義樹':'CEO Yoshiki Aono' ?></p>
			</div>

			

			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'沿革':'History' ?></span>
			</h2>

			<table class="message-table">
				<tr>
					<th width="20%"><?php echo (get_current_blog_id()==1)?'2018年7月':'July 2018' ?></th>
					<td width="80%"><?php echo (get_current_blog_id()==1)?'ISO9001:2015 ISO14001:2015<br />ASR(株)承認―認証サービス部様による定期審査実施':'ISO9001:2015 ISO14001:2015<br />ASR Co., Ltd. Approval - Periodic review conducted by the Certification Services Division' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'2017年11月':'November 2017' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'ISO 9001:2015改定':'Revised ISO 9001:2015' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'2017年9月':'September 2017' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'ISO 14001:2015改定':'Revised ISO 14001:2015' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'2017年6月':'June 2017' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'CNCレーザー画像測定器　茨城工場導入':'Introduced CNC laser image measuring instrument to Ibaraki factory' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'2016年9月':'September 2016' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'JSW　成形機350t導入':'Introduced JSW 350t molding machine' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'2011年11月':'November 2011' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'創立40周年':'40th anniversary of foundation' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'2009年12月':'December 2009' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'ﾊﾟﾅｿﾆｯｸ㈱ｾﾐｺﾝﾀﾞｸﾀｰ社 品質自主保証会社 認定':'Certificated as a quality voluntary guarantee company by Panasonic Corporation' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'2007年3月':'March 2007' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'茨城事業所　成形機の電動化設備約80%達成':'Ibaraki Factory achieved approximately 80% of electric machinery for molding machines.' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'2006年4月':'April 2006' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'CNCレーザー画像測定器　本社導入':'Introduced CNC laser image measuring instrument to headquarters.' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'2006年3月':'March 2006' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'本社工場　成形機の電動化設備完了':'Completed electrification of main machine factory\'s molding machine.' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'2006年2月':'February 2006' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'ISO14000　取得':'Acquired ISO14000' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'2004年9月':'September 2004' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'ISO9001　取得':'Acquired ISO9001' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'1994年9月':'September 1992' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'資本金1,000万円に増資 株式会社 青野工業となる':'Increased capital to JPY 10 million and established Aono Industrial Co., Ltd.' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'1991年10月':'October 1991' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'茨城事業所開設':'Opened Ibaraki Factory' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'1976年9月':'September 1976' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'資本金825万円に増資':'Increased capital to JPY 8.25 million.' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'1972年11月':'November 1972' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'資本金275万円で有限会社法人設立':'Established limited company with capital of 2.75 million.' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'1971年9月':'September 1971' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'個人自営　青野工業所設立':'Established Aono Kogyosho.' ?></td>
				</tr>
			</table>



		</div>
	</div>

<?php get_footer(); ?>
