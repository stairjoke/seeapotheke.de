<?php snippet('head') ?>
<body>
	<div class="contain">
		<?php snippet('header') ?>
		<main>
			<?= $page->blocksContent()->toBlocks() ?>
		</main>
	</div>
	<?php snippet('footer') ?>
</body>
<?php snippet('foot') ?>