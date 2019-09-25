<?php include('perch/runtime.php'); ?>
<?php perch_layout('main-header'); ?>
<main class="main-content homepage-main-content">
	<?php perch_content("Homepage Images"); ?>
	<section class="homepage-promo-section">
		<?php perch_content("Homepage Promo Text"); ?>
	</section>
	<section class="contact-form-section">
		<?php perch_content("Contact Form"); ?>
	</section>
</main>
<?php perch_layout('main-footer'); ?>
<!-- <?php PerchUtil::output_debug(); ?> -->
