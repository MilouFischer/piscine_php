#!/usr/bin/php
<?PHP
if ($argc == 1)
	return ;
if ($argc > 2)
{
	echo "Too much arguments\nusage: epur_str arg\n";
	return ;
}
$str = preg_replace("/^ +| +$| +(?= )/", "", $argv[1]);
echo "$str\n";
?>
