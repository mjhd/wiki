
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello Week - Datepicker Javascript</title>
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
	<link href="dist/helloweek.css" rel="stylesheet">
</head>
<body>

	<style>
#carbonads {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
  Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial,
  sans-serif;
}

#carbonads {
  display: block;
  overflow: hidden;
  max-width: 728px;
  position: relative;
  font-size: 22px;
  box-sizing: content-box;
}

#carbonads > span {
  display: block;
}

#carbonads a {
  color: inherit;
  text-decoration: none;
}

#carbonads a:hover {
  color: inherit;
}

.carbon-wrap {
  display: flex;
  align-items: center;
}

.carbon-img {
  display: block;
  margin: 0;
  line-height: 1;
}

.carbon-img img {
  display: block;
  height: 90px;
  width: auto;
}

.carbon-text {
  display: block;
  padding: 0 1em;
  line-height: 1.35;
  text-align: left;
}

.carbon-poweredby {
  display: block;
  position: absolute;
  bottom: 0;
  right: 0;
  padding: 6px 10px;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  font-weight: 600;
  font-size: 8px;
  border-top-left-radius: 4px;
  line-height: 1;
  color:#ccc !important;
}

@media only screen and (min-width: 320px) and (max-width: 759px) {
  .carbon-text {
    font-size: 14px;
  }
}
		:root {
			--hello-week-max-width: 980px;
			--hello-week-bg-color: #fff;

			--hello-week-bg-day: var(--hello-week-bg-color);
			--hello-week-color-day: #ffa07a;

			--hello-week-bg-week: #fff;
			--hello-week-color-week: #cfcfcf;

			--hello-week-bg-tody: #3e3e3e;
			--hello-week-color-tody: #fff;

			--hello-week-bg-selected: #7FCBC3;
			--hello-week-color-selected: #fff;

			--hello-week-bg-weekend: #f3f3f3;
			--hello-week-color-weekend: #3e3e3e;

			--hello-week-bg-disabled: #f7f8fb;
			--hello-week-color-disabled: #cfcfcf;

			--hello-week-border-radius: 0;
		}

		html {
			font-size: 16px;
			font-family: 'Source Sans Pro', sans-serif;
		}

		body {
			margin: 0;
			padding: 0;
			line-height: 1.4;
			box-sizing: border-box;
		}
		html, body {
			overflow: hidden;
		}
		html, body, .section--hero {
			height: 100%;
		}
		.section--hero {
			overflow-y: auto;
		}

		h1 {
			font-size: 2.2rem;
			font-weight: 400;
			color: #3e3e3e;
			text-align: center;
		}

		h2 {
			font-size: 1.6rem;
			margin: 2rem 0;
		}

		p {
			padding: 0 0 0 5%;
    		font-size: 1rem;
		}

		.hello-week {
			position: relative;
		    top: 50%;
		    transform: translateY(-50%);
		}



		.section--hero {
			/*min-height: 100vh;*/
			padding: 5px;
			background-color: #FCEE55;
		}

		.section--options {
			background-color: var(--hello-week-bg-selected);
			min-height: 100vh;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: space-between;
			max-width: 960px;
			height: 100%;
			margin: auto;
		}


		.demo-exemplo {
		    position: absolute;
		    top: 0px;
		    left: 0px;
			width: 100%;
		}

		.demo-exemplo > * {
			display: inline-block;
		}

		.demo-exemplo ul li {
			list-style: none;
			padding: 0;
			margin: 0;
			background: var(--hello-week-bg-tody);
			height: auto;
			align-items: center;
			justify-content: center;
			display: inline-flex;
			padding: 2px 4px;
			margin: 4px;
			border-radius: 4px;
			color: #fff;
			font-weight: 600;
		}

		.demo-today {
			margin: 10px;
    		padding: 0;
		}
		@media only screen and (max-height: 490px){
			.hello-week {
			    top: 0;
			    transform: none;
			}
		}
	</style>
	<section class="section section--hero">
		<div class="container">
			<div class="hello-week">
				<div class="demo-exemplo">
					<p><strong>Today:</strong> </p>
					<ul class="demo-today"><span>n/a</span></ul>
				</div>
				<div class="hello-week__header">
					<button class="btn demo-prev">◀</button>
					<div class="hello-week__label"></div>
					<button class="btn demo-next">▶</button>
				</div>
				<div class="hello-week__week"></div>
				<div class="hello-week__month"></div>
			</div>

			
		</div>
	</section>


<script src="dist/helloweek.min.js" type="text/javascript"></script>
<script>
	const prev = document.querySelector('.demo-prev');
	const next = document.querySelector('.demo-next');
	const today = document.querySelector('.demo-today');


	function updateInfo() {
		if (this.today) {
			today.innerHTML = '';
			var li = document.createElement('li');
			li.innerHTML = this.today;
			today.appendChild(li);
		}
	}

	const myCalendar = new HelloWeek({
		selector: '.hello-week',
		lang: 'en',
		format: 'MM/DD/YYYY',
		monthShort: true,
		weekShort: true,
		disablePastDays: true,
		multiplePick: false,
		// minDate: 1520696057,
		// maxDate: 1522519829,
		onLoad: updateInfo,
		onChange: updateInfo,
		onSelect: updateInfo
	});

	prev.addEventListener('click', () => myCalendar.prev());
	next.addEventListener('click', () => myCalendar.next());

</script>

</body>

</html>

