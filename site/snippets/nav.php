<nav>
	<ol>
		<?php
			if($listedPages = $site->pages()->listed()) :
				foreach($listedPages as $item) : ?>
					<li>
						<a href="<?= $item->url() ?>" <?php echo ($item->isOpen()) ? 'class="current"' : ''; ?>>
							<span class="label"><?= $item->title() ?></span>
						</a>
					</li>
				<?php endforeach;
			endif;
		?>
	</ol>
</nav>