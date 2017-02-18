<?php 
$curr_lang = ($this->uri->segment(1) != '') ? $this->uri->segment(1) : 'en';


    $row = $post->row();
    
    $title = get_title_for_edit_by_id_lang($row->id, $curr_lang);
    $featured_image_path = get_featured_photo_by_id($row->featured_img);
     if($row->condition == 'condition_new'){
        $condition_class  = 'new';
        $condition_data = lang_key($row->condition);
    }
    else if($row->condition == 'condition_used'){
        $condition_class  = 'used';
        $condition_data = lang_key($row->condition);
    }
    else if($row->condition == 'condition_pre_owned'){
        $condition_class  = 'recondition';
        $condition_data = lang_key($row->condition);
    }
    else if($row->condition == 'condition_recondition'){
        $condition_class  = 'recondition';
        $condition_data = lang_key($row->condition);
    }
    else if($row->condition == 'condition_sold'){
        $condition_class  = 'sold';
        $condition_data = lang_key($row->condition);
    }
    else{
        $condition_class  = 'others';
        $condition_data = lang_key($row->condition);
    }
    
    $user_latitude = get_user_meta($row->created_by, 'user_latitude');
    $user_longitude = get_user_meta($row->created_by, 'user_longitude');
	$user_rec = get_user_info($row->created_by);
	$user_address = get_user_meta($row->created_by, 'user_address');
	$user_country = get_user_meta($row->created_by, 'user_country');
	$user_state = get_user_meta($row->created_by, 'user_state');
	$user_city = get_user_meta($row->created_by, 'user_city');
   if($user_latitude != 'n/a' && $user_longitude != 'n/a') {  ?>
    
<?php } ?>
    <?php //get_view_count($row->id, 'detail'); ?>

		<section class="b-pageHeader">
			<div class="container">
				<h1 class="wow zoomInLeft" data-wow-delay="0.5s">Vehicle Details Page</h1>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
			<div class="container">
				<a href="<?php echo base_url(); ?>" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="<?php echo site_url('listings'); ?>" class="b-breadCumbs__page"> <?php echo lang_key($row->car_type); ?></a><span class="fa fa-angle-right"></span><a href="<?php echo site_url('listings'); ?>" class="b-breadCumbs__page"> <?php echo get_brand_model_name_by_id($row->brand); ?></a><span class="fa fa-angle-right"></span><a href="#" class="b-breadCumbs__page m-active"><?php echo $title; ?></a>
			</div>
		</div><!--b-breadCumbs-->

		<div class="b-infoBar">
			<div class="container">
				<div class="row wow zoomInUp" data-wow-delay="0.5s">
					<div class="col-xs-3">
						<div class="b-infoBar__premium">Premium Listing</div>
					</div>
					<div class="col-xs-9">
						<div class="b-infoBar__btns">
							<a href="#" class="btn m-btn m-infoBtn">SHARE THIS VEHICLE<span class="fa fa-angle-right"></span></a>
							<a href="#" class="btn m-btn m-infoBtn">ADD TO FAVOURITES<span class="fa fa-angle-right"></span></a>
							<a href="#" class="btn m-btn m-infoBtn">PRINT THIS PAGE<span class="fa fa-angle-right"></span></a>
							<a href="#" class="btn m-btn m-infoBtn">DOWNLOAD MANUAL<span class="fa fa-angle-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-infoBar-->

		<section class="b-detail s-shadow">
			<div class="container">
				<header class="b-detail__head s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
					<div class="row">
						<div class="col-sm-9 col-xs-12">
							<div class="b-detail__head-title">
								<h1><?php echo $title; ?></h1>
								<!--<h3>Fully Redesigned Upscale Midsize Car</h3>-->
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="b-detail__head-price">
								<div class="b-detail__head-price-num"><?php echo show_price($row->price);?></div>
								<p>Included Taxes &amp; Checkup</p>
							</div>
						</div>
					</div>
				</header>
				<div class="b-detail__main">
					<div class="row">
						<div class="col-md-8 col-xs-12">
							<div class="b-detail__main-info">
                            <?php 
							 $images = ($row->gallery!='')?json_decode($row->gallery):array();
                              if(!empty($images[0])){
							?>
								<div class="b-detail__main-info-images wow zoomInUp" data-wow-delay="0.5s">
									<div class="row m-smallPadding">
										<div class="col-xs-10">
											<ul class="b-detail__main-info-images-big bxslider enable-bx-slider" data-pager-custom="#bx-pager" data-mode="horizontal" data-pager-slide="true" data-mode-pager="vertical" data-pager-qty="5">
                     
					 
					 <?php 
					 
					 foreach ($images as $img) { ?>
                     
                     <li class="s-relative">                                        
    <img class="img-responsive center-block" src="<?php echo base_url('uploads/gallery/' . $img); ?>" alt="<?php echo $title; ?>" />
												</li>
            <?php  } ?>

	
											</ul>
										</div>
										<div class="col-xs-2 pagerSlider pagerVertical">
											<div class="b-detail__main-info-images-small" id="bx-pager">
                                            
                                            
                                            <?php foreach ($images as $img) { ?>
               	<a href="#" data-slide-index="0" class="b-detail__main-info-images-small-one">
    <img class="img-responsive center-block" src="<?php echo base_url('uploads/gallery/' . $img); ?>" alt="<?php echo $title; ?>" />
                    </a>
            <?php  } ?>
											</div>
										</div>
									</div>
								</div>
                                <?php } ?>
								<div class="b-detail__main-info-characteristics wow zoomInUp" data-wow-delay="0.5s">
									<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-car"></span></div>
											<p>Brand <?php echo lang_key($row->condition); ?></p>
										</div>
										<div class="b-detail__main-info-characteristics-one-bottom">
											Status
										</div>
									</div>
									<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-trophy"></span></div>
											<p><?php echo $row->mileage; ?> <?php echo get_settings('autocon_settings','mileage_unit','miles'); ?></p>
										</div>
										<div class="b-detail__main-info-characteristics-one-bottom">
											Warrenty
										</div>
									</div>
								<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-at"></span></div>
											<p><?php echo lang_key($row->transmission); ?></p>
										</div>
						          <div class="b-detail__main-info-characteristics-one-bottom">
										Transmission
										</div>
									</div>
								<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-car"></span></div>
											<p><?php echo ($row->drive_train)?lang_key($row->drive_train):'N/A'; ?></p>
										</div>
									<div class="b-detail__main-info-characteristics-one-bottom">
											Drivetrain
										</div>
									</div>
								<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-user"></span></div>
											<p><?php echo $row->no_of_seats; ?></p>
										</div>
									<div class="b-detail__main-info-characteristics-one-bottom">
											Passangers
										</div>
									</div>
								<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-fire-extinguisher"></span></div>
							<p><?php echo ($row->city_fuel_economy)?lang_key($row->city_fuel_economy):'N/A'; ; ?></p>
										</div>
									<div class="b-detail__main-info-characteristics-one-bottom">
											In City
										</div>
									</div>
								<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-fire-extinguisher"></span></div>
								<p><?php echo ($row->hwy_fuel_economy)?lang_key($row->hwy_fuel_economy):'N/A'; ?></p>
										</div>
									<div class="b-detail__main-info-characteristics-one-bottom">
											On Highway
										</div>
									</div>
								</div>
								<div class="b-detail__main-info-text wow zoomInUp" data-wow-delay="0.5s">
									<div class="b-detail__main-aside-about-form-links">
			<a href="#" class="j-tab m-active s-lineDownCenter" data-to='#info1'>GENERAL DESCRIPTION</a>
										<!--<a href="#" class="j-tab" data-to='#info2'>SCHEDULE TEST DRIVE</a>
										<a href="#" class="j-tab" data-to='#info3'>GENERAL INQUIRY</a>
										<a href="#" class="j-tab" data-to='#info4'>SCHEDULE TEST DRIVE</a>-->
									</div>
									<div id="info1">
										<p><?php echo get_description_for_edit_by_id_lang($row->id, $curr_lang); ?></p>
										
									</div>
									<!--<div id="info2">
										<p>The full review of the 2016 Nissan Maxima is coming soon. In the meantime, you can see pictures, research prices or view and
											compare specs for the 2016 Nissan Maxima. If you‚considering the 2014 Nissan Maxima, you can read our review.</p>
										<p>Vestibulum auctor lacinia nunc. Nunc ut turpis.Sed libero magna, fermentum viverra, egestas non, fermentum sed, elit. Aenean
											erat orci, mollis quis gravida sed, mollis a, quam. Integer fermentum neque egestas orci. Nunc posuere, felis sit amet faucibus
											convallis tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Donec quis quam in ante condimentum blan erdit.
											Integer et urna. Vestibulum nisl. Ut ante est, imperdiet dignissim eleifend sit amet lacinia tempor justo. Nunc ornare atm nibh.
											Fusce ut felis. </p>
										<p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
											faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
											nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
									</div>
									<div id="info3">
										<p>Vestibulum auctor lacinia nunc. Nunc ut turpis.Sed libero magna, fermentum viverra, egestas non, fermentum sed, elit. Aenean
											erat orci, mollis quis gravida sed, mollis a, quam. Integer fermentum neque egestas orci. Nunc posuere, felis sit amet faucibus
											convallis tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Donec quis quam in ante condimentum blan erdit.
											Integer et urna. Vestibulum nisl. Ut ante est, imperdiet dignissim eleifend sit amet lacinia tempor justo. Nunc ornare atm nibh.
											Fusce ut felis. </p>
										<p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
											faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
											nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
									</div>
									<div id="info4">
										<p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
											faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
											nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
									</div>-->
								</div>
								<div class="b-detail__main-info-extra wow zoomInUp" data-wow-delay="0.5s">
									<h2 class="s-titleDet">EXTRA FEATURES</h2>
									<div class="row">
										<div class="col-xs-4">
											<ul>
                                            
         <?php $tags = get_post_meta($row->id,'tags'); 
		        if($tags != 'n/a' && $tags != ''){ 
				
                $tags = explode(',',$tags);
                foreach ($tags as $tag) {
                    echo '<li><span class="fa fa-check"></span>'.$tag.'</li>';
                }
			    } 				
				?>
					
		</ul>
										</div>
										<!--<div class="col-xs-4">
											<ul>
												<li><span class="fa fa-check"></span>Dual Airbag</li>
												<li><span class="fa fa-check"></span>Intermittent Wipers</li>
												<li><span class="fa fa-check"></span>Keyless Entry</li>
												<li><span class="fa fa-check"></span>Power Mirrors</li>
												<li><span class="fa fa-check"></span>Power Seat</li>
												<li><span class="fa fa-check"></span>Power Steering</li>
											</ul>
										</div>
										<div class="col-xs-4">
											<ul>
												<li><span class="fa fa-check"></span>CD Player</li>
												<li><span class="fa fa-check"></span>Driver Side Airbag</li>
												<li><span class="fa fa-check"></span>Power Windows</li>
												<li><span class="fa fa-check"></span>Remote Start</li>
											</ul>
										</div>-->
									</div>
								</div>
							</div>
						</div>
              
<div class="col-md-4 col-xs-12">
<aside class="b-detail__main-aside">
	<div class="b-detail__main-aside-desc wow zoomInUp" data-wow-delay="0.5s">
		<h2 class="s-titleDet">Description</h2>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Make</h4>
			</div>
			<div class="col-xs-6">
				<p class="b-detail__main-aside-desc-value"><?php echo get_brand_model_name_by_id($row->brand); ?> </p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Model</h4>
			</div>
			<div class="col-xs-6">
				<p class="b-detail__main-aside-desc-value"> <?php echo get_brand_model_name_by_id($row->model); ?> </p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Kilometres</h4>
			</div>
			<div class="col-xs-6">
				<p class="b-detail__main-aside-desc-value"><?php echo $row->mileage; ?> <?php echo get_settings('autocon_settings','mileage_unit','miles'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Body Type</h4>
			</div>
			<div class="col-xs-6">
				<p class="b-detail__main-aside-desc-value"> <?php echo lang_key($row->car_type); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Style/trim</h4>
			</div>
			<div class="col-xs-6">
				<p class="b-detail__main-aside-desc-value"><?php echo $title; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Engine</h4>
			</div>
			<div class="col-xs-6">
				<p class="b-detail__main-aside-desc-value"><?php echo $row->engine_size; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Drivetrain</h4>
			</div>
			<div class="col-xs-6">
           <p class="b-detail__main-aside-desc-value"><?php echo ($row->drive_train)?lang_key($row->drive_train):'N/A'; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Transmission</h4>
			</div>
			<div class="col-xs-6">
				<p class="b-detail__main-aside-desc-value"><?php echo lang_key($row->transmission); ?></p>
			</div>
		</div>
        
      <div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Exterior Color</h4>
			</div>
			<div class="col-xs-6">
				<p class="b-detail__main-aside-desc-value"><?php echo $row->exterior_color; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Interior color</h4>
			</div>
			<div class="col-xs-6">
				<p class="b-detail__main-aside-desc-value"><?php echo $row->interior_color; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Passangers/Doors</h4>
			</div>
			<div class="col-xs-6">
				<p class="b-detail__main-aside-desc-value"><?php echo $row->no_of_seats; ?>/<?php echo lang_key($row->no_of_doors); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Fuel Type</h4>
			</div>
			<div class="col-xs-6">
				<p class="b-detail__main-aside-desc-value"><?php echo lang_key($row->fuel_type); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">City Fuel Economy </h4>
			</div>
			<div class="col-xs-6">
	<p class="b-detail__main-aside-desc-value"><?php echo ($row->city_fuel_economy)?lang_key($row->city_fuel_economy):'N/A'; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="b-detail__main-aside-desc-title">Hwy Fuel Economy</h4>
			</div>
			<div class="col-xs-6">
	<p class="b-detail__main-aside-desc-value"><?php echo ($row->hwy_fuel_economy)?lang_key($row->hwy_fuel_economy):'N/A';  ?></p>
			</div>
		</div>
	</div>

	<div class="b-detail__main-aside-about wow zoomInUp" data-wow-delay="0.5s">
			<h2 class="s-titleDet">INQUIRE ABOUT THIS VEHICLE</h2>
			<div class="b-detail__main-aside-about-call">
			<div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				 <i class="fa fa-phone"></i><span>Show Phone No. +9234446...</span>
				  </button>
				  <ul class="dropdown-menu text-center" id="dropi-down" aria-labelledby="dropdownMenu1">
				    <span class="btnoo"></span>
				      <p>Muhammad Ismaeel</p>
				      <a href="#">03008574540</a>
				  </ul>
				</div>
			</div>
			<div class="b-detail__main-aside-about-seller">
				<p>Seller Info:</p>
				 <strong>User: <span style="margin-left: 28px;">Verfied</span> 
                 <?php
				 if($user_rec->confirmed == 1){
				  ?>
                 <i class="fa fa-check-square"></i>
                 <?php }else{ ?>
                 <i class="fa fa-times"></i>
                 <?php } ?>
                 </strong><br>
				<span><strong style="margin-right: 17px;">Dealer:</strong> <?php echo $user_rec->first_name; ?> <?php echo $user_rec->last_name; ?></span>
				<address><strong style="margin-right: 2px;"">Address:</strong> <?php echo $user_address; ?> <br><span><?php echo get_location($user_city); ?></span><br />
                <span><?php echo get_location($user_state); ?></span><br />
                <span><?php echo get_location($user_country); ?></span> </address>
				<small>See if your friends know this seller</small><br>
				<a href="#">Connect with facebook</a>
			</div>
			<div class="b-detail__main-aside-about-form">
				<div class="b-detail__main-aside-about-form-links">
					<a href="#" class="j-tab m-active s-lineDownCenter" data-to='#form1'>GENERAL INQUIRY</a>
					<a href="#" class="j-tab" data-to='#form2'>SCHEDULE TEST DRIVE</a>
				</div>
				<form id="form1" action="/" method="post">
					<input type="text" placeholder="YOUR NAME" value="" name="name" />
					<input type="email" placeholder="EMAIL ADDRESS" value="" name="email" />
					<input type="tel" placeholder="PHONE NO." value="" name="name" />
					<textarea name="text" placeholder="message"></textarea>
					<div><input type="checkbox" name="one" value="" /><label>Send me a copy of this message</label></div>
					<div><input type="checkbox" name="two" value="" /><label>Send me a copy of this message</label></div>
					<button type="submit" class="btn m-btn">SEND MESSAGE<span class="fa fa-angle-right"></span></button>
				</form>
				<form id="form2" action="/" method="post">
					<input type="text" placeholder="YOUR NAME" value="" name="name" />
					<textarea name="text" placeholder="message"></textarea>
					<div><input type="checkbox" name="one" value="" /><label>Send me a copy of this message</label></div>
					<div><input type="checkbox" name="two" value="" /><label>Send me a copy of this message</label></div>
					<button type="submit" class="btn m-btn">SEND MESSAGE<span class="fa fa-angle-right"></span></button>
				</form>
			</div>
	   </div><!-- b_details -->

	<div class="b-detail__main-aside-payment wow zoomInUp" data-wow-delay="0.5s">
				<h2 class="s-titleDet">CAR PAYMENT CALCULATOR</h2>
				<div class="b-detail__main-aside-payment-form">
					<form action="/" method="post">
						<input type="text" placeholder="TOTAL VALUE/LOAN AMOUNT" value="" name="name" />
						<input type="text" placeholder="DOWN PAYMENT" value="" name="name" />
						<div class="s-relative">
							<select name="select" class="m-select">
								<option value="">LOAN TERM IN MONTHS</option>
							</select>
							<span class="fa fa-caret-down"></span>
						</div>
						<input type="text" placeholder="INTEREST RATE IN %" value="" name="name" />
						<button type="submit" class="btn m-btn">ESTIMATE PAYMENT<span class="fa fa-angle-right"></span></button>
					</form>
				</div>
				<div class="b-detail__main-aside-about-call">
					
				</div>
			</div>
		</aside>
	</div>
</div>
</div>
</div>
</section><!--b-detail-->
             <?php 
			 $rec = get_related_vehicle($row->brand,$row->id); 
					
				if($rec > 0){
			 ?>
		<section class="b-related m-home">
			<div class="container">
				<h5 class="s-titleBg wow zoomInUp" data-wow-delay="0.5s">FIND OUT MORE</h5><br />
				<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">RELATED VEHICLES ON SALE</h2>
				<div class="row">
                <?php
				
				foreach($rec as $val){
					
					$title = get_title_for_edit_by_id_lang($val->id,$curr_lang);
	 if($val->condition == 'condition_new'){
                    $condition_class  = 'new';
                    $condition_data = lang_key($val->condition);
                }
                else if($val->condition == 'condition_used'){
                    $condition_class  = 'used';
                    $condition_data = lang_key($val->condition);
                }
                else if($val->condition == 'condition_pre_owned'){
                    $condition_class  = 'recondition';
                    $condition_data = lang_key($val->condition);
                }
                else if($val->condition == 'condition_recondition'){
                    $condition_class  = 'recondition';
                    $condition_data = lang_key($val->condition);
                }
                else if($val->condition == 'condition_sold'){
                    $condition_class  = 'sold';
                    $condition_data = lang_key($val->condition);
                }
                else{
                    $condition_class  = 'others';
                    $condition_data = lang_key($val->condition);
                }
				?>
					<div class="col-md-3 col-xs-6">
				        <div class="b-auto__main-item wow zoomInLeft" data-wow-delay="0.5s">
		<img class="img-responsive"  src="<?php echo get_featured_photo_by_id($val->featured_img);?>" alt="<?php echo $title;?>" />
							<div class="b-world__item-val">
								<span class="b-world__item-val-title"><?php echo  lang_key($val->reg_no); ?></span>
							</div>
							<h2><a href="<?php echo site_url('show/detail/'.$val->id.'/'.url_title($title));?>"><?php echo character_limiter($title,23);?></a></h2>
							<div class="b-auto__main-item-info s-lineDownLeft">
								<span class="m-price">
										<?php echo show_price($val->price);?>
								</span>
								<span class="m-number">
									<span class="fa fa-tachometer"></span><?php echo $val->mileage;?> <?php echo get_settings('autocon_settings','mileage_unit','miles'); ?>
								</span>
							</div>
							<div class="b-featured__item-links m-auto">
								<a href="#"><?php echo $condition_data; ?></a>
								<a href="#"><?php echo $val->year;?></a>
								<a href="#"><?php echo lang_key($val->transmission);?></a>
								<a href="#"><?php echo lang_key($val->car_type);?></a>
								<a href="#"><?php echo lang_key($val->fuel_type);?></a>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</section><!--"b-related-->
          <?php } ?>
		<section class="b-brands s-shadow">
			<div class="container">
				<h5 class="s-titleBg wow zoomInUp" data-wow-delay="0.5s">FIND OUT MORE</h5><br />
				<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">BRANDS WE OFFER</h2>
				<div class="">
                <?php foreach($brand as $val){ ?>
					<div class="b-brands__brand wow rotateIn" data-wow-delay="0.5s">
                   <div class="brand-name">
                   <?php echo $val->name; ?>
                   </div>
						<img src="<?php echo theme_url(); ?>/assets/media/brands/bmwLogo.png" alt="<?php $val->name;?>" />
                    </div>
					<?php } ?>
				</div>
			</div>
		</section><!--b-brands-->