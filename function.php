<h3>String repeat</h3>
<?php
/*
* check if string not empty
* function accept 3 parameter.
1- string you want to repeat
2- times of repeat => degault = 2
3- separator $space default = false 
    you can add any  value (1 , true)
 */

function ahmedStringRepeat(string $str, int $repeat = 2, bool $space = false)
{
    $result = "";

    $separator = $space ? " " : "";

    // if ($space === true) {

    //     $separator = " ";
    // } else {

    //     $separator = "";
    // }

    for ($i = 0; $i < $repeat; $i++) :
        $result .= $str . $separator;
    endfor;


    return $result;
}

echo ahmedStringRepeat("hello") . "<br>";
echo ahmedStringRepeat("hello", 2) . "<br>";
echo ahmedStringRepeat("ahmed", 3, 1) . "<br>";
echo ahmedStringRepeat("ahmed", 3, "space") . "<br>";
echo ahmedStringRepeat("ahmed", 3, true) . "<br>";;
?>

<h3>String Length</h3>
<?php
//claculate string length

function StringLength(string $str): int
{
    $counter = 0;

    while ($str) {
        if (empty($str[$counter])) {
            break;
        }
        $counter++;
    }

    return $counter;
}

echo StringLength("egyptoooo") . "<br>";
echo StringLength("hello world") . "<br>";
?>