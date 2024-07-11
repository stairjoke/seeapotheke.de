<?php snippet('head') ?>
<body>
	<div class="contain">
		<?php snippet('header') ?>
		<main>
			<?= $page->blocksContent()->toBlocks() ?>
			<?php
				if($teamMembers = $page->teamMembers()->toStructure()) : ?>
					<nav id="teamNav"><ol>
					<?php foreach($teamMembers as $member) : ?>
						<li><a href="#<?= Str::slug($member->headline()) ?>"><?= $member->photo()->toFile() ?></a></li>
					<?php endforeach; ?>
					</ol></nav>
					<?php foreach($teamMembers as $member) : ?>
						<h2 id="<?= Str::slug($member->headline()) ?>"><?= $member->headline() ?></h2>
						<?= $member->photo()->toFile() ?>
						<?= $member->text()->kt() ?>
					<?php endforeach;
				endif;
			?>
		</main>
	</div>
	<?php snippet('footer') ?>
</body>
<?php snippet('foot') ?>