<?php
get_header();
?>

<div id="content">


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">	

	<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
	</div>
	

</div>


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
