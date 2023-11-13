<?php

namespace Libs;

class PHPTest
{
    public function countVowel($input)
    {
        preg_match_all('/[aeiouAEIOU]/', $input, $matches);

        echo "$input : " . count($matches[0]) . PHP_EOL;
    }

    public function oddAndEvenValue($input)
    {
        $odd = [];
        $even = [];

        foreach ($input as $number)
        {
            if ($number % 2 === 0) {
                $even[] = $number;
            } else {
                $odd[] = $number;
            }
        }

        echo json_encode($odd) . ", " . json_encode($even) . PHP_EOL;
    }

    public function findValueTag($html)
    {
        $pattern = '/<(div|p|span)[^>]*>(.*?)<\/\\1>/s';

        preg_match($pattern, $html, $matches);

        if (!empty($matches)) {
            echo $matches[2] . PHP_EOL;
        } else {
            echo $html . PHP_EOL;
        }
    }

    public function findIndexByAddition($numbers, $array)
    {
        $result = array_sum($numbers);

        $index = array_search($result, $array);

        if (!$index) {
            echo "Not Found" . PHP_EOL;
        } else {
            echo "Angka " . $result . " berada pada index ke : " . $index . PHP_EOL;
        }
    }
}