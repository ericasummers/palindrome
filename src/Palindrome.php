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


    }


?>
