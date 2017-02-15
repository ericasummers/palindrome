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

        function test_palindrome_checker_sentencewords_none()
        {

            $test_Palindrome = new Palindrome;
            $input = "this cat";

            $result = $test_Palindrome->checkPalindrome_words_in_sentence($input);

            $this->assertEquals("None of these are palindromes", $result);
        }

        function test_palindrome_checker_sentencewords_one()
        {

            $test_Palindrome = new Palindrome;
            $input = "this racecar";

            $result = $test_Palindrome->checkPalindrome_words_in_sentence($input);

            $this->assertEquals("This is a palindrome: racecar", $result);
        }

        function test_palindrome_checker_sentencewords_some()
        {

            $test_Palindrome = new Palindrome;
            $input = "this racecar hannah";

            $result = $test_Palindrome->checkPalindrome_words_in_sentence($input);

            $this->assertEquals("These are palindromes: racecar, hannah", $result);
        }


    }






?>
