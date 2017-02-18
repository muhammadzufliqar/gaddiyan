
<!-- Header -->

    <header style="padding-top: 100px;background:#181015;">
        <?php
        $CI = get_instance();
        $CI->load->config('banner');
        $custom_banners = $CI->config->item('banner_settings');
        $header_text_color = $CI->config->item('banner_header_text_color');
        $footer_text_color = $CI->config->item('banner_footer_text_color');

        ?>
            <div id="slider1_container" style="position: relative;  margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                    <div class="jssor-loading">
                    </div>
                </div>
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">
                    <?php foreach ($custom_banners as $banner) { ?>
                    <div>
                        <a href="<?php echo (isset($banner['image_link']))?$banner['image_link']:'javascript:void(0)'; ?>">
                            <img alt="Banner" u="image" src="<?php echo base_url('uploads/banner/' . $banner['image_name']);?>" />
                        </a>
                        <?php
                        $header_text_color = (isset($banner['header_text_color']))?$banner['header_text_color']:'ffffff';
                        $footer_text_color = (isset($banner['footer_text_color']))?$banner['footer_text_color']:'ffffff';
                        ?>
                        <div class="slider-top-text" style="top: <?php echo $banner['header_text_top']; ?>px; left: <?php echo $banner['header_text_left']; ?>px;color:#<?php echo $header_text_color;?>">
                            <?php echo $banner['header_text']; ?>
                        </div>
                        <div class="slider-bottom-text" style="top: <?php echo $banner['footer_text_top']; ?>px; left: <?php echo $banner['footer_text_left']; ?>px;color:#<?php echo $footer_text_color;?>">
                            <?php echo $banner['footer_text']; ?>
                        </div>
                    </div>
                    <?php } ?>

        </div>
                <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
                    <!-- bullet navigator item prototype -->
                    <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
                </div>
                <!-- Bullet Navigator Skin End -->

                <!-- Arrow Navigator Skin Begin -->

                <!-- Arrow Left -->
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
                <!-- Arrow Right -->
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>


    </header>

    <!-- /Header -->
<div  class="map-search" data-stellar-background-ratio="0.5" style="margin:0;width:100%;padding:50px 0;text-align:center;background: url(<?php echo base_url('uploads/banner/'.get_settings('banner_settings','search_bg','default.jpg'));?>)">
    <div class="container my-bg">
    <div class="row">
        <div class="search-wrapper" style="width: 100%">
            <form action="<?php echo site_url('show/advfilter');?>" method="post">
                <div class="holder">
                    <div class="col-md-4 col-sm-4">
                        <label style=""><?php echo lang_key('select_manufacturer'); ?></label>
                        <select name="brand" id="brand">
                            <option value=""><?php echo lang_key('all');?></option>
                            <?php $brands = get_all_brands();
                            foreach ($brands->result() as $brand) {
                            ?>
                                <option value="<?php echo $brand->id;?>" id="<?php echo $brand->id;?>"><?php echo $brand->name;?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label style=""><?php echo lang_key('select_model'); ?></label>
                        <select name="model" id="model">
                            <option value="" class="model-all"><?php echo lang_key('all');?></option>
                            <?php $models = get_all_models();
                            foreach ($models->result() as $model) {
                            ?>
                                <option value="<?php echo $model->id;?>" class="model-<?php echo $model->parent;?>"><?php echo $model->name;?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label><?php echo lang_key('price_range'); ?></label>
                        <input type="text" id="range-slider" name="range-slider" value="" />
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 col-sm-4">
                        <label style=""><?php echo lang_key('select_type'); ?></label>
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
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label style=""><?php echo lang_key('model_year'); ?>(From-To)</label>
                        

                        <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left: 0px">
                            <?php 
                                $this->load->helper('date');
                                $current_year =  mdate("%Y", time());
                            ?>
                              <select name="year_from">
                                <option value=""><?php echo lang_key('all');?></option>
                                <?php $v = (set_value('year_from')!='')?set_value('year_from'):'';?>
                                <?php for($i=$current_year+1;$i>=1910;$i--){
                                        $sel = ($i==$v)?'selected="selected"':'';
                                  ?>
                                  <option value="<?php echo $i;?>" <?php echo $sel;?>><?php echo $i;?></option>
                                <?php }?>
                              </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right: 0px">
                            <?php 
                                $this->load->helper('date');
                                $current_year =  mdate("%Y", time());
                            ?>
                              <select name="year_to">
                                <option value=""><?php echo lang_key('all');?></option>
                                <?php $v = (set_value('year_to')!='')?set_value('year_to'):'';?>
                                <?php for($i=$current_year+1;$i>=1910;$i--){
                                        $sel = ($i==$v)?'selected="selected"':'';
                                  ?>
                                  <option value="<?php echo $i;?>" <?php echo $sel;?>><?php echo $i;?></option>
                                <?php }?>
                              </select>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <label><?php echo lang_key('mileage_range'); ?></label>
                        <input type="text" id="mileage-slider" name="mileage-slider" value="" />
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <label style=""><?php echo lang_key('select_car_condition'); ?></label>
                          <?php
                          $CI = get_instance();
                          $CI->load->config('autocon');
                          $custom_conditions = $CI->config->item('car_condition');
                          ?>
                          <select name="condition">
                              <option value="" ><?php echo lang_key('all');?></option>
                              <?php foreach ($custom_conditions as $status) {?>
                                  <option value="<?php echo $status['title'];?>"><?php echo lang_key($status['title']);?></option>
                              <?php } ?>
                          </select>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <label style=""><?php echo lang_key('select_transmission_type'); ?></label>
                          <?php
                          $CI = get_instance();
                          $CI->load->config('autocon');
                          $custom_transmissions = $CI->config->item('car_transmission');
                          ?>
                          <select name="transmission">
                              <option value="" ><?php echo lang_key('all');?></option>
                              <?php foreach ($custom_transmissions as $status) {?>
                                  <option value="<?php echo $status['title'];?>"><?php echo lang_key($status['title']);?></option>
                              <?php } ?>
                          </select>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <label>&nbsp;</label>
                        <input type="submit" value="<?php echo lang_key('filter_vehicles'); ?> »" class="btn btn-info">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>

        </div>
    </div>

    </div>
</div>






        <script type="text/javascript">





            jQuery(document).ready(function ($) {

                var _CaptionTransitions = [];
                _CaptionTransitions["L"] = { $Duration: 900, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $ScaleHorizontal: 0.6, $Opacity: 2 };
                _CaptionTransitions["R"] = { $Duration: 900, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $ScaleHorizontal: 0.6, $Opacity: 2 };
                _CaptionTransitions["T"] = { $Duration: 900, $FlyDirection: 4, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $ScaleVertical: 0.6, $Opacity: 2 };
                _CaptionTransitions["B"] = { $Duration: 900, $FlyDirection: 8, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $ScaleVertical: 0.6, $Opacity: 2 };
                _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
                _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
                _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
                _CaptionTransitions["RTTL|BR"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $FlyDirection: 10, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $ScaleHorizontal: 0.6, $ScaleVertical: 0.6, $Opacity: 2, $Round: { $Rotate: 0.8} };
                _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
                _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
                _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

                var options = {
                    $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                    $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                    $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                    $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                    $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                    //$SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                    $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                    //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                    //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                    $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                    $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                    $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                    $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                    $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                    $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                    $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                        $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                        $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                        $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                        $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                    },

                    $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                        $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                        $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                        $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                        $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                        $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    },

                    $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                        $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                };

                var jssor_slider1 = new $JssorSlider$("slider1_container", options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizes
                function ScaleSlider() {
                    var bodyWidth = document.body.clientWidth;
                    if (bodyWidth)
                        jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1920));
                    else
                        window.setTimeout(ScaleSlider, 30);
                }

                ScaleSlider();

                if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                    $(window).bind('resize', ScaleSlider);
                }


                //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
                //    $(window).bind("orientationchange", ScaleSlider);
                //}
                //responsive code end
            });



        jQuery(document).ready(function(){
            jQuery('#brand').change(function(){
                var val = jQuery(this).val();
                if(val!='') {
                  jQuery.post(
                      "<?php echo site_url('show/get_models_ajax');?>/",
                      {brand: val},
                      function(json){
                          var options = '<option value="' + '' + '">' + 'All' + '</option>';
                          if(!jQuery.isEmptyObject(json)) {

                            $.each(json, function (key, data) {
                                
                                options += '<option value="' + data['id'] + '">' + data['name'] + '</option>';
                            })
                            jQuery('#model').empty();
                            jQuery('#model').html(options);
                          }
                          else {
                            jQuery('#model').empty();
                            jQuery('#model').html(options);
                          }
                          
                      },
                      "json"
                  );
                }
                else {
                  var options = '<option value="' + '' + '">' + 'All' + '</option>';
                  jQuery('#model').empty();
                  jQuery('#model').html(options);
                }
            }).change();

            var min_price,max_price;
            jQuery.ajax({
              dataType: "json",
              url: "<?php echo site_url('show/get_min_max_car_price_ajax');?>/",
              success: function(data) {
                  min_price = data['min_price'];
                  max_price = data['max_price'];
                  $("#range-slider").ionRangeSlider({
                      min: min_price,
                      max: max_price,
                      type: 'double',
                      prefix: "<?php echo $CI->session->userdata('system_currency'); ?>",
                      maxPostfix: "+",
                      prettify: false,
                      hasGrid: true
                  });
              },
              error: function() {
                $("#range-slider").ionRangeSlider({
                    min: 0,
                    max: 5000,
                    type: 'double',
                    prefix: "<?php echo $CI->session->userdata('system_currency'); ?>",
                    maxPostfix: "+",
                    prettify: false,
                    hasGrid: true
                });
              }
            });

            $("#mileage-slider").ionRangeSlider({
                min: 0,
                max: 10000,
                type: 'double',
                prefix: "",
                maxPostfix: "+",
                prettify: false,
                hasGrid: true
            });

        });
        </script>