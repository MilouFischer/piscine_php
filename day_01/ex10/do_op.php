#!/usr/bin/php
<?PHP
function	epur_str($str)
{
	$str = preg_replace("/^ +| +$| +(?= )/", "", $str);
	return ($str);
}

if ($argc != 4)
{
	print("Incorrect Parameters\n");
	return ;
}
if (epur_str($argv[2]) == '+')
	echo epur_str($argv[1]) + epur_str($argv[3]);
if (epur_str($argv[2]) == '-')
	echo epur_str($argv[1]) - epur_str($argv[3]);
if (epur_str($argv[2]) == '*')
	echo epur_str($argv[1]) * epur_str($argv[3]);
if (epur_str($argv[2]) == '/')
{
	if ($argv[3] == 0)
		exit();
	echo epur_str($argv[1]) / epur_str($argv[3]);
}
if (epur_str($argv[2]) == '%')
{
	if ($argv[3] == 0)
		exit();
	echo epur_str($argv[1]) % epur_str($argv[3]);
}
echo "\n";
?>
