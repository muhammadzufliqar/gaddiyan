<aside class="b-items__aside">

                        <h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">REFINE YOUR SEARCH</h2>

                                     <div class="b-items__aside-main wow zoomInUp" data-wow-delay="0.5s">

				<form action="<?php echo site_url(); ?>/show/search" method="post">

                                             <div class="b-items__aside-main-body">

                                                            <div class="b-items__aside-main-body-item">

                                                               <div>

                                         <select name="brand" id="select-brand" class="m-select">

                                          <option value="" selected="">Select Make</option>

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

                                                                <span class="fa fa-caret-down"></span>

                                                                </div>

                                                            </div>

                                                            <div class="b-items__aside-main-body-item">

                                                                <div>

                                                                 <select name="model" id="select-model" class="m-select">

                                                                   <option value="" selected="">Select Model</option>

                            <option value="" class="model-all"><?php echo lang_key('all');?></option>

                            

                        </select>

                                                                    <span class="fa fa-caret-down"></span>

                                                                </div>

                                                            </div>

                                                            <div class="b-items__aside-main-body-item">

                                                                <div>

                                                                <select name="city" class="m-select">

                                                              <option value="">Select City</option>

     

                                                               <?php

                                            foreach ($loc as $val) {

                                             // $sel = (isset($val['brand'])&&$val['brand']==$val->id)?'selected="selected"':'';

                                            ?>

      <option value="<?php echo $val->id;?>" id="<?php echo $val->id;?>" <?php //echo $sel;?>><?php echo $val->name;?></option>

                                            <?php

                                            }

                                            ?>

                                                                    </select>

                                                                    <span class="fa fa-caret-down"></span>

                                                                </div>

                                                            </div>

                                                            <div class="b-items__aside-main-body-item">

                                                                <div>

                                                                

                           <?php $options = array("Gas", "Diesel", "Petrol",



                           "Octane", "Others");?>



                       <select name="fuel_type" class="m-select">

 								<option value="">Fuel Type</option>

                           <?php foreach ($options as $option) {



                               $sel = ($option==set_value('fuel_type'))?'selected="selected"':'';



                               ?>



                               <option value="<?php echo $option;?>" <?php echo $sel;?>><?php echo lang_key($option);?></option>



                           <?php } ?>



                       </select>

                                                                    <span class="fa fa-caret-down"></span>

                                                                </div>

                                                            </div>

                                                            <div class="b-items__aside-main-body-item">

                                                                <div>

                                                                

                           <select class="m-select" name="price">

                                            <option value ="">Price Range</option>

                                            <option value ="5">5 Lacs to 10 lacs</option>

                                            <option value ="10">10 Lacs to 15 lacs</option>

                                            <option value ="15">15 Lacs to 20 lacs</option>

                                            <option value ="20">20 Lacs to 25 lacs</option>

                                            <option value ="25">25 Lacs to 30 lacs</option>

                                            <option value ="30">30 Lacs to 35 lacs</option>

                                            <option value ="35">35 Lacs to 40 lacs</option>

                                           </select>

                                                                    <span class="fa fa-caret-down"></span>

                                                                </div>

                                                            </div>

                                                            

                          <div class="b-items__aside-main-body-item">

                                <div>

                                                                

                           <?php 

						   $custom_transmissions = $this->config->item('car_transmission'); ?>



                      <select name="transmission" class="m-select">

						<option value ="">Select Transmission</option>

                          <?php foreach ($custom_transmissions as $option) {



                              $sel = ($option['title']==set_value('transmission'))?'selected="selected"':'';



                              ?>



                              <option value="<?php echo $option['title'];?>" <?php echo $sel;?>><?php echo lang_key($option['title']);?></option>



                          <?php } ?>



                      </select>

                                                                    <span class="fa fa-caret-down"></span>

                                                                </div>

                                                            </div>

                                                            

                                                            <div class="b-items__aside-main-body-item">

                                <div>

                                                                

                           <?php 

						   $engine_size = get_element('engine_size'); ?>



                      <select name="engine_size" class="m-select">

						<option value ="">Select Engine</option>

                          <?php foreach ($engine_size as $option) {  ?>



                              <option value="<?php echo $option->engine_size;?>"><?php echo $option->engine_size;?></option>



                          <?php } ?>



                      </select>

                                                                    <span class="fa fa-caret-down"></span>

                                                                </div>

                                                            </div>

                                                            

                                                            

                                                            <div class="b-items__aside-main-body-item">

                                <div>

                                                                

                           <?php 

						   $color = get_element('exterior_color'); ?>



                      <select name="exterior_color" class="m-select">

						<option value ="">Select Color</option>

                          <?php foreach ($color as $option) {  ?>



                              <option value="<?php echo $option->exterior_color;?>"><?php echo $option->exterior_color;?></option>



                          <?php } ?>



                      </select>

                                                                    <span class="fa fa-caret-down"></span>

                                                                </div>

                                                            </div>

                                                           </div>

                            

                                    <footer class="b-items__aside-main-footer">

                                        <button type="submit" class="btn m-btn" style="margin-top: 30px;">FILTER VEHICLES<span class="fa fa-angle-right"></span></button><br />

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

                                                        <a href="<?php echo site_url('account') ?>" class="btn m-btn">REGISTER NOW<span class="fa fa-angle-right"></span></a>

                                                    </div>

                                                </div>

                    </aside>