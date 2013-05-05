<!-- begin footer -->

<?php wp_footer(); ?>

	

</div>


<div id="bottom">

<p><a href="<?php bloginfo( 'url' ); ?>">home</a> / 
<a href="<?php bloginfo( 'url' ); ?>/">blog</a> / 
<a href="<?php bloginfo( 'url' ); ?>/bio/">bio</a> / 
<a href="<?php bloginfo( 'url' ); ?>/works/">works</a> / 
<a href="<?php bloginfo( 'url' ); ?>/projects/">projects</a> / 
<a href="<?php bloginfo( 'url' ); ?>/pics/">pics</a> / 
<a href="<?php bloginfo( 'url' ); ?>/links/">links</a> / 
<a href="<?php bloginfo( 'url' ); ?>/">home</a></p>
<p>&copy; 2007 boo</p>
</div>


<p class="credit"><!--<?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. --> <cite><?php echo sprintf(__("Powered by <a href='http://wordpress.org/' title='%s'><strong>WordPress</strong></a>"), __("Powered by WordPress, state-of-the-art semantic personal publishing platform.")); ?></cite></p>


</div>
</body>
</html>