#!/usr/bin/php
<?PHP
echo "Entrez un nombre: ";
while (($input = trim(fgets(STDIN))) != FALSE)
{
	if (is_numeric($input) == FALSE)
		echo "'".$input."'"."n'est pas un chiffre\n";
	else
	{
		if ($input % 2 == 0)
			echo "Le chiffre ".$input." est Pair\n";
		else
			echo "Le chiffre ".$input." est Impair\n";
	}
	echo "Entrez un nombre: ";
}
?>
