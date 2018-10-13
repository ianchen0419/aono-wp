<?php /* Template Name: advantage1 */ ?>
<?php get_header(); ?>

<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/advantage1/advantage1_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/advantage1/advantage1.png" alt="特色1" width="100%" /> 
		</picture>
		<div class="visual-title-area">
			<h1><?php echo (get_current_blog_id()==1)?'[ 特色 ]<br />移管型にも対応':'[Feature]<br />Compatible with transfer mold' ?></h1>
		</div>
	</div>
	<div id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
				</li>
				<li>
					<a href="advantage1"><?php echo (get_current_blog_id()==1)?'特色':'Feature' ?></a>
				</li>
				<li><?php echo (get_current_blog_id()==1)?'特色1 移管型にも対応':'Feature 1) Compatible with transfer mold' ?></li>
			</ol>	

			<h2 class="advantage-title"><?php echo (get_current_blog_id()==1)?'行くあてのなくなった移管型<br />ぜひご相談ください。':'Please contact us if you have a transfer type<br />that is no longer available.' ?></h2>

			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'お客様からの相談事例':'Consultation from a customer' ?></span>
			</h2>

			<article class="left-article">
				<?php echo (get_current_blog_id()==1)?
				'ある成形品の不良率が高く、現行業者では対応不可との回答があり困っていたところ、青野工業様に相談しました。<br />
				他社金型でしたが、型の修正を行い不良品ゼロに改善して頂きました。<br />
				歩留まり改善となり、結果として安定した部品供給を行って頂き、非常に感謝しております。':
				'Since it kept a high defective rate of a certain molded product and we got an answer that it\'s impossible to be handled by the current contractor, we consulted with Aono Industry.<br />
					Although it was another company\'s mold, they changed the mold and improved it to zero defective product.<br />
					As a result, it brought the yield improvement and stable parts supply.  We\'re very greatful for Aono\'s work.<br />' ?>
				
			</article>

			<h2 class="title-2">
				<span><?php echo (get_current_blog_id()==1)?'その他お客様からの声':'Praise words from customers' ?></span>
			</h2>

			<article class="left-article">
				<p>
					<i class="fa fa-caret-right"></i>
					<span><?php echo (get_current_blog_id()==1)?'A社様・・・海外生産品でのトラブル':'Company A · · · troubles with overseas products' ?></span>
					<br />
					<span><?php echo (get_current_blog_id()==1)?'大きな問題が起こりましたが、即日対応して頂いたお蔭で生産ラインを止めることなく大変助かりました。':'Although a big problem occurred, it was greatly helpful without stopping the production line because Aono\'s staff corresponded the same day.' ?></span>
				</p>

				<p>
					<i class="fa fa-caret-right"></i>
					<span><?php echo (get_current_blog_id()==1)?'B社様・・・海外生産品で気象状況によるトラブル':'Company B · · · troubles due to weather conditions on overseas products' ?></span>
					<br />
					<span><?php echo (get_current_blog_id()==1)?'海外メーカーでの対応品に対し、緊急対応をして頂き非常に助かりました。':'It was extremely helpful to have the emergency response to overseas manufacturers.' ?></span>
				</p>

				<p>
					<i class="fa fa-caret-right"></i>
					<span><?php echo (get_current_blog_id()==1)?'C社様・・・生産メーカーの閉鎖':'Company C· · · stopping the production of manufacturer' ?></span>
					<br />
					<span><?php echo (get_current_blog_id()==1)?'諸問題による生産対応不可の案件に対し、ご尽力頂き大変ありがとうございました。':'Thank you very much for your efforts to deal with issues that the manufacturer stopped production.' ?></span>
				</p>
				
			</article>
		</div>
	</div>

<?php get_footer(); ?>
