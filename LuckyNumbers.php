<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $number1 = implode("", $digitsOfNumber1);
        $number2 = implode("", $digitsOfNumber2);
        return $number1 + $number2;
    }

    public function isPalindrome(int $number): bool
    {
        $reversedNum = strrev((string) $number);
        return $number == $reversedNum;
    }

    public function validate(string $input): string
    {
        if (strlen($input) < 1) return 'Required field';
        if (intval($input) <= 0) return 'Must be a whole number larger than 0';
        return '';
    }
}
