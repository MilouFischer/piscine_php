#!/usr/bin/php
<?PHP
$day = "([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche)";
$day_num = "((0?[1-9])|([0-2][[0-9])|(3[0-1]))";
$month = "([Jj]anvier|[Ff][eé]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]o[uû]t|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]écembre)";
$year = "[0-9][0-9][0-9][0-9]";
$hour = "(([0-1][0-9]|2[0-3])(:[0-5][0-9]){2})";

function	check_day($day, $timestamp)
{
	$array = array(
		"Monday" => "lundi",
		"Tuesday" => "mardi",
		"Wednesday" => "mercredi",
		"Thursday" => "jeudi",
		"Friday" => "vendredi",
		"Saturday" => "samedi",
		"Sunday" => "dimanche"
	);
	$ref = date("l", (int)$timestamp);
	$day = strtolower($day);
	if ($day != $array[$ref])
		return (false);
	return (true);
}

function	remove_accent($str)
{
	$array = array(
	);
	if ($str == "février" || $str == "Février")
		$str = "fevrier";
	else if ($str == "août" || $str == "Août")
		$str = "aout";
	else if ($str == "décembre" || $str == "Décembre")
		$str = "decembre";
	return ($str);
}

function	nb_month($str)
{
	$array = array(
		"janvier" => 1,
		"fevrier" => 2,
		"mars" => 3,
		"avril" => 4,
		"mai" => 5,
		"juin" => 6,
		"juillet" => 7,
		"aout" => 8,
		"septembre" => 9,
		"octobre" => 10,
		"novembre" => 11,
		"decembre" => 12
	);
	$str = remove_accent($str);
	$str = strtolower($str);
	return ($array[$str]);
}

if ($argc != 2)
	exit();
array_shift($argv);
if (preg_match("/^$day $day_num $month $year $hour$/", $argv[0]) == 0)
{
	print("Wrong Format\n");
	exit();
}
$date = explode(" ", $argv[0]);
$date[2] = nb_month($date[2]);
if (checkdate($date[2], (int)$date[1], (int)$date[3]) == false)
{
	print("Date doesn't exist 1\n");
	exit();
}
$timestamp = strtotime("$date[1]-$date[2]-$date[3] $date[4] +100");
if (check_day($date[0], $timestamp) == false)
{
	print("Date doesn't exist 2\n");
	exit();
}
print($timestamp)."\n";
?>
