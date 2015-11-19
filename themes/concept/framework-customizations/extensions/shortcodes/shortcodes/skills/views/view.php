<?php foreach ($atts['skills'] as $skill): ?>
<div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr($skill['percentage']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (int) $skill['percentage']; ?>%;">
    </div>
</div>
<h6><?php echo esc_html($skill['name']); ?></h6>
<?php endforeach ?>
