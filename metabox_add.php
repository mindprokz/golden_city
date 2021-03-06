<?php
$options = array(
	array( // первый метабокс
		'id'	=>	'info', // ID метабокса, а также префикс названия произвольного поля
		'name'	=>	'Дополнительная информация', // заголовок метабокса
		'post'	=>	array('post'), // типы постов для которых нужно отобразить метабокс
		'pos'	=>	'normal', // расположение, параметр $context функции add_meta_box()
		'pri'	=>	'high', // приоритет, параметр $priority функции add_meta_box()
		'cap'	=>	'edit_posts', // какие права должны быть у пользователя
		'args'	=>	array(
			array(
				'id'			=>	'head_short', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
				'title'			=>	'Короткий заголовок', // лейбл поля
				'type'			=>	'text', // тип, в данном случае обычное текстовое поле
				'placeholder'	=>	'Например: Усадьба из камня', // атрибут placeholder
				'desc'			=>	'Заголовок отображается при наведении', // что-то типа пояснения, подписи к полю
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'desc_short', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
				'title'			=>	'Котороткое описание', // лейбл поля
				'type'			=>	'text', // тип, в данном случае обычное текстовое поле
				'placeholder'	=>	'Например: Усадьба уложена определенным камнем', // атрибут placeholder
				'desc'			=>	'Описание отображается при наведении', // что-то типа пояснения, подписи к полю
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'thumbnails1', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
				'title'			=>	'Ссылка на изображение 1', // лейбл поля
				'type'			=>	'text', // тип, в данном случае обычное текстовое поле
				'placeholder'	=>	'Ссылку нужно брать из медиафайлов', // атрибут placeholder
				'desc'			=>	'Ссылка для модального окна', // что-то типа пояснения, подписи к полю
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'thumbnails2', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
				'title'			=>	'Ссылка на изображение 2', // лейбл поля
				'type'			=>	'text', // тип, в данном случае обычное текстовое поле
				'placeholder'	=>	'Ссылку нужно брать из медиафайлов', // атрибут placeholder
				'desc'			=>	'Ссылка для модального окна', // что-то типа пояснения, подписи к полю
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'thumbnails3', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
				'title'			=>	'Ссылка на изображение 3', // лейбл поля
				'type'			=>	'text', // тип, в данном случае обычное текстовое поле
				'placeholder'	=>	'Ссылку нужно брать из медиафайлов', // атрибут placeholder
				'desc'			=>	'Ссылка для модального окна', // что-то типа пояснения, подписи к полю
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'thumbnails4', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
				'title'			=>	'Ссылка на изображение 4', // лейбл поля
				'type'			=>	'text', // тип, в данном случае обычное текстовое поле
				'placeholder'	=>	'Ссылку нужно брать из медиафайлов', // атрибут placeholder
				'desc'			=>	'Ссылка для модального окна', // что-то типа пояснения, подписи к полю
				'cap'			=>	'edit_posts'
			)
		)
	)
);
 
foreach ($options as $option) {
	$truemetabox = new trueMetaBox($option);
}
?>