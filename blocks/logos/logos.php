<?php
if ( have_rows('images') ) :

$cols = get_field_object('columns');
$tab_cols = get_field_object('tab_columns');
$mob_cols = get_field_object('mob_columns');

$margin = get_field_object('margin');
$padding = get_field_object('padding');

$inline_title = get_field('inline_intro');


$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'il_block il_logos';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding ) ) {
    $class .=  ' ' . $padding['value'];
}

if ( ! empty( $inline_title ) ) {
    $class .=  ' ' . 'inline_title';
}


 ?>
<div <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="container">
		<?php get_template_part('components/intro'); ?>
		<div class="il_logos_inner">
			<?php while( have_rows('images') ) : the_row();
				$image = get_sub_field('image');

				$url = $image['url'];
				$title = $image['title'];
				$alt = $image['alt'];
				$caption = $image['caption']; ?>
				<div class="column">
					<figure class="il_gallery-item">
						<img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
					</figure>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
