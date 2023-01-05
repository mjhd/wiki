<style>
	body > div {
		float: left;
		width: 50%;
		text-align: center;
	}
	div > a {
	    display: inline-block;
	    width: 0px;
	    height: 0px;
	    padding: 60px;
	    margin: 12px;
	    outline: solid 1px #666;
	    color: #333;
	    text-decoration: none;
		text-indent: -50px;
		white-space: pre;
	    word-break: keep-all;
	}
	div > a:hover {
		color: rgb(28,139,202);
		font-weight: 600;
		outline-color: rgb(255,165,0);
	}
	body > div:nth-of-type(3) {
		position: absolute;
		top: 275px;
	}
	 body > div:nth-of-type(4) {
		float: right;
		margin-top: 65px
	}
	@media only screen and (max-width: 640px) {
		body > div {
			float: none !important;
			display: block !important;
			position: relative !important;
			top: 0px !important;
			width: 96% !important;
			margin-top: 65px !important;
			padding-left: 4%;
			text-align: left !important;
		}
		div > h3 {
			margin-left: -2%;
		}
	}
</style>

<div>
	<h3>Editors</h3>

	<a href="Method-Draw">Method-Draw</a>
	<a href="svgeditordemo">svgeditordemo</a>
</div>

<div>
	<h3>Property/Path/Shape inspectors & Optimizers</h3>

	<a href="miniSVG">miniSVG</a>
	<a href="svg-pad">svg-pad</a>
	<a href="svg_editor">svg_editor</a>
	<a href="svg_optimise">svg_optimiseX</a>
	<a href="svgcrush">svgcrush</a>
</div>

<div>
	<h3>Drawing & Shape editing/creation</h3>

	<a href="svgeditor">RaphaelSVGeditor</a>
	<a href="PolyPal">PolyPal</a>
	<a href="rapen">rapen</a>
	<a href="svg_path">svg_path</a>
	<a href="svgfractallines">svgfractallines</a>
</div>

<div>
	<h3>Animators</h3>

	<a href="Amation">Amation</a>
	<a href="anigen">anigen</a>
</div>
