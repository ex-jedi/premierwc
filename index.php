<?php include('perch/runtime.php'); ?>
<?php perch_layout('main-header'); ?>
<main class="main-content homepage-main-content">
	<?php perch_content("Homepage Images"); ?>
	<section class="homepage-promo-section">
		<?php perch_content("Homepage Promo Text"); ?>
	</section>
		<?php perch_content("Contact Form"); ?>
</main>
<?php perch_layout('main-footer'); ?>
<!-- <?php PerchUtil::output_debug(); ?> -->
