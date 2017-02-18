<?php $CI = get_instance();
$range_val = (isset($data['range-slider']))?$data['range-slider']:''; 
if($range_val=='') {
  $data_from = $data_to = ''; 
}
else {
  $price_range = explode(';', $range_val);
  $data_from = "data-from=\"".$price_range[0]."\"";
  $data_to = "data-to=\"".$price_range[1]."\"";
}
$mileage_range = (isset($data['mileage-slider']))?$data['mileage-slider']:''; 
if($mileage_range=='') {
  $mileage_from = $mileage_to = ''; 
}
else {
  $mileage_range = explode(';', $mileage_range);
  $mileage_from = "data-from=\"".$mileage_range[0]."\"";
  $mileage_to = "data-to=\"".$mileage_range[1]."\"";
}
$curr_lang = ($this->uri->segment(1)!='')?$this->uri->segment(1):'en';
?>
              
        <div class="row">
        <?php $current_url = base64_encode(current_url().'/#data-content');?>
          <div class="col-md-12">
         
         <h1 class="widget-title"><i class="fa fa-car"></i>&nbsp;<?php echo lang_key('result'); ?>
                  <?php //require'switcher_view.php';?>
              </h1>
              <?php

              if($this->session->userdata('view_style')=='list')
              {
                  //require'list_view.php';
              }
            
              else
              {                  
                  require'grid_view.php';

			  }
              ?>
              <div class="clearfix"></div>
              <div style="text-align:center">
                <ul class="pagination">
                <?php echo (isset($pages))?$pages:'';?>
                </ul>
              </div>
          </div>
    </div> <!-- /row -->