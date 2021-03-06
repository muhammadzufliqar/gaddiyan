        <section class="b-pageHeader">
            <div class="container">
                <h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Contact Us</h1>
                <div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
                    <h3>Get In Touch With Us Now</h3>
                </div>
            </div>
        </section><!--b-pageHeader-->

        <div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
            <div class="container">
                <a href="<?php echo base_url(); ?>" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="<?php echo site_url('show/contact'); ?>" class="b-breadCumbs__page m-active">Contact Us</a>
            </div>
        </div><!--b-breadCumbs-->

        <div class="b-map wow zoomInUp" data-wow-delay="0.5s">
            <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=W-Xpe7AurTrL7tXe8sROgCD2phwBIWEj&width=100%&height=400&lang=en_US&sourceType=constructor"></script>
        </div><!--b-map-->

        <section class="b-contacts s-shadow">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="b-contacts__form">
                            <header class="b-contacts__form-header s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
                                <h2 class="s-titleDet">Contact Form</h2> 
                            </header>
                            <p class=" wow zoomInUp" data-wow-delay="0.5s">Enter your comments through the form below, and our customer service professionals will contact you as soon as possible.</p>
                            <div id="success"></div>
                            <?php echo $this->session->flashdata('msg');?>
                            <form action="<?php echo site_url('show/sendcontactemail');?>" method="post" id="contactForm" novalidate class="s-form wow zoomInUp" data-wow-delay="0.5s">
                                <input type="text" placeholder="YOUR NAME" value="" name="user-name" id="user-name" />
                                 <?php echo form_error('user-name');?>
                                <input type="text" placeholder="EMAIL ADDRESS %" value="" name="user-email" id="user-email" />
                                 <?php echo form_error('user-email');?>
                                <input type="text" placeholder="PHONE NO." value="" name="user-phone" id="user-phone" />
                                 <?php echo form_error('user-phone');?>
                                <textarea id="user-message" name="user-message" placeholder="COMMENT/SUGGESTIONS/FEEDBACK"></textarea>
                                 <?php echo form_error('user-message');?>
                                <button type="submit" class="btn m-btn">SUBMIT NOW<span class="fa fa-angle-right"></span></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="b-contacts__address">
                            <div class="b-contacts__address-hours">
                                <h2 class="s-titleDet wow zoomInUp" data-wow-delay="0.5s">opening hours</h2>
                                <div class="b-contacts__address-hours-main wow zoomInUp" data-wow-delay="0.5s">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <h5>Sales Department</h5>
                                            <p>Mon-Sat : 8:00am - 5:00pm <br/>Sunday is closed</p>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <h5>Service Department</h5>
                                            <p>Mon-Sat : 8:00am - 5:00pm <br/>Sunday is closed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-contacts__address-info">
                                <h2 class="s-titleDet wow zoomInUp" data-wow-delay="0.5s">opening hours</h2>
                                <address class="b-contacts__address-info-main wow zoomInUp" data-wow-delay="0.5s">
                                    <div class="b-contacts__address-info-main-item">
                                        <span class="fa fa-home"></span>
                                        ADDRESS
                                        <p>202 W 7th St, Suite 233 Los Angeles, California 90014 USA</p>
                                    </div>
                                    <div class="b-contacts__address-info-main-item">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-xs-12">
                                                <span class="fa fa-phone"></span>
                                                PHONE
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-xs-12">
                                                <em>1-800- 624-5462</em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-contacts__address-info-main-item">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-xs-12">
                                                <span class="fa fa-fax"></span>
                                                FAX
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-xs-12">
                                                <em>1-800- 624-5462</em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-contacts__address-info-main-item">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-xs-12">
                                                <span class="fa fa-envelope"></span>
                                                EMAIL
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-xs-12">
                                                <em>info@domain.com</em>
                                            </div>
                                        </div>
                                    </div>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--b-contacts-->