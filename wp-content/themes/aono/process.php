<?php /* Template Name: process */ ?>
<?php get_header(); ?>

<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/process/process_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/process/process.png" alt="一貫生産体制" width="100%" /> 
		</picture>
		<div class="visual-title-area">
			<h1><?php echo (get_current_blog_id()==1)?'一貫生産体制':'Integrated production system' ?></h1>
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
				<li><?php echo (get_current_blog_id()==1)?'一貫生産体制':'Production system' ?></li>
			</ol>	

			<p class="process-title"><?php echo (get_current_blog_id()==1)?'金型の設計、試作、量産成形、２次加工、組立まで一貫してお引き受けいたします。':'We consistently accept mold design, prototyping, mass production molding, secondary processing, and assembly of molds.' ?></p>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/00.jpg" alt="3D CAD" />
				<div class="step-content">
					<h2 class="step-title">Step 1) 3D CAD</h2>
					<h3 class="step-catch"><?php echo (get_current_blog_id()==1)?'成形性を考慮した金型作り':'Mold production considering formability' ?></h3>
					<p><?php echo (get_current_blog_id()==1)?'３Dデーターを頂きCAD（プロE）により設計・製作を行います。':'We receive 3D data and design it by CAD.' ?></p>
				</div>
			</div>
			
			<div class="step-line">
				<hr />
				<i class="fa fa-caret-down"></i>
			</div>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/01.jpg" alt="試作" />
				<div class="step-content">
					<h2 class="step-title"><?php echo (get_current_blog_id()==1)?'Step 2) 試作':'Step 2) Prototype' ?></h2>
					<h3 class="step-catch"><?php echo (get_current_blog_id()==1)?'量産性を考慮した試作トライアル':'Trial considering mass productivity' ?></h3>
					<p><?php echo (get_current_blog_id()==1)?'注形品または切削加工でのモック作成も可能です。<br />一次試作から量産性を考慮した取組みを行っています。':'It is also possible to create mocks by casting or cutting.<br />We are making efforts that consider mass productivity from primary trial production stage.' ?></p>
				</div>
			</div>
			
			<div class="step-line">
				<hr />
				<i class="fa fa-caret-down"></i>
			</div>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/02.jpg" alt="量産" />
				<div class="step-content">
					<h2 class="step-title"><?php echo (get_current_blog_id()==1)?'Step 3) 量産':'Step 3) Mass production' ?></h2>
					<h3 class="step-catch"><?php echo (get_current_blog_id()==1)?'ハイサイクル・自動化による量産体制':'Mass production by high cycle and automation' ?></h3>
					<p><?php echo (get_current_blog_id()==1)?'インサート成形による成形加工も可能です。<br />最新の電動機による全自動成形を行います。':'Molding by insert molding is also possible.<br />We perform fully automatic molding with the latest electric motor.' ?></p>
				</div>
			</div>

			<div class="step-line">
				<hr />
				<i class="fa fa-caret-down"></i>
			</div>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/03.jpg" alt="二次加工" />
				<div class="step-content">
					<h2 class="step-title"><?php echo (get_current_blog_id()==1)?'Step 4) 二次加工':'Step 4) Secondary processing' ?></h2>
					<h3 class="step-catch"><?php echo (get_current_blog_id()==1)?'加飾品対応も可能':'Dealing with decorative items' ?></h3>
					<p><?php echo (get_current_blog_id()==1)?'塗装・印刷・蒸着・メッキも対応します。':'Painting, printing, vapor deposition and plating are also supported.' ?></p>
				</div>
			</div>

			<div class="step-line">
				<hr />
				<i class="fa fa-caret-down"></i>
			</div>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/04.jpg" alt="組立" />
				<div class="step-content">
					<h2 class="step-title"><?php echo (get_current_blog_id()==1)?'Step 5) 組立':'Step 5) Assembly' ?></h2>
					<h3 class="step-catch"><?php echo (get_current_blog_id()==1)?'使う人の思いを込めて':'Manufacturing considering those who use' ?></h3>
					<p><?php echo (get_current_blog_id()==1)?'テープ貼り・圧入・治具による組付けなどのAssy対応可能です。':'Assy correspondence such as tape sticking, press fitting, assembling by jig etc is possible.' ?></p>
				</div>
			</div>

			<div class="step-line">
				<hr />
				<i class="fa fa-caret-down"></i>
			</div>

			<div class="step-block">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/process/05.jpg" alt="完成・納品" />
				<div class="step-content">
					<h2 class="step-title"><?php echo (get_current_blog_id()==1)?'Step 6) 完成・納品':'Step 6) Completion · Delivery' ?></h2>
				</div>
			</div>

		</div>
	</div>

<?php get_footer(); ?>
