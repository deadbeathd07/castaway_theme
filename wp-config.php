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
define( 'DB_NAME', 'castaway_bd' );

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
define( 'AUTH_KEY',         'R=Ij.:HKB1WBdMG;y&Z/Tdb3hXHYrG%T!{RX7slz;:.k}4`qtFe{268T:@S5gdD%' );
define( 'SECURE_AUTH_KEY',  'UpJk|{N:%Cn+X]BY(6GlPEsJtleX78.*OnOCnSn;}2F5%OF?8kdN`PU:raR3uzVY' );
define( 'LOGGED_IN_KEY',    'n>i3&k,DlV0YMl-&/1sLFT|pq9h5tfu[y-H5hvXhK7t:&*Qi1FYcBm3jZtfPLBEj' );
define( 'NONCE_KEY',        '$f=y31_d#@gMZk g1oEJ,6yN*$9XzEm_F6`sKk3{|G,:0)LrZheqL0JlWpyx W/P' );
define( 'AUTH_SALT',        'fw:Fl%CM9.u~i4aa*RvRN.U^2*:aXFK=s&llc)E~&&>$%Dd=r[hwLF9g+IXRKr]d' );
define( 'SECURE_AUTH_SALT', 'Z!5>P.#)a(MlHU;^L0<YyKWai@e]*}2s|YQF>gt8?-UF2?g!9EcIRp}Rs0[#l-~b' );
define( 'LOGGED_IN_SALT',   'EUn<c&#M`RYH8nVt$w#_jT `D3RtRsw<fP<t4rhXvMR5,yNKjo<(v+$3gcR(D`=x' );
define( 'NONCE_SALT',       '`sv95QhmW6y.nL.$F zzjSOr8,NJ??C%K5(R))roW567ZOw,GDW6F^;Y*jA( [>A' );

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
