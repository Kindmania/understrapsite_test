<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'exsample');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'atsuhiko');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'anarita1008');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@buC1MoFV]e)b7-;?<fvW[6/zhf,,CILoD&4umm-R<4f:3rB4bLi2o^/A]*hOlz{');
define('SECURE_AUTH_KEY',  'C/2|QE0 ]^T10J!lyom9=2T-;v5j$N_Ry>7ce1b5.`8C6Z}LkIR1pm$cFq[{`g~d');
define('LOGGED_IN_KEY',    '<^<z-J>Sx;]}i:2DMtYBFBs1EJ5!?[}|y1O{( rHrItdRa,Ii4X)q|]&[Vf@yma>');
define('NONCE_KEY',        'V!Cc-E+Tw2(0p[xb{m M}iYTg-[8}9<vNQp3Ns(6uXcomlCV!|yj6v+Eq}PhV|$8');
define('AUTH_SALT',        'Q8K??CIv+xerahvGG3D,.l=%rMl!STEJa|bQw+L8@Hx7FN&_-Y7mi`is>Z_4]_]%');
define('SECURE_AUTH_SALT', 'N.[aJ9+*YjaW1*,ZxbScu7]Gh0#VA`$1AODbqj8OX(QydCF/-x`KiO?WOfo5|uL5');
define('LOGGED_IN_SALT',   'A=.z-,ok0%HxUz)^PUe6oR~)b|49r;yn1#0)#ciq,Zu2vuEe^Vfh=UcQh)gJtYM!');
define('NONCE_SALT',       'p:LDU]fV;>;nXa,X,K,yffy,zP-9B}ZB )0CPl^qi;c)+A7jy)`V;!9z?>1M/sFQ');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
