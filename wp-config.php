<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'kachestvo');

/** Имя пользователя MySQL */
define('DB_USER', 'rektor');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'rektor');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '/th}X Z>SG?,%+r}6#kHKd7(@Oh~2Kp_/,.4`=@QoWpQGYW[-H[g8rlg4>_{es++');
define('SECURE_AUTH_KEY',  'jKDXMpOGU~SLIK?}P7g+V42 `}rY v&9rH*xnYh&vFC~<+w<mm*a5U4>vhb|j<v~');
define('LOGGED_IN_KEY',    '|#O$`yUM8n;Kpp70#2H-8V}PIf#0!t&M(;BPy3y&0;^m| ImkjE4[Ju{2[HsDQ95');
define('NONCE_KEY',        '0U7Loo]lPCvz.B&Ns5N2Gc ?eOQlqOK)h#-_6*~+cI>N_M!mP3+M3_99gr!Qp,Cw');
define('AUTH_SALT',        '{J|_#R{:cFXJuCjWL [p/;,s,P5j%|~;>.meAx~SK?jr8P$zjYDqs4C6K71+7Lyw');
define('SECURE_AUTH_SALT', 'r0-xin>*T v S{E)$@C|Isk6+C!|s*;f]N6i}x2:W$5YPQ$N~M5FAAKI>Sq=KdvR');
define('LOGGED_IN_SALT',   '/ViVMD^124R(!kh2${^4w7-sPxx#$+>([qZ^+v$-oEruIvmD+,Ls:bI-T-:Nh7`k');
define('NONCE_SALT',       'I]3f2-V*XSP;y<kuh5zacJ7Z:M%|MzA8e?AxO*[oJ Um8YN.21zSw~xN*Wj1a3mr');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
