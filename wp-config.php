<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'ugurreker_db' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'Sananelan12' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OK!p+#:Yw9Z4oR9OP.0Q|]&XzlaiR81}aK;H$[^-v!`9y`9 ^lySj0WJn%nBViex' );
define( 'SECURE_AUTH_KEY',  'yqN}Jb$(=nHMde@!S!D7rYs]|%9%OQh5Zq{+bDK4Sdc-IBHC02TK5jn}c,l<e,](' );
define( 'LOGGED_IN_KEY',    'uBF7OnkSaD%qn+mm93>-c!!EKfev_jO-+&#x0UB1AZS%2s!`rd&N)|Nji7I}e9_V' );
define( 'NONCE_KEY',        '>asaOmBx-JuWLz<]lmjU9$&fxqtr)KmjaJf]XjX[(mY?9A#zKP}P7l{k}y.|2+bd' );
define( 'AUTH_SALT',        'i^MANk8CV Q35v}e{9jO<?8pY[ACC,ZOPu>exEU-r:}7:K?ci@GQ*Ib]JP$9E.GY' );
define( 'SECURE_AUTH_SALT', 'e_IZ=w&=d!6Q1$ZboNZ+:Zu24,w+Dn1wxBO3B<@B) =e^w[BJH`B{~fj#8q+io.Y' );
define( 'LOGGED_IN_SALT',   'yq~43T<SJ%$Y8A3LY~PB}a42*USv.W5f:Luxk}L01XZRw45xyek%9@!<?gEgoRgp' );
define( 'NONCE_SALT',       '~M*)D<}.r:&2qd6IgL!av3`A=CS,&7gE:R0yEg@z=G>1GXa@Hh*@}c:QjxP>$I4(' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
