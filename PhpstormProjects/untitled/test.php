<?php
$stopWord = 'exit';
$randomNumbers = rand(1000, 9999);
echo $randomNumbers . PHP_EOL;
function game($arrayOfIANumbers, $arrayOfUserNumbers)
{
    $arrayOfBulls = [];
    $arrayOfCows = [];
    $cows = 0;
    $bulls = 0;
    $count = count($arrayOfUserNumbers);
    for ($i = 0; $i < $count; $i++) {
        if ($arrayOfIANumbers[$i] == $arrayOfUserNumbers[$i]) {
            array_push($arrayOfBulls, $arrayOfUserNumbers[$i]);
            $bulls = $bulls + 1;
        } else {
            for ($k = 0; $k < $count; $k++) {
                if ($arrayOfIANumbers[$i] == $arrayOfUserNumbers[$k]) {
                    array_push($arrayOfCows, $arrayOfIANumbers[$i]);
                    $cows = $cows + 1;
                }

            }
        }

    }
    $null = $count - ($bulls + $cows);
    echo 'Count of bulls: ' . $bulls . ' ' . implode($arrayOfBulls) . ' count of cows: ' . $cows . ' ' . implode($arrayOfCows) . ' null: ' . $null . '' . PHP_EOL;
}

do {
    echo 'Enter your numbers: ';
    $userNumber = readline();
    $arrayOfIANumbers = str_split((string)$randomNumbers);
    $arrayOfUserNumbers = str_split((string)$userNumber);
    game($arrayOfUserNumbers, $arrayOfIANumbers);

} while ($userNumber !== $stopWord);