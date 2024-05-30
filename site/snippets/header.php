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
	</section>
	<section>
		<h3><?= $site->sidebarSectionLegal() ?></h3>
	</section>
</header>