<!DOCTYPE html>

<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">

    <?php 

    $page = get_current_page();

    if(!isset($sub_title))

    $sub_title = (isset($page['title']))?$page['title']: lang_key('list_your_car');

    $seo = (isset($page['seo_settings']) && $page['seo_settings']!='')?(array)json_decode($page['seo_settings']):array();

    if(!isset($meta_desc))

    $meta_desc = (isset($seo['meta_description']))?$seo['meta_description']:get_settings('site_settings','meta_description','autocon car dealership');

    if(!isset($key_words))

    $key_words = (isset($seo['key_words']))?$seo['key_words']:get_settings('site_settings','key_words','car dealership,car listing, house, car');

    if(!isset($crawl_after))

    $crawl_after = (isset($seo['crawl_after']))?$seo['crawl_after']:get_settings('site_settings','crawl_after',3);

    ?>

    <title><?php echo translate(get_settings('site_settings','site_title','Autocon'));?> | <?php echo translate($sub_title);?></title>

    <?php 

    if(isset($post))

    {

        echo (isset($post))?social_sharing_meta_tags_for_post($post):'';

    }

    elseif(isset($blog_meta))

    {

        echo (isset($blog_meta))?social_sharing_meta_tags_for_blog($blog_meta):'';

    }

    $meta_desc = str_replace('"','',$meta_desc);

    $meta_desc = (strlen($meta_desc) > 160) ? substr($meta_desc,0,160) : $meta_desc;

    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?php echo $meta_desc;?>">

    <meta name="keywords" content="<?php echo $key_words;?>" />

    <meta name="revisit-after" content="<?php echo $crawl_after;?> days"> 

    <link rel="shortcut icon" href="<?php echo theme_url();?>/assets/images/fav-icon.ico">

    <link href="<?php echo theme_url();?>/assets/css/select2.min.css" rel="stylesheet">

	<link href="<?php echo theme_url();?>/assets/css/master.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php echo theme_url();?>/assets/css/customs.css">

	<link rel="stylesheet" type="text/css" href="<?php echo theme_url();?>/assets/css/plugin.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <link href="<?php echo theme_url();?>/assets/css/ninja-slider.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo theme_url();?>/assets/css/doc.css" rel="stylesheet">



<!--[if lt IE 9]>

		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

		<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

		<![endif]-->

<!-- Fixed navbar -->





    <?php 

    $bg_color = get_settings('banner_settings','menu_bg_color', 'rgba(241, 89, 42, .8)');

    $text_color = get_settings('banner_settings','menu_text_color', '#ffffff');

    ?>

</head>

	<body class="m-index <?php echo $body_class; ?>" data-scrolling-animations="true" data-equal-height=".b-auto__main-item">

    <header class="b-topBar wow slideInDown" data-wow-delay="0.7s">

			<div class="container">

				<div class="row">

					<div class="col-md-4 col-xs-6">

						<div class="b-topBar__addr">

							<span class="fa fa-map-marker"></span>

							<?php  echo $home_contact[0]->address; ?>

						</div>

					</div>

					<div class="col-md-2 col-xs-6">

						<div class="b-topBar__tel">

							<span class="fa fa-phone"></span>
                               <?php  echo $home_contact[0]->ph; ?>
							
						</div>

					</div>

					<div class="col-md-4 col-xs-6">

						<nav class="b-topBar__nav">

							<ul class="list-inline">

                            

                             <?php if(!is_loggedin()){

								 if(get_settings('autocon_settings','enable_signup','Yes')=='Yes'){?>

                    <li><a href="<?php echo site_url('account');?>"><?php echo lang_key('sign_in'); ?></a></li>

                    <li><a href="<?php echo site_url('account/signup');?>"><?php echo lang_key('sign_up'); ?></a></li>



                    <?php }

					}else{

						

						if(!is_admin()){?>

                        <li><a href="<?php echo site_url('admin/autocon/allcarsdealer');?>"><?php echo lang_key('dealer_panel'); ?></a></li>

                        <?php }else{?>

                        <li><a href="<?php echo site_url('admin');?>"><?php echo lang_key('admin_panel'); ?></a></li>

                        <?php }?>

                    <li><a href="<?php echo site_url('account/logout');?>"><?php echo lang_key('Logout'); ?></a></li>

                    <?php }?>

							</ul>

						</nav>

					</div>

					<div class="col-md-2 col-xs-6">

						<div class="b-topBar__lang">

							<div class="dropdown">

								<a href="#" class="dropdown-toggle" data-toggle='dropdown'>Language</a>

								<a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-en"></span>EN<span class="fa fa-caret-down"></span></a>

								<ul class="dropdown-menu h-lang">

									<li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-en"></span>EN</a></li>

									<li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-es"></span>ES</a></li>

									<li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-de"></span>DE</a></li>

									<li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-fr"></span>FR</a></li>

								</ul>

							</div>

						</div>

					</div>

				</div>

			</div>

		</header>



<nav class="b-nav" data-spy="affix" data-offset-top="34" style="z-index: 1000;">

	<div class="container">

		<div class="row">

			<div class="col-sm-2 col-xs-4">

				<div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">

					<h3><a href="<?php echo base_url();?>"><img src="<?php echo get_site_logo();?>" alt="logo"></a></h3>

				</div>

			</div>

			<div class="col-sm-10 col-xs-8">

				<div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">

					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">

							<span class="sr-only">Toggle navigation</span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

						</button>

					</div>

				<div class="collapse navbar-collapse navbar-main-slide" id="nav">

                

						<ul class="navbar-nav-menu">

                      

                <?php

                        $CI = get_instance();

                        $CI->load->model('admin/page_model');

                        $CI->page_model->init();

                        $alias = (isset($alias))?$alias:'';

                            foreach ($CI->page_model->get_menu() as $li) 

                            {

                                if($li->parent==0)

                                $CI->page_model->render_top_menu($li->id,0,$alias);

                            }

                        ?>

						<!--<li class="dropdown">

                            <a class="dropdown-toggle" data-toggle='dropdown' href="#">

                                <?php echo lang_key('type');?><span class="fa fa-caret-down"></span>

                            </a>

                            <ul>

                                <?php 

                                $filter_options = array();

                                $CI->load->config('autocon');

                                $custom_types = $CI->config->item('car_types');

                       if(is_array($custom_types)) foreach ($custom_types as $key => $custom_type) {

                         $filter_options[$custom_type['title']] = urlencode($custom_type['title']);

                                }

                                foreach ($filter_options as $k=>$v) {

							 ?>

                                <li class="<?php echo is_active_menu('show/type/'.$v);?> dropdown-menu h-nav">

                                    <a href="<?php echo site_url('show/type/'.$v);?>">

                                        </i>&nbsp;<?php echo lang_key($k);?>

                                    </a>

                                </li>

                                <?php

                                }

                                ?>

                            </ul>    

                        </li>-->

		</ul>

	</div>

</div>

</div>

</div>

</div>

</nav>



<!-- ======Social Widgets Codes Here Starts======= -->

<section id="socilas">

  <ul class='social list-unstyled wow slideInDown' data-wow-delay="0.2s">

  <li><a class="fa fa-facebook" href="https://www.facebook.com/GaddiyanOfficial/"><span>Facebook</span></a></li>

  <li><a class="fa fa-twitter" href="https://twitter.com/Gaddiyan

"><span>Twitter</span></a></li>

  <li><a class="fa fa-instagram" href="https://www.instagram.com/gaddiyan/

"><span>Instgram</span></a></li>

  <li><a class="fa fa-dribbble" href="https://www.youtube.com/c/Gaddiyan

"><span>Youtube</span></a></li>

  <li><a class="fa fa-google-plus" href="https://plus.google.com/+Gaddiyan

"><span>Google+</span></a></li> 

</ul>

</section>

<!-- ======Social Widgets Codes Here Ends======= -->

<!-- Newsletter PopUps Coding Starts -->

		<div class="popup gee-popup">

		<div class="popup-inner">

			<a class="close-button popup-close-button">

				&times;

			</a>
 			<?php echo $this->session->flashdata('msg');?>
			<div class="popup-header">

				<h3 class="popup-title"><span></span></h3>

			</div>

			<p class="paragraph" ></p>
 <form action="<?php echo site_url('show/newsletter'); ?>" method="POST">
							
			<div class="user-content"></div>
			<div class="user-contents"></div>
			<button type="submit" class="btn btn-info btn-block btn-lg" ></button>
            </form>
		</div>

	</div>

		<!-- Newsletter PopUps Coding Ends -->



		<!-- Loader -->

		<div id="page-preloader"><span class="spinner"></span></div>

		<!-- Loader end -->

		<!-- Start Switcher -->





         <div class="clearfix"></div>