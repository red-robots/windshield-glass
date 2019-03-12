	</div><!-- #content -->

	<?php  
	global $phone,$toll_free;
	$address = get_field('address','option');
	$email = get_field('email_address','option');
	$google_map = get_field('google_map','option');
	$facebook = get_field('facebook','option');

	?>
	<footer id="colophon" class="site-footer clear" role="contentinfo">
		<div class="wrapper clear">
			<div class="row clear">
				<div class="fotcol first">
					<div class="inner">
						<div class="textwrap">
							<div class="column first js-blocks">
								<div class="info">GET DIRECTIONS</div>
								<?php if ($address) { ?>
								<div class="info"><?php echo $address ?></div>
								<?php } ?>
								<?php if ($phone) { ?>
								<div class="info"><span class="lbl">Phone:</span> <?php echo $phone ?></div>
								<?php } ?>
								<?php if ($toll_free) { ?>
								<div class="info"><span class="lbl">Toll Free:</span> <?php echo $toll_free ?></div>
								<?php } ?>
								<?php if ($email) { ?>
								<div class="info"><a href="mailto:<?php echo antispambot($email,1); ?>"><?php echo $email ?></a></div>
								<?php } ?>
							</div>

							<div class="column map js-blocks">
								<?php if ($google_map) { ?>
								<div class="gmap"><?php echo $google_map ?></div>
								<?php } ?>
							</div>
						</div>
					</div>

				</div>
				<div class="fotcol last">
					<div class="column middle js-blocks">
						<div class="textwrap inline">
							<?php wp_nav_menu( array( 'menu' => 'Footer Menu 1', 'menu_id' => 'footer-menu1','container'=>false ) ); ?>
						</div>
					</div>
					<div class="column js-blocks">
						<div class="textwrap inline">
							<?php wp_nav_menu( array( 'menu' => 'Footer Menu 2', 'menu_id' => 'footer-menu2','container'=>false ) ); ?>
						
							<?php if ($facebook) { ?>
							<div class="social-media clear">
								<div class="title"><span>Follow Us</span></div>
								<span class="link"><a href="<?php echo $facebook ?>" target="_blank"><i class="fab fa-facebook"></i></a></span>
							</div>	
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
