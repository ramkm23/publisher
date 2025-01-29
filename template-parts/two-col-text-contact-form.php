<?php if( get_sub_field( 'include-two-col-text-form' ) == 'Yes' ) :?>
<!-- contact form 7 -->
<section id="two-col-text-form" class="wow fadeInUp parallex-img" style="background-image: url('https://creativewebstech.com/img/back.jpg')">
    <div class="background-ovelay"></div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-sm-4 two-col-text-form-details">
                
                <div class="two-col-text-fdetails">
                <p class="formicon"><i class="ion-ios-location-outline"></i></p>
                    <?php if(!empty(get_sub_field('two-col-text-form-heading'))): ?>
                        <h2><?php echo get_sub_field('two-col-text-form-heading'); ?></h2>
                    <?php endif; ?>
                    <?php if(!empty(get_sub_field('two-col-text-form-text'))): ?>
                        <p><?php echo get_sub_field('two-col-text-form-text'); ?></p>
                    <?php endif; ?>
                </div>
            </div>   
            <div class="col-sm-8 colcontact-form">
                <div class="two-col-text-form">
                    <?php $contact = do_shortcode(get_sub_field('two-col-text-form-shortcode')); ?>
                    <?php echo $contact; ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- #contact -->
<?php endif;?>