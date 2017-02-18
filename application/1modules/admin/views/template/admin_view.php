<?php 

$file 	= './dbc_config/config.xml';

$xmlstr = file_get_contents($file);

$xml 	= simplexml_load_string($xmlstr);

$config	= $xml->xpath('//config');	

$current_version = $config[0]->version;

$current_version = explode('.',$current_version);

if($config[0]->is_installed=='yes' && $this->uri->segment(2)!='complete')



$status = json_decode(@file_get_contents(get_author_url().'admin/verify/checkversion/autocon'));



if(isset($status->version))

{

	$version = $status->version;

	$avl_version = explode('.', $version);

	

	if($avl_version[0]>$current_version[0] || ($avl_version[0]==$current_version[0] && $avl_version[1]>$current_version[1]) ||

	($avl_version[0]==$current_version[0] && $avl_version[1]==$current_version[1] && $avl_version[2]>$current_version[2]))

	{

		echo '<div class="alert alert-info">Version '.$version.' is now available.

				Get it <a href="'.$status->update_url.'">Here</a></div>';

	}

}

?>

<?php $curr_lang = ($this->uri->segment(1)!='')?$this->uri->segment(1):'en'; ?>

   <div class="page-title">

        <div>

          <h1><i class="fa fa-file-o"></i> Dashboard</h1>

          <h4>Overview, stats and more</h4>

        </div>

      </div>





    <div class="row">

      <div class="col-md-7">

        <div class="row">

          <div class="col-md-7">

            <div class="row">

              <div class="col-md-12">

                <div class="tile">

                  <p class="title">

                    Gaddiyan - Listing your Cars

                  </p>

                  <p>

                    find your vehicles with ease.

                  </p>

                  <div class="img img-bottom">

                    <i class="fa fa-desktop"></i>

                  </div>

                </div>

              </div>

            </div>

            

          </div>

          <div class="col-md-5">

            <div class="row">

              <div class="col-md-12 tile-active">

                <div class="tile tile-magenta">

                  <div class="img img-center">

                    <i class="fa fa-desktop"></i>

                  </div>

                  <p class="title text-center">

                    Gaddiyan Admin

                  </p>

                </div>

                <div class="tile tile-blue">

                  <p class="title">

                    Gaddiyan Admin

                  </p>

                  <p>

                    Gaddiyan is the most complete and easyily manageable Car Dealership System

                  </p>

                  <div class="img img-bottom">

                    <i class="fa fa-desktop"></i>

                  </div>

                </div>

              </div>

            </div>

            

          </div>

        </div>

      </div>

      <div class="col-md-5">

        <div class="row">

          <div class="col-md-6">

            <div class="tile tile-orange">

              <div class="img">

                <i class="fa fa-users"></i>

              </div>

              <div class="content">

                <p class="big">

                  <?php 
                  $CI = get_instance();
                  $CI->load->database();
                  $query = $CI->db->get_where('users',array('status'=>1));
                  echo $query->num_rows();
                  ?>

                </p>

                <p class="title">

                  Dealers

                </p>

              </div>

            </div>

          </div>

          <div class="col-md-6">

            <div class="tile tile-dark-blue">

              <div class="img">

                <i class="fa fa-bars"></i>

              </div>

              <div class="content">
                <p class="big">
                  <?php
                  $query = $CI->db->get_where('posts',array('status'=>1));
                  echo $query->num_rows();
                  ?>
                </p>
                <p class="title">
                  Vehicles
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <!--<a href="http://webhelios.com/app/autocon/doc" target="_blank" class="btn btn-info">See Full Documentation</a>-->
      </div>
    </div> 

