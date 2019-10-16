#!/usr/bin/php
<?PHP
function	epur_str($str)
{
	$str = preg_replace("/ /", "", $str);
	return ($str);
}

if ($argc != 2)
{
	print("Incorrect Parameters\n");
	return ;
}
$str = epur_str($argv[1]);
if (preg_match("#[0-9]|\+|\-|\*|\/|%#", $str) == FALSE)
{
	print("Syntax Error\n");
	return (-1);
}
$tab = preg_split("#\+|\-|\*|\/|\%#", $str);
if (count($tab) != 2)
{
	print("Syntax Error\n");
	return (-1);
}
if (preg_match("/\+/", $str) == TRUE)
	echo $tab[0] + $tab[1];
if (preg_match("/\-/", $str) == TRUE)
	echo $tab[0] - $tab[1];
if (preg_match("/\*/", $str) == TRUE)
	echo $tab[0] * $tab[1];
if (preg_match("/\//", $str) == TRUE)
{
	if ($tab[1] == 0)
		exit();
	echo $tab[0] / $tab[1];
}
if (preg_match("/\%/", $str) == TRUE)
{
	if ($tab[1] == 0)
		exit();
	echo $tab[0] % $tab[1];
}
echo "\n";
?>
