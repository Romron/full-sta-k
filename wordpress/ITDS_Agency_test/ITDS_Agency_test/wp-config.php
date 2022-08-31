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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'itds_agency_test');

/** Имя пользователя базы данных */
define('DB_USER', 'root');

/** Пароль к базе данных */
define('DB_PASSWORD', '');

/** Имя сервера базы данных */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '$ny6j<#ZO/^h3Wh+A!@sZa@W_721f||1auO&O~*@0&vWj&JwMeG}!7N:)QZ4`I|&');
define('SECURE_AUTH_KEY',  'q~@l@;~yp6*=L-RCY a7k o2;1o]B8GZO(DMCz#684u; Mm1Bnu^4YpmhA5BeW7S');
define('LOGGED_IN_KEY',    'P#f`uWy/@AV?$J(I6E$ Mt%YA V~.CC]R%T`#8%WstydDm_b78T;q_1vS jGGG?i');
define('NONCE_KEY',        'ju8bJ<k5R0^(!jzM2xHh=_JxT++GR}N*y7cgVu* 5m>#fwhBdgYVNdQ?RBojPB:<');
define('AUTH_SALT',        'c@oL!}MArzIU%uQRqby/v3<TP:|=cuL!=Y-`tzQl$!B:,tl peO:VPJqy(0}9XID');
define('SECURE_AUTH_SALT', 'uRhi@py^F] &LQ~Z<-7o=wv,*^&$mRluh^4LF{+S!:4-lTwR8k(YD0zGK;(&XZ#H');
define('LOGGED_IN_SALT',   '3iL`k3hd$5mfpw*!XkUps9i#kk-s5X$bRc&i*w8cMeh58} #/fDbJRxIyM&0R)1B');
define('NONCE_SALT',       'I]hY2=KsBBq]2KA,$~?0pyq{l0NW(7aBUM>HOqL^^_Z%z|ve0G}gnLuH@0/U9gv[');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_itds_';

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
define('WP_DEBUG', true);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
