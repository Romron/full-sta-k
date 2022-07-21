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
define( 'DB_NAME', 'itds_agency_test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'mA,.%_._a`Qa6s_;8d9MZb,ns,JEdC<w@iE@yaP+%0B~7;-e9Sw0<]ym>EPjH>JQ' );
define( 'SECURE_AUTH_KEY',  '@$tPLgF(eL&:fBXFvsa]/C4_H1L+n~rQ$ J.q99(zU@2:NnCaCB`AXs,x|7i[3B&' );
define( 'LOGGED_IN_KEY',    'Ic=5 o`U _JU@_-UK=I4/v(GRc@``VxdL0e7cXcd}!?Uw8`>CQEfdu~UPG%E99;8' );
define( 'NONCE_KEY',        '.2>KYWYLc|CX5`~^PO)/Vvc2h(LBdSyDlWY-n0J7>,U+1-W?(O9S}z)UOej7`>Ca' );
define( 'AUTH_SALT',        'y!qF.Snn9F}fv+g6+juP1l6=%J|uhP]kj.n)&nC,93K}YMw60z[dVWU4z{Zhi1c<' );
define( 'SECURE_AUTH_SALT', 'j6K.0:VqRIcGtDjt~!@$4-`TuVSof<EO.1K7lzPx$7p_cEx 6ifW3U$IAq-T{VTR' );
define( 'LOGGED_IN_SALT',   'ME1wj?QEKf3=f62s}0(o#JRBO]-i;HX{U7kq({`9Spsn_XLlztcO&!7ENP?)4hR/' );
define( 'NONCE_SALT',       '@qf?/|HZR$qq&92eDQPBV>Es;4q3<^ .5k(:(SUED,zfzg;N_b?E~<1=~]I/k#qz' );

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
