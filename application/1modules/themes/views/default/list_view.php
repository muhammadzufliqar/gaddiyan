    <section class="b-pageHeader">
        <div class="container">
            <h1 class="wow zoomInLeft" data-wow-delay="0.5s">Auto Listings</h1>
            <div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
                <h3>Your search returned 28 results</h3>
            </div>
        </div>
    </section><!--b-pageHeader-->
    
    <div class="b-breadCumbs s-shadow">
        <div class="container wow zoomInUp" data-wow-delay="0.5s">
            <a href="index.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="listingsTwo.html" class="b-breadCumbs__page m-active">Search Results</a>
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
                    <aside class="b-items__aside">
                        <h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">REFINE YOUR SEARCH</h2>
                                     <div class="b-items__aside-main wow zoomInUp" data-wow-delay="0.5s">
                                            <form>
                                             <div class="b-items__aside-main-body">
                                                 <div class="b-items__aside-main-body-item">
                                                        <div id="custom-search-input">
                                                            <div class="input-group col-md-12">
                                                                <input type="text" class="form-control input-lg" placeholder="Buscar" />
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-info btn-lg" type="button">
                                                                    <i class="glyphicon glyphicon-search"></i>
                                                                    </button>
                                                                </span>
                                                            </div><!-- input-group -->
                                                        </div><!-- custom-search-input -->
                                                   </div><!--  b-items__aside-main-body-item-->
                                                          
                        
                                                            <div class="b-items__aside-main-body-item">
                                                               <!--  <label>SELECT A MAKE</label> -->
                                                               <div>
                                                                <select name="select1" class="m-select">
                                                                        <option value="" selected="">Any Make</option>
                                                                    </select>
                                                                <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                             
                                                            <div class="b-items__aside-main-body-item">
                                                               <!-- d <label>SELECT A MODEL</label> -->
                                                                <div>
                                                                <select name="select2" class="m-select">
                                                                        <option value="" selected="">Any Make</option>
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-items__aside-main-body-item">
                                                               <!-- d <label>SELECT A MODEL</label> -->
                                                                <div>
                                                                <select name="select3" class="m-select">
                                                                        <option value="" selected="">Select City</option>
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-items__aside-main-body-item">
                                                               <!-- d <label>SELECT A MODEL</label> -->
                                                                <div>
                                                                <select name="select4" class="m-select">
                                                                        <option value="" selected="">City Area</option>
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                <!-- Advance Search Filters Starts -->
                                <div class="col-xs-12 col-sm-12" id="my_checkbox_advance" style="background-color: #555;">
                                    <div id="accordion" class="panel panel-primary behclick-panel">
                                        <div class="panel-body" >
                                           
                                         
                                            <div class="panel-heading" >
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-angle-down" aria-hidden="true"></i> Fuel Type</a>
                                                </h4>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse in">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Petrol</span>
                                                                <span class="label label-default">12</span>
                                                               
                                                            </label>
                                                        </div>
                                                    </li>
                                                     <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Diesel</span>
                                                            <span class="label label-default">152</span>
                                                               
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">LPG</span>
                                                             <span class="label label-default">712</span>
                                                               
                                                            </label>
                                                        </div>
                                                    </li>
                                                     <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">CNP</span>
                                                            <span class="label label-default">125</span>
                                                               
                                                            </label>
                                                        </div>
                                                    </li>
                                                     <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Others</span>
                                                            <span class="label label-default">52</span>
                                                               
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                        
                        
                                             <div class="panel-heading" >
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#collapse4"><i class="indicator fa fa-angle-down" aria-hidden="true"></i> Price Range</a>
                                                </h4>
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse in">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">PKR 10000 - 20000</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">PKR 10000 - 20000</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">PKR 10000 - 20000</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                   <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">PKR 10000 - 20000</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">PKR 10000 - 20000</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                        
                        
                                            <div class="panel-heading" >
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#collapse5"><i class="indicator fa fa-angle-down" aria-hidden="true"></i> Engine Capacity (CC)</a>
                                                </h4>
                                            </div>
                                            <div id="collapse5" class="panel-collapse collapse in">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights"> 0 - 500</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights"> 500 - 600</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                     <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights"> 600 - 700</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                       <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights"> 700 - 800</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                     <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights"> 800 - 900</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                        
                                               <div class="panel-heading" >
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#collapse6"><i class="indicator fa fa-angle-down" aria-hidden="true"></i> Colors</a>
                                                </h4>
                                            </div>
                                            <div id="collapse6" class="panel-collapse collapse in">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">White</span>
                                                            <span class="label label-default">52</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Black</span>
                                                            <span class="label label-default">200</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                      <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Grey</span>
                                                            <span class="label label-default">552</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                     <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Red</span>
                                                            <span class="label label-default">122</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                      <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Silver</span>
                                                            <span class="label label-default">552</span>
                                                            </label>
                                                        </div>
                                                    </li>
                        
                                                      <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Others</span>
                                                            <span class="label label-default">552</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                        
                                               <div class="panel-heading" >
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#collapse7"><i class="indicator fa fa-angle-down" aria-hidden="true"></i> Body Types</a>
                                                </h4>
                                            </div>
                                            <div id="collapse7" class="panel-collapse collapse in">
                                                <ul class="list-group">
                                                   <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Sedaan</span>
                                                            <span class="label label-default">122</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                 <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Daihatshu</span>
                                                            <span class="label label-default">152</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                 <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Hachback</span>
                                                            <span class="label label-default">52</span>
                                                            </label>
                                                        </div>
                                                    </li>
                                               <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">MPV</span>
                                                            <span class="label label-default">552</span>
                                                            </label>
                                                        </div>
                                                    </li> 
                                                </ul>
                                            </div>
                        
                                              <div class="panel-heading" >
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#collapse9"><i class="indicator fa fa-angle-down" aria-hidden="true"></i> Assemply</a>
                                                </h4>
                                            </div>
                                            <div id="collapse9" class="panel-collapse collapse in">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Imported</span>
                                                            <span class="label label-default">552</span>
                                                            </label>
                                                        </div>
                                                    </li> 
                                                      <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Local</span>
                                                            <span class="label label-default">5852</span>
                                                            </label>
                                                        </div>
                                                    </li> 
                                                </ul>
                                            </div>
                        
                        
                                              <div class="panel-heading" >
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#collapse10"><i class="indicator fa fa-angle-down" aria-hidden="true"></i> Transmission</a>
                                                </h4>
                                            </div>
                                            <div id="collapse10" class="panel-collapse collapse in">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Manual</span>
                                                            <span class="label label-default">552</span>
                                                            </label>
                                                        </div>
                                                    </li> 
                                                      <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Automatic</span>
                                                            <span class="label label-default">5852</span>
                                                            </label>
                                                        </div>
                                                    </li> 
                                                </ul>
                                            </div>
                        
                        
                        
                                              <div class="panel-heading" >
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#collapse11"><i class="indicator fa fa-angle-down" aria-hidden="true"></i> Seller Type</a>
                                                </h4>
                                            </div>
                                            <div id="collapse10" class="panel-collapse collapse in">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">A dealer</span>
                                                            <span class="label label-default">552</span>
                                                            </label>
                                                        </div>
                                                    </li> 
                                                      <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">An Individual</span>
                                                            <span class="label label-default">5852</span>
                                                            </label>
                                                        </div>
                                                    </li> 
                                                </ul>
                                            </div>
                        
                        
                                              <div class="panel-heading" >
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#collapse12"><i class="indicator fa fa-angle-down" aria-hidden="true"></i> Ads</a>
                                                </h4>
                                            </div>
                                            <div id="collapse12" class="panel-collapse collapse in">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                              <input type="checkbox" class="pull-left" value="">
                                                                <span class="pull-rights">Featured Ads</span>
                                                            <span class="label label-default">552</span>
                                                            </label>
                                                        </div>
                                                    </li> 
                                                </ul>
                                            </div>
                        
                        
                        
                        
                                            <div class="panel-heading" >
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#others"><i class="indicator fa fa-angle-down" aria-hidden="true"></i> Others</a>
                                                </h4>
                                            </div>
                                            <div id="others" class="panel-collapse collapse">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                                <span class="pull-left">7</span>
                                                                <input type="checkbox" class="pull-rights" value="">
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox" >
                                                             <label>
                                                                <span class="pull-left">8</span>
                                                                <input type="checkbox" class="pull-rights" value="">
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                             <label>
                                                                <span class="pull-left">9</span>
                                                                <input type="checkbox" class="pull-rights" value="">
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                        
                        
                                        </div>
                                    </div>
                                </div>
                        <!-- Advance Search Filters Ends -->
                        
                                    <footer class="b-items__aside-main-footer">
                                        <button type="submit" class="btn m-btn" style="margin-top: 30px;">FILTER VEHICLES<span class="fa fa-angle-right"></span></button><br />
                                        <a href="">RESET ALL FILTERS</a>
                                    </footer>
                                   </form>
                                </div>
                        
                        
                                     <div class="b-items__aside-sell wow zoomInUp" data-wow-delay="0.5s">
                                                    <div class="b-items__aside-sell-img">
                                                        <h3>SELL YOUR CAR</h3>
                                                    </div>
                                                    <div class="b-items__aside-sell-info">
                                                        <p>
                                                        Nam tellus enimds eleifend dignis lsim
                                                        biben edum tristique sed metus fusce
                                                        Maecenas lobortis.
                                                        </p>
                                                        <a href="submit1.html" class="btn m-btn">REGISTER NOW<span class="fa fa-angle-right"></span></a>
                                                    </div>
                                                </div>
                    </aside>
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