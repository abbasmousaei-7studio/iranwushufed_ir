<?php

require_once('DB.php');
require_once('class.php');
require_once('PersianCalendar.php');
$dbcon = new DB();
require("getos-class.php");

$user_os        = getOS();
$user_browser   = getBrowser();

$user_id = 0;
$user_ip = get_ip_address();
$visit_page = 0;
$visit_y = mds_date('Y');
$visit_m = mds_date('m');
$visit_d = mds_date('d');
$visit_time = mds_date('H:i:s');
$visit_hh = mds_date('H');
$visit_lan = ip_info($user_ip, "Country");;




$link = "http";
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $link = "https";
} else {
    $link = "http";
}

$link .= "://";
$link .= $_SERVER['HTTP_HOST']; //localhost اسم دامنه
$link1 = $_SERVER['REQUEST_URI']; // آدرس بعد از نام دامنه

$hit_url = $link1;
$link2 = '';
$link2 = explode("/", $link1);
$link2count = count($link2) - 1;
$link3 = '';
$link3 = explode("?", $link2[$link2count]);
$link4 = '';
$link4 = explode(".", $link3[0]);
$visit_page = $link4[0];

$last_page_visit = '';
if (isset($_SESSION['master-last-page-visit']) && $_SESSION['master-last-page-visit'] != '') {
    $last_page_visit = $_SESSION['master-last-page-visit'];
}

if ($hit_url != $last_page_visit) {
    $_SESSION['master-last-page-visit'] = $hit_url;
    $hit_hostname = $_SERVER['REMOTE_ADDR'];

    $insertData = array (
        'user_id' => $user_id,
        'user_ip' => $user_ip,
        'visit_page' => $visit_page,
        'visit_y' => $visit_y,
        'visit_m' => $visit_m,
        'visit_d' => $visit_d,
        'visit_time' => $visit_time,
        'visit_hh' => $visit_hh,
        'visit_lan' => $visit_lan,
        'visit_url' => $hit_url,
        'visit_hostname' => $hit_hostname,
        'user_os' => $user_os,
        'user_browser' => $user_browser
    );
    $result = $dbcon->insert('sitehits', $insertData);

}