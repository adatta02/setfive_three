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
	    
	    #symfonyModal form{
	    	maring:0px;
	    }
	      
	    #mc_embed_signup #mce-success-response{
	    	color: black !important;
	    	font-weight:normal;
	    	position:relative;
	    	line-height:18px;
	    }
	    
	     #close-success{
	     	position:absolute;
	     	top: 70px;
			left: 400px;
	     }
	    
	</style>
	
	<div id="symfonyModal" class="modal hide fade" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3><?php if(is_single()):?>Dig This Post?<?php else: ?>Dig Our Blog?<?php endif;?></h3>
        </div>
            <div class="modal-body">
					<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
					<style type="text/css">
						#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
						/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
						   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
					</style>
					<div id="mc_embed_signup">
					
					<form action="http://setfive.us7.list-manage.com/subscribe/post?u=f08cd7a74a93a2cc262bcf66a&amp;id=743d8d53c4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<p>Sign up to get other cool posts. Don't worry we won't spam you, at most we'll shoot you an update once a month.</p>
					<div class="mc-field-group">
						<input type="email" value="" placeholder="Enter your email" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</form>
				</div>
            </div>
            <div class="modal-footer"></div>
    </div>
	
	
<script type="text/javascript">
	var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='JOINFROM';ftypes[3]='text';
	try {
	    var jqueryLoaded=jQuery;
	    jqueryLoaded=true;
	} catch(err) {
	    var jqueryLoaded=false;
	}
	var head= document.getElementsByTagName('head')[0];
	if (!jqueryLoaded) {
	    var script = document.createElement('script');
	    script.type = 'text/javascript';
	    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
	    head.appendChild(script);
	    if (script.readyState && script.onload!==null){
	        script.onreadystatechange= function () {
	              if (this.readyState == 'complete') mce_preload_check();
	        }    
	    }
	}
	
	var err_style = '';
	try{
	    err_style = mc_custom_error_style;
	} catch(e){
	    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
	}
	var head= document.getElementsByTagName('head')[0];
	var style= document.createElement('style');
	style.type= 'text/css';
	if (style.styleSheet) {
	  style.styleSheet.cssText = err_style;
	} else {
	  style.appendChild(document.createTextNode(err_style));
	}
	head.appendChild(style);
	setTimeout('mce_preload_check();', 250);
	
	var mce_preload_checks = 0;
	function mce_preload_check(){
	    if (mce_preload_checks>40) return;
	    mce_preload_checks++;
	    try {
	        var jqueryLoaded=jQuery;
	    } catch(err) {
	        setTimeout('mce_preload_check();', 250);
	        return;
	    }
	    var script = document.createElement('script');
	    script.type = 'text/javascript';
	    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
	    head.appendChild(script);
	    try {
	        var validatorLoaded=jQuery("#fake-form").validate({});
	    } catch(err) {
	        setTimeout('mce_preload_check();', 250);
	        return;
	    }
	    mce_init_form();
	}
	function mce_init_form(){
	    jQuery(document).ready( function($) {
	      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
	      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
	      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
	      options = { url: 'http://setfive.us7.list-manage.com/subscribe/post-json?u=f08cd7a74a93a2cc262bcf66a&id=743d8d53c4&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
	                    beforeSubmit: function(){
	                        $('#mce_tmp_error_msg').remove();
	                        $('.datefield','#mc_embed_signup').each(
	                            function(){
	                                var txt = 'filled';
	                                var fields = new Array();
	                                var i = 0;
	                                $(':text', this).each(
	                                    function(){
	                                        fields[i] = this;
	                                        i++;
	                                    });
	                                $(':hidden', this).each(
	                                    function(){
	                                        var bday = false;
	                                        if (fields.length == 2){
	                                            bday = true;
	                                            fields[2] = {'value':1970};//trick birthdays into having years
	                                        }
	                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
	                                    		this.value = '';
										    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
	                                    		this.value = '';
										    } else {
										        if (/\[day\]/.test(fields[0].name)){
	    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
										        } else {
	    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
		                                        }
		                                    }
	                                    });
	                            });
	                        $('.phonefield-us','#mc_embed_signup').each(
	                            function(){
	                                var fields = new Array();
	                                var i = 0;
	                                $(':text', this).each(
	                                    function(){
	                                        fields[i] = this;
	                                        i++;
	                                    });
	                                $(':hidden', this).each(
	                                    function(){
	                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
	                                    		this.value = '';
										    } else {
										        this.value = 'filled';
		                                    }
	                                    });
	                            });
	                        return mce_validator.form();
	                    }, 
	                    success: mce_success_cb
	                };
	      $('#mc-embedded-subscribe-form').ajaxForm(options);
	      
	      
	    });
	}
	function mce_success_cb(resp){
		var $ = jQuery;
	    $('#mce-success-response').hide();
	    $('#mce-error-response').hide();
	    if (resp.result=="success"){
		    $('#mc-embedded-subscribe-form p').hide();
		    $('#mc-embedded-subscribe-form .mc-field-group').hide();
		    $('#mc-embedded-subscribe').hide();
		    $.cookie('viewed_box', '1', { expires: 9999, path: '/' });
		    success = true;
	        $('#mce-'+resp.result+'-response').show();
	        $('#mce-'+resp.result+'-response').html(resp.msg);
	        $('#mce-'+resp.result+'-response').append('<button id="close-success" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>');
	        $('#mc-embedded-subscribe-form').each(function(){
	            this.reset();
	    	});
	    } else {
	        var index = -1;
	        var msg;
	        try {
	            var parts = resp.msg.split(' - ',2);
	            if (parts[1]==undefined){
	                msg = resp.msg;
	            } else {
	                i = parseInt(parts[0]);
	                if (i.toString() == parts[0]){
	                    index = parts[0];
	                    msg = parts[1];
	                } else {
	                    index = -1;
	                    msg = resp.msg;
	                }
	            }
	        } catch(e){
	            index = -1;
	            msg = resp.msg;
	        }
	        try{
	            if (index== -1){
	                $('#mce-'+resp.result+'-response').show();
	                $('#mce-'+resp.result+'-response').html(msg);            
	            } else {
	                err_id = 'mce_tmp_error_msg';
	                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
	                
	                var input_id = '#mc_embed_signup';
	                var f = $(input_id);
	                if (ftypes[index]=='address'){
	                    input_id = '#mce-'+fnames[index]+'-addr1';
	                    f = $(input_id).parent().parent().get(0);
	                } else if (ftypes[index]=='date'){
	                    input_id = '#mce-'+fnames[index]+'-month';
	                    f = $(input_id).parent().parent().get(0);
	                } else {
	                    input_id = '#mce-'+fnames[index];
	                    f = $().parent(input_id).get(0);
	                }
	                if (f){
	                    $(f).append(html);
	                    $(input_id).focus();
	                } else {
	                    $('#mce-'+resp.result+'-response').show();
	                    $('#mce-'+resp.result+'-response').html(msg);
	                }
	            }
	        } catch(e){
	            $('#mce-'+resp.result+'-response').show();
	            $('#mce-'+resp.result+'-response').html(msg);
	        }
	    }
	}

</script>
<!--End mc_embed_signup-->
   <script>
   	   var success = false;	
       jQuery(document).ready(function($){

    	   $('#symfonyModal').bind('hide', function () {
				if(!success){
		    		   $.cookie('viewed_box', '1', { expires: 7 });
					}
        	   });

				 if(jQuery.cookie('viewed_box') !== "1"){				 
					$(window).scroll(function(e){
						var s = $(window).scrollTop(),
	        				d = $(document).height(),
	        				c = $(window).height();
	        				scrollPercent = (s / (d-c)) * 100;
						
						if( scrollPercent > 80 ){
							jQuery("#symfonyModal").modal();
						}					
					});					 
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