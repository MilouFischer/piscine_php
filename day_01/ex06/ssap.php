#!/usr/bin/php
<?PHP
function	ft_split($str)
{
	$array = preg_split("/ +/", $str);
	sort($array);
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
sort($array);
foreach($array as $elem)
{
	if ($elem == $array[0])
		continue ;
	echo "$elem\n";
}
?>
