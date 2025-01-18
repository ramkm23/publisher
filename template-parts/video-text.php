<?php if( get_sub_field( 'video-text-include' ) == 'Yes' ) :?>
<!-- Start Video + Text -->
<section id="video-text-cmp" class="video-text wow fadeInUp">
    <div class="container">
        <div class="row">
            <?php
                if ( get_sub_field( 'video-text-position' ) == 'left' ) {
                
                	$video_postion = 'float-left mr-3';
                
                } else {
                
                	$video_postion = 'float-right ml-3';
                }
            ?> 
            <div class="col content">
                <div class="<?php echo $video_postion; ?>" >
                    <iframe width="650" height="400" src="https://www.youtube.com/embed/<?php echo get_sub_field( 'video-id' );?>?si=bqVAKH_IfPXXXIkx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                 
                <div class="videotext">
                    <h2><?php echo get_sub_field( 'heading' );?></h2>
                    <p><?php echo get_sub_field( 'text' );?></p>
                    <?php if(get_sub_field('cta-button-link')) : ?>  
                        <a href="<?php echo get_sub_field('cta-button-link')['url']; ?>" target="<?php echo get_sub_field('cta-button-link')['target']; ?>" class="btn"><?php echo get_sub_field('cta-button-link')['title']; ?></a>
                    <?php endif; ?>
                <div>
            </div>
        </div>
    </div>
</section>
<!-- End Video + Text -->
<?php endif; ?>