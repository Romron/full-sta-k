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
define( 'AUTH_KEY',         'z?r1E_Gvtl5w*.c/!j;]gZY[u(@r0mE)GWT%?z/k`#}CZbhLE(Wg<h|yO%=Q!ZL;' );
define( 'SECURE_AUTH_KEY',  'Ko&EWKX 21eW~G?_fFws@O+]PO?>otPkIMfcy|ZPwajeMxeFHwgm:=C[I~S$3=e]' );
define( 'LOGGED_IN_KEY',    '=Hgu_bo{8Hr:6fSC=QjCYxA+jvsr!ir`EJc1xCRzC;_2,PGCsfw*-5$DO|vWL9r+' );
define( 'NONCE_KEY',        'xZVxb-=as;x2I3H^`$=|O~fHU{i!ksm,0hzh*UDj881)mG/FG5b,naBi:Dblajd5' );
define( 'AUTH_SALT',        'kCyW)(.F[bRX]<TwX*Ri+}Y?ed!DwNKoqvWlYi~O`n_g$ZSMXQ0hNY(8myQBUcI/' );
define( 'SECURE_AUTH_SALT', 'Lb1ZpE>5)(;y4q6W1fvH;d!bfkYGzz8.OvW!N8sV$g*B4zz_7!/X+nq9g(ewMI4Y' );
define( 'LOGGED_IN_SALT',   'xaWQLj`O(Xk)Vp<lrh[w~px8XC=aiAG`P^6]]vFPn2 491BXqKRB?L1.Esu$;QM9' );
define( 'NONCE_SALT',       ',7q6K;G]Z`ohzRCKDXk!5A/<N%*AFs_fQ_`4usI1B4J9B8G59kW9mZ$!U|.6-&TM' );

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
