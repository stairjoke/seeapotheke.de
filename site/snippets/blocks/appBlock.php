<div class="appBlock">
	<?php if($appIcon = $block->icon()->toFile()): ?>
	<img alt="<?= ($appIcon->alt() != "") ? $appIcon->alt() : "App Ikone für " . $block->name() ?>" src="<?= $appIcon->url() ?>" />
	<?php endif; ?>
	<?php if($name = $block->name()): ?>
		<p><?= $name ?></p>
	<?php endif; ?>
	<div class="links">
		<?php if($appStore = $block->appStore()): ?>
			<a href="<?= $appStore ?>" class="noFlag appStoreBanner"><img alt="Apple AppStore Ikone" src="/assets/img/Apple AppStore.svg"/></a>
		<?php endif; ?>
		<?php if($playStore = $block->playStore()): ?>
			<a href="<?= $playStore ?>" class="noFlag playStoreBanner"><img alt="Apple AppStore Ikone" src="/assets/img/Google SVG.svg"/></a>
		<?php endif; ?>
	</div>
	<?= $block->info()->kt() ?>
</div>