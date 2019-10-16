#!/usr/bin/php
<?PHP
$day = "([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche)";
$day_num = "((0?[1-9])|([0-2][[0-9])|(3[0-1]))";
$month = "([Jj]anvier|[Ff][ée]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]o[ûu]t|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd][ée]cembre)";
$hour = "(([0-1][0-9]|2[0-3])(:[0-5][0-9]){2})";

if ($argc != 2)
	exit();
array_shift($argv);
if (preg_match("/^$day $day_num $month $hour$/", $argv[0]) == 0)
	print("Wrong Format!\n");
?>
