<?php
if($emergencyServices = $site->standbyService()->toStructure()) :
	foreach($emergencyServices as $service) : ?>
		<article>
			<h4><?= $service->name() ?></h4>
			<p><?= $service->start()->toDate('d.m, H:i') ?> Uhr &ndash; <?= $service->end()->toDate('d.m, H:i') ?> Uhr</p>
			<p><?= $service->address() ?></p>
			<?php
				if($service->fon()->isNotEmpty()){
					echo '<p>'. t('tel') . ': <a href="tel:' . $service->fon() . '">' . $service->fon() . '</a></p>';
				}
			?>
		</article>
	<?php endforeach;
	if($externalServices = $site->standbyServiceLink()->toStructure()) : ?>
		<nav>
			<ol>
				<?php foreach($externalServices as $externalServiceItem): ?>
				<li>
					<a href="<?= $externalServiceItem->url() ?>">
						<span class="label"><?= $externalServiceItem->text() ?></span>
					</a>
				</li>
				<?php endforeach; ?>
			</ol>
		</nav>
	<?php endif;
endif;
?>