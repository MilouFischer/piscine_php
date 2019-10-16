#!/usr/bin/php
<?PHP
function	ft_is_sort($tab)
{
	$i = 0;
	$tmp = $tab;
	sort($tmp);
	while ($tab[$i] != NULL)
	{
		if ($tab[$i] != $tmp[$i])
			return (FALSE);
		$i++;
	}
	return (TRUE);
}
?>
