<?php 
	session_start(); 
	// get_current_blog_id()==1 日本語
	// get_current_blog_id()==2 英語
	// echo get_page_template();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="ja" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="icon" href="<?php bloginfo('template_directory') ?>/inc/img/top/favicon.ico" />  
<title>株式会社青野工業</title>
<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/inc/lib/font-awesome-4.7.0/css/font-awesome.min.css" />
<?php if(get_current_blog_id()==1){ ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css" />
<?php }else{ ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style-en.css" />
<?php } ?>

</head>

	
<?php if($_SESSION['firstAccess']=='' && is_home()==true){ ?>
	<body class="motion-body" onload="motion()">
		<!-- motion -->
		<div id="motion">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/top/aono_logo_2.png" alt="青野工業" />
			<div class="motion-text">
				<h1>AONO INDUSTRIAL</h1>
				<h2 class="<?php echo (get_current_blog_id()==1)?'':'en-hide' ?>">株式会社青野工業</h2>
			</div>
			
		</div>
		<!-- header -->
		<div id="header" style="display: none">
<?php }else{ ?>
	<body class="showing">
	<!-- header -->
	<div id="header" class="showing">
<?php } ?>
			<div class="wrapper-size">
				<div class="logo-area">
					<a href="<?php bloginfo('url') ?>">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/aono_logo.png" alt="青野工業" height="80" />
					</a>
				</div>
				<div class="title-area">
					<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'株式会社青野工業':'Aono Industrial Co., Ltd.' ?></a>
				</div>
				<div class="sitemap-link-area">
					<i class="fa fa-caret-right"></i>
					<a href="sitemap">
						<span><?php echo (get_current_blog_id()==1)?'サイトマップ':'Sitemap' ?></span>
					</a>
				</div>
				<div class="languague-link-area">
					<i class="fa fa-caret-right"></i>

					<?php if(get_current_blog_id()==1){ ?>
						<a href="<?php echo get_blog_option(2, 'siteurl'); ?>"><span>English</span></a>
					<?php }else{ ?>
						<a href="<?php echo get_blog_option(1, 'siteurl'); ?>"><span>日本語</span></a>
					<?php } ?>
				</div>

				<!-- スマホ版 -->
				<div class="mobile-menu-bar">
					<i class="fa fa-bars" onclick="openMobileMenu()"></i>
				</div>
			</div>
		</div>
		<!-- menu -->
		<?php if($_SESSION['firstAccess']=='' && is_home()==true){ ?>
			<div id="menu" class="showing" style="display: none">
		<?php }else{ ?>
			<div id="menu" class="showing" class="showing">
		<?php } ?>
				<div class="wrapper-size">
					<ul class="list-wrapper">
						<li class="active">
							<a href="<?php bloginfo('url') ?>"><span><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></span></a>
						</li>
						<li class="child-head">
							<span><?php echo (get_current_blog_id()==1)?'特色':'Feature' ?></span>
							<ul class="child-menu">
								<a href="advantage1">
									<li><?php echo (get_current_blog_id()==1)?'特色1':'Feature 1' ?></li>
								</a>
								<a href="advantage2">
									<li><?php echo (get_current_blog_id()==1)?'特色2':'Feature 2' ?></li>
								</a>
							</ul>
						</li>
						<li>
							<a href="product">
								<span><?php echo (get_current_blog_id()==1)?'製品ギャラリー':'Product gallery' ?></span>
							</a>
						</li>
						<li class="child-head">
							<span><?php echo (get_current_blog_id()==1)?'生産・品質':'Production' ?></span>
							<ul class="child-menu">
								<a href="process">
									<li><?php echo (get_current_blog_id()==1)?'一貫生産体制':'Production system' ?></li>
								</a>
								<a href="factory">
									<li><?php echo (get_current_blog_id()==1)?'生産工場':'Factory' ?></li>
								</a>
								<a href="quality">
									<li><?php echo (get_current_blog_id()==1)?'品質保証':'Quality assurance' ?></li>
								</a>
							</ul>
						</li>
						<li class="child-head">
							<span><?php echo (get_current_blog_id()==1)?'会社案内':'About us' ?></span>
							<ul class="child-menu">
								<a href="profile">
									<li><?php echo (get_current_blog_id()==1)?'会社概要':'Outline' ?></li>
								</a>
								<a href="message">
									<li><?php echo (get_current_blog_id()==1)?'経営方針・沿革':'Philosophy / History' ?></li>
								</a>
								<a href="recruit" class="en-hide">
									<li>リクルート</li>
								</a>
							</ul>
						</li>
						<li>
							<a href="contact">
								<span><?php echo (get_current_blog_id()==1)?'お問い合わせ':'Contact us' ?></span>
							</a>
						</li>
					</ul>
				</div>

				<div id="mobileMenu">
					<ul class="mobile-list">
						<li>
							<a href="<?php bloginfo('url') ?>">
								<i class="fa fa-home"></i>
								<span><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></span>
							</a>
						</li>
						<li class="mobile-child-wrapper">
							<div class="mobile-child-head">
								<i class="fa fa-trophy"></i>
								<span><?php echo (get_current_blog_id()==1)?'特色':'Feature' ?></span>
							</div>
							<ul class="mobile-child-list">
								<li>
									<a href="advantage1"><?php echo (get_current_blog_id()==1)?'特色1':'Feature 1' ?></a>
								</li>
								<li>
									<a href="advantage2"><?php echo (get_current_blog_id()==1)?'特色2':'Feature 2' ?></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="product">
								<i class="fa fa-list"></i>
								<span><?php echo (get_current_blog_id()==1)?'製品ギャラリー':'Product gallery' ?></span>
							</a>
						</li>
						<li class="mobile-child-wrapper">
							<div class="mobile-child-head">
								<i class="fa fa-wrench"></i>
								<span><?php echo (get_current_blog_id()==1)?'生産・品質':'Production' ?></span>
							</div>
							<ul class="mobile-child-list">
								<li>
									<a href="process"><?php echo (get_current_blog_id()==1)?'一貫生産体制':'Production system' ?></a>
								</li>
								<li>
									<a href="factory"><?php echo (get_current_blog_id()==1)?'生産工場':'Factory' ?></a>
								</li>
								<li>
									<a href="quality"><?php echo (get_current_blog_id()==1)?'品質保証':'Quality assurance' ?></a>
								</li>
							</ul>
						</li>
						<li class="mobile-child-wrapper">
							<div class="mobile-child-head">
								<i class="fa fa-file-text-o"></i>
								<span><?php echo (get_current_blog_id()==1)?'会社案内':'About us' ?></span>
							</div>
							<ul class="mobile-child-list">
								<li>
									<a href="profile"><?php echo (get_current_blog_id()==1)?'会社概要':'Outline' ?></a>
								</li>
								<li>
									<a href="message"><?php echo (get_current_blog_id()==1)?'経営方針・沿革':'Philosophy / History' ?></a>
								</li>
								<li class="en-hide">
									<a href="recruit">リクルート</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="contact">
								<i class="fa fa-envelope-o"></i>
								<span><?php echo (get_current_blog_id()==1)?'お問い合わせ':'Contact us' ?></span>
							</a>
						</li>
					</ul>

					<div class="mobile-anchor-area">
						<div class="mobile-anchor-item">
							<a href="sitemap">
								<i class="fa fa-caret-right"></i>
								<span><?php echo (get_current_blog_id()==1)?'サイトマップ':'Sitemap' ?></span>
							</a>
						</div>
						<div class="mobile-anchor-item">
							<?php if(get_current_blog_id()==1){ ?>
								<a href="<?php echo get_blog_option(2, 'siteurl'); ?>">
									<i class="fa fa-caret-right"></i>
									<span>English</span>
								</a>
							<?php }else{ ?>
								<a href="<?php echo get_blog_option(1, 'siteurl'); ?>">
									<i class="fa fa-caret-right"></i>
									<span>日本語</span>
								</a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>