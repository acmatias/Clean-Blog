
<!-- Footer ACF  -->
<?php $footer = get_field('footer');?>

<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="<?php echo $footer['icon_link_1'];?>">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="<?php echo $footer['icon_1'];?> fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo $footer['icon_link_2'];?>">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="<?php echo $footer['icon_2'];?> fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo $footer['icon_link_3'];?>">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="<?php echo $footer['icon_3'];?> fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted"><?php echo $footer['footer_text'];?></p>
        </div>
      </div>
    </div>
  </footer>

 <?php wp_footer();?>

</body>

</html>
