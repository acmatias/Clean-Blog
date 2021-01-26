<!-- Header  -->
<?php 
/*Template Name: Page */
get_template_part('parts/shared/header');?>

<!-- Main Content ACF  -->
<?php $main = get_field('main_information');?>

<!-- Main Content -->
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p><?php echo $main['article_text'];?></p>
      </div>
    </div>
</div>


<!-- footer  -->
<?php get_template_part('parts/shared/footer'); ?>