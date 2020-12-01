<?php

use Kirby\Cms\File;
use Kirby\Toolkit\F;
use Kirby\Toolkit\Tpl;

Kirby::plugin('medienbaecker/vimeo', [
	'translations' => [
		'de' => [
			'medienbaecker.vimeo.headline'   => 'Wir respektieren deinen Datenschutz!',
			'medienbaecker.vimeo.text'       => 'Klicke zum Aktivieren des Videos auf den Link. Wir möchten darauf hinweisen, dass nach der Aktivierung deine Daten an Vimeo übermittelt werden',
			'medienbaecker.vimeo.buttonText' => 'Video aktivieren',
			'medienbaecker.vimeo.linkText'   => 'oder auf Vimeo anschauen',
			'medienbaecker.vimeo.id'         => 'Vimeo ID:',
		],
		'en' => [
			'medienbaecker.vimeo.headline'   => 'We respect your privacy!',
			'medienbaecker.vimeo.text'       => 'Click the button to activate the video. Then a connection to Vimeo is established.',
			'medienbaecker.vimeo.buttonText' => 'Activate video',
			'medienbaecker.vimeo.linkText'   => 'or watch on Vimeo',
			'medienbaecker.vimeo.id'         => 'Vimeo ID:',
		]
	],
	'tags'         => [
		'vimeo' => [
			'attr' => array(
				'class',
				'width',
			),
			'html' => function ($tag) {

				$id = substr(parse_url($tag->value, PHP_URL_PATH), 1);

				$class = $tag->class;
				$width = ($tag->width) ? $tag->width : 1000;

				$imageUrl = 'https://i.vimeocdn.com/video/' . $id . '_640.png';

				$filename = F::safeName('vimeo_' . $id . '.png');
				$path = $tag->parent()->root() . DS . $filename;

				if (!file_exists($path)) {
					file_put_contents($path, file_get_contents($imageUrl));
				}

				$image = new File([
					'source'   => file_get_contents($path),
					'filename' => $filename,
					'parent'   => $tag->parent()
				]);

				if (isset($image)) {

					$image->resize($width);

					return Tpl::load(__DIR__ . DS . 'snippets' . DS . 'vimeo.php', [
						'class' => $class,
						'id'    => $id,
						'image' => $image,
						'width' => $width
					]);
				}

				return 'Vimeo Video not found';
			}
		]
	]
]);