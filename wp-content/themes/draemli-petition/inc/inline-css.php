<?php
function add_inline_css_to_head() {
	?>
	<style>
			html {
				scroll-behavior: smooth;
			}
			summary::marker {
				color: var(--wp--preset--color--custom-gr-n) !important;
			}
	</style>
	<?php
}
add_action('wp_head', 'add_inline_css_to_head');