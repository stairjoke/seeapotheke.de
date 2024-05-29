<header>
	<section class="logo">
		<?= $site->logo()->toFile() ?>
	</section>
	<section>
		<h2><?= t('openingHours') ?></h2>
		<?php
			if($hours = $site->hours()->toStructure()) : ?>
				<table>
				<?php foreach($hours as $row) : ?>
					<tr>
						<td><?php
							if($days = $row->days()){
								$days = explode(', ', $days);
								$numberOfDaysInRow = count($days);
								$daysTranslationToNumbers = ['mon' => 0, 'tue' => 1, 'wed' => 2, 'thu' => 3, 'fri' => 4, 'sat' => 5, 'sun' => 6];
								$daysTranslationToNames = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
								
								// Translate day shorthands into numbers for sorting
								foreach($days as $key => $day) {
									$days[$key] = $daysTranslationToNumbers[$day];
								}
								
								// Sort the days
								sort($days);
								
								// Assuming the days array is now in order we go through all days
								// and identify consecutive days to construct a localized string
								// similar to "mon - tue, thu - fri:" or "wed:"
								
								for($i = 0; $i < $numberOfDaysInRow; $i++){
									// If its the first day in this row, print it
									if($i == 0) {
										echo(t($daysTranslationToNames[$days[$i]]));
									
									// If its not the first day in the row
									}else{
										// If the current day is consecutive to the previous day
										if($days[$i] == $days[$i-1] + 1) {
											
											// If there is no next day in the array of days
											// or if the NEXT day is NOT consecutive
											if($i >= $numberOfDaysInRow - 1 or $days[$i] != $days[$i+1] - 1){

												// print ". - " and the current day
												echo(". &ndash; " . t($daysTranslationToNames[$days[$i]]));
											}
										}else{
											// If this day does not follow the last one
											// print ", " and the current day
											echo(", " . t($daysTranslationToNames[$days[$i]]));
										}
									}
									
									// If this is the last iteration of the loop, print ":"
									if($i == $numberOfDaysInRow - 1) {
										echo(":");
									}
								}
							}
						?></td>
						<td><?= $row->open()->toDate('H:i') ?> &ndash; <?= $row->close()->toDate('H:i') ?></td>
					</tr>
				<?php endforeach; ?>
				</table>
			<?php endif;
		?>
	</section>
</header>