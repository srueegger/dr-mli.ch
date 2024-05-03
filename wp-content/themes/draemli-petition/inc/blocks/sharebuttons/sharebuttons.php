<?php
// Load values and assign defaults.
$title = esc_attr( get_field( 'sharebuttons_title' ) );
$text = esc_attr( get_field( 'sharebuttons_text' ) );

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
  $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'sharebuttons-block';
if ( ! empty( $block['className'] ) ) {
  $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
  $class_name .= ' align' . $block['align'];
}
?>
<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>">
  <ul class="sharebuttons">
    <li class="navigator-share-api" data-url="<?php echo esc_url(home_url()); ?>" data-title="<?php echo $title; ?>" data-text="<?php echo $text; ?>" style="display: none;" role="button"><span><i class="fa-regular fa-share-from-square fa-fw"></i></span></li>
    <li class="classic-share" role="button"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo home_url(); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f fa-fw"></i></a></li>
    <li class="classic-share" role="button"><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo home_url(); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in fa-fw"></i></a></li>
    <li class="classic-share" role="button"><a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( $text ); ?>&url=<?php echo home_url(); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter fa-fw"></i></a></li>
    <li class="classic-share" role="button"><a href="https://threads.net/intent/post?text=<?php echo home_url(); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-threads fa-fw"></i></a></li>
  </ul>
</div>