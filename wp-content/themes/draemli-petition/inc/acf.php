<?php
/* Custom Gutenberg Blocks mit ACF definieren */
function register_acf_blocks() {
  register_block_type( __DIR__ . '/blocks/sharebuttons' );
}
add_action( 'init', 'register_acf_blocks' );