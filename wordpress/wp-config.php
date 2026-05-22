<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'pynryxptlm70eiigb3na582ygpnqvvgtbidwaxhh0jyppmb8rcbvfjyntlky4d8e' );
define( 'SECURE_AUTH_KEY',  'ybd72vcygbyeff2t48fbqkn7fy27ldwelsu42kiuzksasmrh2ldhvxexdsimdc5r' );
define( 'LOGGED_IN_KEY',    'f9nb3hwcmh8o1ajezvdhze42poz9iib6k13q8pcv49qp2k1ngpku3pr13q7lr4es' );
define( 'NONCE_KEY',        've33rukcdvz379jq5zlkoffr2f8al2am88xtk0l1txg69hv2bvn5wa9npso209jd' );
define( 'AUTH_SALT',        '3yupke695mhql6ggpv5e255m3aqwlzi6cpdss4o7ms38jphctamg9f3r6lnme9as' );
define( 'SECURE_AUTH_SALT', 'cn7hz4xluwtopd2vd21e69yxp15llddlwk0i0e1if0elghuflqqx1l9mthztam3a' );
define( 'LOGGED_IN_SALT',   '0jcwooy81wvlvoap342jybspcau67oyls51p2y0bpnwcpf9htpmaw0m4as96vszm' );
define( 'NONCE_SALT',       'adrbhozjdszl96q9zyd9ik267fwbk5ho4d7bkyp842g28g3t3a5hu0trb5nnarp0' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-f5a7914b-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-f5a7914b-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
