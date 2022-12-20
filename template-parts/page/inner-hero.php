<?php

$svg_color = get_field('icon_and_line_colors');
$title = get_field('inner_hero_title');
$subtitle = get_field('inner_hero_subtitle');
$smaller_title = get_field('inner_hero_smaller_title');
$content = get_field('inner_hero_content');

?>
<div class="il_inner_hero">
<div class="il_inner_hero_bg">
<?php

if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}
else {
	$bg = get_field('default_hero', 'option');
	$size = 'full';
	if( $bg ) {
		echo wp_get_attachment_image( $bg, $size );
	}
} ?>
</div>

	<div class="il_inner_hero_inner">
		<div class="il_inner_hero_inner_top">
			<div class="il_block_bg">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1349 446" class="il_inner_hero_bg_svg">
				<defs>
					<clipPath id="clip-path">
					<rect id="Rectangle_910" data-name="Rectangle 910" width="1349" height="446" transform="translate(-22883 326)" fill="#fff" stroke="#707070" stroke-width="1"/>
					</clipPath>
					<linearGradient id="linear-gradient" x1="0.892" y1="0.141" x2="0.037" y2="0.781" gradientUnits="objectBoundingBox">
					<stop offset="0" stop-color="#06286f"/>
					<stop offset="1" stop-color="#021031"/>
					</linearGradient>
				</defs>
				<g id="Mask_Group_261" data-name="Mask Group 261" transform="translate(22883 -326)" clip-path="url(#clip-path)">
					<g id="Group_2117" data-name="Group 2117">
					<path id="Path_1390" data-name="Path 1390" d="M-20618,267V717l143.924-143.5h897.746l306.342-305.431Z" transform="translate(-2265 53)" fill="url(#linear-gradient)"/>
					<path id="Path_1391" data-name="Path 1391" d="M-20640.828,737.834l166.74-164.316h900.125l304.969-304.056" transform="translate(-2265.172 53)" fill="none" stroke="<?php echo esc_html($svg_color); ?>" stroke-width="5"/>
					</g>
				</g>
				</svg>
			</div>

			<div class="container">
				<h1 class="il_inner_hero_title"><span><?php if($title):
					echo $title;

				else:
					the_title();

				endif; ?></span>
				<span><svg xmlns="http://www.w3.org/2000/svg" width="47.738" height="41.343" viewBox="0 0 47.738 41.343" class="il_inner_hero_icon_svg"><path id="Path_637" data-name="Path 637" d="M11.935,0,0,20.672H23.785L35.72,41.343H35.8L47.739,20.672,35.8,0Z" transform="translate(0 0)" fill="<?php echo esc_html($svg_color); ?>"/></svg></span>
				</h1>
				<div class="il_inner_hero_text">
					<?php echo $subtitle; ?>
				</div>
			</div>
		</div>
		<?php if($smaller_title): ?>
		<div class="il_inner_hero_inner_bottom container">			
			<?php if( have_rows('content') ): ?>
			<?php while( have_rows('content') ): the_row();
				$title = get_sub_field('title');
				$text = get_sub_field('text');
				$tag = get_sub_field('heading_tag');
				$title_color = get_sub_field('title_color');
				?>

				<div class="il_inner_hero_inner_bottom_content">
					<h2 class="il_inner_hero_inner_bottom_title tg_title_1"><?php echo $title; ?></h2>
					<p class="il_inner_hero_inner_bottom_text"><?php echo $text ?></p>
					<?php get_template_part('components/buttons'); ?>
				</div>

			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>


</div>
