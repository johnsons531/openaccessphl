<?php
global $eo_options;
	$blog_jumbo = of_get_option('blog_jumbo');
	if ($blog_jumbo == "1"){
		$wtd = $eo_options['jumbo_whtd'];	
	?>
	<div class="clearfix row">
		<div class="jumbotron">
         <?php if($wtd == "a_page") {
			 $pid = intval($eo_options["jumbo_pid"]);
			 $thep = get_post( $pid ); ?> 
			<p><?php  echo $thep->post_content; ?></p>
       <?php }
	   else { ?>
			<h1><?php bloginfo('title'); ?></h1>
			<p><?php bloginfo('description'); ?></p>
       <?php } ?>

		</div>
	</div>
<?php }	?>