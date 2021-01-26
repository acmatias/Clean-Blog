<!-- Header  -->
<?php get_template_part('parts/shared/header'); ?>

<!-- Main Content ACF  -->
<?php $main = get_field('main_information');?>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="post-preview">
        <a href="<?php echo $main['title_link_1'];?>">
          <h2 class="post-title">
            <?php echo $main['title_1'];?>
          </h2>
          <h3 class="post-subtitle">
          <?php echo $main['subtitle_1'];?>
          </h3>
        </a>
        <p class="post-meta">Posted by 
          <a href="<?php echo $main['author_link_1'];?> ">
          <?php echo $main['author_1'];?>
          </a>
          on <?php echo $main['article_date_1'];?></p>
      </div>
      <hr>
      <div class="post-preview">
        <a href="<?php echo $main['title_link_2'];?>">
          <h2 class="post-title">
          <?php echo $main['title_2'];?>
          </h2>
          <h3 class="post-subtitle">
          <?php echo $main['subtitle_2'];?>
          </h3>
        </a>
        <p class="post-meta">Posted by 
          <a href="<?php echo $main['author_link_2'];?>">
          <?php echo $main['author_2'];?>
          </a>
          on <?php echo $main['article_date_2'];?>
        </p>
      </div>
      <hr>
      <div class="post-preview">
        <a href="post.html">
          <h2 class="<?php echo $main['title_link_3'];?>">
          <?php echo $main['title_3'];?>
          </h2>
          <h3 class="post-subtitle">
          <?php echo $main['subtitle_3'];?>
          </h3>
        </a>
        <p class="post-meta">Posted by 
          <a href="<?php echo $main['author_link_3'];?>">
          <?php echo $main['author_3'];?>
          </a>
          on <?php echo $main['article_date_3'];?>
          </p>
      </div>
      <hr>
      <div class="post-preview">
        <a href="<?php echo $main['title_link_4'];?>">
          <h2 class="post-title">
          <?php echo $main['title_4'];?>
          </h2>
          <h3 class="post-subtitle">
          <?php echo $main['subtitle_4'];?>
          </h3>
        </a>
        <p class="post-meta">Posted by 
          <a href="<?php echo $main['author_link_4'];?>">
          <?php echo $main['author_4'];?>
          </a>
          on <?php echo $main['article_date_4'];?>
          </p>
      </div>
      <hr>
      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="<?php echo $main['button_link'];?>"><?php echo $main['button_text'];?>&rarr;</a>
      </div>
    </div>
  </div>
</div>

<hr>

<!-- Footer  -->
<?php get_template_part('parts/shared/footer'); ?>
  