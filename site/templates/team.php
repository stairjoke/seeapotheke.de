<?php snippet('head') ?>
<body>
	<div class="contain">
		<?php snippet('header') ?>
		<main>
			<?= $page->blocksContent()->toBlocks() ?>
			<?php
				if($teamMembers = $page->teamMembers()->toStructure()) :
				foreach($teamMembers as $member) : ?>
					<h3><?= $member->headline() ?></h3>
					<?= $member->photo()->toFile() ?>
					<?= $member->text()->kb() ?>
				<?php endforeach; endif;
			?>
		</main>
	</div>
	<?php snippet('footer') ?>
</body>
<?php snippet('foot') ?>