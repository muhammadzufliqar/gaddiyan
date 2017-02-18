<link href="<?php echo base_url();?>assets/datatable/dataTables.bootstrap.css" rel="stylesheet">
<style type="text/css">
    #all-posts_filter input{
        width: 200px;
    }
</style>
<?php
$curr_page = $this->uri->segment(5);
if($curr_page=='')
  $curr_page = 0;
$dl = default_lang();
$CI = get_instance();
$CI->load->config('autocon');
?>
<div class="row">




  <div class="col-md-12">

    <div class="box">

      <div class="box-title">

        <h3><i class="fa fa-bars"></i> All Vehicles</h3>

        <div class="box-tool">

          <a href="#" data-action="collapse"><i class="fa fa-chevron-up"></i></a>


        </div>

      </div>

      <div class="box-content">

        <?php echo $this->session->flashdata('msg');?>

        <?php if($posts->num_rows()<=0){?>

        <div class="alert alert-info">No Car</div>

        <?php }else{?>

        <div id="no-more-tables">

        <table id="all-posts" class="table table-hover">

           <thead>

               <tr>

                  <th class="numeric">#</th>

                  <th class="numeric">Thumb</th>

                  <th class="numeric" >Title</th>

                  <th class="numeric">Car type</th>

                  <th class="numeric">Condition</th>
                  
                  <th class="numeric">Price</th>

                  <th class="numeric">Status</th>

                  <th class="numeric">Featured</th>

                  <th class="numeric">Actions</th>

               </tr>

           </thead>

           <tbody>

        	<?php $i=$start+1;foreach($posts->result() as $row):  ?>

               <tr>

                  <td data-title="#" class="numeric"><?php echo $i;?></td>

                  <td data-title="Thumb" class="numeric"><img class="thumbnail" style="width:50px;margin-bottom:0px;" src="<?php echo get_featured_photo_by_id($row->featured_img);?>" /></td>

                  <td data-title="Title" class="numeric"><?php echo get_title_for_edit_by_id_lang($row->id,$dl);?></td>

                  <td data-title="Type" class="numeric"><?php echo lang_key($row->car_type);?></td>

                  <td data-title="Condition" class="numeric"><?php echo lang_key($row->condition)?></td>
                  
                  <td data-title="Price" class="numeric"><?php echo $row->price;?></td>
                  
                  <td data-title="Status" class="numeric"><?php echo get_status_title_by_value($row->status);?></td>
                  
                  <td data-title="Featured" class="numeric"><?php echo ($row->featured==1)?'<span class="label label-success">Yes</span>':'<span class="label label-info">No</span>';?></td>

                  <td data-title="Action" class="numeric">

                    <div class="btn-group">

                      <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="ui_button.html#"><i class="fa fa-cog"></i> Action <span class="caret"></span></a>

                      <ul class="dropdown-menu dropdown-info">
                          <?php if($row->status!=0){?>
                          <li><a href="<?php echo site_url('admin/autocon/editcar/'.$curr_page.'/'.$row->id);?>">Edit</a></li>
                          <li><a href="<?php echo site_url('admin/autocon/deleteestate/'.$curr_page.'/'.$row->id);?>">Delete</a></li>
                          <?php }else{?>
                          <li><a href="<?php echo site_url('admin/autocon/undo_delete/'.$curr_page.'/'.$row->id);?>">Undo Delete</a></li>
                          <?php }?>
                          <?php if(is_admin()){?>
                            <?php if($row->status==2){?>
                            <li><a href="<?php echo site_url('admin/autocon/approveestate/'.$curr_page.'/'.$row->id);?>">Approve</a></li>
                            <?php }?>
                            <?php if($row->featured==0 && $row->status!=0){?>
                            <li><a href="<?php echo site_url('admin/autocon/featurepost/'.$curr_page.'/'.$row->id);?>">Make Featured</a></li>
                            <?php }else if($row->status!=0){?>
                            <li><a href="<?php echo site_url('admin/autocon/removefeaturepost/'.$curr_page.'/'.$row->id);?>">Remove Featured</a></li>
                            <?php }?>
                          <?php }else{?>
                            <?php if(get_settings('autocon_settings','enable_feature_payment','No')=='Yes' && $row->featured==0){?>
                            <li><a href="<?php echo site_url('admin/autocon/featurepayment/'.$curr_page.'/'.$row->id);?>">Make Featured</a></li>
                            <?php }?>
                          <?php }?>  
                      </ul>

                    </div>

                  </td>

               </tr>

            <?php $i++;endforeach;?>   

           </tbody>

        </table>

        </div>

        <?php }?>

        </div>

    </div>

  </div>

</div>

<script src="<?php echo base_url();?>assets/datatable/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/datatable/dataTables.bootstrap.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){

    jQuery('#all-posts').dataTable();
    jQuery('.filters').change(function(){
        jQuery('#filter_form').submit();
    });
});
</script>
