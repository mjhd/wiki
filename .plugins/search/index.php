<!DOCTYPE html><html lang="en"><head>
<meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search & Replace</title><meta name="description" content=""><meta name="keywords" content="">
<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="style.css"><script src="script.js"></script>
<style>
html, body {
	padding: 0 !important;
	margin: 0 !important;
	height: 100%;
	width: 100%;
}

section {
	float: left;
}

iframe {
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	outline: solid 1px #999;
	border: none;
}

@media screen and (orientation: landscape){
	section {
		width: 50%;
		height: 100%;
	}
}
@media screen and (orientation: portrait){
	section {
		width: 100%;
		height: 50%;
	}
}
</style>
</head><body>
  <section id="search_only"><iframe src="search.php"></iframe></section>
  <section id="search_replace"><iframe src="search_replace.php"></iframe></section>
</body></html>