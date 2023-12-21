<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newsblog
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<!-- <aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar('sidebar-1'); ?>
</aside>#secondary -->


			<div class="col-lg-4 trending mt-lg-0 mt-5">
			<?php $sidebar_posts = get_theme_mod('sidebar-checkbox', true);

     if ($sidebar_posts) { ?>
				<div class="topics">
					<h3 class="section-title-left mb-4"><?php echo esc_html(get_theme_mod('sidebar_text1', '')); ?></h3>
					<a href="<?php echo site_url()?>/category/beautypost1" class="topics-list">
						<div class="list1">
							<span class="fa fa-bath"></span>
							<h4>  <?php echo esc_html(get_theme_mod('sidebar_text2', '')); ?></h4>
						</div>
					</a>
					<a href="<?php echo site_url()?>/category/fashionstyle" class="topics-list mt-3">
						<div class="list1">
							<span class="fa fa-female"></span>
							<h4><?php echo esc_html(get_theme_mod('sidebar_text3', '')); ?></h4>
						</div>
					</a>
					<a href="#food" class="topics-list mt-3">
						<div class="list1">
							<span class="fa fa-cutlery"></span>
							<h4><?php echo esc_html(get_theme_mod('sidebar_text4', '')); ?></h4>
						</div>
					</a>
					<a href="#lifestyle" class="topics-list mt-3">
						<div class="list1">
							<span class="fa fa-pie-chart"></span>
							<h4><?php echo esc_html(get_theme_mod('sidebar_text5', '')); ?></h4>
						</div>
					</a>
				</div>
				<div class="sponsers mt-5">
					<h3 class="section-title-left mb-4"><?php echo esc_html(get_theme_mod('sidebar_text6', '')); ?></h3>
					<a href="#ad-banner"><img src="<?php echo esc_url(get_theme_mod('sidebar_text7')); ?>" alt=""
							class="img-fluid radius-image-full" /></a>
					<a href="#advertise" class="text-center d-block text-uppercase">  <?php echo esc_html(get_theme_mod('sidebar_text8', '')); ?> </a>
				</div>
				<?php }?>
			</div>
		