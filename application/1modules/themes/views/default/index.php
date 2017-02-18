		<section class="b-search">
			<div class="container">
				<form action="<?php echo site_url(); ?>/show/search" method="POST" class="b-search__main">
               <div class="b-search__main-title wow zoomInUp" data-wow-delay="0.3s">
                 <h2>UNSURE WHICH VEHICLE YOU ARE LOOKING FOR? FIND IT HERE</h2>
                </div>
               <div class="b-search__main-type wow zoomInUp" data-wow-delay="0.3s">
                                                    <div class="col-xs-12 col-md-2 s-noLeftPadding">
                                                        <h4>Select vehicle type</h4>
                                                    </div>
                                                    <div class="col-xs-12 col-md-10">
                                                        <div class="row">
                                                            
                                                            
                                                             <?php
                          $CI = get_instance();
                          $CI->load->config('autocon');
                          $custom_types = $CI->config->item('car_types');
						  $n = 0;						  
                           foreach ($custom_types as $option) { 
                                 $n++;
								  /*  $sel = (isset($data['car_type'])&&rawurldecode($data['car_type'])==$option['title'])?'selected="selected"':'';*/
                                    ?>
                                    
                                    <div class="col-xs-2">
                                                                <input id="type<?php echo $n;?>" type="radio" name="car_type" />
                                                                <label for="type<?php echo $n;?>" class="b-search__main-type-svg">
                                                                    <svg  version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                        viewBox="47.6 310.9 500 220" enable-background="new 47.6 310.9 500 220" xml:space="preserve">
                                                                        <g>
                                                                            <path d="M198.7,492.4v-9.2h21.1c65.9,0,134.2-0.5,198.7,0v9.2c-64.6,0-132.8,0-198.7,0H198.7L198.7,492.4z M152.9,493.8
                                                                                c-20.6-2.7-57.2-13.7-69.1-22.4l-4.1-1.4v-25.6l1.4-1.4c1.8-1.8,6-8.2,6-12.8l4.1-18.3L86.5,393l22,2.7h37.5
                                                                                c3.7-1.4,8.7-3.7,14.2-6c29.3-11.9,56.8-21.5,68.7-21.5h78.8c1.4,0,2.3,0,3.7,0.5c23.8,6.9,45.3,18.8,70.5,33.4h0.5
                                                                                c70.1,2.7,111.3,8.2,125.5,16.5l2.3,1.4v14.7l5.5,4.6v2.3c0,17.9-7.8,25.2-12.4,29.3c0,0.5-0.5,0.9,0,0.9c1.4,2.7,2.3,5,2.3,7.8
                                                                                v3.2l-5,1.4c-11,4.6-22.4,7.3-36.2,8.7v-9.6c11-0.9,21.1-3.2,30.2-6.4c0-0.5,0.9-0.5,0.9-0.9c-0.9-2.3-1.8-4.1-1.8-6v-2.3l0.9-0.9
                                                                                c0.9-0.9,1.4-1.4,2.3-2.3c4.1-3.7,9.2-7.8,9.6-20.1l-5.5-4.6v-16c-11-5-40.3-11-118.1-14.2h-3.7l-0.9-0.5
                                                                                c-24.7-14.7-46.2-24.7-69.1-31.1c-0.5,0-0.9,0-0.9,0H229c-10.5,0-44.9,13.7-65,22c-6.4,2.3-11.4,4.1-15.6,5.5l-1.4,0.5h-39.4h-8.2
                                                                                l1.4,5.5l-4.6,20.6c0,6.4-5,13.7-7.8,16.5v16.9c12.4,7.3,46.2,16.9,64.1,19.2v9.2H152.9z"/>
                                                                            <path d="M243.6,385.2c0.5,8.2,1.4,16,1.8,24.3c-12.4-2.7-25.2-5.5-37.5-8.7C223,390.7,225.7,385.2,243.6,385.2L243.6,385.2
                                                                                L243.6,385.2z M253.2,385.2c17.9,0,36.2,0,54,0c12.8,3.7,25.2,9.2,37.5,15.1l-0.5,0.5l0,0c-2.7,2.7-4.6,6.4-5.5,10.1
                                                                                c-9.2,0-19.7,0-30.7,0c-17.4,0-35.3,0-52.7,0C254.6,402.6,254.1,393.9,253.2,385.2L253.2,385.2z"/>
                                                                            <path d="M424.9,503.4c-4.6-2.3-8.2-6-11.4-10.1l-3.2-0.5c-1.8-0.5-5-0.9-6.9-0.9l-3.7-0.9v-3.7V475c0-11.9,2.7-22.4,10.5-30.2h1.4
                                                                                c6.4-6.4,16-10.5,30.2-10.5c13.7,0,23.4,4.1,30.2,10.5l0,0c7.8,7.8,10.5,18.3,10.5,30.2v7.8v4.1l-4.1,0.5c-1.4,0.5-2.7,0.5-4.1,0.9
                                                                                l0,0l-1.4,0.5c-2.7,5.5-6.4,10.1-11.4,13.7c-5.5,3.7-12.4,6-19.7,6C435.9,507.9,430,506.1,424.9,503.4L424.9,503.4L424.9,503.4
                                                                                L424.9,503.4z M441.9,449.3c-13.3,0-23.8,10.5-23.8,23.8s10.5,23.8,23.8,23.8c13.3,0,23.8-10.5,23.8-23.8
                                                                                C465.7,460.3,455.2,449.3,441.9,449.3L441.9,449.3L441.9,449.3z M174.5,449.3c-13.3,0-23.8,10.5-23.8,23.8s10.5,23.8,23.8,23.8
                                                                                c13.3,0,23.8-10.5,23.8-23.8C198.3,460.3,187.7,449.3,174.5,449.3L174.5,449.3L174.5,449.3z M145.2,444.3h-0.5
                                                                                c6.4-6.4,16-10.5,30.2-10.5c13.7,0,23.4,4.1,30.2,10.5h1.8c7.8,7.8,10.5,18.3,10.5,30.2v15.1v2.7h-4.6h-11.4
                                                                                c-2.7,3.7-6.4,6.9-11,9.2c-5,2.7-10.5,6-16,6c-6,0-11.9-1.4-16.5-4.6c-4.6-2.3-8.2-6-11.4-10.1l-3.2-0.5c-1.8-0.5-3.2-0.9-5-1.4
                                                                                l-3.7-0.9v-3.7v-12.4C134.6,462.6,137.4,452.1,145.2,444.3L145.2,444.3z"/>
                                                                            <path d="M174.5,464.9c-5,0-8.7,3.7-8.7,8.7c0,4.6,3.7,8.7,8.7,8.7c4.6,0,8.7-4.1,8.7-8.7C183.2,468.6,179,464.9,174.5,464.9
                                                                                L174.5,464.9z"/>
                                                                            <polygon points="281.2,423.7 258.3,423.7 258.3,419.1 281.2,419.1 	"/>
                                                                            <polygon points="230.8,465.4 230.8,474.1 388.8,474.1 	"/>
                                                                            <path d="M441.9,464.9c-4.6,0-8.7,3.7-8.7,8.7c0,4.6,3.7,8.7,8.7,8.7s8.7-4.1,8.7-8.7C450.6,468.6,446.5,464.9,441.9,464.9
                                                                                L441.9,464.9z"/>
                                                                            <path d="M464.3,396.2h-49.9l-21.1,9.2v2.3c21.5,1.4,47.6,3.2,71,6V396.2L464.3,396.2z"/>
                                                                            <path d="M347.1,404.5L347.1,404.5c-2.7,2.7-4.1,6-4.1,9.6c0,1.4,0.5,2.7,1.4,4.1c0.9,0.9,1.8,1.4,3.2,1.4h10.5
                                                                                c1.8,0,3.2-0.9,4.1-2.3c0.9-1.4,0.9-3.7,0-5c-1.8-3.2-5-6.4-10.1-8.2C350.3,402.6,348.5,403.1,347.1,404.5L347.1,404.5z"/>
                                                                            <path d="M355.8,423.7c-0.9,0-1.8-0.5-2.7-1.4l-6-8.2c-0.9-1.4-0.9-3.2,0.9-4.6c1.4-0.9,3.2-0.9,4.6,0.5l6,8.2
                                                                                c0.9,1.4,0.9,3.2-0.5,4.6C357.2,423.2,356.7,423.7,355.8,423.7L355.8,423.7z"/>
                                                                        </g>
                                                                    </svg>
                                                                </label>
                                                                <h5><label for="type<?php echo $n;?>"><?php echo lang_key($option['title']);?></label></h5>
                                                            </div>
                                    
                   
                              <?php } ?>
                         
                                                 
                                                          
                                                        </div>
                                                    </div>
                                                </div>
			   <div class="b-search__main-form wow zoomInUp" data-wow-delay="0.3s">
				<div class="row">
							<div class="col-xs-12 col-md-12">
								<div class="m-firstSelects">
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                    
                          <?php
                          $CI = get_instance();
                          $CI->load->config('autocon');
                          $custom_conditions = $CI->config->item('car_condition');
                          ?>
                          <select name="condition" class="select">
                              <option value="" ><?php echo lang_key('all');?></option>
                              <?php foreach ($custom_conditions as $status) {
                                      $sel = (isset($data['condition'])&&rawurldecode($data['condition'])==$status['title'])?'selected="selected"':'';
                                  ?>
                                  <option value="<?php echo $status['title'];?>" <?php echo $sel;?>><?php echo lang_key($status['title']);?></option>
                              <?php } ?>
                          </select>
                                    
										
										
									</div>
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                    
										 <select name="brand" id="select-brand" class="select">
                            <option value=""><?php echo lang_key('all');?></option>
                            <?php $brands = get_all_brands();
                            foreach ($brands->result() as $brand) {
                              $sel = (isset($data['brand'])&&$data['brand']==$brand->id)?'selected="selected"':'';
                            ?>
                                <option value="<?php echo $brand->id;?>" id="<?php echo $brand->id;?>" <?php echo $sel;?>><?php echo $brand->name;?></option>
                            <?php
                            }
                            ?>
                        </select>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
										 <select name="model" id="select-model" class="select">
                            <option value="" class="model-all"><?php echo lang_key('all');?></option>
                            
                        </select>
										
									</div>
									<!--<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
										 <?php
                          $CI = get_instance();
                          $CI->load->config('autocon');
                          $custom_types = $CI->config->item('car_types');
                          ?>
                          <select name="car_type">
                                <option value="" ><?php echo lang_key('all');?></option>
                                  <?php foreach ($custom_types as $option) { 
                                    $sel = (isset($data['car_type'])&&rawurldecode($data['car_type'])==$option['title'])?'selected="selected"':'';
                                    ?>
                                  <option value="<?php echo $option['title'];?>" <?php echo $sel;?>><?php echo lang_key($option['title']);?></option>
                              <?php } ?>
                          </select>
									</div>-->
                                    
                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
										 <?php 
                                $this->load->helper('date');
                                $current_year =  mdate("%Y", time());
                            ?>
                              <select name="year_from" class="select">
                                <option value=""><?php echo lang_key('all');?></option>
                                <?php $v = (isset($data['year_from']))?$data['year_from']:'';?>
                                <?php for($i=$current_year+1;$i>=1910;$i--){
                                        $sel = ($i==$v)?'selected="selected"':'';
                                  ?>
                                  <option value="<?php echo $i;?>" <?php echo $sel;?>><?php echo $i;?></option>
                                <?php }?>
                              </select>
										
									</div>
								</div>
								<div class="m-secondSelects">
									

									
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
					 <?php
                          $CI = get_instance();
                          $CI->load->config('autocon');
                          $custom_transmissions = $CI->config->item('car_transmission');
                          ?>
                          <select name="transmission" class="select">
                              <option value="" ><?php echo lang_key('all');?></option>
                              <?php foreach ($custom_transmissions as $status) {
                                      $sel = (isset($data['transmission'])&&rawurldecode($data['transmission'])==$status['title'])?'selected="selected"':'';
                                ?>
                                  <option value="<?php echo $status['title'];?>" <?php echo $sel;?>><?php echo lang_key($status['title']);?></option>
                              <?php } ?>
                          </select>
					</div>
			  </div>


					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
					 <select style="float:left;" class="select">
						<option value ="PriceRange">Price Range</option>
						<option value ="5">5 Lacs to 10 lacs</option>
						<option value ="10">10 Lacs to 15 lacs</option>
						<option value ="15">15 Lacs to 20 lacs</option>
						<option value ="20">20 Lacs to 25 lacs</option>
						<option value ="25">25 Lacs to 30 lacs</option>
						<option value ="30">30 Lacs to 35 lacs</option>
						<option value ="35">35 Lacs to 40 lacs</option>
				       </select>
				      
					</div>


                     
                       <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 text-left s-noPadding">
							<div class="b-search__main-form-submit">
								<button type="submit" class="btn m-btn maini">
								Search the Vehicle</button>
							</div>
					   </div>
									
					</div>
				</div>
			</div>
	         </form>
            </div>
         </section><!--b-search-->


		<section class="b-featured">
			<div class="container">
				<h2 class="s-title wow zoomInUp" data-wow-delay="0.3s">Featured Vehicles</h2>
				<div id="carousel-small" class="owl-carousel enable-owl-carousel" data-items="4" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-tablet-small="2">
                
                <?php
				$query = (isset($featured))?$featured:array();
foreach ($query->result() as $row){
	$title = get_title_for_edit_by_id_lang($row->id,$curr_lang);
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
                ?>
                 
                           <div>
						<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
			<a href="<?php echo site_url('show/detail/'.$row->id.'/'.url_title($title));?>">
								<img src="<?php echo get_featured_photo_by_id($row->featured_img);?>" alt="<?php echo $title;?>" />
								<!--<span class="m-premium">Premium</span>-->
							</a>
							<div class="b-featured__item-price">
								<?php echo show_price($row->price);?>
							</div>
							<div class="clearfix"></div>
							<h5><a href="<?php echo site_url('show/detail/'.$row->id.'/'.url_title($title));?>"><?php echo character_limiter($title,23);?></a></h5>
							<div class="b-featured__item-count"><span class="fa fa-tachometer"></span><?php echo $row->mileage;?> <?php echo get_settings('autocon_settings','mileage_unit','miles'); ?></div>
							<div class="b-featured__item-links">
								<a href="#"><?php echo $condition_data; ?></a>
								<a href="#"><?php echo $row->year;?></a>
								<a href="#"><?php echo lang_key($row->transmission);?></a>
								<a href="#"><?php echo lang_key($row->car_type);?></a>
								<a href="#"><?php echo lang_key($row->fuel_type);?></a>
							</div>
						</div>
					</div>
           
            <?php } ?>
		
				</div>
			</div>
		</section><!--b-featured-->
        
        <section class="b-welcome" style="background-image: none;">
		<div class="container" style="10px 20px 10px 20px; height: auto;">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="b-welcome__services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
							<div class="row">
								<div class="col-lg-3 col-md-6 col-sm-6 col-xm-12 m-padding">
									<div class="b-welcome__services-auto">
									<div class="b-welcome__services-img m-auto">
											<span class="fa fa-cab"></span>
										</div>
										<h3>Post an Ad FREE</h3>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6 col-xm-12 m-padding">
									<div class="b-welcome__services-trade">
									<div class="b-welcome__services-img m-trade">
											<span class="fa fa-male"></span>
										</div>
										<h3>Start Getting Calls</h3>
									</div>
								</div>
								
								<div class="col-lg-3 col-md-6 col-sm-6 col-xm-12 m-padding">
									<div class="b-welcome__services-buying">
									<div class="b-welcome__services-img m-buying">
											<span class="fa fa-book"></span>
										</div>
										<h3>Make a Deal</h3>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6 col-xm-12 m-padding">
									<div class="b-welcome__services-support">
										<div class="b-welcome__services-img m-support">
											<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												width="45px" height="45px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
												<g>
													<path d="M257.938,336.072c0,17.355-14.068,31.424-31.423,31.424c-17.354,0-31.422-14.068-31.422-31.424
														c0-17.354,14.068-31.423,31.422-31.423C243.87,304.65,257.938,318.719,257.938,336.072z M385.485,304.65
														c-17.354,0-31.423,14.068-31.423,31.424c0,17.354,14.069,31.422,31.423,31.422c17.354,0,31.424-14.068,31.424-31.422
														C416.908,318.719,402.84,304.65,385.485,304.65z M612,318.557v59.719c0,29.982-24.305,54.287-54.288,54.287h-39.394
														C479.283,540.947,379.604,606.412,306,606.412s-173.283-65.465-212.318-173.85H54.288C24.305,432.562,0,408.258,0,378.275v-59.719
														c0-20.631,11.511-38.573,28.46-47.758c0.569-84.785,25.28-151.002,73.553-196.779C149.895,28.613,218.526,5.588,306,5.588
														c87.474,0,156.105,23.025,203.987,68.43c48.272,45.777,72.982,111.995,73.553,196.779C600.489,279.983,612,297.925,612,318.557z
														M497.099,336.271c0-13.969-0.715-27.094-1.771-39.812c-24.093-22.043-67.832-38.769-123.033-44.984
														c7.248,8.15,13.509,18.871,17.306,32.983c-33.812-26.637-100.181-20.297-150.382-79.905c-2.878-3.329-5.367-6.51-7.519-9.417
														c-0.025-0.035-0.053-0.062-0.078-0.096l0.006,0.002c-8.931-12.078-11.976-19.262-12.146-11.31
														c-1.473,68.513-50.034,121.925-103.958,129.46c-0.341,7.535-0.62,15.143-0.62,23.08c0,28.959,4.729,55.352,12.769,79.137
														c30.29,36.537,80.312,46.854,124.586,49.59c8.219-13.076,26.66-22.205,48.136-22.205c29.117,0,52.72,16.754,52.72,37.424
														c0,20.668-23.604,37.422-52.72,37.422c-22.397,0-41.483-9.93-49.122-23.912c-30.943-1.799-64.959-7.074-95.276-21.391
														C198.631,535.18,264.725,568.41,306,568.41C370.859,568.41,497.099,486.475,497.099,336.271z M550.855,264.269
														C547.4,116.318,462.951,38.162,306,38.162S64.601,116.318,61.145,264.269h20.887c7.637-49.867,23.778-90.878,48.285-122.412
														C169.37,91.609,228.478,66.13,306,66.13c77.522,0,136.63,25.479,175.685,75.727c24.505,31.533,40.647,72.545,48.284,122.412
														H550.855L550.855,264.269z"/>
												</g>
											</svg>

										</div>
										<h3>24/7 support</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--b-welcome-->
        
        <!-- ===================City Starts================== -->
		<section id="city_brands">
	<div class="container text-center">
	  <h2 class="city_brands_title wow zoomInUp" data-wow-delay="0.3s">Brands By City</h2>
		<div class="row">
			<div class="col-lg-12">
				   <div class="city_brands_inner_wraps clearfix">
					 <div class="icon_bar text-center">
						<ul class="list-inline">                         
                     <?php
					 foreach($loc as $val){
					  ?>
							<li class="brands wow zoomInUp" data-wow-delay="0.4s">
								<a href="<?php echo site_url('show/city/'.$val->name);?>">
									<span><?php echo $val->name; ?><br><span class="totals">(<?php echo $val->num; ?>)</span></span>
								</a>
							</li>
                            <?php } ?>
						</ul>
					</div><!-- icons_main -->
                </div><!-- city_brands_inner_main -->
			</div><!-- col-lg-12 -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- city_brands -->

		<section class="b-world">
			<div class="container">
				<h6 class="wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">EVERYTHING YOU NEED TO KNOW</h6><br />
				<h2 class="s-title wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100">THE WORLD OF AUTOS</h2>
				<div class="row">
					
                    <?php 
					$rec = (isset($recents))?$recents:array();
					 foreach ($rec->result() as $row){
					?>
                    <div class="col-sm-4 col-xs-12">
						<div class="b-world__item wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
							<img class="img-responsive" src="<?php echo get_featured_photo_by_id($row->featured_img);?>" alt="<?php echo get_title_for_edit_by_id_lang($row->id,$curr_lang);?>" />
							<div class="b-world__item-val">
								<span class="b-world__item-val-title">FIRST DRIVE REVIEW</span>
								<div class="b-world__item-val-circles">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
									<span class="m-empty"></span>
								</div>
								<span class="b-world__item-num">4.1</span>
							</div>
							<h2><?php echo get_title_for_edit_by_id_lang($row->id,$curr_lang);?></h2>
							<p><?php echo get_brand_model_name_by_id($row->brand).' '.get_brand_model_name_by_id($row->model);?></p>
                               
							<a href=" <?php echo site_url('show/detail/'.$row->id.'/'.url_title($title));?>" class="btn m-btn">READ MORE<span class="fa fa-angle-right"></span></a>
						</div>
					</div>
					<?php } ?>
					
				</div>
			</div>
		</section><!--b-world-->

		<section class="b-asks">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
						<div class="b-asks__first wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
							<div class="b-asks__first-circle">
								<span class="fa fa-search"></span>
							</div>
							<div class="b-asks__first-info">
								<h2>ARE YOU LOOKING FOR A CAR?</h2>
								<p>Search Our Inventory With Thousands Of Cars  And More 
									Cars Are Adding On Daily Basis</p>
							</div>
							<div class="b-asks__first-arrow">
								<a href="listings.html"><span class="fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0">
						<div class="b-asks__first m-second wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100">
							<div class="b-asks__first-circle">
								<span class="fa fa-usd"></span>
							</div>
							<div class="b-asks__first-info">
								<h2>DO YOU WANT TO SELL A CAR?</h2>
								<p>Search Our Inventory With Thousands Of Cars  And More 
									Cars Are Adding On Daily Basis</p>
							</div>
							<div class="b-asks__first-arrow">
								<a href="submit1.html"><span class="fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<p class="b-asks__call wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">QUESTIONS? CALL US  : <span>0300 2361848</span></p>
					</div>
				</div>
			</div>
		</section><!--b-asks-->

		<section class="b-auto">
			<div class="container">
				<h5 class="s-titleBg wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">GIVING OUR CUSTOMERS BEST DEALS</h5><br />
				<h2 class="s-title wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100">BEST OFFERS FROM GADDIYAN.COM</h2>
				<div class="row">
					<div class="col-xs-5 col-sm-4 col-md-3">
						<aside class="b-auto__main-nav wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
							<ul>
								<li class="active"><a href="#">All Manufacturers</a><span class="fa fa-angle-right"></span></li>
                                
                                 <?php
                    $CI = get_instance();

                    $filter_options = array();

                    $CI->load->config('autocon');
                    $custom_types = $CI->config->item('car_types');
                    if(is_array($custom_types)) foreach ($custom_types as $key => $custom_type) {
                          $filter_options[$custom_type['title']] = urlencode($custom_type['title']);
                    }

                    foreach ($filter_options as $k=>$v) {
                    ?>
                    <li>
                        <a href="<?php echo site_url('show/type/'.$v);?>">
                            <?php echo lang_key($k);?>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
							</ul>
							<div class="owl-buttons">
								<div class="owl-prev j-tab" data-to='#first'></div>
								<div class="owl-next j-tab" data-to='#second'></div>
							</div>
						</aside>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-7">
						<div class="b-auto__main">
							<div class="col-md-11 col-md-offset-1 col-xs-12">
								<a href="#"  class="b-auto__main-toggle s-lineDownCenter m-active j-tab wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100" data-to="#first">MOST RESEARCHED MANUFACTURERS</a>
								<a href="#" class="b-auto__main-toggle j-tab wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100" data-to="#second">LATEST VEHICLES ON SALE</a>
							</div>
							<div class="clearfix"></div>
							<div class="row m-margin" id="first">
                             <?php
				$query = (isset($featured))?$featured:array();
foreach ($query->result() as $row){
	$title = get_title_for_edit_by_id_lang($row->id,$curr_lang);
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
                ?>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
										<img class="img-responsive"  src="<?php echo get_featured_photo_by_id($row->featured_img);?>" alt="<?php echo $title;?>" />
										<div class="b-world__item-val">
											<span class="b-world__item-val-title"><?php echo  lang_key($row->reg_no); ?></span>
										</div>
										<h2><a href="<?php echo site_url('show/detail/'.$row->id.'/'.url_title($title));?>"><?php echo character_limiter($title,23);?></a></h2>
										<div class="b-auto__main-item-info">
											<span class="m-price">
												<?php echo show_price($row->price);?>
											</span>
											<span class="m-number">
												<span class="fa fa-tachometer"></span><?php echo $row->mileage;?> <?php echo get_settings('autocon_settings','mileage_unit','miles'); ?>
											</span>
										</div>
										<div class="b-featured__item-links m-auto">
											<a href="#"><?php echo $condition_data; ?></a>
								<a href="#"><?php echo $row->year;?></a>
								<a href="#"><?php echo lang_key($row->transmission);?></a>
								<a href="#"><?php echo lang_key($row->car_type);?></a>
								<a href="#"><?php echo lang_key($row->fuel_type);?></a>
										</div>
									</div>
								</div>
								 <?php } ?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section><!--b-auto-->

		<section class="b-count">
			<div class="container">
				<div class="row">
					<div class="col-md-11 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
						<div class="row">
							<div class="col-sm-3 col-xs-6">
								<div class="b-count__item">
									<div class="b-count__item-circle">
										<span class="fa fa-car"></span>
									</div>
									<div class="chart" data-percent="5000">
										<h2  class="percent">5000</h2>
									</div>
									<h5>vehicles in stock</h5>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div class="b-count__item">
									<div class="b-count__item-circle">
										<span class="fa fa-users"></span>
									</div>
									<div class="chart" data-percent="3100">
										<h2  class="percent">3100</h2>
									</div>
									<h5>HAPPY CUSTOMER REVIEWS</h5>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div class="b-count__item">
									<div class="b-count__item-circle">
										<span class="fa fa-building-o"></span>
									</div>
									<div class="chart" data-percent="54">
										<h2  class="percent">54</h2>
									</div>
									<h5>DEALER BRANCHES</h5>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div class="b-count__item j-last">
									<div class="b-count__item-circle">
										<span class="fa fa-suitcase"></span>
									</div>
									<div class="chart" data-percent="547">
										<h2  class="percent">547</h2>
									</div>
									<h5>FREE PARTS GIVEN</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--b-count-->

		<section class="b-contact">
			<div class="container">
				<div class="row wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
					<div class="col-xs-4">
						<div class="b-contact-title">
							<h5>LATEST NEWS &amp; DEALS</h5><br />
							<h2>NEWSLETTER SIGNUP</h2>
						</div>
					</div>
					<div class="col-xs-8">
						<div class="b-contact__form">
							<p>WE SEND GREAT DEALS AND LATEST AUTO NEWS TO OUR SUBSCRIBED USERS EVERY WEEK. ITS FREE SO SUBSCRIBE TODAY!</p>
							<form action="/" method="POST">
								<div><span class="fa fa-user"></span><input type="text" name="user" value="" placeholder="Your Name" /></div>
								<div><span class="fa fa-envelope"></span><input type="text" name="email" value="" placeholder="Your Email" /></div>
								<button type="submit"><span class="fa fa-angle-right"></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section><!--b-contact-->
        
        <section class="b-review">
			<div class="container">
				<div class="col-sm-10 col-sm-offset-1 col-xs-12">
					<div id="carousel-small-rev" class="owl-carousel enable-owl-carousel" data-items="1" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="1" data-items-tablet-small="1">
                    
                    <?php

$CI = get_instance();

$start =0;

$type='blog';

$PER_PAGE = get_per_page_value();

$posts = $CI->show_model->get_all_active_blog_posts_by_range($start,$PER_PAGE,'id','desc',$type);
foreach($posts->result() as $post){
?>

<div class="b-review__main">
							<div class="b-review__main-person">
								<div class="b-review__main-person-inside" style="background:url(<?php echo get_featured_photo_by_id($post->featured_img);?>) center no-repeat;">
								</div>
							</div>
							<h5><span><?php echo $post->title;?></span><em>"</em></h5>
							<p><?php echo truncate(strip_tags($post->description),400,'&nbsp;',false);?></p>
						</div>


            

        <?php 
		 }
		 ?> 
						
						
						
					</div>
				</div>
			</div>
			<img src="<?php echo theme_url();?>/assets/images/backgrounds/reviews.jpg" alt="" class="img-responsive center-block" />
		</section><!--b-review-->