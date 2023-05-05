<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'foto_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(&gusG?S*cWqRi;OlH*l&xyU|Gs&!4(K}Kk]a]4ty$__>#{#C~GvL.7!vCM./K~-' );
define( 'SECURE_AUTH_KEY',  'vo /B`S>D~9xHPpan7>xkGH(fJt9G`9T]84I)!suAn|=6q3,}m|M#-Xu[[JKkD0|' );
define( 'LOGGED_IN_KEY',    'f/kH!S8goY::Ifok<a}t[!%.FJ24!C{I?8.C~w|g}n)c*L))JHBE`Y<(]<lzNh7O' );
define( 'NONCE_KEY',        '$04bKA{A&*8eEDqY~k 6I3~g5|$XEb%+HK18p[K,at;jJEqc,:<{GN{#VDa<LIfh' );
define( 'AUTH_SALT',        'UaX |D-ijZ33^Jzeho1D]DY;;M{Ee?DNFlL;2b}V|P>^<7ybB=zjhfnkby<<TcNh' );
define( 'SECURE_AUTH_SALT', 'sjT +B[/Kbv]m4wbleRlnx&HI:%Nl~7aj)[4jgTj(hH-nJ[^!1{I?kF?1(qa%/!]' );
define( 'LOGGED_IN_SALT',   '!)7}p,waMB!gqFpf_WIg/)a9|VxFedG}b;o5WS*kAX$K>_t4:THAT4X.JefL6jaf' );
define( 'NONCE_SALT',       ';<[xU_7hP|+c;VL&ngbRCBs0@?xnqVLReZ_nCRe(v@-Jh7WIBlD1us;9BE1(vtX2' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
