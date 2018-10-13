<?php /* Template Name: process */ ?>
<?php get_header(); ?>

<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/process/process_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/process/process.png" alt="一貫生産体制" width="100%" /> 
		</picture>
		<div class="visual-title-area">
			<h1>一貫生産体制</h1>
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
				<li>一貫生産体制<?php echo (get_current_blog_id()==1)?'生産・品質':'Production / Quality' ?></li>
			</ol>	

			<p class="process-title">金型の設計、試作、量産成形、２次加工、組立まで一貫してお引き受けいたします。</p>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/00.jpg" alt="3D CAD" />
				<div class="step-content">
					<h2 class="step-title">Step 1) 3D CAD</h2>
					<h3 class="step-catch">成形性を考慮した金型作り</h3>
					<p>３Dデーターを頂きCAD（プロE）により設計・製作を行います。</p>
				</div>
			</div>
			
			<div class="step-line">
				<hr />
				<i class="fa fa-caret-down"></i>
			</div>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/01.jpg" alt="試作" />
				<div class="step-content">
					<h2 class="step-title">Step 2) 試作</h2>
					<h3 class="step-catch">量産性を考慮した施策トライアル</h3>
					<p>注形品または切削加工でのモック作成も可能です。<br>一次試作から量産性を考慮した取組みを行っています。</p>
				</div>
			</div>
			
			<div class="step-line">
				<hr />
				<i class="fa fa-caret-down"></i>
			</div>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/02.jpg" alt="量産" />
				<div class="step-content">
					<h2 class="step-title">Step 3) 量産</h2>
					<h3 class="step-catch">ハイサイクル・自動化による量産体制 </h3>
					<p>インサート成形による成形加工も可能です。<br>最新の電動機による全自動成形を行います。</p>
				</div>
			</div>

			<div class="step-line">
				<hr />
				<i class="fa fa-caret-down"></i>
			</div>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/03.jpg" alt="二次加工" />
				<div class="step-content">
					<h2 class="step-title">Step 4) 二次加工</h2>
					<h3 class="step-catch">加飾品対応も可能</h3>
					<p>塗装・印刷・蒸着・メッキも対応します。</p>
				</div>
			</div>

			<div class="step-line">
				<hr />
				<i class="fa fa-caret-down"></i>
			</div>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/04.jpg" alt="組立" />
				<div class="step-content">
					<h2 class="step-title">Step 5) 組立</h2>
					<h3 class="step-catch">使う人の思いを込めて</h3>
					<p>テープ貼り・圧入・治具による組付けなどのAssy対応可能です。</p>
				</div>
			</div>

			<div class="step-line">
				<hr />
				<i class="fa fa-caret-down"></i>
			</div>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/05.jpg" alt="完成・納品" />
				<div class="step-content">
					<h2 class="step-title">Step 6) 完成・納品</h2>
				</div>
			</div>

		</div>
	</div>

<?php get_footer(); ?>
