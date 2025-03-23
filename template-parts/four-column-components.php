<?php if( get_sub_field( 'include-four-column-components' ) == 'Yes' ) :?>

<?php 
   $bgw = 'text-cta-box';      // Default to light background
   $bggray = 'bg-white';   // Default to white background

   // Check if the background color should be white or gray
   if (get_sub_field('four-column-background-color') == 'White') {
      $bgw = ''; // Remove light background
   }
   if (get_sub_field('four-column-background-color') == 'Gray') {
      $bggray = ''; // Remove white background
   }

?>

<!--==========================
   Services Section
   ============================-->
<section class="four-coloumn-components <?php echo $bggray; ?> <?php echo $bgw; ?> "> 
   <div class="container">
      <div class="row"> 
         <div class="col-sm-12">
               <div class="comptitle">
               <?php if(!empty(get_sub_field('four-column-components-heading'))): ?>
                        <h2 class="text-center"><?php echo get_sub_field('four-column-components-heading'); ?></h2>
               <?php endif; ?>
               <?php if(!empty(get_sub_field('four-column-components-text'))): ?>
                        <p><?php echo get_sub_field('four-column-components-text'); ?></p>
               <?php endif; ?>              
               </div>
         </div>
         <?php if(have_rows('four-column-components-items')):?> 
         <?php while(have_rows('four-column-components-items')): the_row(); ?>
         <div class="col-lg-3">
            <div class="box wow fadeInLeft">
               <?php if(!empty(get_sub_field('four-column-components-item-image'))): ?>
                  <div class="image">
                     <img src="<?php echo get_sub_field( 'four-column-components-item-image' )[ 'url' ]; ?>" class="text-images igure-img img-fluid"   alt="<?php echo get_sub_field( 'three-column-components-item-image' )[ 'alt' ]; ?>">         
                  </div>
               <?php endif; ?>
               <div class="
                  <?php if (get_sub_field( 'four-column-item-background-color' ) == 'Dark' ):
                     echo 'itembackground';
                  else :
                     echo 'bg-white';
                  endif;
                  ?>
               ">
                  <?php if(!empty(get_sub_field('four-column-components-item-heading'))): ?>
                     <h3 class="title"><?php echo get_sub_field('four-column-components-item-heading'); ?></h3>
                  <?php endif; ?>
                  <?php if(!empty(get_sub_field('four-column-components-item-text'))): ?>
                     <p class="description">
                        <?php echo get_sub_field('four-column-components-item-text'); ?>
                     </p>
                  <?php endif; ?>
                  <?php if(get_sub_field('four-column-components-item-button')) : ?>  
                     <a href="<?php echo get_sub_field('four-column-components-item-button')['url']; ?>" target="<?php echo get_sub_field('four-column-components-item-button')['target']; ?>" class="btn"><?php echo get_sub_field('four-column-components-item-button')['title']; ?></a>
                  <?php endif; ?>
               </div>
            </div>
         </div>
         <?php endwhile; ?>
         <?php endif; ?>    
      </div>
   </div>
</section>
<!-- #services -->
<?php endif; ?>