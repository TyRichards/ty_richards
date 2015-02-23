<?php
/*
Template Name: Features
*/
?>

<?php get_header(); ?>

<section class="block bg-dark" style="padding-bottom:50px;">           
  	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1 class="text-center title">Have rehearsals you can be proud of</h1>
		  	</div>
		</div>    
		<div class="row">        
			<div class="col-md-6">
				<img class="img-responsive product product-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/devices-feature1.png" alt="Worship Online">   
			</div>         
			<div class="col-md-6 features">
		  		<div class="row">            
			  		<div class="features-boxes">
						<div class="col-sm-6">
				  			<div class="box">                      
					  			<h2><i class="fa fa-music fa-left"></i> Large Song Catalog</h2>
					  			<p>Worship online has an ever-growing list of song tutorials. Pick from some of the most popular worship songs.</p>
				  			</div>               
						</div>
						<div class="col-sm-6">
				  			<div class="box">                      
								<h2><i class="fa fa-play-circle fa-left"></i> High-Quality Video</h2>
								<p>Quality matters when your team is trying to pick up a new song. Each video lesson is hi-res and well crafted.</p>
				  			</div>    
						</div>
			  		</div>
				</div>
				<div class="row">
			  		<div class="features-boxes">
						<div class="col-sm-6">
				  			<div class="box">                      
								<h2><i class="fa fa-check-square fa-left"></i> Acoustic Guitar</h2>
								<p>Learn the acoustic parts exactly as they are on the recordings, with lessons for beginners or experts</p>
				  			</div>               
						</div>
						<div class="col-sm-6">
				  			<div class="box">                      
								<h2><i class="fa fa-check-square fa-left"></i> Electric Guitar</h2>
								<p>Learn the electric guitar lead and rhythm parts for each song. We'll even go over the guitar effects that are used.</p>
				  			</div>    
						</div>
			  		</div>						
				</div>
		  	</div>		  	    
		</div> <!-- .row -->

		<div class="row">                
			<div class="col-md-6 features">
		  		<div class="row">            
			  		<div class="features-boxes" style="margin-top:50px;">
						<div class="col-sm-6">
				  			<div class="box">                      
								<h2><i class="fa fa-users fa-left"></i> Share With Band</h2>
								<p>Invite your team to give them their own separate login. Sharing songs is effortless for the worship leader.</p>
				  			</div>               
						</div>
						<div class="col-sm-6">
				  			<div class="box">                      
								<h2><i class="fa fa-file fa-left"></i> Charts & Tabs</h2>
								<p>Chord charts and guitar tabs are key to learning the parts and having visual cues during worship. We got 'em.</p>
				  			</div>    
						</div>
			  		</div>
				</div>
				<div class="row">
			  		<div class="features-boxes">
						<div class="col-sm-6">
				  			<div class="box">                      
								<h2><i class="fa fa-youtube-play fa-left"></i> Lesson + Demo</h2>
								<p>Each guitar part has a lesson as well as a demonstration so your team can hear the song in context with everything.</p>
				  			</div>               
						</div>
						<div class="col-sm-6">
				  			<div class="box">                      
								<h2><i class="fa fa-desktop fa-left"></i><i class="fa fa-mobile fa-left"></i> Web & Mobile</h2>
								<p>Worship online makes it simple for your team to view lessons on your desktop or mobile phone.</p>
				  			</div>    
						</div>
			  		</div>						
				</div>
		  	</div>	
			<div class="col-md-6">
				<img class="img-responsive product product-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/devices-feature2.png" alt="Worship Online">     
			</div> 		  		  	    
		</div> <!-- .row -->

		<div class="row">
			<div class="col-md-6 col-md-offset-3 features">		  		
			  	<div class="features-boxes">				
					<div class="box text-center">                      
						<h2><i class="fa fa-thumbs-up fa-left"></i> 25+ Years Experience</h2>
						<p>Not to mention, Worship Online is 100% created by musicians for musicians. We have a combined experience of over 25 years leading worship in the church. We have a long history of leading and playing multiple instruments including acoustic guitar, electric guitar, bass, keys and drums – so we know our stuff&nbsp;&nbsp;&nbsp;  ; )</p>
					</div>
				</div>                                                                                              
			</div> <!-- .col -->
			<div class="col-md-4 col-md-offset-4">
				<a class="btn btn-lg btn-primary btn-block" style="margin-top:0">Start Your Free Trial<i class="fa fa-arrow-circle-right fa-right"></i></a>
		  	</div> <!-- .col -->
		</div> <!-- .row -->
		

		<div class="row">
		  	<section class="main-col col-sm-8 col-sm-offset-2 page-content">                
			  	<div id="main" class="site-main" role="main">
				  	<?php 
				  		while (have_posts()) {
						the_post();

						get_template_part('content', 'page');

						echo "\n\n";
					
						// If comments are open or we have at least one comment, load up the comment template
						if (comments_open() || '0' != get_comments_number()) {
					  		comments_template();
						}

						echo "\n\n";

				  	} //endwhile;
				  	?> 
			  	</div>           
		  	</section>  <!-- .main-col -->
		</div> <!-- .row -->
	</div> <!-- .container -->    		
</section> <!-- .block -->

<section class="block bg-light blip" id="blip">           
	<div class="container-fluid">
		<div class="row">           
			<div class="col-md-offset-1 col-md-4">
				<h3>Have rehearsals you can be proud of</h2>            
				<p>
					Imagine walking into rehearsal and every musician on stage knows their part for every song.  Rehearsal goes by like a breeze and that means more time to relax in prayer.
				</p>               
				<a href="/pricing" class="btn btn-primary">
					Start Your Free Trial<i class="fa fa-arrow-circle-right fa-right"></i>
				</a>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<h3>See how easily you can improve your band with this tool</h2>            
				<p>
					Whether you’re an individual musician, or a worship leader seeking to equip your team, we have the tools to excellently prepare you for worship.  With tutorials, lessons, chord/number charts, and tabs, you can master your setlist with ease!
				</p>
				<a href="#" class="btn btn-primary">
					View Demo<i class="fa fa-play-circle fa-right"></i>
				</a>               
			</div>            
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .blip -->

<?php get_footer(); ?> 
