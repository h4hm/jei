<?php
include_once('./_common.php');

// 페이지 제목 (웹접근성 관련) : 페이지마다 넣어줄것
$g5['title'] = '회사소개';

add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>


about

<?php
include_once(G5_PATH.'/tail.php');