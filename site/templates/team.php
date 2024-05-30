<?php snippet('head') ?>
<body>
	<div class="contain">
		<?php snippet('header') ?>
		<main>
			<?= $page->blocksContent()->toBlocks() ?>
			<?php
				if($teamMembers = $page->teamMembers()->toStructure()) :
					foreach($teamMembers as $member) : ?>
						<h2><?= $member->headline() ?></h2>
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