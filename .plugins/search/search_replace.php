<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, nofollow"/>
  <title>Search and replace files</title>
</head>
<body style="margin: 0; padding: 0;">
<?php
$err_arr = array(0 => '', 1 => '');
if (isset($_POST['submit'])) {
 /* if ($_POST['text'] == '') {
    $err = ' style="border: 1px solid red"';
    if ($_POST['text'] == '')
      $err_arr[0] = $err;
    } else {
*/
    set_time_limit(0);
    error_reporting(E_ALL);

    $dir = ('../' . trim($_POST['dir']));
    $text = stripslashes($_POST['text']);
    $retext = stripslashes($_POST['retext']);
    $replace = isset($_POST['replace']) ? $_POST['replace'] : 0;
    if(isset($_POST['pattern']))
        $pattern = trim($_POST['pattern']);
    $ext = explode(',', $_POST['ext']);
    $cnt = 0;

    function scan_dir($dirname)
    {
      global $text, $retext, $replace, $ext, $cnt;

      $dir = opendir($dirname);

      while (($file = readdir($dir)) !== false) {
        if ($file != "." && $file != "..") {
          $file_name = $dirname . "/" . $file;
          if (is_file($file_name)) {
            $ext_name = substr(strrchr($file_name, '.'), 1);
            if (in_array($ext_name, $ext) || $file_name == $dirname . '/search_replace.php')
              continue;
            echo str_replace('../', '[&nbsp;/wiki', $file_name) . '&nbsp;] ';
            $content = file_get_contents($file_name);

            if (isset($pattern)) {
                $cnt = preg_match_all('/' . $pattern . '/', $content);
                echo $cnt;
                /*$inner_count = $cnt;
                while ($inner_count--){
                    echo '<hr/><br/><b>' . (($replace) ? '|| REPLACED || ' : '|| MATCHED || ') . '(' . ($cnt - $inner_count + 1) . ')</b>: ' . str_replace('../', '/wiki', $file_name) . '<hr/><br/><br/>';
                }
                if ($replace) {
                    $content = preg_replace($pattern, $retext, $content);
                    file_put_contents($file_name, $content);
                }
                */
            }
            else {
                while (strpos($content, $text) !== false) {
                $cnt++;
                if ($replace) {
                    $content = str_replace($text, $retext, $content);
                    file_put_contents($file_name, $content);
                }

                echo '<hr/><br/><b>' . (($replace) ? '|| REPLACED || ' : '|| MATCHED || ') . '(' . $cnt . ')</b>: ' . str_replace('../', '/wiki', $file_name) . '<hr/><br/><br/>';
                }
            }
          }

          if (is_dir($file_name)) {
            scan_dir($file_name);
          }
        }

      }

      closedir($dir);
    }

    $start_time = microtime(true);

    echo '<div style="padding: 10px; width: 98%; background: #FFEAEA; border: 2px solid #FFB0B0; margin-bottom: 20px">';

    if ($replace)
      echo '<h2>Text replace:</h2>';
    else
      echo '<h2>Text search:</h2> ';

    scan_dir($dir);

    if (!$cnt)
      echo 'Not found';

    $exec_time = microtime(true) - $start_time;

    printf("<br /><b>Time: %f seg.</b></div>", $exec_time);
//  } // END OF NO-SEARCH ERROR->ELSE BLOCK
}
?>
<style>
h1, h3 {
	text-align: center;
}
h3 {
	font-size: 0.9em;
	text-decoration: underline;
}
#replace_button  {
	display: inline-block;
	padding: 5px;
    outline: solid 1px;
	color: #000;
    outline-color: #000;
	font-size: 1em;
	transition: font-size 0.4s;
	cursor: pointer;
}
#replace_button:after {
	content: '?';
}
#replace_button + br + br ~ textarea {
	display: none;
}
input:checked + #replace_button {
	outline-color: red;
	color: red;
	font-size: 1.5em;
}
input:checked + #replace_button:after {
	content: '!!';
}
input:checked + #replace_button + br + br ~ textarea {
	display: block;
}
#submit {
    border: none;
    background: #0000;
    background-color: #0000;
    box-shadow: none;
    text-shadow: none;
    text-decoration: none;
    margin: 0;
    padding: 12px;
    outline: solid 1px #000;
    font-weight: bold;
    cursor: pointer;
}
textarea[name="pattern"]:after {
	content: 'This will replace search string entered above for pattern matching';
	position: relative;
	top: 100%;
	left: 6px;
	font-size: 12px;
	font-weight: 900;
}
</style>
<script type="text/javascript">
    window.addEventListener('load', function(){ document.getElementById('replace_button').addEventListener('click', function(){ document.getElementById('search_form').querySelector('input[name=replace]').checked = (document.getElementById('search_form').querySelector('input[name=replace]').checked) ? false : true })
 })
</script>

<h1>Search & Replace</h1>
<h3 style="color: red;">USE WITH CAUTION!</h3>

<div style="padding: 10px; text-align: center; overflow: hidden;">
  <form id="search_form" method="post" style="display: inline-block; text-align: left; overflow: hidden;">
    <table cellpadding="5" cellspacing="0" border="0" align="left">
      <tr>
        <td align="right">
          <p align="left">
            <strong>Text Search*:
            </strong>
          </p>
          <p>
            <textarea <?php echo $err_arr[0]; ?> name="text" cols="55" rows="8" style="height: 15px; margin: 0px; width: 429px; resize: none; padding: 10px; line-height: 15px; border: solid 1px #999; outline: none;" placeholder="SEARCH FOR:"><?php echo isset($text) ? $text : ''; ?></textarea>
          </p>
        </td>
      </tr>
      <tr>
        <td align="right">
          <div align="left">
            <strong>Not search this type files:
            </strong>
            <input type="text" size="33" name="ext"
                   value="<?php echo isset($_POST['ext']) ? $_POST['ext'] :
                       'gif,jpg,jpeg,png,zip,rar,pdf,flv,mp3,JPG,swf,doc,mpg,sxw,cdr,xls,tmp,mp4,mpeg,mpeg4,mov,avi'; ?>"/>
          </div>
        </td>
      </tr>
      <tr>
        <td align="right">
          <div align="left">
            <strong>Folder:
            </strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            <strong>/wiki/</strong><input
                <?php echo $err_arr[1]; ?> type="text" size="33" name="dir"
                                           value="<?php echo isset($dir) ? str_replace('../', '', $dir) : ''; ?>"
                                           title='Enter ".", '/>
          </div>
          <br /><br />
        </td>
      </tr>
      <tr>
        <td align="right"  style="margin-top: 5px; border-top: solid 1px #888">
        <br />
          <p align="left">
            <input type="checkbox" <?php echo isset($replace) && $replace == 1 ? ' checked' : ''; ?> name="replace" value="1" style=""/>
            <strong id="replace_button">Replace text</strong><br /><br />
            <textarea name="pattern" cols="55" rows="8" style="height: 15px; margin: 0px; width: 429px; resize: none; padding: 10px; line-height: 15px; border: solid 1px red; outline: none;" placeholder="OPTIONAL RegEX SELECTION PATTERN:"><?php echo isset($retext) ? $retext : ''; ?></textarea>
            <br />
            <textarea name="retext" cols="55" rows="8" style="height: 15px; margin: 0px; width: 429px; resize: none; padding: 10px; line-height: 15px; border: solid 1px red; outline: none;" placeholder="REPLACE WITH:"><?php echo isset($retext) ? $retext : ''; ?></textarea>
          </p>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <br/>
          <input type="submit" name="submit" id="submit" value="SEARCH&nbsp;/&nbsp;REPLACE"/>
        </td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
