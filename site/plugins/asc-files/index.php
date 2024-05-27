<?php
Kirby::plugin('wenzels-design/asc-files', [
  'fileTypes' => [
	'asc' => [
	  'mime' => 'application/pgp-signature',
	  'type' => 'documents'
	]
  ]
]);
?>
