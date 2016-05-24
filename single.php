  <?php if ( have_posts() ) : ?>
     <?php  while ( have_posts() ) : the_post(); ?>
<div class="grid-100 mobile-grid-100 tablet-grid-100 ajaxbox">
<div class="photos">
  <span><?PHP  $otros = array("w" => '1170px', "zc" => 1, "q" =>100);
  
  	echo gen_image('work',1,1,$otros);?></span>
 
  
 </div>
</div>
  <?PHP endwhile; endif;?>
