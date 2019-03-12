<?php  
$button_1_label = get_field('button_1_label','option');
$button_1_link = get_field('button_1_link','option');
$button_2_label = get_field('button_2_label','option');
$button_2_link = get_field('button_2_link','option');
?>
<aside id="secondary" class="widget-area default-sidebar" role="complementary">
	<?php if ($button_1_link || $button_2_link) { ?>
	<div class="widget">
		<?php if ($button_1_label && $button_1_link) { ?>
			<div class="sblink"><a href="<?php echo $button_1_link ?>"><span><?php echo $button_1_label ?></span></a></div>
		<?php } ?>

		<?php if ($button_2_label && $button_2_link) { ?>
			<div class="sblink"><a href="<?php echo $button_2_link ?>"><span><?php echo $button_2_label ?></span></a></div>
		<?php } ?>
	</div>
	<?php } ?>
</aside><!-- #secondary -->
