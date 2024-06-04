<?php
/**
 * Problem 1: Given a list of integers, find the minimum of their absolute values. 
 *
 * @param array $items
 * @return int
 */
function getMinimumAbsValue(array $items)
{
    $min = abs($items[0]);
    foreach($items as $item){
        $item = abs($item);
        if($item < $min){
            $min = $item;
        }
    }

    return $min;
}

echo 'Problem 1:'.PHP_EOL;
echo getMinimumAbsValue([10, 12, 15, 189, 22, 2, 34]).PHP_EOL;
echo getMinimumAbsValue([10, -12, 34, 12, -3, 123]).PHP_EOL;



/**
 * Problem 2: Given a few paragraphs in a file, read the file and count how many words are there. 
 *
 * @param string $path
 * @return int
 */
function getFileWordCount(string $path)
{
    $content = file_get_contents($path);
    return str_word_count($content);
}

echo 'Problem 2:'.PHP_EOL;
echo getFileWordCount('./test.txt').PHP_EOL;



/**
 * Problem 3: Given a sentence, keep the order of the words same, but reverse the characters of each word. 
 *
 * @param string $text
 * @return string
 */
function getCharacterReversedSentence(string $text)
{
    $words = explode(' ', $text);

    for($i=0; $i < count($words); $i++){
        $words[$i] = strrev($words[$i]);
    }

    return implode(' ', $words);
}

echo 'Problem 3:'.PHP_EOL;
echo getCharacterReversedSentence('I love programming').PHP_EOL;



/**
 * Problem 4: Print the following pattern based on the given number n (can be any number). 
 *
 * @param int $n
 * @return void
 */
function printPyramidPatternStars(int $n)
{
    $stars = '*';
    for($i = 0; $i < $n; $i++){
        $spaces = '';
        for($j = 0; $j < $n-$i; $j++){
            $spaces .= ' ';
        }

        echo $spaces.$stars.PHP_EOL;

        $stars = '*'.$stars.'*';
    }
}

echo 'Problem 4:'.PHP_EOL;
printPyramidPatternStars(5).PHP_EOL;



/**
 * Problem 5: Given an integer n, find the sum of the digits of the integer.
 *
 * @param int $n
 * @return void
 */
function getSumIntDigits(int $n)
{
    $n = abs($n);
    $digits = str_split($n);
    $sum = 0;
    
    foreach($digits as $digit){
        $sum += $digit;
    }

    return $sum;
}

echo 'Problem 5:'.PHP_EOL;
echo getSumIntDigits(62343).PHP_EOL;
echo getSumIntDigits(1000).PHP_EOL;

?>