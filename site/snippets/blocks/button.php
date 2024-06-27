<a role="button" href="<?= $block->action()->toUrl() ?>">
	<?php if($icon = $block->icon()->toFile()): ?>
		<span class="icon <?= $block->direction() ?>" style="--mask-url: url(<?= $icon->url() ?>)"><?= $icon->alt() ?></span>
	<?php endif; ?>
	<span class="label"><?= $block->text() ?></span>
</a>