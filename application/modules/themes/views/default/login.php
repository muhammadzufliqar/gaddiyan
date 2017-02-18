<section id="login">
    <div class="container">
        <div class="row">   
          <div class="col-lg-8 col-lg-offset-2 col-md-6 col-sm-12 col-xs-12">
            <div class="inner-contact">
               <h3>Login</h3>
                 <p class="signup">Welcome to Gaddiyan. Please login to continue.<a href="<?php echo site_url('account/signup');?>" style="color:#625aac; font-size:16px;">create one now.</a></p>
              <form action="<?php echo site_url('account/login');?>" method="post">
 <?php echo $this->session->flashdata('msg');?>
                <span class="form-text">Email Address:</span><br>
                <input type="email" name="useremail" placeholder="Email"><br>
  <?php echo form_error('useremail');?>
                <span class="form-text">Password:</span><br>
                <input type="password" name="password" placeholder="Password"><br>
<?php echo form_error('password');?>
                 <span class="s_btns"><button type="submit" class="btn btn-default">Login</button><br></span>
                <span class="forget"><a href="<?php echo site_url('account/forgotpass') ?>">Forgot Your Password?</a></span>
            </form>
            </div><!-- inner-contact -->
           </div><!-- col-lg-8 -->           
        </div><!-- row  -->
    </div><!-- contaienr -->
</section>