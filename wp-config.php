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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e<AyW.zL ns$:/Yw:qL+)[ [bA(>R=>tX>vo>TGC=WE~[1K%qOvS*_.SIAV.hVYw');
define('SECURE_AUTH_KEY',  '(oI}Jm2d+VDGYAa/9U}wXD$O0>qS,vokP3`-3`N~JozY}91H@g`=A5pa2)?:ae!g');
define('LOGGED_IN_KEY',    'sZ%qQ2/d,]gF_ObUXC-{CA*3TBODR8P}8D<Yhl@HfXG{tD_/.7drvxvaDfNn~z8#');
define('NONCE_KEY',        ' ?AKTFSGry`leIx6%/uzgl3(M:]bh)B95Vw<poChh$Q%e<[D^hg#H~m&zl0nh^%N');
define('AUTH_SALT',        'N/[.pVI|=uSpVWHG@Yr/+6ZUv}4:O!RbT]l *E&-ts&#hL}t*Lq3}@H%;;rD_pwZ');
define('SECURE_AUTH_SALT', '@jdC+K;1k)lLz&QsgyLfY}3y*E/PaUCJsc[5,0%P;)8kVhH/@Lghkkw?fJay!TL*');
define('LOGGED_IN_SALT',   'lesV7Tsgb$K9Q<sHs~9?/Ir^jLql%in136~GbLjTVdI~cqEB#LRk[=]25pO Q 4C');
define('NONCE_SALT',       '-1Bb2 Mc1c7tj9Xh+GHTfHYP*F7O0_&>==@Yd}Ad2/?%175CK@Jj.I^7.D15#|%3');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
