    <section class="b-pageHeader">

        <div class="container">

            <h1 class="wow zoomInLeft" data-wow-delay="0.5s">Auto Listings</h1>

            <div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">

                <h3>Your search returned <?php echo $rec; ?> results</h3>

            </div>

        </div>

    </section><!--b-pageHeader-->

    

    <div class="b-breadCumbs s-shadow">

        <div class="container wow zoomInUp" data-wow-delay="0.5s">

            <a href="<?php echo site_url(); ?>" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="#" class="b-breadCumbs__page m-active">Vehicle</a>

        </div>

    </div><!--b-breadCumbs-->

        

    <div class="b-infoBar">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-xs-12">

                    <div class="b-infoBar__compare wow zoomInUp" data-wow-delay="0.5s">

                        <div class="dropdown">

                            <a href="#" class="dropdown-toggle b-infoBar__compare-item" data-toggle='dropdown'><span class="fa fa-clock-o"></span>RECENTLY VIEWED<span class="fa fa-caret-down"></span></a>

                            <ul class="dropdown-menu">

                                <li><a href="detail.html">Item</a></li>

                                <li><a href="detail.html">Item</a></li>

                                <li><a href="detail.html">Item</a></li>

                                <li><a href="detail.html">Item</a></li>

                            </ul>

                        </div>

                        <a href="compare.html" class="b-infoBar__compare-item"><span class="fa fa-compress"></span>COMPARE VEHICLES: 2</a>

                    </div>

                </div>

                <div class="col-lg-8 col-xs-12">

                    <div class="b-infoBar__select wow zoomInUp" data-wow-delay="0.5s">

                        <form method="post" action="/">

                            <div class="b-infoBar__select-one">

                                <span class="b-infoBar__select-one-title">SELECT VIEW</span>

                                <a href="listings.html" class="m-list m-active"><span class="fa fa-list"></span></a>

                                <a href="listTableTwo.html" class="m-table"><span class="fa fa-table"></span></a>

                            </div>

                            <div class="b-infoBar__select-one">

                                <span class="b-infoBar__select-one-title">SHOW ON PAGE</span>

                                <select name="select1" class="m-select">

                                    <option value="" selected="">10 items</option>

                                </select>

                                <span class="fa fa-caret-down"></span>

                            </div>

                            <div class="b-infoBar__select-one">

                                <span class="b-infoBar__select-one-title">SORT BY</span>

                                <select name="select2" class="m-select">

                                    <option value="" selected="">Last Added</option>

                                </select>

                                <span class="fa fa-caret-down"></span>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div><!--b-infoBar-->

    

    <div class="b-items">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-sm-4 col-xs-12">

                    <?php include('search_side_bar.php'); ?>

                </div>



                <div class="col-lg-9 col-sm-8 col-xs-12">

             <div class="b-items__cars"> 

             <?php

	

			foreach ($content as $row){

					$title = get_title_for_edit_by_id_lang($row->id,$curr_lang);

					$images = ($row->gallery!='')?json_decode($row->gallery):array();

                ?>

                 

                 <div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">

                   		   <div class="b-items__cars-one-img"> 

                            <div style="display:none;">

                              <div id="ninja-slider">

                                <div class="slider-inner">

                                  <ul>

                                  <?php 

                              if(!empty($images[0])){

								   foreach ($images as $img) {

										   ?>

                                    <li><a class="ns-img" href="<?php echo base_url('uploads/gallery/' . $img); ?>"    alt="<?php echo $title; ?>"></a></li>

                           

                                    <?php } } ?>

                                    </ul>

                                    <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>

                                   </div>

                                    </div>

                                 </div>

                                   <div class="container">

                                       <div class="row">

                                           <div class="col-lg-12">

                                           <?php 

                              if(!empty($images[0])){

										   ?>

                                <div class="gallery">

                                <img src="<?php echo get_featured_photo_by_id($row->featured_img);?>" onclick="lightbox(0)" style="width:248px; height:140px; margin-bottom: 1px; cursor: pointer;" alt="gaddiyan"/>

                                <?php 

								

								 foreach ($images as $img) { 

								?>

                             <span class="b_lightbox"><img src="<?php echo base_url('uploads/gallery/' . $img); ?>" onclick="lightbox(1)" alt="<?php echo $title; ?>" /></span>

                                <?php } ?>

                                    </div>

                                   <?php } ?>

                                   </div>

                                   </div>

                                 </div>

                             <!--<span class="b-items__cars-one-img-type m-premium">PREMIUM</span>-->

                             <span class="b-items__cars-one-img-type m-counts">See <?php echo count($images);?> Pics</span>

                            </div>



                           <div class="b-items__cars-one-info">

                                <form class="b-items__cars-one-info-header i_cars_info_ag s-lineDownLeft">

                                    <h2><?php echo $title; ?></h2>    

                                    <br />                         

                                </form>

                                

                                <div class="row s-noRightMargin">

                                    <div class="col-md-9 col-xs-12">

                                        <p><?php echo character_limiter(get_description_for_edit_by_id_lang($row->id, $curr_lang),150); ?></p>

                                        <div class="m-width row m-smallPadding">

                                            <div class="col-xs-6">

                                                <div class="row m-smallPadding">

                                                    <div class="col-xs-6">

                                                        <span class="b-items__cars-one-info-title">Body Style:</span>

                                                        <span class="b-items__cars-one-info-title">Mileage:</span>

                                                        <span class="b-items__cars-one-info-title">Transmission:</span>

                                                    </div>

                                                    <div class="col-xs-6">

                                                        <span class="b-items__cars-one-info-value"><?php echo lang_key($row->car_type);?></span>

                                                        <span class="b-items__cars-one-info-value"><?php echo $row->mileage;?> <?php echo get_settings('autocon_settings','mileage_unit','miles'); ?></span>

                                                        <span class="b-items__cars-one-info-value"><?php echo lang_key($row->transmission);?></span>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <div class="row m-smallPadding">

                                                    <div class="col-xs-4">

                                                        <span class="b-items__cars-one-info-title">Engine:</span>

                                                        <span class="b-items__cars-one-info-title">Color:</span>

                                                        <span class="b-items__cars-one-info-title">Specs:</span>

                                                    </div>

                                                    <div class="col-xs-8">

                                                        <span class="b-items__cars-one-info-value"><?php echo $row->engine_size; ?></span>

                                                        <span class="b-items__cars-one-info-value"><?php echo $row->exterior_color; ?></span>

                                                        <span class="b-items__cars-one-info-value"><?php echo $row->no_of_seats; ?>-Passenger, <?php echo lang_key($row->no_of_doors); ?>-Door</span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-xs-12">

                                        <div class="b-items__cars-one-info-price">

                                            <div class="pull-right">

                                                <h3>Price:</h3>

                                                <h4><?php echo show_price($row->price);?></h4>

                                            </div>

                                           <a href="<?php echo site_url('show/detail/'.$row->id.'/'.url_title($title));?>" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>

                                           <span class="save">

                                                <a href="#"><i class="fa fa-heart"></i></a>

                                           </span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <?php }  ?>

                    </div>

             <div class="b-items__pagination wow zoomInUp" data-wow-delay="0.5s">

                        <ul class="b-items__pagination-main">

                        <?php echo $pages; ?>

                        </ul>

                        

                    </div>

                </div>

            </div>

        </div>

    </div><!--b-items-->