<header>
	<section class="logo">
		<?= $site->logo()->toFile() ?>
	</section>
	<section>
		<h2><?= t('openingHours') ?></h2>
		<?php snippet('hours') ?>
	</section>
	<section>
		<h3><?= $site->sidebarSectionNavigation() ?></h3>
		<?php snippet('nav') ?>
	</section>
	<section>
		<h3><?= $site->sidebarSectionEmergencyServices() ?></h3>
		<?php snippet('emergencyServices') ?>
	</section>
	<section>
		<h3><?= $site->sidebarSectionLegal() ?></h3>
		<?php
			if($items = $site->sidebarSectionLegalPages()->toPages()): ?>
				<nav><ul>
					<?php foreach($items as $item) : ?>
						<li>
							<a href="<?= $item->url() ?>" <?php echo ($item->isOpen()) ? 'class="current"' : ''; ?>><?= $item->title() ?></a>
						</li>
					<?php endforeach; ?>
				</ul></nav>
			<?php endif;
		?>
	</section>
</header>