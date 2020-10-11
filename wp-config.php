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
define( 'DB_NAME', 'pure_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'pure_db' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A>{gg] ->nZEPW=!1,$~s#0k~r%&S++f+C)}M:Y)jxCNED j^[Ev&g&2L57OOmfr' );
define( 'SECURE_AUTH_KEY',  'q#MOf[oTj64.up U^tz.OkPtKBl,|`R^is[Bb$&uiHe6!Q5/dA9wXiLZ#zvgREW8' );
define( 'LOGGED_IN_KEY',    'p YXEKBT8%4W1iY]i4 TgtH0#;e0*Q75~*PAYG^r4<nOttK a.ZrN+96]`O.?5:`' );
define( 'NONCE_KEY',        'e#*XiHrUC}9T>sE4daqM|jsY|:*UarB#7q0#mnzUFiFY!w<S@bmKiz23o)[5WJC9' );
define( 'AUTH_SALT',        'RRg&nJf#gVwPXJ WrfQ9z6s##wyG*lU3eBD9hRHfr|Qu/Sa>mRXieBUNgXgQBp+l' );
define( 'SECURE_AUTH_SALT', '4K<:<6tzpFMJ<`#_JpgK0-g]-M;R#ao .s2iQi!{n5_ 4qq8!:Mf%:GzrL#`]z/z' );
define( 'LOGGED_IN_SALT',   'F[zMHGOE^T*/HW,WS^:G(ps/J)6,ajtZ 8hj@>|TCa/OMHT1MMH`h+M=TF5IY9rv' );
define( 'NONCE_SALT',       'mE86n3ac7viXZ`Hh3^U6BCRyJem}P [23ruS=_q%RoC?>;ppF2SA|Z(aDgCXszI&' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
