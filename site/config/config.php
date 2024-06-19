<?php
return [
	'languages' => true,
	'blocks' => [
		'fieldsets' => [
			'default' => [
				'label' => 'Standard Elemente',
				'type' => 'group',
				'fieldsets' => [
					'heading', 'text', 'image', 'quote', 'list'
				]
			],
			'extended' => [
				'label' => 'Weitere Elemente',
				'type' => 'group',
				'fieldsets' => [
					'video', 'line', 'table', 'maps-and-message', 'floating', 'button'
				]
			],
			'advanced' => [
				'label' => 'Für Fortgeschrittene',
				'type' => 'group',
				'open' => false,
				'fieldsets' => [
					'markdown', 'code'
				]
			]
		]
	]
];
?>