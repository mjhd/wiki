<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHPinfo()</title>
  <style>		
	@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700) !important;
	body {
		padding: 2%;
		background: -webkit-linear-gradient(left, #25c481, #25b7c4) !important;
		background: linear-gradient(to right, #25c481, #25b7c4) !important;
		font-family: 'Roboto', sans-serif !important;
	}
	div.center * {
		color: #fff !important;
		border-color: #fff !important;
	}
	table {
		width: 100% !important;
		table-layout: fixed !important;
		height: 300px !important;
		overflow-x: auto !important;
		margin-top: 0 !important;
		border: 1px solid rgba(255,255,255,0.3) !important;
		max-width: 1120px !important;
	}
	table * {
		background: none !important;
		background-color: rgba(255,255,255,0)0 !important;
	}
	h1 {
		font-size: 36px !important;
		text-transform: uppercase !important;
		text-align: center !important;
		margin-bottom: 15px !important;
	}
	table:nth-of-type(1) h1 {
		text-align: left !important;
	}
	table:nth-of-type(1), table:nth-of-type(1) * {
		border: none !important;
		box-shadow: none !Important;
	}
	th {
		padding: 20px 15px !important;
		text-align: left !important;
		font-weight: 500 !important;
		font-size: 12px !important;
		text-transform: uppercase !important;
	}
	td {
		padding: 15px !important;
		text-align: left !important;
		vertical-align: middle !important;
		font-size: 15px !important;
		color: #fff !important;
		border-bottom: solid 1px rgba(255,255,255,0.1) !important;
	}
	td > a {
		float: right !important;
		padding: 15px !important;
	}
	div.center td > a {
	    float: right !important;
	    padding: 15px !important;
	    background: #ffffff14 !important;
	    margin: 10px !important;
	    border-radius: 3px !important;
	    border: solid 1px #ffffff59 !important;
		transition: background 0.5s, border-color 0.5s !important;
	}
	div.center td > a:hover {
		background: #ffffff45 !important;
		border-color: #5e5d5d38 !important;
	}
	table:nth-of-type(1) td {
		padding: 0 10px 0 72px !important;
	}
	div.center > table:nth-of-type(1) td > a {
		border-radius: 100% !important;
	}
	td > a img {
		float: none !important;
	}
  </style>
</head>
<body>
  <?php phpinfo(); ?>
</body>
</html>

