<?php $columns = get_sub_field('columns'); ?>
<?php $background = get_sub_field('background'); ?>
<?php $class = count_to_bootstrap_class( sizeof($columns)   ); ?>


<?php $style = ($background == 'green') ? 'green_bg' : '' ; ?>
<div class="<?php echo $style; ?>">
<div class="container">
	<div class="row">
	<?php while ( have_rows('columns') ) : the_row(); ?>
		<div class="<?php echo $class; ?> ">
			<?php echo get_sub_field('content'); ?>
		</div>
	<?php endwhile; ?>
</div> <!-- END OF row -->
</div><!--  END OF CONTAINER -->
</div>
