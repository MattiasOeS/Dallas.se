<?php
ini_set('display_errors', true); 
error_reporting(E_ALL ^ E_DEPRECATED);

function a($arr, $value, $default = null)
{
  return is_array($arr) && isset($arr[$value]) && !empty($arr[$value]) ? $arr[$value] : $default;
}

function e($arr, $value) {
  return isset($arr[$value]);
};

function getDevelopmentEnv() {
	if (file_exists(ABSPATH.'../LOCAL_ENV')) {
		return 'development';
	} else if (file_exists(ABSPATH.'../STAGE_ENV')) {
		return 'stage';
	} else {
		return 'production';
	}
}

define('ENVIRONMENT', getDevelopmentEnv('ENVIRONMENT') ? getDevelopmentEnv('ENVIRONMENT') : 'production');
define('DOMAIN', $_SERVER['HTTP_HOST']);
define('WWW', dirname(__FILE__) . '/');

$base = '/';

function configure() {

  $environments = array
  ( 
    'development' => array
    (
      'ENABLE_CACHE'          => false,
      'CACHE'                 => false,
      'WP_CACHE'              => false,
      'DB_NAME'               => 'wp_dallas',
      'FORCE_SSL_LOGIN'       => false,
      'FORCE_SSL_ADMIN'       => false,
      'DB_USER'               => 'root',
      'DB_PASSWORD'           => 'root',
      'DB_HOST'               => 'localhost',
      'DB_CHARSET'            => 'utf8',
      'DB_COLLATE'            => 'utf8_swedish_ci',
      'WP_HOME'               => 'http://' . DOMAIN,
      'WP_SITEURL'            => 'http://' . DOMAIN,
      'FS_METHOD'             => 'direct',
      'WP_DEBUG'              => false,
      'AUTH_SALT'             => '8vR)gmX=d>!(K1zRN$rN-D#}c:%ENm9%u`zHzM1^nGc6wyHXwq0(u&+5}]>K_*G/',
      'SECURE_AUTH_SALT'      => 'T[bz;ZXtj(,!FzgRx|`Lq@?q-A>u<o4q?MXG/[[wiU>hCL.:{1MZY>:GdAnkqj&c',
      'LOGGED_IN_SALT'        => '<e/f?Q1PRlQ>^N.(YG3h9.];$gSjD>TXjlsc#tjg?0BxHCQ./$s~LM<}q[u6||-,',
      'NONCE_SALT'            => 'r[!V$+QGfu{XxeVN-w{hu?8;ued573.zrpP`_TMx P4UPli[iP*.7w7u[{KV4%m8',
      'AUTH_KEY'              => '-^c)@U:_s;U/%Va%:vo90p},VH|r%4mduA}1^x]X<~vTE3sY0o>5K*Jw,^5Lk( i',
      'SECURE_AUTH_KEY'       => 'tQOSp=&VqyR9d7DbzEmL/4I)=>(ZE/Cs:}#IQlFBmb&{>]H^3,:{v=uHiLW[8|U4',
      'LOGGED_IN_KEY'         => 'X_UTX]YTYGR_-~VOS_,pO{]u`.}{# s5:iFlL JR6Nige^uIv FdX-fmJSrK?{l?',
      'NONCE_KEY'             => 'dP[Ur,%~7hF:m6Nz7nW+Fjpn!aw~J,ik9czeNb8b5^[Y^n/dB/~hs+A4 7[2+S,~',
      'DISABLE_WP_CRON'       => false,
      'WPLANG'                => 'sv_SE',
      'TABLE_PREFIX'          => 'wp_',
      'ADMIN_DISABLED_MENUS'  => 'Comments Plugins Links',
	  'WPCF7_ADMIN_READ_CAPABILITY' => 'manage_options',
	  'WPCF7_ADMIN_READ_WRITE_CAPABILITY' => 'manage_options'
    ),
    'stage' => array
    (
        'WP_HOME'               => 'http://dallas.test.n-i.se/',
        'WP_SITEURL'            => 'http://dallas.test.n-i.se/',
        'WP_CACHE'              => true,
        'CACHE'                 => true,
        'WP_DEBUG'              => false,
        'DB_HOST'               => 'localhost',
        'DB_NAME'               => 'wp_dallas_test',
        'DB_USER'               => 'dallassite',
        'DB_PASSWORD'           => 'vAc2kUKA',
        'DISABLE_WP_CRON'       => false
        //'FORCE_SSL_LOGIN'       => getenv("FORCE_SSL_LOGIN") == "true",
        //'FORCE_SSL_ADMIN'       => getenv("FORCE_SSL_ADMIN") == "true"
    ),
    'production' => array
    (
        'WP_HOME'               => 'http://starcom.se',
        'WP_SITEURL'            => 'http://starcom.se',
        'WP_CACHE'              => true,
        'CACHE'                 => true,
        'WP_DEBUG'              => false,
        'DB_HOST'               => 'localhost',
        'DB_NAME'               => 'wp_starcom',
        'DB_USER'               => 'starcom',
        'DB_PASSWORD'           => '2UhmaMUkE7h',
        'DISABLE_WP_CRON'       => false
        //'FORCE_SSL_LOGIN'       => getenv("FORCE_SSL_LOGIN") == "true",
        //'FORCE_SSL_ADMIN'       => getenv("FORCE_SSL_ADMIN") == "true"
    )
  );
  
  $config = array(); 
  switch(ENVIRONMENT)
  {
    default:
    case 'development':
      $config = $environments['development'];
    break;
    case 'stage':
      $config = array_merge($environments['development'], $environments['stage']);
    break;
    case 'production':
      $config = array_merge($environments['development'], $environments['production']);
    break;
  }
  
  foreach($config as $name => $value)
  {
    if(!defined($name)) define($name, $value);
  }
}

configure();

$table_prefix  = TABLE_PREFIX;

