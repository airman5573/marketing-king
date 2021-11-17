<?php
require_once 'PhpConsole/Start.php';
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define( 'SITE_URI', "http://$_SERVER[HTTP_HOST]");
require_once 'utils.php';

$uri_matching = [
  'package/full_package' => 'pages/domestic/marketing/full-pacakge',
  'package/seo'  => 'pages/domestic/marketing/seo',
  'package/banner_facebook' => 'pages/domestic/marketing/banner-facebook',
  'package/banner' => 'pages/domestic/marketing/banner',
  'package/facebook' => 'pages/domestic/marketing/facebook',
  'package/application' => 'pages/domestic/marketing/application',
  'package/image_motion01' => 'pages/domestic/marketing/video',
  'package/viral' => 'pages/domestic/marketing/viral',

  'business/timessquare' => 'pages/overseas/marketing/new-york-times-square',
  'business/worldbanner' => 'pages/overseas/marketing/banner',
  'business/worldfb' => 'pages/overseas/marketing/facebook',

  'viral/cost' => 'pages/domestic/press-promotion/low-price',
  'viral/naver' => 'pages/domestic/press-promotion/premium',
  'viral/hospital' => 'pages/domestic/press-promotion/hospital',
  'viral/realestate' => 'pages/domestic/press-promotion/real-estate',
  'viral/prbanner' => 'pages/domestic/press-promotion/pr-banner',

  'online/world' => 'pages/overseas/press-promotion/all',
  'online/world02' => 'pages/overseas/press-promotion/america',
  'online/world03' => 'pages/overseas/press-promotion/asia',
  'online/world04' => 'pages/overseas/press-promotion/europe',
  'online/world05' => 'pages/overseas/press-promotion/middle-east-africa',

  'youtube/youreview' => 'pages/youtube/main',
  'youtube/youvideo' => 'pages/youtube/video',
  'youtube/youbanner' => 'pages/youtube/banner',
  'youtube/youviral' => 'pages/youtube/viral',

  'search/sitesearch' => 'pages/search/site',
  'search/brandsearch' => 'pages/search/brand',

  'customer/apply' => 'pages/consult'
];

$uri = strtok($_SERVER["REQUEST_URI"], '?');
$uri = substr($uri, 1); // 맨앞의 / 제거
if (strlen($uri) > 0) {
  $page_path = $uri_matching[$uri] . '/' . 'page.php';
  if (file_exists($page_path)) {
    $css_path = '/' . $uri_matching[$uri] . '/' . 'style.css';
    $js_path = '/' . $uri_matching[$uri] . '/' . 'script.js';
    include_with_variable('header.php', array('css_path' => $css_path));
    include_once $page_path;
    include_with_variable('footer.php', array('js_path' => $js_path, 'current_path' => $uri));
    exit();
  }
}

include_with_variable('header.php', array('css_path' => '/pages/main/style.css'));
include_once 'pages/main/page.php';
include_with_variable('footer.php', array('js_path' => '/pages/main/script.js', 'current_path' => 'home'));
