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


    }


?>
