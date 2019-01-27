<?php

$maparay = array(
    array(36.391139, 59.436523),
    array(36.391139, 59.696793),
    array(36.201139, 59.696793),
    array(36.201139, 59.436523),
);

function grid($maparay, $Division = 30)
{

    $distance_a = $maparay[1][1] - $maparay[0][1];
    $distance_b = $maparay[2][0] - $maparay[0][0];


    $m = 1;
    for ($k = 0; $k <= ($Division); $k++) {

        for ($i = 0; $i <= ($Division - 1); $i++) {

            $list[$k][$i][0][0] = ($maparay[0][0] + ($k * ($distance_b / $Division)));
            $list[$k][$i][0][1] = ($maparay[0][1] + (($distance_a / $Division) * $i));

            $list[$k][$i][1][0] = ($maparay[0][0] + ($k * ($distance_b / $Division)));
            $list[$k][$i][1][1] = ($maparay[0][1] + (($distance_a / $Division) * ($i + 1)));

            $list[$k][$i][2][0] = ($maparay[0][0] + (($distance_b / $Division) * ($k))) + ($distance_b / $Division);
            $list[$k][$i][2][1] = ($maparay[0][1] + (($distance_a / $Division) * ($i + 1)));

            $list[$k][$i][3][0] = ($maparay[0][0] + (($distance_b / $Division) * ($k))) + ($distance_b / $Division);

            $list[$k][$i][3][1] = ($maparay[0][1] + (($distance_a / $Division) * $i));

        }

        $m++;
    }

    return $list;


}

$grid = grid($maparay);

print_r(grid($maparay));