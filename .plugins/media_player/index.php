<?php
    ini_set('max_execution_time', 72000); // Allow up to 20 mins to produce sitemap
    ini_set("memory_limit", "-1"); // Allow any amount of memory the system will give (no limit)
    //ignore_user_abort(True);

    $refresh = (!empty($_GET['refresh'])) ? True : False;
    $play = (!empty($_GET['play'])) ? True : False;
?>

<style>
	body {
		font-family: Arial;
		font-size: 14px;
	}
	body > h1, body > section {
		width: 96%;
		margin: auto;
		max-width: 1200px;
		text-align: center;
	}
	#reload_media {
	    position: absolute;
	    top: -1px;
	    left: 40px;
	    height: 60px;
	    width: 50px;
	    border: solid 1px rgb(14,181,14);
		background: yellow;
	}
	#reload_media:hover {
		background: #fa0;
		border: solid 1px rgb(0,143,255);
	}
	#reload_media:hover svg path {
		fill: rgb(0,143,255);
	}
	#reload_media svg {
		width: 100%;
		height: 100%;
	}
	#reload_media svg path {
		transform: scale(0.085) translateX(42px) translateY(125px);
		fill: rgb(14,181,14);
	}
	#reload_media:hover:after {
		content: 'Refresh my media please!';
		position: absolute;
		left: calc(100% + 12px);
		bottom: 35%;
		white-space: pre;
		color:  #fa0;
	}
	#song_title {
		padding-left: 80px;
	}
	#status_message {
		position: fixed;
	    top: -1px;
	    right: 200px;
		padding: 4px 8px;
		font-size: 16px;
		color: #fff;
		font-weight: 600;
		background: rgb(0,143,255);
		border: solid 1px rgb(14,181,14);
		border-radius: 0 0 6px 6px;
		display: none;
	}
	#status_message.active {
		display: block;
	}
	#media_player {
		width: 100%;
		margin: auto;
		outline: none !important;
	}
	#playlist_container, body > h1 {
		margin: 40px auto;
		text-align: left;
	}
	#song_title {

	}
	.song {
		display: inline-block;
		padding: 6px 10px;
		background: yellow;
		margin: 5px;
		border-radius: 6px;
		cursor: pointer;
	}
	.song:before {
	    content: '▸';
	    margin: 0;
	    margin-right: 6px;
	    padding: 2px;
	    color: rgb(14,181,14);
	    font-size: 18px;
	    font-weight: 600;
	}
	.song:after {
		content: attr(data-duration);
	    position: relative;
	    left: 10px;
	    padding: 10px 8px 9px 6px;
	    border-radius: 3px 6px 6px 3px;
	    background: rgb(0,143,255);
	    color: #fff;
	    font-weight: 600;
	}
	.song:hover, .song.current {
		background: #fa0;
	}
</style>

<script type="text/javascript">
<?php

function get_media($list, $filetype) {
	$matches = array();
	foreach ($list as $value) {
	    if ($value->isDir())
	        continue;
	    else if (preg_match('/.*\.' . $filetype . '$/', $value->getPathname()))
	    	array_push($matches, array($value->getFilename(), str_replace('%2F', '/', rawurlencode($value->getPathname()))));
	}
	return $matches;
}


$filetype = ((!empty($_POST['filetype'])) ? $_POST['filetype'] : 'mp3');

if ($refresh) {
	$file_list_raw = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('../../upload'));
	$media = get_media($file_list_raw, $filetype);
	require('mp3_class.php');
?>
	var current_media_list = []
	localStorage.removeItem("media_list_<?php echo $filetype; ?>")

<?php
	$media_id = 0;
	foreach ($media as $file){
		$metadata = new mp3file(urldecode($file[1]));
		$metadata = $metadata->get_metadata();

		echo 'current_media_list.push(["'. $filetype . '_' . $media_id++ . '", "'. $file[0] . '", "' . $file[1] . '", "' . $metadata['Length mm:ss'] . '"])' . "\n";
	}

?>

	localStorage.setItem("media_list_<?php echo $filetype; ?>", JSON.stringify(current_media_list))
	localStorage.setItem("media_list_<?php echo $filetype; ?>_current", JSON.stringify(current_media_list[0]))

<?php } ?>
</script>



<a id="reload_media" href=".?refresh=please"><svg><path d="M 249.91797 4.3945312 A 256 256 0 1 0 451.84961 100.94141 L 507.84961 100.94141 L 507.84961 68.941406 L 395.84961 68.941406 L 395.84961 180.94141 L 427.84961 180.94141 L 427.84961 122.94141 A 224 224 0 1 1 357.84961 63.941406 L 372.84961 34.941406 A 256 256 0 0 0 249.91797 4.3945312 z M 260.84961 76.941406 C 248.84961 76.941406 236.84961 76.941406 225.84961 78.941406 L 229.84961 110.94141 C 239.84961 108.94141 249.84961 108.94141 258.84961 108.94141 L 260.84961 76.941406 z M 328.84961 93.941406 L 314.84961 122.94141 L 339.84961 136.94141 L 358.84961 110.94141 C 348.84961 103.94141 338.84961 97.941406 328.84961 93.941406 z M 159.84961 101.94141 C 149.84961 106.94141 139.84961 113.94141 131.84961 121.94141 L 152.84961 145.94141 L 175.84961 128.94141 L 159.84961 101.94141 z M 248.58008 148.98828 A 112 112 0 0 0 139.84961 260.94141 A 112 112 0 0 0 363.84961 260.94141 A 112 112 0 0 0 248.58008 148.98828 z M 87.849609 176.94141 L 74.849609 208.94141 L 105.84961 217.94141 C 108.84961 208.94141 111.84961 199.94141 116.84961 190.94141 L 87.849609 176.94141 z M 250.58398 180.94531 A 80 80 0 0 1 329.84961 244.94141 L 251.84961 244.94141 L 251.84961 276.94141 L 329.84961 276.94141 A 80 80 0 1 1 250.58398 180.94531 z M 403.84961 260.94141 C 403.84961 270.94141 402.84961 279.94141 400.84961 289.94141 L 432.84961 295.94141 C 434.84961 283.94141 435.84961 272.94141 435.84961 260.94141 L 403.84961 260.94141 z M 100.84961 274.94141 L 68.849609 278.94141 C 69.849609 289.94141 71.849609 301.94141 74.849609 312.94141 L 105.84961 303.94141 C 102.84961 294.94141 101.84961 284.94141 100.84961 274.94141 z M 379.84961 342.94141 C 374.84961 350.94141 368.84961 358.94141 361.84961 365.94141 L 384.84961 387.94141 C 392.84961 379.94141 400.84961 369.94141 406.84961 360.94141 L 379.84961 342.94141 z M 132.84961 354.94141 L 106.84961 374.94141 L 131.84961 399.94141 L 152.84961 375.94141 C 144.84961 369.94141 138.84961 362.94141 132.84961 354.94141 z M 314.84961 398.94141 L 287.84961 408.94141 L 294.84961 439.94141 C 306.84961 436.94141 317.84961 432.94141 328.84961 427.94141 L 314.84961 398.94141 z M 201.84961 404.94141 L 191.84961 434.94141 C 202.84961 438.94141 213.84961 441.94141 225.84961 442.94141 L 229.84961 410.94141 C 220.84961 409.94141 210.84961 407.94141 201.84961 404.94141 z "></path></svg> </a>
<h1 id="song_title"></h1>
<section id="media_container"></section>
<section id="playlist_container"></section>


<script type="text/javascript">

//var player = new Plyr(document.createElement("<?php //echo ($filetype === 'mp3') ? 'audio' : 'video' ?>"))
var player = document.createElement("audio")
player.id = "media_player"
player.controls = "true"
player.preload = "true"
<?php if ($play) echo 'player.autoplay = "true"'; ?>

var source = document.createElement("source")
source.src = JSON.parse(localStorage.getItem("media_list_<?php echo $filetype; ?>_current"))[2]
source.type = "audio/mp3"

player.append(source)

	let media_list = JSON.parse(localStorage.getItem("media_list_<?php echo $filetype; ?>"))
	window.addEventListener('load', function(){
		document.getElementById('reload_media').addEventListener('click', function() {
			var song_header = document.getElementById('song_title')
			Array.prototype.slice.call(document.getElementsByClassName('song')).forEach(function(elem){ elem.style.pointerEvents = 'none' })
			song_header.innerHTML = 'Leave this tab open while your media list refreshes!'
			song_header.style.color = 'red'
		})

		<?php if ($refresh): ?>
			window.history.pushState('page', '', '.')
			var status_message = document.getElementById('status_message')
			status_message.classList.add('active')
			window.setTimeout(function(){
				status_message.classList.remove('active')
			}, 3000)
		<?php endif; ?>

		document.getElementById('media_container').append(player)
		let current_song_id = JSON.parse(localStorage.getItem("media_list_<?php echo $filetype; ?>_current"))[0]
		for (var file of media_list){
			link = document.createElement("span")
			if (file[0] == current_song_id ) {
				link.classList.add('current')
				document.getElementById('song_title').innerHTML = file[1]
			}
			link.classList.add('song')
			link.id = file[0]
			link.dataset.title = file[1]
		    link.dataset.href = file[2]
		    link.dataset.duration = file[3]
		    link.innerText = link.dataset.title
		    link.addEventListener('click', function(event){
		    	localStorage.setItem("media_list_<?php echo $filetype; ?>_current", JSON.stringify([event.target.id, event.target.dataset.title, event.target.dataset.href]))
		    	window.location = '.?play=please'
		    })
		    document.getElementById('playlist_container').append(link)
		}
	}) //end of window load
</script>
<aside id="status_message">Refresh Complete!</aside>