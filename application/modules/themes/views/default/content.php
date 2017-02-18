

        <section class="b-pageHeader">
            <div class="container">
                <h1 class="wow zoomInLeft" data-wow-delay="0.7s"><?php echo ucfirst($alias); ?></h1>
             
            </div>
        </section><!--b-pageHeader-->

        <div class="b-breadCumbs s-shadow">
            <div class="container">
                <a href="<?php echo base_url(); ?>" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="<?php echo site_url('show/content/'.$alias); ?>" class="b-breadCumbs__page m-active"><?php echo ucfirst($alias); ?></a>
            </div>
        </div><!--b-breadCumbs-->

        <section class="b-best">
            <div class="container">
            <?php
            foreach($query as $val){ 

                if(empty( $val->featured_img)){
                $class = '12';

                }else{
                    $class = '6';
                }
            ?>
                <div class="row">
                    <div class="col-sm-<?php echo  $class; ?> col-xs-12">
                        <div class="b-best__info">
                            <header class="s-lineDownLeft b-best__info-head">
                                <h2 class="wow zoomInUp" data-wow-delay="0.5s">
                              <?php echo $val->title; ?>
                                </h2>
                            </header>
                            <p class="wow zoomInUp" data-wow-delay="0.5s">
                            <?php echo $val->description; ?></p>
                        </div>
                    </div>
                    <?php if(!empty( $val->featured_img)){ ?>
                    <div class="col-sm-6 col-xs-12 about_img">
                        <img class="img-responsive center-block wow zoomInUp" data-wow-delay="0.5s" alt="best" src="<?php echo base_url('uploads/thumbs/' . $val->featured_img); ?>" />
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
        </section><!--b-best-->
