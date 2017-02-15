<?php

    require_once 'src/Palindrome.php';

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {

        function test_palindrome_checker_word()
        {

            $test_Palindrome = new Palindrome;
            $input = "racecar";

            $result = $test_Palindrome->checkPalindrome($input);

            $this->assertEquals("True", $result);
        }

        function test_palindrome_checker_sentence()
        {

            $test_Palindrome = new Palindrome;
            $input = "race car";

            $result = $test_Palindrome->checkPalindrome_sentence($input);

            $this->assertEquals("True", $result);
        }


    }






?>
