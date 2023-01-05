<style>
html, body {
	margin: 0;
	padding: 0;
	overflow: hidden;
}

iframe {
        margin: 0;
        padding: 0;
        outline: none;
}


@media (orientation: portrait){
iframe {
	border-bottom: solid 2px #333;
	width: 100%;
	height: calc(50% - 1px);
}
}
@media (orientation: landscape){
iframe {
        border-right: solid 2px #333;
        height: 100%;
        width: calc(50% - 1px);
}
iframe:nth-of-type(2){
	position: absolute;
	right: -1px;
}
}
</style>
<iframe src="sys_info"></iframe>
<iframe src="linfo"></iframe>
