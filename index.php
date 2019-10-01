<?php include('perch/runtime.php'); ?>
<?php perch_layout('main-header'); ?>
<main class="main-content homepage-main-content">
	<?php perch_content("Homepage Images"); ?>
	<section class="homepage-promo-section">
		<?php perch_content("Homepage Text Area"); ?>
	</section>
		<?php perch_content("Contact Form Heading"); ?>
		<?php perch_content("Contact Form"); ?>
		<p class="go-cardless">
		For the convenience of our clients we use GoCardless payments which is trusted by thousands of businesses including...
		</p>
		<img src="/images/go-cardless-banner.png" alt="Go cardless affiliates" class="go-cardless-image">
</main>
<?php perch_layout('main-footer'); ?>
