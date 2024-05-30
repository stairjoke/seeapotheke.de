<header>
	<section id="logo">
		<?= $site->logo()->toFile() ?>
	</section>
	<section id="navBody">
		<article>
			<h2><?= t('openingHours') ?></h2>
			<?php snippet('hours') ?>
		</article>
		<article>
			<h3><?= $site->sidebarSectionNavigation() ?></h3>
			<?php snippet('nav') ?>
		</article>
		<article>
			<h3><?= $site->sidebarSectionEmergencyServices() ?></h3>
			<?php snippet('emergencyServices') ?>
		</article>
		<article>
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
		</article>
	</section>
</header>