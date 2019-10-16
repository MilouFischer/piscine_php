#!/usr/bin/php
<?PHP
function	ft_split($str)
{
	$array = preg_split("/ +/", $str);
	sort($array);
	return ($array);
}
?>
