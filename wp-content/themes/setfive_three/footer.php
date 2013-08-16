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
	
	<style>
	    #symfonyModal label {
	        font-size: 16px;
	    }
	    
	    #symfonyModal input[type="text"] {
	         font-size: 16px;
	         padding: 8px;
	    }
	</style>
	
	<div id="symfonyModal" class="modal hide fade" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Dig Symfony?</h3>
        </div>
            <div class="modal-body">
                <p>Are you a Symfony 1/2 user? We'd love to chat! Drop us your email and we'll setup a time to talk shop.</p>
                <form class="form-horizontal" id="email-form">
                     <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input type="text" id="inputEmail" placeholder="Enter your email address..." />
                        </div>
                    </div>
                    <div class="control-group centered">
                        <input type="submit" value="Get in touch" class="btn btn-large btn-success" />
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
    </div>
	
    <script>

       jQuery(document).ready(function($){

           $("#symfonyModal form").submit(function(){
               $.post("/wp-content/themes/setfive_three/sendContactEmail.php", 
                       {"contact[email]": $("#inputEmail").val(), "contact[is_human]": "0xDEADBEEF", "contact[message]": "Talk to me about Symfony!"});
               
               jQuery("#symfonyModal").modal("hide");
               return false;
           });
           
           if( window.location.href.indexOf("symfony") > -1 || window.location.hash.indexOf("linkedin") > -1 ){
               window.setTimeout(function(){
                   jQuery("#symfonyModal").modal();
               }, 3000);
           }
       });
    
        var _gaq=[["_setAccount","<?php echo GA_ACCOUNT; ?>"],["_trackPageview"]]; 
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
        g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
        s.parentNode.insertBefore(g,s)}(document,"script"));        
    </script>
	
	<?php if( GA_ACCOUNT == "UA-3761258-7" ): ?>
		<!-- Quantcast Tag -->
		<script type="text/javascript">
		var _qevents = _qevents || [];
		
		(function() {
		var elem = document.createElement('script');
		elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
		elem.async = true;
		elem.type = "text/javascript";
		var scpt = document.getElementsByTagName('script')[0];
		scpt.parentNode.insertBefore(elem, scpt);
		})();
		
		_qevents.push({
		qacct:"p-PL8cDEemdgPFm"
		});
		</script>
		
		<noscript>
		<div style="display:none;">
		<img src="//pixel.quantserve.com/pixel/p-PL8cDEemdgPFm.gif" border="0" height="1" width="1" alt="Quantcast"/>
		</div>
		</noscript>
		<!-- End Quantcast tag -->
	<?php endif; ?>
	
	</body>
</html>
<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/the-bootstrap/footer.php */