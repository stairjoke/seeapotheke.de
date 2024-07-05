<div class="appBlockWrapper">
	<?php if($blocks = $block->apps()->toBlocks()) {
		foreach($blocks as $block) {
			echo($block);
		}
	}else{
		echo("Derzeit keine Apps angelegt.");
	} ?>
</div>