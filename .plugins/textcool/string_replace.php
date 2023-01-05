<?php
    ini_set('max_execution_time', 14400);
    ini_set('memory_limit', -1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Batch process text</title>
<meta name="description" content="">
<meta name="keywords" content="">

<style>
html, body {
	margin: 0 !important;
	padding: 0 !important;
	overflow-x: hidden;
}
body > header {
    position: fixed;
	width: 100%;
	height: 25px;
	padding: 22px 2%;
	border-bottom: solid 2px #555;
    overflow: visible;
}
body > header:before {
	content: 'Processing';
}
body[data-progress_step="1"]  > header:after {
	content: '.' !important;
}
body[data-progress_step="2"] > header:after {
	content: '..' !important;
}
body > header:after {
	content: '...';
}
body.loaded > header:before {
	content: '' !important;
}
body.loaded > header:after {
	content: '' !important;
}
body > header > form { 
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
	width: 100%;
    background: #fff;
}
body > header > form > div {
	position: relative;
	float: left;
	height: 100%;
	width: 15%;
}
body > header > form > div:nth-child(2), body > header > form > div:nth-child(3) {
	width: 35%;
}
body > header > form > div > label, body > header > form > div > textarea, body > header > form > div > label + input {
	position: absolute;
	width: 90%;
	height: 50%;
	margin-left: 5%;
}
body > header > form > div > label, body > header > form > div > textarea {
	height: calc(50% - 8px);
}
body > header > form > div > textarea, body > header > form > div > label + input {
	top: 50%;
}
#copy {
    display: none;
    float: left;
}
#copy:before {
    content: 'Copy Text';
}
body.loaded #copy {
    display: initial;
}
body > textarea {
	position: absolute;
	top: 60px;
	left: 2px;
	height: calc(100% - 85px);
	width: 100%;
	padding: 0px;
    padding-bottom: 25px;
	resize: none;
	outline: none;
	border: none;
	overflow-y: scroll;
}
body.selecting > textarea::selection {
  background: transparent;
}
body.selecting > textarea::-moz-selection {
  background: transparent;
}
#copy_msg {
    display: none;
    margin-top: -15px;
    margin-left: calc(50% - 1px);
    position: relative;
    color: #fff;
}
#copy_msg > h2 {
    position: relative;
    left: -50%;
    margin: 0;
    padding: 12px 6px;
    border: solid 2px #f00;
    background: #e92929;
    border-radius: 25px;
}
body.copied #copy_msg {
	display: inline-block;
}
</style>

</head>
<body data-progress_step="0">

<header>
    <aside id="copy_msg"><h2>Text Copied!</h2></aside><button id="copy"></button>


<?php

if (!empty($_POST)):
  $output = '';
  if(isset($_FILES['upload']) && isset($_POST['match']) && isset($_POST['replace']))
      $output = str_replace($_POST['match'], $_POST['replace'], join('', file($_FILES['upload']['tmp_name'])));
  echo '</header><h2 id="replaced">' . $_POST['replace'] . '</h2><h2 id="matched">' . $_POST['match'] . '</h2><textarea id="output_data">' . $output . '</textarea>';

?>

<script>
    window.setInterval(function(){
        document.body.dataset.progress_step = (parseInt(document.body.dataset.progress_step) + ((parseInt(document.body.dataset.progress_step) < 2) ? 1 : -2))
    }, 650)
    document.getElementById('copy').addEventListener('click', function() {
        document.body.classList.add('selecting')
        document.getElementById('output_data').select()
        document.execCommand('copy')
        document.body.classList.add('copied')
        document.getSelection().removeAllRanges()
        document.body.classList.remove('selecting')
        window.setTimeout(function (){ document.body.classList.remove('copied') }, 1750)
    })
    window.addEventListener('load', function() {
        document.body.classList.add('loaded')
    })
</script>

<?php else: ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <div>
        <label for="upload">File to batch:</label>
        <input type="file" name="upload" id="upload">
    </div>
    <div>
        <label for="match">String to match:</label>
        <textarea name="match" id="match"></textarea>
    </div>
    <div>
        <label for="replace">String to replace:</label>
        <textarea name="replace" id="replace"></textarea>
    </div>
    <div>
        <input type="submit" value="Replace" name="submit">
    </div>
</form>
</header>
<?php endif; ?>

</body></html>
