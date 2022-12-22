<?php ?>
<?php
if( have_rows('element') ): ?>
<div class="il_lb_carousel_block">
	<div class="lb_cb_nav_wrap block_space_1 il_block">
		<?php get_template_part('components/background'); ?>
		<div class="container">
		<?php get_template_part('components/title'); ?>
			<div class="il_lb_triggers">
				<?php while( have_rows('element') ) : the_row(); ?>
					<?php $content_title = get_sub_field('content_title'); ?>
						<a href="#<?php echo str_replace(' ', '', get_sub_field('content_title')); ?>"><?php echo $content_title; ?></a>

				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<div class="il_lb_carousel_wrap">
	<span class="close"></span>
    <div class="il_lb_carousel carousel-main">
    <?php while( have_rows('element') ) : the_row();

        // Load sub field value.
		$content_text = get_sub_field('content_text');
	    $content_title = get_sub_field('content_title'); ?>
			<div class="il_lb_carousel_inner carousel-cell" id="<?php echo str_replace(' ', '', get_sub_field('content_title')); ?>">
				<div class="il_lb_left">
					<!-- Left empty intentionally to extend the block in the Theme version of it-->
				</div>
				<div class="il_lb_right">
					<h2 class="tg_title_1 title-style-1"><?php echo $content_title; ?></h2>
					<div class="tg_text"><?php echo $content_text; ?></div>
					<?php get_template_part('components/buttons'); ?>
				</div>
			</div>
    <?php endwhile; ?>
	</div>
</div>
</div>
<?php endif;