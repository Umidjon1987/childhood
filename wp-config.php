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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'MnPN(,C[xp%_-Q2l2-Z/7R;0]pEL8%/Y-q<g7iFdPmNI&.AMEg/(Qf{jgIY0:dH8' );
define( 'SECURE_AUTH_KEY',  '~{A]C^3zJ=LBRM,+Pbw#=tHw9f5O|*`)L}FWf&}q!I8}dpl|rP6|>XTEY)*.,:B#' );
define( 'LOGGED_IN_KEY',    'vb;gH]^:EjBmL385%D5:nF17bZ%2bS];+eGRd9450RN*yz@EiVHi[Tz2c~[8>jQ]' );
define( 'NONCE_KEY',        'eQeV F*HIxO{t gpir`Q<<(pi #EA*3hn=O%SkOr&M/IJ#U;sGQ9>Aq@=LWZ6Ik`' );
define( 'AUTH_SALT',        'NDTf3}e@7=fE)P?9.+sv%eQURi`y!^l{#y{@mz$BAvB^(cLR4RG#9[2>_Le%W)+.' );
define( 'SECURE_AUTH_SALT', 'Co3CJ3=%|^R*miB%9#>ES`UqhB11r#-@|.T)o.^J[&wE)9y5V:cB$CL}--=UZERl' );
define( 'LOGGED_IN_SALT',   '$WIs91 e<wC@z.-#s!aZp3ko<NA3{g}2W7Ao$~_>VZBzU9<aEX[8oR70{ZU@=zQm' );
define( 'NONCE_SALT',       'p+5UQ0OD,eqW03}88PU.D9s]hqVFnKRCk%wDB:xb[jRA%_he+75s>UDc>LmJrVH8' );

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
