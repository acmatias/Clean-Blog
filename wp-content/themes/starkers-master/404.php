
<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Header Scripts -->
  <?php  wp_head();?>

  <!-- Menu ACF  -->
  <?php $menu = get_field('menu');?>

  <!-- Banner ACF  -->
  <?php $banner = get_field('banner');?>

  <!-- Custom fonts for this template -->
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      
      <!-- If logo is null then display blog name -->
      <?php if(has_custom_logo()){
        the_custom_logo();
      }else { ?> 
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>" rel="home"> <?php bloginfo('name');?></a>
      <?php } ?>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

      <!-- Wordpress menu -->
      <?php wp_nav_menu(
        array(
          'theme_location' => 'top-menu',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          'container' => 'ul',
          'menu_class' => 'navbar-nav ml-auto',
          'add_li_class'  => 'nav-item',
        )
        );?>

      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php the_post_thumbnail_url();?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
         <!-- Banner text alignment -->
          <div class="site-heading">
            <h1>Page not found</h1>
            <!-- <h2 class="subheading"></h2> -->
          </div>
        </div>
      </div>
    </div>
  </header>



<!-- Footer ACF  -->
<?php $footer = get_field('footer');?>

<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://twitter.com/AdriaaanCo">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/adriaaan.co">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/acmatias">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright @ Adrian Blog 2021</p>
        </div>
      </div>
    </div>
  </footer>

 <?php wp_footer();?>

</body>

</html>