<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
		</div><!--.body-content-->			
		<footer class="footer">	
			<?php // get_footer('lg'); ?>      		
      		<section class="credit-footer">
      			<div class="container">		        
					<div class="row">
			        	<div class="col-md-4">
			        		<div class="pull-left footer-credits">		        			
			        			<small>
			        				<a href="<?php echo esc_url(home_url('/')); ?>">
			        					© <?php echo date("Y"); ?> <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
			        				</a>
			        				<?php dynamic_sidebar('footer-credits'); ?>
			        			</small>		        			
			        		</div>			
			        	</div>	        	
			        	<div class="col-md-4 text-center">
			        		<ul class="list-inline">
			        			<li><a href="googleplus.com" title="Google Plus"><i class="fa fa-instagram fa-2x"></i></a></li>
			        			<li><a href="twitter.com" title="Twitter"><i class="fa fa-twitter fa-2x"></i></a></li>
			        			<li><a href="facebook" title="Facebook"><i class="fa fa-facebook fa-2x"></i></a></li>
			        			<li><a href="linkedin" title="LinkedIn"><i class="fa fa-youtube fa-2x"></i></a></li>
			        		</ul>
			        	</div>
		        		<div class="col-md-4">
			        		<div class="pull-right footer-credits text-right">
			        			<a href="http://paradoxcreative.com" target="_blank">
			        				<small>Site crafted by Paradox</small>
			        			</a>
			        		</div>
			        	</div>				        	
			        </div>
			    </div>
			</section>
      	</footer>	
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
		<!-- Typekit -->
		<script src="//use.typekit.net/yln6zrk.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<script src="https://platform.vine.co/static/scripts/embed.js"></script>
	</body>
</html>