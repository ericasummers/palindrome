<?php
    class Palindrome
    {
        function checkPalindrome($wordInput)
        {
            $word_reverse = strrev($wordInput);
            if ($wordInput == $word_reverse) {
                return "True";
            } else {
                return "False";
            }
        }

        function checkPalindrome_sentence($wordInput)
        {
            $new_sentence = preg_replace('/\s/', "", $wordInput);
            $reverse_sentence = strrev($new_sentence);
            if ($new_sentence == $reverse_sentence) {
                return "True";
            } else {
                return "False";
            }
        }

        function checkPalindrome_words_in_sentence($wordInput)
        {
            $new_sentence = explode(" ", $wordInput);
            $results_array = array();
            for ($x = 0; $x < count($new_sentence); $x++) {
                $reverse_sentence = strrev($new_sentence[$x]);
                if ($new_sentence[$x] == $reverse_sentence) {
                    array_push($results_array, $new_sentence[$x]);
                }
            }

            if (empty($results_array)) {
                return "None of these are palindromes";
            } else if (count($results_array) == 1) {
                return "This is a palindrome: " . $results_array[0];
            } else {
                $result = "";
                for ($y = 0; $y < count($results_array)-1; $y++) {
                    $result .= $results_array[$y] . ", ";
                }
                $result .= end($results_array);

                return "These are palindromes: " . $result;
            }
        }

        function checkPalindrome_hardMode($wordInput)
        {
            $new_sentence = preg_replace('/\s/', "", $wordInput);
            $count_up = array();
            $count_down = array();
            $length = strlen($new_sentence);
            for($x=0;$x<($length/2);$x++){
                array_push($count_up, $new_sentence[$x]);
            }
            for($y=$length-1;$y>=(floor($length/2));$y--){
                array_push($count_down, $new_sentence[$y]);
            }

            $difference = array_diff($count_up, $count_down);

            if (empty($difference)) {
                return "This sentence is a palindrome";
            } else {
                return "This sentence is not a palindrome";
            }

        }


    }


?>
