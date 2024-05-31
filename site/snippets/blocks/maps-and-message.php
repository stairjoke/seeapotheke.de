<section class="block_map-and-message">
	<?php if($block->blocksContent()->isNotEmpty()): ?>
		<article>
			<?= $block->blocksContent()->toBlocks() ?>
		</article>
	<?php endif; ?>
	<article style="background-image: url(<?= $block->image()->toFile()->url() ?>)" class="block_map-and-message_map">
		<?php if($links = $block->links()->toStructure()) : ?>
			<ul>
				<?php foreach($links as $link) : ?>
					<li>
						<a href="<?= $link->url() ?>"><?= $link->text() ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</article>
</section>