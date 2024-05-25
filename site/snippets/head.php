<!DOCTYPE html>
<html lang="de">
	<head>
		<title><?= $site->title() ?> &gt; <?= $page->title() ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?= css([
			'assets/css/global.css',
			'@auto' //https://getkirby.com/docs/reference/templates/helpers/css
		]) ?>
	</head>
