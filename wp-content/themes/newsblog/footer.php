<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newsblog
 */
wp_footer();
?>

<section class="app-footer">
  <footer class="footer-28 py-5">
    <div class="footer-bg-layer">
      <div class="container py-lg-3">
        <div class="row footer-top-28">
          <div class="col-lg-4 footer-list-28 copy-right mb-lg-0 mb-sm-5 mt-sm-0 mt-4">
            <a class="navbar-brand mb-3" href="http://localhost/newsblog/">
              <span class="fa fa-newspaper-o"></span>
              <?php echo esc_html(get_theme_mod('logo', '')); ?>
            </a>
            <p class="copy-footer-28">
              <?php echo (get_theme_mod('copyright', '')); ?>
            </p>
            <h5 class="mt-2">Design by <a href="<?php echo esc_html(get_theme_mod('text_link', '')); ?>">W3Layouts</a></h5>
          </div>
          <div class="col-lg-8 row">
            <div class="col-sm-4 col-6 footer-list-28">
              <h6 class="footer-title-28">
                <?php echo esc_html(get_theme_mod('main_text', '')); ?>
              </h6>
              <ul>
                <li><a href="#categories">
                    <?php echo esc_html(get_theme_mod('text1', '')); ?>
                  </a></li>
                <li><a href="#advertise">
                    <?php echo esc_html(get_theme_mod('text2', '')); ?>
                  </a></li>
                <li><a href="#authors">
                    <?php echo esc_html(get_theme_mod('text3', '')); ?>
                  </a></li>
                <li><a href="contact.html">
                    <?php echo esc_html(get_theme_mod('text4', '')); ?>
                  </a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-6 footer-list-28">
              <h6 class="footer-title-28">
                <?php echo esc_html(get_theme_mod('categoriesmain_text', '')); ?>
              </h6>
              <ul>
                <li><a href="#">
                    <?php echo esc_html(get_theme_mod('categoriestext1', '')); ?>
                  </a></li>
                <li><a href="#">
                    <?php echo esc_html(get_theme_mod('categoriestext2', '')); ?>
                  </a></li>
                <li><a href="#food">
                    <?php echo esc_html(get_theme_mod('categoriestext3', '')); ?>
                  </a></li>
                <li><a href="#lifestyle">
                    <?php echo esc_html(get_theme_mod('categoriestext4', '')); ?>
                  </a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-6 footer-list-28 mt-sm-0 mt-4">
              <h6 class="footer-title-28">
                <?php echo esc_html(get_theme_mod('socialiconmain_text', '')); ?>
              </h6>
              <ul class="social-icons">
                <?php
                $facebook_link = get_theme_mod('facebook_link');
                if ($facebook_link) {
                  echo '<li class="facebook">
                            <a href="' . esc_url($facebook_link) . '"><span class="fa fa-facebook"></span>Facebook</a></li>';
                }
                $twitter_link = get_theme_mod('twitter_link');
                if ($twitter_link) {
                  echo '<li class="twitter">
      <a href="' . esc_url($twitter_link) . '"><span class="fa fa-twitter"></span>Twitter</a></li>';
                }
                $linkedin_link = get_theme_mod('linkedin_link');
                if ($linkedin_link) {
                  echo '<li class="linkedin">
      <a href="' . esc_url($linkedin_link) . '"><span class="fa fa-linkedin"></span>LinkedIn</a></li>';
                }
                $dribbble_link = get_theme_mod('dribbble_link');

                if ($dribbble_link) {
                    echo '<li class="dribbble">';
                    echo '<a href="' . esc_url($dribbble_link) . '"><span class="fa fa-dribbble"></span>Dribbble</a>';
                
                    echo '</li>';
                }
                    ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
<!-- //footer-28 block -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->



<!-- script for testimonials -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for testimonials -->

<!-- bootstrap -->


</body>

</html>