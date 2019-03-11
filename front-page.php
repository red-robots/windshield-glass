<?php
get_header(); ?>
<div id="primary" class="full-content-area clear">
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="featured-services clear">
			<div class="wrapper clear">
				<div class="row clear">
					<?php  for($i=1; $i<=4; $i++) { 
						$box_title = get_field('box_'.$i.'_title');
						$box_image = get_field('box_'.$i.'_image');
						$box_link = get_field('box_'.$i.'_link');
						$box_description = get_field('box_'.$i.'_description');
						?>
						<?php if ( $box_title && $box_description ) { ?>
							<div class="box text-center">
								<div class="inside clear">

									<div class="inner-wrap clear">
										<?php if ($box_image) { ?>
											<div class="imagediv js-blocks">
												<img src="<?php echo $box_image['url'] ?>" alt="<?php echo $box_image['title'] ?>" />
											</div>
										<?php } ?>
										<div class="textwrap clear">
											<?php if ($box_title) { ?>
												<h3 class="title"><?php echo $box_title ?></h3>
											<?php } ?>
											<?php if ($box_description) { ?>
												<div class="text"><?php echo $box_description ?></div>
											<?php } ?>
											<?php if ($box_link) { ?>
												<div class="button"><a href="<?php echo $box_link ?>">Find out more</a></div>
											<?php } ?>
										</div>
										<span class="bottomline"></span>
									</div>

								</div>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>

	<?php endwhile; ?>
</div>
<?php
get_footer();
