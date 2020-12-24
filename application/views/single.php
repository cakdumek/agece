<?php
$title = $_SERVER['REQUEST_URI'];
$title = str_replace(['-','+'], ' ', $title);
$title = str_replace('.html', '', $title);
$title = str_replace('/', '', $title);
$title = str_replace('%20', ' ', $title);
$title = ucwords($title);
$domen = $_SERVER['HTTP_HOST'];
$domen = ucwords($domen, '.');
$sitename = $_SERVER['HTTP_HOST'];
$sitename = str_replace('.', '', $sitename);
$sitename = ucwords($sitename);

function BingText($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
?>
<!doctype html>
<html lang="en">
<head>
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
	<title><?=$title?> - <?=$sitename?></title>
</head>
<body>
	<header class="bg-white fixed-top">			
		<nav class="navbar navbar-light bg-white mb-0">
			<div class="container justify-content-center justify-content-sm-between">	
			  <a href="/" title="<?=$domen?>" class="navbar-brand mb-1"><?=$domen?></a>
			  <form class="form-inline mb-1" action="/" method="get">
			    <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search and hit enter.." aria-label="Search">
			  </form>	
			</div>			  
		</nav>				
	</header>

<?php
$lokasi = FCPATH.'sitemap-folder/keyword.txt';
$kwz = file($lokasi, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$link = str_replace(' ', '-', $kwz);
$judul = str_replace('-', ' ', $link);
$suffix_url = '.html';
?>

	<main id="main" class="main">
		<div class="container">  
			<div class="row content">
				<div class="col-md-9">
					<div class="col-sm-12 p-2">

							<h1><?=$title?></h1>
<p>
	<?php
function limit_words($string, $word_limit)
{
$words = explode(" ",$string);
return implode(" ",array_splice($words,0,$word_limit));
}
?>

<?php
echo '';
  $urlrss    = 'https://www.bing.com/search?q='.urlencode(limit_words($title,5)).'&count=3&first=1&format=rss';
  $feedbing  = simplexml_load_string(BingText($urlrss));
   foreach ($feedbing->channel->item as $itembing):
       $titled  = $itembing->title;
       $tit = $itembing->title;
$titled     = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$titled);
       $url = $titled;
       $desced  = $itembing->description;
$desced     = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$desced);
       $pubded  = $itembing->pubDate; 
  echo  '<strong>'.$titled.'</strong> '.$desced.'. ';
endforeach;
    ?>
</p>
<center><script type="text/javascript">
	atOptions = {
		'key' : 'd21fb9b02817c0ac553e0041caac120a',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://inheritedgeneralrailroad.com/d21fb9b02817c0ac553e0041caac120a/invoke.js"></scr' + 'ipt>');
</script></center>	
	<div class="navi text-center">
										<a class="badge badge-light" href="<?=$link[5].$suffix_url?>"><?php echo ucwords($judul[5]);?></a>
											<a class="badge badge-danger" href="<?=$link[10].$suffix_url?>"><?php echo ucwords($judul[10]);?></a>
											<a class="badge badge-secondary" href="<?=$link[15].$suffix_url?>"><?php echo ucwords($judul[15]);?></a>
											<a class="badge badge-info" href="<?=$link[20].$suffix_url?>"><?php echo ucwords($judul[20]);?></a>
											<a class="badge badge-dark" href="<?=$link[25].$suffix_url?>"><?php echo ucwords($judul[25]);?></a>
											<a class="badge badge-warning" href="<?=$link[30].$suffix_url?>"><?php echo ucwords($judul[30]);?></a>
											<a class="badge badge-secondary" href="<?=$link[35].$suffix_url?>"><?php echo ucwords($judul[35]);?></a>
											<a class="badge badge-danger" href="<?=$link[40].$suffix_url?>"><?php echo ucwords($judul[40]);?></a>
						</div>

						<!--ads/auto.txt-->
					</div> 
					<div class="col-sm-12">					

	<div class="row">
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[0]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[0]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[0]['thumb']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[0]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
					<h3 class="h6"><?=$gambars[0]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[1]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[1]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[1]['thumb']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[1]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
					<h3 class="h6"><?=$gambars[1]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[2]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[2]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[2]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="Aiskrim Kacang Merah Food Drink Cooking Recipes Food">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[2]['alt']?></h3>
				</div>
			</div>
		</div>
			 
<div class="d-block p-3">		 
<p>
<?php
echo '';
  $urlrss1    = 'https://www.bing.com/search?q='.urlencode(limit_words($title,5)).'&count=3&first=3&format=rss';
  $feedbing1  = simplexml_load_string(BingText($urlrss1));
   foreach ($feedbing1->channel->item as $itembing1):
       $titled1  = $itembing1->title;
       $tit1 = $itembing1->title;
$titled1     = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$titled1);
       $url1 = $titled1;
       $desced1  = $itembing1->description;
$desced1     = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$desced1);
       $pubded1  = $itembing1->pubDate; 
  echo  ''.$titled1.' '.$desced1.'. ';
endforeach;
?>
</p>
</div>	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[3]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[3]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[3]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[3]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[3]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[4]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[4]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[4]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[4]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[4]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[5]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[5]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[5]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[5]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[5]['alt']?></h3>
				</div>
			</div>
		</div>
<div class="d-block p-3">			 
<p>
<?php
echo '';
  $urlrss2    = 'https://www.bing.com/search?q='.urlencode(limit_words($title,5)).'&count=3&first=5&format=rss';
  $feedbing2  = simplexml_load_string(BingText($urlrss2));
   foreach ($feedbing2->channel->item as $itembing2):
       $titled2  = $itembing2->title;
       $tit2 = $itembing2->title;
$titled2     = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$titled2);
       $url2 = $titled2;
       $desced2  = $itembing2->description;
$desced2     = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$desced2);
       $pubded2  = $itembing2->pubDate; 
  echo  '<strong>'.$titled2.'</strong> '.$desced2.'. ';
endforeach;
?>					
</p>
</div>				
			<div class="col-12 mb-4">
				<div class="card">
										<img class="card-img-top v-cover" src="<?=$gambars[6]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[6]['alt']?>">
										<div class="card-body">
						<h3 class="h5"><b><?=$gambars[6]['alt']?></b></h3>
											</div> 
				</div>
			</div>
<div class="d-block p-3">		 
<p>
<?php
echo '';
  $urlrss3    = 'https://www.bing.com/search?q='.urlencode(limit_words($title,5)).'&count=3&first=7&format=rss';
  $feedbing3  = simplexml_load_string(BingText($urlrss3));
   foreach ($feedbing3->channel->item as $itembing3):
       $titled3  = $itembing3->title;
       $tit3 = $itembing2->title;
$titled3     = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$titled3);
       $url3 = $titled3;
       $desced3  = $itembing3->description;
$desced3     = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$desced3);
       $pubded3  = $itembing3->pubDate; 
  echo  ''.$titled3.' '.$desced3.'. ';
endforeach;
?>					
</p>
</div>	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[7]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[7]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[7]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[7]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[7]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[8]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[8]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[8]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[8]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[8]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[9]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[9]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[9]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[9]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[9]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[10]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[10]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[10]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[10]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[10]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[11]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[11]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[11]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[11]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[11]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[12]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[12]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[12]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[12]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[12]['alt']?></h3>
				</div>
			</div>
		</div>
<div class="d-block p-3">		 
<p>
	<?php
echo '';
  $urlrss4    = 'https://www.bing.com/search?q='.urlencode(limit_words($title,5)).'&count=2&first=9&format=rss';
  $feedbing4  = simplexml_load_string(BingText($urlrss4));
   foreach ($feedbing4->channel->item as $itembing4):
       $titled4  = $itembing4->title;
       $tit4 = $itembing4->title;
$titled4     = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$titled4);
       $url4 = $titled4;
       $desced4  = $itembing4->description;
$desced     = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$desced4);
       $pubded4  = $itembing4->pubDate; 
  echo  '<strong>'.$titled4.'</strong> '.$desced4.'. ';
endforeach;
    ?>
</p>
</div>	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[13]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[13]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[13]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[13]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[13]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[14]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[14]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[14]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[14]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
						
					<div class="d-block mb-2">
						<button id='image-download' class="btn btn-sm btn-outline-primary" data-url="/" data-title="<?=$gambars[14]['alt']?>.jpg">Save Image<i class="fas fa-cloud-download-alt ml-1"></i></button>
					</div>
										<h3 class="h6"><?=$gambars[14]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[15]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[15]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[15]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[15]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[15]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[16]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[16]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[16]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[16]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
						
					<div class="d-block mb-2">
						<button id='image-download' class="btn btn-sm btn-outline-primary" data-url="/" data-title="<?=$gambars[16]['alt']?>.jpg">Save Image<i class="fas fa-cloud-download-alt ml-1"></i></button>
					</div>
										<h3 class="h6"><?=$gambars[16]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[17]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[17]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[17]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[17]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[17]['alt']?></h3>
				</div>
			</div>
		</div>
			 
		 

	 
		
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<a href="<?=$gambars[18]['imgsrc']?>" data-lightbox="roadtrip" data-title="<?=$gambars[18]['alt']?>">
											<img class="card-img v-image" src="<?=$gambars[18]['imgsrc']?>" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';" alt="<?=$gambars[18]['alt']?>">
										
				</a>
				<div class="card-body text-center">      
				<h3 class="h6"><?=$gambars[18]['alt']?></h3>
				</div>
			</div>
		</div>
	</div>
<p>
	If you think this blog article is useful, please support me by sharing this website article post to your social media accounts such as Facebook, Instagram and others or you can bookmark this website page with the title <strong><a href="<?=$_SERVER['REQUEST_URI']?>"><?=$title?></a></strong> use Ctrl + D for a laptop with a windows operating system or Command + D for a computer with a Mac OS operating system. If you are using a cellphone, you can also use the drawer menu from the browser you are using. Whether it's Windows, Mac, iOs or Android operating system, you will still be able to bookmark this blog page.
</p>
	<center><script type="text/javascript">
	atOptions = {
		'key' : 'd21fb9b02817c0ac553e0041caac120a',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://inheritedgeneralrailroad.com/d21fb9b02817c0ac553e0041caac120a/invoke.js"></scr' + 'ipt>');
</script></center>

				<div class="clearfix"></div> 
		<div class="d-block mt-4 p-3">
			Source : <a href="https://yahoo.com" rel="nofollow noopener">yahoo.com</a>
		</div>
						</div>
				</div> 
				<div class="col-md-3">
					<div class="col-sm-12 widget">
						<h3 class="widget-title">Recent Posts</h3>
						<ul class="list-group">
<li class="list-group-item"><a href="<?=$link[1].$suffix_url?>"><?php echo ucwords($judul[1]);?></a></li>
<li class="list-group-item"><a href="<?=$link[2].$suffix_url?>"><?php echo ucwords($judul[2]);?></a></li>
<li class="list-group-item"><a href="<?=$link[3].$suffix_url?>"><?php echo ucwords($judul[3]);?></a></li>
<li class="list-group-item"><a href="<?=$link[4].$suffix_url?>"><?php echo ucwords($judul[4]);?></a></li>
<li class="list-group-item"><a href="<?=$link[5].$suffix_url?>"><?php echo ucwords($judul[5]);?></a></li>
<li class="list-group-item"><a href="<?=$link[6].$suffix_url?>"><?php echo ucwords($judul[6]);?></a></li>
<li class="list-group-item"><a href="<?=$link[7].$suffix_url?>"><?php echo ucwords($judul[7]);?></a></li>
<li class="list-group-item"><a href="<?=$link[8].$suffix_url?>"><?php echo ucwords($judul[8]);?></a></li>
<li class="list-group-item"><a href="<?=$link[9].$suffix_url?>"><?php echo ucwords($judul[9]);?></a></li>
<li class="list-group-item"><a href="<?=$link[10].$suffix_url?>"><?php echo ucwords($judul[10]);?></a></li>
<li class="list-group-item"><a href="<?=$link[11].$suffix_url?>"><?php echo ucwords($judul[11]);?></a></li>
<li class="list-group-item"><a href="<?=$link[12].$suffix_url?>"><?php echo ucwords($judul[12]);?></a></li>
<li class="list-group-item"><a href="<?=$link[13].$suffix_url?>"><?php echo ucwords($judul[13]);?></a></li>
<li class="list-group-item"><a href="<?=$link[14].$suffix_url?>"><?php echo ucwords($judul[14]);?></a></li>
<li class="list-group-item"><a href="<?=$link[15].$suffix_url?>"><?php echo ucwords($judul[15]);?></a></li>
<li class="list-group-item"><a href="<?=$link[16].$suffix_url?>"><?php echo ucwords($judul[16]);?></a></li>
<li class="list-group-item"><a href="<?=$link[17].$suffix_url?>"><?php echo ucwords($judul[17]);?></a></li>
<li class="list-group-item"><a href="<?=$link[18].$suffix_url?>"><?php echo ucwords($judul[18]);?></a></li>
<li class="list-group-item"><a href="<?=$link[19].$suffix_url?>"><?php echo ucwords($judul[19]);?></a></li>
<li class="list-group-item"><a href="<?=$link[20].$suffix_url?>"><?php echo ucwords($judul[20]);?></a></li>
<li class="list-group-item"><a href="<?=$link[21].$suffix_url?>"><?php echo ucwords($judul[21]);?></a></li>
<li class="list-group-item"><a href="<?=$link[22].$suffix_url?>"><?php echo ucwords($judul[22]);?></a></li>
<li class="list-group-item"><a href="<?=$link[23].$suffix_url?>"><?php echo ucwords($judul[23]);?></a></li>
<li class="list-group-item"><a href="<?=$link[24].$suffix_url?>"><?php echo ucwords($judul[24]);?></a></li>
<li class="list-group-item"><a href="<?=$link[25].$suffix_url?>"><?php echo ucwords($judul[25]);?></a></li>
<li class="list-group-item"><a href="<?=$link[26].$suffix_url?>"><?php echo ucwords($judul[26]);?></a></li>
<li class="list-group-item"><a href="<?=$link[27].$suffix_url?>"><?php echo ucwords($judul[27]);?></a></li>
<li class="list-group-item"><a href="<?=$link[28].$suffix_url?>"><?php echo ucwords($judul[28]);?></a></li>
<li class="list-group-item"><a href="<?=$link[29].$suffix_url?>"><?php echo ucwords($judul[29]);?></a></li>
<li class="list-group-item"><a href="<?=$link[30].$suffix_url?>"><?php echo ucwords($judul[30]);?></a></li>
<li class="list-group-item"><a href="<?=$link[31].$suffix_url?>"><?php echo ucwords($judul[31]);?></a></li>
<li class="list-group-item"><a href="<?=$link[32].$suffix_url?>"><?php echo ucwords($judul[32]);?></a></li>
<li class="list-group-item"><a href="<?=$link[33].$suffix_url?>"><?php echo ucwords($judul[33]);?></a></li>
<li class="list-group-item"><a href="<?=$link[34].$suffix_url?>"><?php echo ucwords($judul[34]);?></a></li>
<li class="list-group-item"><a href="<?=$link[35].$suffix_url?>"><?php echo ucwords($judul[35]);?></a></li>
<li class="list-group-item"><a href="<?=$link[36].$suffix_url?>"><?php echo ucwords($judul[36]);?></a></li>
<li class="list-group-item"><a href="<?=$link[37].$suffix_url?>"><?php echo ucwords($judul[37]);?></a></li>
<li class="list-group-item"><a href="<?=$link[38].$suffix_url?>"><?php echo ucwords($judul[38]);?></a></li>
<li class="list-group-item"><a href="<?=$link[39].$suffix_url?>"><?php echo ucwords($judul[39]);?></a></li>
<li class="list-group-item"><a href="<?=$link[40].$suffix_url?>"><?php echo ucwords($judul[40]);?></a></li>
<li class="list-group-item"><a href="<?=$link[41].$suffix_url?>"><?php echo ucwords($judul[41]);?></a></li>
<li class="list-group-item"><a href="<?=$link[42].$suffix_url?>"><?php echo ucwords($judul[42]);?></a></li>
<li class="list-group-item"><a href="<?=$link[43].$suffix_url?>"><?php echo ucwords($judul[43]);?></a></li>
<li class="list-group-item"><a href="<?=$link[44].$suffix_url?>"><?php echo ucwords($judul[44]);?></a></li>
<li class="list-group-item"><a href="<?=$link[45].$suffix_url?>"><?php echo ucwords($judul[45]);?></a></li>
<li class="list-group-item"><a href="<?=$link[46].$suffix_url?>"><?php echo ucwords($judul[46]);?></a></li>
<li class="list-group-item"><a href="<?=$link[47].$suffix_url?>"><?php echo ucwords($judul[47]);?></a></li>
<li class="list-group-item"><a href="<?=$link[48].$suffix_url?>"><?php echo ucwords($judul[48]);?></a></li>
<li class="list-group-item"><a href="<?=$link[49].$suffix_url?>"><?php echo ucwords($judul[49]);?></a></li>
<li class="list-group-item"><a href="<?=$link[50].$suffix_url?>"><?php echo ucwords($judul[50]);?></a></li>
						</ul>
					</div>
					<div class="col-sm-12 widget">
						<!--ads/auto.txt-->

						<!-- ads -->
					</div>
				</div> 
			</div>
			<div class="row footer">
				<div class="col-md-12 text-center">
										<a href="/p/dmca">Dmca</a>
										<a href="/p/contact">Contact</a>
										<a href="/p/disclaimer">Disclaimer</a>
										<a href="/p/privacy">Privacy</a>
										<a href="/p/sitemaps.html">Sitemaps</a>
										<div><p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> <strong><?=$domen?></strong>. All rights reserved.
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p></div>
									</div>
			</div>
		</div>
		<!-- <style>
	#topbar{  background:#ddd;  width:100%;  text-align:center;  color:#333;  padding:5px;  overflow:hidden;  height:89px;  z-index:1000;  font-family:Georgia;  font-size:17px;  line-height:30px;  position:fixed;  bottom:0;  left:0;  border-top:3px solid #26ADE4;  box-shadow:0 1px 5px rgba(0,0,0,.7);
	}

	#topbar a{-webkit-box-shadow:rgba(0,0,0,0.278431) 1px 1px 3px; background:#26ADE4;  border-bottom-left-radius:4px;  border-bottom-right-radius:4px;  border-top-left-radius:4px;  border-top-right-radius:4px;  border:none;  box-shadow:rgba(0,0,0,0.278431) 1px 1px 3px;  color:white;  cursor:pointer;  font-size:0.95em;  margin:0px 0px 0px 7px;  outline:none;  padding:5px 13px 5px;  position:relative;  text-decoration:initial;
		font-size:19px;
	}

	#topbar a:hover{  cursor:pointer;background:#444}

	#topbar a:active{  top:1px}

</style>

<div id='topbar'>
	<p>Write an awesome ad copy here. 
	  	<br>
		<a href="#your-offer-url" target="_blank">CTA Link &rarr;</a>
	</p>
</div> -->		<!--ads/auto.txt-->	</main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js" integrity="sha256-CtKylYan+AJuoH8jrMht1+1PMhMqrKnB8K5g012WN5I=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.min.js"></script>
	<script type='text/javascript'>
		$(document).ready(function()
	    {
			$(document).on('click','#image-download',function(e)
			{
				e.preventDefault();
				var url = $(this).data('url');
				var title = $(this).data('title');			
				var x=new XMLHttpRequest();
				x.open( "GET", url , true);
				x.responseType="blob";
				x.onload= function(e){download(e.target.response, title, "image/jpg");};
				x.send();
			});
	    });
	</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
	  $('body').addClass('xepo_ads');
	});

	$(document).on('click','.xepo_ads',function(e)
	{
	    $(this).removeClass('xepo_ads');
	    window.open('https://inheritedgeneralrailroad.com/f2dbgriw?key=3599303f4ceed1f2635a1cca0f5e2cb4', '_blank');
	});
</script>

<script type='text/javascript' src='//inheritedgeneralrailroad.com/99/59/cb/9959cb27b9995ebeb975c47c825f8dfa.js'></script>

<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4403915,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4403915&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->

</body>
</html>