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
define( 'AUTH_KEY',         '45}vd`(VH4!hv j7(Fnns45=2u,ePHRD}uQ#0e(iYEG]O5!(vQKJe<>H)*&]oe&W' );
define( 'SECURE_AUTH_KEY',  't|6qqE/P@TM44+)9G.=gKhwN]br6EnU1.6| x/]4/jWn*9N2evIwe8&u;K1%jX G' );
define( 'LOGGED_IN_KEY',    'SNgq0>jm@cvO^;.:B`bx$MGWCw+7b0PpN!-i3)ruH9nJD(eFW)H9 vaHoUl)[KQn' );
define( 'NONCE_KEY',        '68jI+GZ;N=)6qm8O$CE2IGUwgBKbuFnjY[]#c:Ow@0U8tboubx/q$8h+eSX,!Gmm' );
define( 'AUTH_SALT',        'OHqS2BL^/fc*yih~DjNPOLnHQgDE,<x- 5EHq]E?n11v6M<9,g JPdd}oz>nw){x' );
define( 'SECURE_AUTH_SALT', '6<jj?B,iy1!_gFBSV>1=d8c1#<_Gc}.tyT)E:g+7*1;jHs_}M)A|-n*Di7e+nzaj' );
define( 'LOGGED_IN_SALT',   'Qp(mU_J@+,)wZVx 2W:EWSyZfpSaW$V]sr9*_2.T)iXc{4aXPyL]K5T$X}zi=bF<' );
define( 'NONCE_SALT',       'zzL1Iy3a(zJ*S`&#s!TB;>LnM$+rKw6Yy>oYTK}[Oa%[9#8^x_^(bMwnW_OGWT];' );

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
