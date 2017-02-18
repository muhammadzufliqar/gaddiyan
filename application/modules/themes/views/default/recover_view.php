
<section id="login">
    <div class="container">
        <div class="row">   
          <div class="col-lg-8 col-lg-offset-2 col-md-6 col-sm-12 col-xs-12">
            <div class="inner-contact">
               <h3>Forget Password</h3>
                 <p class="signup">
                 If you already have an account, please <a href="<?php echo site_url('account/login');?>" style="color:#625aac; font-size:16px;">Sign in Now.</a></p>
              <form action="<?php echo site_url('account/recoverpassword/');?>" method="post">
 <?php echo $this->session->flashdata('msg');?>
                <span class="form-text">Email Address:</span><br>
                <input type="text" name="user_email" value="<?php echo set_value('user_email');?>" class="form-control">
<br>
  <?php echo form_error('user_email');?>
                
                 <span class="s_btns"><button type="submit" class="btn btn-default">Submit</button><br></span>
              
            </form>
            </div><!-- inner-contact -->
           </div><!-- col-lg-8 -->           
        </div><!-- row  -->
    </div><!-- contaienr -->
</section>