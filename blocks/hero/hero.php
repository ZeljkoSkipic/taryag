<?php
$subtitle = get_field('subtitle');
$content = get_field('content');
$height = get_field_object('height');
$margin = get_field_object('margin');
$padding = get_field_object('padding');

$class = 'il_block il_hero';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if ( ! empty( $height ) ) {
    $class .=  ' ' . $height['value'];
}

if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}
?>

<div class="<?php echo $class; ?>">
	<div class="il_block_bg">
		<?php
			$background = get_field('background');
			$size = 'full';
			if( $background ) {
				echo wp_get_attachment_image( $background, $size );
			} ?>
		</div>
	<div class="container il_hero_inner">
	<?php get_template_part('components/title'); ?>
	<h2 class="il_hero_subtitle"><?php echo $subtitle ?></h2>
	<?php get_template_part('components/buttons'); ?>
	</div>
	<div class="si_container">
		<div class="si_container_inner">
			<div class="si_triggers">
			<div class="il_block_bg">
			<?php
				$trigger_background = get_field('trigger_background');
				$size = 'full';
				if( $trigger_background ) {
					echo wp_get_attachment_image( $trigger_background, $size );
				} ?>
			</div>
			<div class="container">
			<?php
				// Check rows existexists.
				if( have_rows('slide_in_trigger') ):
					$item=1;
					// Loop through rows.
					while( have_rows('slide_in_trigger') ) : the_row();

						// Load sub field value.
						$trigger_text = get_sub_field('trigger_text'); ?>
						<div class="trigger-wrap">
							<a class="si_trigger si-<?php echo $item; ?>"><span class="si_tt"><?php echo $trigger_text; ?></span><span class="si_ti"><svg xmlns="http://www.w3.org/2000/svg" width="24.612" height="25.899" viewBox="0 0 24.612 25.899"><path d="M5.061,0,0,8.365H10.087l5.062,8.365h.036l5.061-8.365L15.185,0Z" transform="translate(14.489 0) rotate(60)" fill="#f21971"/></svg></span></a>
							<a class="close-trigger"></a>
						</div>
						<?php $item++;?>
						<?php endwhile;
				endif; ?>
				</div>
			</div>

				<?php
					// Check rows existexists.
					if( have_rows('hero_slide_in') ):
						$item2=1;
						// Loop through rows. ?>

						<?php while( have_rows('hero_slide_in') ) : the_row(); ?>
						<div class="tg_slidein block_space_1 si-<?php echo $item2; ?>">
						<?php $si_title = get_sub_field('si_title');
						$si_content = get_sub_field('si_content');
						$si_bg = get_sub_field('si_bg');
						$size = 'full';
						$trigger_text = get_sub_field('trigger_text'); ?>
						<div class="si_bg il_block_bg">
						<?php if( $si_bg ) {
							echo wp_get_attachment_image( $si_bg, $size );
						} ?>
						</div>
						<div class="si_inner container">
							<span class="si_close">x</span>
							<div class="si_content">
								<h2 class="si_title"><?php echo $si_title; ?><svg xmlns="http://www.w3.org/2000/svg" width="24.612" height="25.899" viewBox="0 0 24.612 25.899"><path d="M5.061,0,0,8.365H10.087l5.062,8.365h.036l5.061-8.365L15.185,0Z" transform="translate(14.489 0) rotate(60)" fill="#f21971"/></svg></h2>
								<div class="si_text"><?php echo $si_content; ?></div>
								<?php get_template_part('components/buttons'); ?>
							</div>
						</div>
						<?php $item2++; ?>
					</div>
					<?php endwhile; ?>

				<?php endif; ?>

		</div>
	</div>
</div>
