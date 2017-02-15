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


    }


?>
