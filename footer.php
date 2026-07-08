<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fastest_theme
 */

?>

<footer class="border-t border-[#d7a93b]/20 bg-[#0d0c0a] text-[#cfc4ad]">
	<div class="mx-auto grid max-w-7xl gap-6 px-4 py-10 text-center sm:px-6 md:grid-cols-[1fr_auto] md:text-left lg:px-8">
		<div>
			<p class="text-xl font-black uppercase tracking-[0.18em] text-[#f0c75b]">Black Honey</p>
			<p class="mt-3 max-w-xl text-sm leading-6">প্রিমিয়াম Korean Ginseng Black Honey। সারাদেশে ক্যাশ অন ডেলিভারি, প্রোডাক্ট হাতে পেয়ে পেমেন্ট করুন।</p>
			<p class="mt-4 text-xs text-[#8f846d]">&copy; <?php echo esc_html(date('Y')); ?> Black Honey. সর্বস্বত্ব সংরক্ষিত।</p>
		</div>
		<div class="flex flex-col items-center gap-3 md:items-end">
			<a class="rounded-full border border-[#d7a93b]/45 px-5 py-3 text-sm font-black text-[#ffe7a3] transition hover:bg-[#d7a93b] hover:text-[#15110a]" href="tel:01811546841">কল করুন: 01811546841</a>
			<p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#d7a93b]">Cash on delivery</p>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	jQuery(function($) {

		// Make sure WooCommerce checkout JS is loaded
		if (typeof wc_checkout_params === 'undefined') return;

		// Function to switch product via AJAX
		function switchProduct(productId) {
			if (!productId) return;

			$.post(wc_checkout_params.ajax_url, {
				action: 'switch_checkout_product',
				product_id: productId
			}).done(function() {
				// Trigger WooCommerce to refresh the checkout form
				$('body').trigger('update_checkout');
			});
		}

		// Load default product after page load
		$(document).ready(function() {
			let defaultProduct = $('.order-form').data('default');
			if (defaultProduct) {
				switchProduct(defaultProduct);
			}
		});

		// Switch product on radio change
		$(document).on('change', 'input[name="checkout_product"]', function() {
			let selectedProduct = $(this).val();
			switchProduct(selectedProduct);
		});

	});


	// Get the modal
	var modal = document.getElementById("video-modal");

	// Get the thumbnail image and iframe
	var thumbnail = document.getElementById("youtube-thumbnail-container");
	var youtubeVideo = document.getElementById("youtube-video");

	// Get the close button inside the modal
	var closeBtn = document.querySelector(".close-modal");

	if (modal && thumbnail && youtubeVideo && closeBtn) {

	// The video ID from the YouTube link
	if(document.body.classList.contains("woocommerce-order-received")) {
		var youtubeVideoID = "5fHzViaZ64A";
	}else{
		var youtubeVideoID = "m_-nt6PdQe0"; //https://www.youtube.com/shorts/m_-nt6PdQe0
	}
	 // Replace with the actual video ID

	// When the thumbnail is clicked, open the modal and play the video
	thumbnail.onclick = function() {
		modal.style.display = "flex";
		youtubeVideo.src = "https://www.youtube.com/embed/" + youtubeVideoID + "?autoplay=1";
	}

	// When the close button is clicked, close the modal and stop the video
	closeBtn.onclick = function() {
		modal.style.display = "none";
		youtubeVideo.src = ""; // Stop the video by clearing the iframe source
	}

	// Close the modal if the user clicks anywhere outside the video
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
			youtubeVideo.src = ""; // Stop the video by clearing the iframe source
		}
	}
	}
</script>
</body>

</html>
