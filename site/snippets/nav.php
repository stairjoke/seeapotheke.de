<nav>
	<ol>
		<?php
			if($listedPages = $site->pages()->listed()) :
				foreach($listedPages as $item) : ?>
					<li>
						<a href="<?= $item->url() ?>" <?php echo ($item->isOpen()) ? 'class="current"' : ''; ?>><?= $item->title() ?></a>
					</li>
				<?php endforeach;
			endif;
		?>
	</ol>
</nav>