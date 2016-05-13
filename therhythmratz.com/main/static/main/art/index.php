<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href='/rr.css' rel='stylesheet' type='text/css'>
	<meta name="description" content="The Rhythm Ratz are a psychobilly and rockabilly band from Colorado Springs, CO. That&#039;s Ratz with a Z not Rhythm Rats."/>
	<meta name="robots" content="noodp"/>
	<link rel="canonical" href="http://therhythmratz.com" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="The Rhythm Ratz - Rockabilly &amp; Psychobilly from Colorado Springs" />
	<meta property="og:description" content="The Rhythm Ratz are a psychobilly and rockabilly band from Colorado Springs, CO. That&#039;s Ratz with a Z not Rhythm Rats." />
	<meta property="og:url" content="http://therhythmratz.com" />
	<meta property="og:site_name" content="The Rhythm Ratz" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="The Rhythm Ratz are a psychobilly and rockabilly band from Colorado Springs, CO. That&#039;s Ratz with a Z not Rhythm Rats." />
	<meta name="twitter:title" content="The Rhythm Ratz - Rockabilly &amp; Psychobilly from Colorado Springs" />
	<meta name="twitter:site" content="@therhythmratz" />
	<link rel="icon" href="/cdn/rr-badge-32.png" sizes="32x32" />
	<link rel="icon" href="/cdn/rr-badge-192.png" sizes="192x192" />

	<title>Rhythm Ratz Logos &amp; Artwork</title>
</head>
<body>
	<h1>The Rhythm Ratz Logos &amp; Artwork</h1>
	<p>
		Here's where you can download artwork for flyers and promotional materials for <a href="http://therhythmratz.com/">The Rhythm Ratz</a>, a psychobilly and rockabilly band from Colorado Springs, CO.
	</p>

	<h2>Click an image to download the full size version</h2>

<?php

$files = scandir(".");

foreach ($files as $file) {
	$ext = pathinfo($file, PATHINFO_EXTENSION);
	if (in_array($ext, ['png', 'jpg'])) {
?>
	<div class="artdownload">
		<a href="<?= $file ?>" download="<?= $file ?>"><img src="<?= $file ?>" width="400" /></a>
	</div>
<?
	}
}
?>

</body>
</html>