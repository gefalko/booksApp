<?php
header('Access-Control-Allow-Origin: *');
//sleep(2);


$aArray = [
	[
		'id' => 0,
		'title' => 'Metromanas. Viena diena senovės Paryžiuje',
		'rating' => 2,
		'year' => 1999,
		'price' => 22.99,
		'currency' => 'EUR',
		'availability' => true,
		'img' => 'https://www.knygos.lt/thumbor/p6vkCHMMrx7MwmqF9nEB69G5OXI=/fit-in/170x170/filters:cwatermark(static/wm.png,500,75,30)/images/books/24018/1462883698_metronomas3d1.png'
	],
	[
		'id' => 1,
		'title' => 'Lietuva šilko kely nuo Graikijos iki Olimpinio Pekino',
		'rating' => 9,
		'year' => 2010,
		'price' => 13.99,
		'currency' => 'EUR',
		'availability' => true,
		'img' => 'https://www.knygos.lt/thumbor/8yJhVzRawKO9J3KizDgIlOb7oEw=/fit-in/170x170/filters:cwatermark(static/wm.png,500,75,30)/images/books/1927/1462873076_kabasinskasvirselis-2.jpg'
	],
	[
		'id' => 2,
		'title' => 'Toskana. Florencija',
		'rating' => 6,
		'year' => 2014,
		'price' => 17.99,
		'currency' => 'EUR',
		'availability' => false,
		'img' => 'https://www.knygos.lt/lt/knygos/toskana-florencija-magiska-zeme/'
	],
	[
		'id' => 3,
		'title' => 'Magiška žemė',
		'rating' => 7,
		'year' => 2011,
		'price' => 11.99,
		'currency' => 'EUR',
		'availability' => true,
		'img' => 'https://www.knygos.lt/thumbor/TmyZVVDfGtTH1jqMu0PKhNfH3iI=/fit-in/170x170/filters:cwatermark(static/wm.png,500,75,30)/images/books/775739/1462886131_toskana-florencija-magiska-zeme-1.jpg'
	],
	[
		'id' => 4,
		'title' => 'Po Lietuvą su šeima ',
		'rating' => 9,
		'year' => 2011,
		'price' => 22.99,
		'currency' => 'EUR',
		'availability' => true,
		'img' => 'https://www.knygos.lt/thumbor/bTCfmBdK68Nt6OtghGrLvB1PqI0=/fit-in/183x220/images/books/741789/1462885363_dsc2739.jpg'
	]
];

header('Content-Type: application/json');
echo json_encode($aArray);
