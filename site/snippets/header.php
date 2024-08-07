<header id="mainMenu" class="menuClosed">
	<section id="titlebar">
		<a href="<?= $site->url() ?>">
			<?= $site->logo()->toFile() ?>
		</a>
		<?php
			if($item = $site->pages()->listed()->nth(1)) : ?>
		<a href="<?= $item->url() ?>" id="priorityLink"<?php echo ($item->isOpen()) ? 'class="current"' : ''; ?>><?= $item->title() ?></a>
		<?php endif; ?>
		<a role="button" onclick="toggleMenu()" id="navControls">
			<span class="icon right" style="--mask-url: url('/assets/img/burger.svg')">Menü ein-oder ausblenden.</span>
			<span class="label"><?= t('menu') ?></span>
		</a>
	</section>
	<section id="navBody">
		<article class="order-2">
			<h2><?= t('openingHours') ?></h2>
			<?php snippet('hours') ?>
		</article>
		<article class="order-1">
			<h3><?= $site->sidebarSectionNavigation() ?></h3>
			<?php snippet('nav') ?>
		</article>
		<article class="order-4">
			<h3><?= $site->sidebarSectionEmergencyServices() ?></h3>
			<?php snippet('emergencyServices') ?>
		</article>
		<article class="order-5">
			<h3><?= $site->sidebarSectionLegal() ?></h3>
			<?php
				if($items = $site->sidebarSectionLegalPages()->toPages()): ?>
					<nav><ul>
						<?php foreach($items as $item) : ?>
							<li>
								<a href="<?= $item->url() ?>" <?php echo ($item->isOpen()) ? 'class="current"' : ''; ?>>
									<span class="label"><?= $item->title() ?></span>
								</a>
							</li>
						<?php endforeach; ?>
					</ul></nav>
				<?php endif;
			?>
		</article>
	</section>
</header>