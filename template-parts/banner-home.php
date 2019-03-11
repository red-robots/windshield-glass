<?php if ( is_front_page() || is_home() ) { ?>
<?php  
	global $phone,$toll_free;
	$main_title = get_field('main_title');
	$description = get_field('description');
	$button_1_label = get_field('button_1_label','option');
	$button_1_link = get_field('button_1_link','option');
	$button_2_label = get_field('button_2_label','option');
	$button_2_link = get_field('button_2_link','option');
?>
<div class="banner-wrap clear">
	<div class="wrapper clear text-center">
		<div class="medwrap clear">
			<?php if ($main_title) { ?>
			<h2 class="title"><?php echo $main_title ?></h2>
			<?php } ?>
			<?php if ($description) { ?>
			<div class="description clear"><?php echo $description ?></div>
			<?php } ?>

			<?php if ($button_1_link || $button_2_link) { ?>
			<div class="cta-buttons clear">
				<?php if ($button_1_label && $button_1_link) { ?>
					<a class="button1" href="<?php echo $button_1_link ?>"><span><?php echo $button_1_label ?></span></a>
				<?php } ?>

				<?php if ($button_2_label && $button_2_link) { ?>
					<a class="button2" href="<?php echo $button_2_link ?>"><span><?php echo $button_2_label ?></span></a>
				<?php } ?>
			</div>
			<?php } ?>

			<?php if ($phone || $toll_free) { ?>
			<div class="phone-toll clear">
				<div class="layer3">
					<div class="layer2">
						<div class="layer1">
							<?php if ($phone) { ?>
			        		<span class="phone info"><i>Phone:</i> 
			        			<span class="desktop"><?php echo $phone ?></span>
			        			<a class="mobile" href="tel:<?php echo format_phone_number($phone) ?>"><?php echo $phone ?></a>
			        		</span>	
			        		<?php } ?>

			        		<?php if ($toll_free) { ?>
			        		<span class="toll info"><i>Toll Free:</i> 
			        			<span class="desktop"><?php echo $toll_free ?></span>
			        			<a class="mobile" href="tel:<?php echo format_phone_number($toll_free) ?>"><?php echo $toll_free ?></a>
			        		</span>	
			        		<?php } ?>
		        		</div>
        			</div>
        		</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php } ?>