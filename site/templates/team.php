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
					<?php
					$even = false; //used to flag as odd/even nth image
					foreach($teamMembers as $member) :
						$image = $member->photo()->toFile(); ?>
						<img alt="<?= $image->alt() ?>" src="<?= $image->crop(900,900)->url() ?>" class="teamPagePortrait<?= ($even) ? " even" : "" ?>" />
						<h2 id="<?= Str::slug($member->headline()) ?>"><?= $member->headline() ?></h2>
						<?= $member->text()->kt() ?>
					<?php
					$even = ($even) ? false : true;
					endforeach;
				endif;
			?>
		</main>
	</div>
	<?php snippet('footer') ?>
</body>
<?php snippet('foot') ?>