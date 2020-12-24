<?php $domain = 'https://' . $_SERVER['HTTP_HOST'];?>
<?php
header("Content-Type: text/plain");
echo"User-agent: *
Disallow: 

Sitemap: $domain/p/sitemap.xml
"; ?>