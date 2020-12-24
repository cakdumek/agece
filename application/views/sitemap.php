<?php
require 'function.php';
$lokasi = FCPATH.'sitemap-folder/keyword.txt';
$keywords = file($lokasi, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$agc_url = 'https://' . $_SERVER['HTTP_HOST'];
$suffix_url = '.html';
$interval = -1; //interval -5 jam ke belakang

header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>
         <urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"
        xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
echo "\n";
echo "\t<url>\n";
echo "\t\t<loc>" . $agc_url ."</loc>\n";
echo "\t\t<lastmod>" . date("Y-m-d\TH:m:s+00:00", getTanggal($interval * $interval)) . "</lastmod>\n";
echo "\t</url>\n";
echo "\t<url>\n";
echo "\t\t<loc>" . $agc_url . "/" . "p" . "/" . "sitemaps" . $suffix_url . "</loc>\n";
echo "\t\t<lastmod>" . date("Y-m-d\TH:m:s+00:00", getTanggal($interval * $interval)) . "</lastmod>\n";
echo "\t</url>\n";
foreach ($keywords as $kw) {
echo "\t<url>\n";
echo "\t\t<loc>" . $agc_url . "/" . slugify($kw) . $suffix_url ."</loc>\n";
echo "\t\t<lastmod>" . date("Y-m-d\TH:m:s+00:00", getTanggal($interval * $interval)) . "</lastmod>\n";
echo "\t</url>\n";
}
echo "</urlset>";

function getTanggal($interval)
{
    $h = rand(0, 23);

    $m = rand(10, 59);

    $s = rand(10, 59);

    $tanggal = date("d");
    $bulan = date("m");
    $tahun = date("Y");
    return mktime($interval, 0, $s, $bulan, $tanggal, $tahun);
}
?>