<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
		<footer class="footer" role="contentinfo">
      <div id="inner-footer">
          <div id="creator">
            <p>Website by<br><a href="http://www.sarahpitts.com/">Sarah Pitts</a></p>
          </div>
			   <p>Stem To Stern Sailing &copy;<?php echo date("Y"); echo " "; ?></p>
         <nav id="nav" role="navigation">
            <?php wp_nav_menu( array('menu' => 'primary') ); ?> <a href="wp-login.php">Login</a>
          </nav>
          
      </div>
		</footer>

	</div>

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->
	
</body>

</html>
