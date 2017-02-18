    <section class="b-pageHeader">
        <div class="container">
            <h1 class="wow zoomInLeft" data-wow-delay="0.5s">Dealer Listings</h1>
            <div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
            </div>
        </div>
    </section><!--b-pageHeader-->
    
    <div class="b-breadCumbs s-shadow">
        <div class="container wow zoomInUp" data-wow-delay="0.5s">
            <a href="index.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="listingsTwo.html" class="b-breadCumbs__page m-active">Dealer</a>
        </div>
    </div><!--b-breadCumbs-->
    <div class="b-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-xs-12">
                    <?php echo  include('search_side_bar.php'); ?>
                </div>

                <div class="col-lg-9 col-sm-8 col-xs-12">

                    <div class="b-items__cars">

                <h2 class="wow zoomInUp" data-wow-delay="0.5s">Dealers</h2>
                <?php foreach($query as $user){ 
              
                ?>
                <div class="b-items__cars-ones wow zoomInUp" data-wow-delay="0.5s">

                    <div class="b-items__cars-one-img again-img">

                        <img alt="<?php echo $user->first_name.' '.$user->last_name; ?>" width="150" height="150" src="<?php echo get_profile_photo_by_id($user->id,'thumb');?>">                     

                        </div>

                        <div class="b-items__cars-one-info again-info">

                           <h1><?php echo get_user_meta($user->id, 'company_name'); ?></h1>

                        <div class="row s-noRightMargin">

                             <div class="col-md-9 col-xs-12 its-modifi">

                                 <h2><a href="#"><?php echo get_location_name_by_id(get_user_meta($user->id, 'user_city',''));?> - Dealers</a> <i class="fa fa-check-square"></i></h2>

                                        <div class="m-width row m-smallPadding">

                                          <div class="col-xs-12">

                                                <div class="row m-smallPadding">

                                                    <address>

                                                        <span class="groups" style="margin-bottom: 10px;"><i class="fa fa-map-marker"></i><span><?php echo get_user_meta($user->id, 'user_address','');?></span>

                                                        </span>

                                                    </address>

                                                </div>

                                            </div>

                                             <div class="col-xs-12">

                                                <div class="row m-smallPadding">

                                                    <address>

                                                       <span class="groups"> <i class="fa fa-phone"></i><span> <?php echo get_user_meta($user->id, 'phone'); ?></span><br></span>

                                                        <span class="groups"><i class="fa fa-envelope-o"></i><span> <?php echo $user->user_email; ?></span>

                                                        </span>

<!--                                                         <span class="groups"><i class="fa fa-link"></i><span> <a href="#">www.exapmle.com</a></span>
-->
                                                        </span>

                                                    </address>

                                                     <div class="reviews">

                                                     <span>Reviews:</span> 

                                                     <i class="fa fa-star-o"></i>

                                                     <i class="fa fa-star-o"></i>

                                                     <i class="fa fa-star-o"></i>

                                                     <i class="fa fa-star-o"></i>

                                                     <i class="fa fa-star-o"></i>

                                                     <i class="fa fa-star-o"></i>

                                                     </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
            
            <?php } ?>

                    

              </div><!-- This is main -->



            <div class="b-items__pagination wow zoomInUp" data-wow-delay="0.5s">

                       <ul class="b-items__pagination-main">
                        <?php echo $pages; ?>
                        </ul>

                    </div>



                </div>
            </div>
        </div>
    </div><!--b-items-->       