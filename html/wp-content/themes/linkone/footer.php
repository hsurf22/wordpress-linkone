<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
      <!-- Footer -->
      <footer class="footer">
        <div class="container">
          <div class="footer__widgets">
            <div class="row">

              <div class="col-lg-3 col-md-6">
                <div class="widget widget-about-us">
                  <!-- Logo -->
                  <a href="index.html" class="logo-container flex-child">
                    <img class="logo" src="img/logo.png" srcset="img/logo.png 1x, img/logo@2x.png 2x" alt="logo">
                  </a>
                  <p class="mt-24 mb-32">Tools to Effectively Build Your Brand and Grow Your Business.</p>
                  <div class="socials">
                    <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                    <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                    <a href="#" class="social social-google-plus" aria-label="google plus" title="google plus" target="_blank"><i class="ui-google"></i></a>
                  </div>
                </div>
              </div> <!-- end about us -->


              <div class="col-lg-2 offset-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                  <h5 class="widget-title">Resources</h5>
                  <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-2 col-md-6">
                <div class="widget widget_nav_menu">
                  <h5 class="widget-title">Solutions</h5>
                  <ul>                  
                    <li><a href="#">Marketing Strategy</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">SMM</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Google AdWords</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-2 col-md-6">
                <div class="widget widget-address">
                  <h5 class="widget-title">Company</h5>
                  <ul>
                    <li><address>8910 University Center Lane Suite 620 San Diego, CA 92102</address></li>
                    <li>
                      <span>Phone: </span>
                      <a href="tel:+1-800-1554-456-123">+ 1 (800) 155 4561</a>
                    </li>
                    <li>
                      <span>Email: </span>
                      <a href="mailto:hi@margin.com">hi@margin.com</a>
                    </li>
                  </ul>
                </div>
              </div>           

            </div>
          </div>    
        </div> <!-- end container -->

        <div class="footer__bottom top-divider">
          <div class="container text-center">
            <span class="copyright">
              &copy; 2018 Margin, Made by <a href="https://deothemes.com">DeoThemes</a>
            </span>
          </div>
        </div> <!-- end footer bottom -->
      </footer> <!-- end footer -->

      <div id="back-to-top">
        <a href="#top"><i class="ui-arrow-up"></i></a>
      </div>

    </div> <!-- end content wrapper -->
  </main> <!-- end main wrapper -->
  
</div><!-- #page -->

<?php wp_footer(); ?>


<!-- jQuery Scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>


<script>
// Main menu hot fix
(function ($) {

const dropdownTrigger = document.createElement("i");
dropdownTrigger.className = "ui-arrow-down nav__dropdown-trigger";

const toggleBtn = document.getElementsByClassName("sub-menu-toggle");

Array.prototype.forEach.call(toggleBtn, (el) => {
  // Do stuff here
  el.replaceWith(dropdownTrigger);
});

/* Mobile Navigation
-------------------------------------------------------*/
$(".nav__dropdown-trigger").on("click", function () {
  console.log("Clicked");
  if ($(this).hasClass("active")) {
    $(this).removeClass("active");
  } else {
    $(this).addClass("active");
  }
});

if ($("html").hasClass("mobile")) {
  $("body").on("click", function () {
    $(".sub-menu").addClass("hide-dropdown");
  });

  $(".menu-item-has-children").on("click", "> a", function (e) {
    e.preventDefault();
  });

  $(".menu-item-has-children").on("click", function (e) {
    e.stopPropagation();
    $(".sub-menu").removeClass("hide-dropdown");
  });
}

})(jQuery);
</script>

<!-- Cookies -->
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script src="js/cookies.js"></script>


</body>
</html>
