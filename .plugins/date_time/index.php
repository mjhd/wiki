<style>

	body, html {
		margin: 0;
		padding: 0;
		height: 100%;
		width: 100%;
		overflow: hidden
	}
	iframe {
		position: absolute;
		border: none;
		outline: none;
		overflow: hidden !important;
	}

	#top {
		top: 0px;
		height: 200px;
		width: 10000px;
	}
	#side {
		top: 200px;
		width: 200px;
		height: 10000px;
	}
	#cal {
		top: 200px;
	    left: 200px;
	    height: calc(100% - 200px);
	    width: calc(100% - 200px);
	    max-width: 2800px;
	    max-height: 2000px;
	}

	@media screen only and (orientation: landscape){
		html, body {
			white-space: nowrap;
			height: 100%;
		}
		body > canvas {
			position: relative;
		 	top: 50%;
		 	transform: translateY(-50%);
		}
	}
	@media screen only and (orientation: portrait){
		body > canvas {
			display: block;
			margin: auto;
		}
	}

</style>

<iframe src="clocks" id="top"></iframe>
<iframe src="clocks" id="side"></iframe>
<iframe src="cal" id="cal"></iframe>