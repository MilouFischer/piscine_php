#!/usr/bin/php
<?PHP
array_shift($argv);
$key = array_shift($argv);
$ret = NULL;
foreach ($argv as $elem)
{
	$value = explode(":", $elem);
	if (count($value) == 2 && $value[0] == $key)
		$ret = $value[1];
}
if (empty($ret) == false)
	print($ret."\n");
?>
