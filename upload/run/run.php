<pre>
<?php
$output = file_get_contents('raw.txt');

$output = preg_replace('/^(\[){0,}"/m', '', $output);
$output = preg_replace('/"?Fax:.*$/m', '', $output);
$output = preg_replace('/"Phone: ?/m', '', $output);
$output = preg_replace('/<br>/m', ' ', $output);
$output = preg_replace('/ $/m', '', $output);
$output = preg_replace('/ ?",/', ';', $output);
$output = preg_replace('/"/', '', $output);
$output = preg_replace('/(?<=(1|2|3|4|5|6|7|8|9|0))[^(1|2|3|4|5|6|7|8|9|0)]+$/m', '', $output);

echo $output;
//file_put_contents('raw.txt', $output)
?>
</pre>