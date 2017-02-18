<section id="login">



    <div class="container">



        <div class="row">



            <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12">



        <div class="inner-contact">

 <?php echo $this->session->flashdata('msg');?>

            <h3>Sign Up</h3>



              <p class="signup">Creating an account allows you to manage all of your account settings. You can manage your newsletter subscriptions and access your downloads. You can also view detailed order status and purchase history.</p>

              <p>If you already have an account, please <a href="<?php echo site_url('account');?>" style="color:#625aac; font-size:16px;">Sign in Now.</a></p>



<div id="registeration">

          <form class="form-horizontal" action="<?php echo site_url('account/register/');?>" method="post">



          <fieldset>

           <div class="control-group">



              <div class="controls" id="socials_connections">



                <div class="col-lg-4 col-md-4 col-sm-4 col-xm-12 socials_paddings"><a href="#" class="btn btn-danger">Connect With Facebook</a>



                </div>



               <div class="col-lg-4 col-md-4 col-sm-4 col-xm-12 socials_paddings"> <a href="#" class="btn btn-info">Connect With Twitter</a></div>



               <div class="col-lg-4 col-md-4 col-sm-4 col-xm-12 socials_paddings">



               	 <a href="#" class="btn btn-primary">Connect With Google+</a>



               </div>



              </div>



            </div>

           

            

            

            <div class="control-group">



              <div class="controls">



                <input type="text" id="first_name" placeholder="First Name" name="first_name" class="form-control input-lg signups">



              </div>



            </div>

             <?php echo form_error('first_name');?>

            

            <div class="control-group">



              <div class="controls">



                <input type="text" id="last_name" placeholder="Last Name" name="last_name" class="form-control input-lg signups">



              </div>



            </div>

            

            

            <div class="control-group">



              <div class="controls">



                <input type="email" id="useremail"  placeholder="Email" name="useremail"  class="form-control input-lg signups">



              </div>



            </div>

            

            

            <div class="control-group">



              <div class="controls">



                <input type="text" id="username" placeholder="Username" name="username" class="form-control input-lg signups">



              </div>



            </div>

            

            

             

            <div class="control-group">



              <div class="controls">



                <input type="password" id="password" placeholder="Password"  name="password" class="form-control input-lg signups">



              </div>



            </div>



            <div class="control-group">



              <div class="controls">



                <input type="password" id="repassword" placeholder="Confirm Password" name="repassword"  class="form-control input-lg signups">



              </div>



            </div>

            

            

            <div class="control-group">



              <div class="controls">



              <input type="tel" id="phone" placeholder="Phone Number" name="phone" class="form-control input-lg p-numbers">



              </div>



            </div>

            

            

            <div class="control-group">



              <div class="controls">



                                    <select class="form-control" name="gender">

                                        <?php $sel=($curr_value=='male')?'selected="selected"':'';?>

                                        <option value="male" <?php echo $sel;?>>Male</option>

                                        <?php $sel=($curr_value=='female')?'selected="selected"':'';?>

                                        <option value="female" <?php echo $sel;?>>Female</option>

                                    </select>    



              </div>



            </div>

           

            <!--<div class="control-group m-clients">



             <span>Are You:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="user_type" value="2" checked="checked"> <span>An Individual </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="user_type" value="3">  <span>A Dealer</span>



            </div>-->





		     <!-- /.panel-default -->



             <div class="control-group f-updates">



               <input type="checkbox" checked="checked"> <span>Send me Updates & Relevant News</span>



            </div>



            <div class="control-group">



              <!-- Button -->



              <div class="controls">



                <button type="submit" name="register" value="Register" class="btn btn-success">Register</button>



              </div>



            </div>

            

            <div class="terms">



            	By clicking the button above, you are agree<br> to our <a href="<?php echo site_url('show/content/terms');?>" target="_blank">Terms and Conditions</a>.



            </div>



          </fieldset>



        </form>



</div> <!-- regisration -->



</div><!-- inner-contact -->



            </div><!-- col-lg-12 -->



        </div><!-- row  -->



    </div><!-- contaienr -->



</section>