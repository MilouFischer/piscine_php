#!/usr/bin/php
<?PHP
function	ft_split($str)
{
	$array = preg_split("/ +/", $str);
	return ($array);
}

$array = array();
if ($argc < 2)
	return ;
foreach ($argv as $elem)
{
	if ($elem == $array[0])
		continue ;
	$tmp = ft_split($elem);
	if ($tmp != NULL)
		$array = array_merge($array, $tmp);
	else
		$array = $array.$elem;
}
natcasesort($array);
foreach($array as $elem)
{
	if ($elem == $array[0])
		continue ;
	if (ctype_alpha($elem[0]) == TRUE)
		echo "$elem\n";
}
foreach($array as $elem)
{
	if ($elem == $array[0])
		continue ;
	if (is_numeric($elem[0]) == TRUE)
		echo "$elem\n";
}
foreach($array as $elem)
{
	if ($elem == $array[0])
		continue ;
	if (preg_match("#[^a-zA-Z0-9]#", $elem[0]) == TRUE)
		echo "$elem\n";
}
?>
