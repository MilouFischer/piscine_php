#!/usr/bin/php
<?PHP
if ($argc == 1)
	return ;
$str = $argv[1];
$array = preg_split("/ +/", $str);
foreach($array as $elem)
{
	if ($elem == $array[0])
		continue ;
	else
	{
		print($elem." ");
	}
}
print($array[0]."\n");
?>
