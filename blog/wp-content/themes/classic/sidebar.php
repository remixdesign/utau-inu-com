
<!-- begin sidebar -->

<div id="left">
	
	<!-- <img src="<?php bloginfo( 'url' ); ?>/images/side_intro.gif" width="237" height="317" alt="intro text" />  -->
	
	<ul class="sidebar">
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<?php wp_list_categories('title_li=' . __('<h4 class="blogh4">Categories</h4>')); ?>
	 <li id="search">
	   <label for="s"><?php _e('<h4 class="blogh4">Search</h4>'); ?></label>
	   <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
		<div>
			<input type="text" name="s" id="s" size="15" /><br />
			<input type="submit" class="submit" value="<?php _e('Search'); ?>" />
		</div>
		</form>
	 </li>
	 <li id="archives"><?php _e('<h4 class="blogh4">Archives</h4>'); ?>
		<ul>
		 <?php wp_get_archives('type=monthly'); ?>
		</ul>
	 </li>
	 <li id="meta"><?php _e('<h4 class="blogh4">Meta</h4>'); ?>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
			<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
			<?php wp_meta(); ?>
		</ul>
	 </li>
	<?php endif; ?>
	
	</ul>
	
</div>

<!-- end sidebar -->
