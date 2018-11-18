<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'wordpress');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LEq{;W{$PiH<}Pr&g08UeX*y80WXmk Z<S+P?BsVRUT^;j,!Z`:3^$emkAyg)kvq');
define('SECURE_AUTH_KEY',  'Z];!}}8hrBkhr>:8{}~8H8$l(;6_ly!p8HdvwAPDA$X;fw|)7<5i;I91dy>I%LoP');
define('LOGGED_IN_KEY',    '!n,Id=e:;83t%9.sp,*=oj)4V;Q]aSrGN*Ea4zfHL_^jiLUYSDzDov5AppE;KBIw');
define('NONCE_KEY',        '^C!.z3&DEXxP*WI9c,4ev$geW>Lip [5r0&cuoLa~1W_4v_VEq!hbrcr4Bn?dROv');
define('AUTH_SALT',        'bI8T#%54~AKlGIz:.$a*#0r~__S2b%05eF5,l;3+pJeeX82RsCWe^qB:G^rip>v*');
define('SECURE_AUTH_SALT', 'Z>z|U.5pxgY,*[=YWFawRyU#4gOHg]p*ZMq8NNw{30D&]~E<HKrenpENZrzpKTUD');
define('LOGGED_IN_SALT',   'z==syRRB8H)B/r_3,jg+8K{[t!GaQNp.iEh4Bk8[g:}|PyY^~9<*r:x`k5KIza7=');
define('NONCE_SALT',       'E$6/{1M_lEILK>uP!SUT=<;=6MP.-.QrYJNiEm?-@C=z9u@a`Xxluhy&5)Qzw={p');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'tt_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
