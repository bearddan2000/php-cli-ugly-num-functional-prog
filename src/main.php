<?php //php 7.2.24
    // PHP program to find nth ugly number

    // This function divides a by greatest divisible power of b
    function maxDivide($a, $b)
    {
        if ($a % $b != 0) return $a;
        return maxDivide($a/$b, $b);
    }

    // Function to check if a number is ugly or not
    function isUgly($no)
    {
        $a = maxDivide($no, 2);
        $b = maxDivide($a, 3);
        $c = maxDivide($b, 5);

        return ($c == 1)? 1 : 0;
    }

    // Function to get the nth ugly number
    function findUgly($n, $i, $count)
    {

        // Check for all integers until ugly count becomes n
        if ($n < $count) return $i-1;
        if (isUgly($i)) return findUgly($n, $i+1, $count+1);
        else return findUgly($n, $i+1, $count);
    }

    $input = 10;
    printf("[INPUT] %d\n", $input);
    $output = findUgly($input, 1, 1);
    printf("[OUTPUT] %d\n", $output);
?>
