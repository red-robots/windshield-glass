<?php
get_header(); ?>
<div id="primary" class="full-content-area clear">
	<?php while ( have_posts() ) : the_post(); ?>

		<section class="featured-services clear">
			<div class="wrapper-big clear">
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
		</section>

		<?php  
		$about_us_title = get_field('about_us_title');
		$about_us_description = get_field('about_us_description');
		$about_us_image = get_field('about_us_image');
		$about_image = '';
		if($about_us_image) {
			$about_image = ' style="background-image:url('.$about_us_image['url'].')"';
		}
		?> 

		<section class="about-section section clear">
			<div class="wrapper-big clear">
				<div class="row clear">
					<div class="aboutcol left js-blocks">
						<div class="innertext">
							<?php if ($about_us_title) { ?>
								<h2 class="section-title"><?php echo $about_us_title ?></h2>
							<?php } ?>
							<?php if ($about_us_description) { ?>
								<div class="description"><?php echo $about_us_description ?></div>
							<?php } ?>
						</div>
					</div>
					<div class="aboutcol right js-blocks"<?php echo $about_image; ?>>
						<?php if ($about_us_image) { ?>
							<div class="imagediv clear">
								<img src="<?php echo $about_us_image['url'] ?>" alt="<?php echo $about_us_image['title'] ?>" />
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
</div>
<?php
get_footer();
