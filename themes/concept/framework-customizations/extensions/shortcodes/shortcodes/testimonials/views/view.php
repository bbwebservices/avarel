<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); } ?>

<div class="col-md-8 col-md-offset-2">
	<div id="owl-testimonials" class="owl-carousel">
	<?php foreach ($atts['testimonials'] as $testimonial): ?>
		<div class="item">
			<blockquote>
				<p><?php echo esc_html($testimonial['content']); ?></p>
				<footer>
					<?php echo esc_html($testimonial['author_name']); ?>
					<?php if ($testimonial['site_url']): ?>
					<a href="<?php echo esc_url($testimonial['site_url']); ?>"><?php echo esc_html($testimonial['site_name']); ?></a>
					<?php else: ?>
					<?php echo esc_html($testimonial['site_name']); ?>
					<?php endif ?>
				</footer>
			</blockquote>
		</div>
	<?php endforeach ?>
	</div>
</div>
