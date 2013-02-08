<?php
/** footer.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

		tha_footer_before(); ?>								
		<?php tha_footer_after(); ?>

		  </div><!-- #page -->
		</div><!-- .container -->
	   </div>
	   
	<div class="container-fluid homepage-footer">
        <div class="row-fluid">
        	<div class="span5">
        		<div class="no-bs">"No BS. Just Results"</div>
        	</div>
            <div class="span7">
                <div class="footer-text">
                    <a href="http://www.setfive.com">Setfive Consulting</a>
                    |
                    <a href="mailto:contact@setfive.com">contact@setfive.com</a>
                    |
                    <a href="tel:+16178630440">617-863-0440</a>
                </div>
            </div>
        </div>
	</div>
	   
	 </div>
	<?php wp_footer(); ?>
	
    <script>
        var _gaq=[["_setAccount","<?php echo GA_ACCOUNT; ?>"],["_trackPageview"]]; 
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
        g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
        s.parentNode.insertBefore(g,s)}(document,"script"));    
    </script>
	
	</body>
</html>
<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/the-bootstrap/footer.php */