<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wpr');

/** Имя пользователя MySQL */
define('DB_USER', 'wpr');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'wpr');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');
define ('WP_CONTENT_FOLDERNAME', 'site');
define ('UPLOADS', 'site/files');
define ('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME);
define('AUTOSAVE_INTERVAL', 300 );
define('WP_POST_REVISIONS', false );
define('FS_METHOD','direct');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^j|$77VPIIS:SaTpo46iQfziDB_0xvdT0,oR,LOw@hz)6%)3)qA7F6w.<M32V`NI');
define('SECURE_AUTH_KEY',  'ojgrjSx9jwzKJ7%969?;)-W_HtC;)$y_qzj.hQExOUA1NpK?Cz[2d=!2C.&4(=%F');
define('LOGGED_IN_KEY',    'MVb1lE&_q`>)WGT5Pc!B,4^(fuaKR#OO_y]Rxq& |ZIz_VOF~$t|_v}@:6Zh3v|0');
define('NONCE_KEY',        '>9?63, $>`#[<&M$3(P=7u5 v1;Kd(x=rj+dOQ=mMK?f[gV[g9n$/.*boo@}C7RU');
define('AUTH_SALT',        '%y7y8,V1}FVd< 4W/[b=/e%JHNt0dJWNBQq)^n+m,V]i{o5Nc1)`|e&r:6TzIKYa');
define('SECURE_AUTH_SALT', 'qr:qBa_}Iw%iC9oHL7{ex0$@X=ca04-onzhVDC@c7$>av]A?0-Zv|wV)$ROCWB*5');
define('LOGGED_IN_SALT',   '3,,?>I)>y Tt(:pHv<wKG93mzB[03*(^fTfdzd Vv~m_ X?zD1(F8DDDqSY<CDwX');
define('NONCE_SALT',       '*HS..<oD|6Mw(/$q{>kE2:xU{t%lEP]0*<Jt^z`vNibkh7fPEsC#4lw&`]<o@fX5');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wpr_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
