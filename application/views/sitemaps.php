<?php
#CONFIG
require 'function.php';
$lokasi = FCPATH.'sitemap-folder/keyword.txt';
$keywords = file($lokasi, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$agc_url = 'https://' . $_SERVER['HTTP_HOST'];
$suffix_url = '.html';
$domen = $_SERVER['HTTP_HOST'];
$domen = ucwords($domen, '.');
?>
<!--DOCTYPE HTML-->
<html>
<head>
    <title>Sitemaps Of <?php echo ucwords($domen);?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content='index,follow' name='robots'/>
    <meta Content='snippet' name='googlebot'/>
    <meta content='en' name='language'/>
    <meta content='ID, US, CA, UK, FR, ES, JP, CN , DE' name='geo.country'/>
    <meta content='Indonesia, United States, Canada, United Kingdom, France, Espana, Japan, China, Germany' name='geo.placename'/>
    <meta content='2 days' name='revisit-after'/>
    <meta content='2 days' name='revisit'/>
    <meta content='never' name='expires'/>
    <meta content='always' name='revisit'/>
    <meta content='global' name='distribution'/>
    <meta content='general' name='rating'/>
    <meta content='follow, all' name='Googlebot-Image'/>
    <meta content='follow, all' name='Scooter'/>
    <meta content='follow, all' name='msnbot'/>
    <meta content='follow, all' name='alexabot'/>
    <meta content='follow, all' name='Slurp'/>
    <meta content='follow, all' name='ZyBorg'/>
    <meta content='follow, all' name='Scooter'/>
    <meta content='ALL' name='SPIDERS'/>
    <meta content='ALL' name='WEBCRAWLERS'/>
    <meta content='1, 2, 3, 10, 11, 12, 13, ATF' name='serps'/>
    <meta content='Aeiwi, Alexa, AllTheWeb, AltaVista, AOL Netfind, Anzwers, Canada, DirectHit, EuroSeek, Excite, Overture, Go, Google, HotBot. InfoMak, Kanoodle, Lycos, MasterSite, National Directory, Northern Light, SearchIt, SimpleSearch, WebsMostLinked, WebTop, What-U-Seek, AOL, Yahoo, WebCrawler, Infoseek, Excite, Magellan, LookSmart, CNET, Googlebot' name='search engines'/>
    <meta content=' ' property='fb:app_id'/>
    <meta content=' ' property='fb:admins'/>
    <meta content=' ' name='twitter:site'/>
    <meta content=' ' name='twitter:creator'/>
    <meta content=' ' name='msvalidate.01'/>
    <meta content=' ' name='alexaVerifyID'/>
    <meta content='index.php' name='Author'/>
    <meta content='all' name='robots'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" integrity="sha256-tBxlolRHP9uMsEFKVk+hk//ekOlXOixLKvye5W2WR5c=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">  
    <style type="text/css">
body,html{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;background:#fff}img{max-width:100%}.header{padding-bottom:13px;margin-bottom:13px}.container{max-width:1024px}.navbar{margin-bottom:25px;color:#f1f2f3;border-bottom:1px solid #e1e2e3}.navbar .navbar-brand{margin:0 20px 0 0;font-size:28px;padding:0;line-height:24px}.row.content,.row.footer,.row.header{widthx:auto;max-widthx:100%}.row.footer{padding:30px 0;background:0 0}.content .col-sm-12{padding:0}.content .col-md-9s{margin-right:-25px}.posts-image{width:25%;display:block;float:left}.posts-image-content{width:auto;margin:0 15px 35px 0;position:relative}.posts-image:nth-child(5n) .posts-image-content{margin:0 0 35px!important}.posts-image img{width:100%;height:150px;object-fit:cover;object-position:center;margin-bottom:10px;-webkit-transition:.6s opacity;transition:.6s opacity}.posts-image:hover img{opacity:.8}.posts-image:hover h2{background:rgba(0,0,0,.7)}.posts-image h2{z-index:2;position:absolute;font-size:14px;bottom:2px;left:0;right:0;padding:5px;text-align:center;-webkit-transition:.6s opacity;transition:.6s background}.posts-image h2 a{color:#fff}.posts-image-big{display:block;width:100%}.posts-image-big .posts-image-content{margin:0 0 10px!important}.posts-image-big img{height:380px}.posts-image-big h2{text-align:left;padding-left:0;position:relative;font-size:30px;line-height:36px}.posts-image-big h2 a{color:#111}.posts-image-big:hover h2{background:0 0}.posts-image-single .posts-image-content,.posts-image-single:nth-child(5n) .posts-image-content{margin:0 15px 15px 0!important}.posts-image-single p{font-size:12px;line-height:18px!important}.posts-images{clear:both}.list-group li{padding:0}.list-group li a{display:block;padding:8px}.widget{margin-bottom:20px}h3.widget-title{font-size:20px}a{color:#f42966;text-decoration:none}.footer{margin-top:21px;padding-top:13px;border-top:1px solid #eee}.footer a{margin:0 15px}.navi{margin:13px 0}.navi a{margin:5px 2px;font-size:95%}@media  only screen and (min-width:0px) and (max-width:991px){.container{width:auto;max-width:100%}.navbar{padding:5px 0}.navbar .container{width:100%;margin:0 15px}}@media  only screen and (min-width:0px) and (max-width:767px){.content .col-md-3{padding:15px}}@media  only screen and (min-width:481px) and (max-width:640px){.posts-image img{height:90px}.posts-image-big img{height:320px}.posts-image-single{width:33.3%}.posts-image-single:nth-child(3n) .posts-image-content{margin-right:0!important}}@media  only screen and (min-width:0px) and (max-width:480px){.posts-image img{height:80px}.posts-image-big img{height:240px}.posts-image-single{width:100%}.posts-image-single .posts-image-content{margin:0!important}.posts-image-single img{height:auto}}.v-cover{height: 380px; object-fit: cover;}.v-image{height: 200px; object-fit: cover;}.main{margin-top: 6rem;}.form-inline .form-control{min-width: 300px;}
    </style>
</head>
<body>
        <div class="container">  
            <div class="row">
                <div class="col-md-9">
                    <div class="card h-100">
                        <h1>Sitemaps Of <?php echo ucwords($domen);?></h1>
<div class="col-sm-12">
<p>
+ <a href="<?=$agc_url?>"><strong><?=$domen?></strong></a><br>
<?php foreach ($keywords as $kw): ?>
+ <a href="<?=$agc_url."/".slugify($kw).$suffix_url?>"><strong><?php echo ucwords($kw);?></strong></a><br>
<?php endforeach ?>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<script type='text/javascript' src='//inheritedgeneralrailroad.com/99/59/cb/9959cb27b9995ebeb975c47c825f8dfa.js'></script>
</body>
</html>
