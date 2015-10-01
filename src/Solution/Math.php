<?php
// Подгрузка файлов
require_once('loader.php');

class Math implements \Training\ITestMathInterface
{
    public function __construct()
    {
    }

    /**
     * На входе массив чисел
     * array(2,5,3,5,6,7,8,9,25,24,18,26,27,28,29,30,31)
     * Вывести числа кратные 3 или 7 в строку разделенную запятыми
     *
     * Ответ '3,6,7...и тд.'
     */
    public function testMath1($array)
    {
        $str = '';
        foreach ($array as $v) {
            if ($v % 3 === 0 || $v % 7 === 0) $str .= ',' . $v;
        }

        return ltrim($str, ',');
    }

    /**
     * Нужно: вычислить факториал числа рекурсивно
     * $n - число
     */
    public function testMath2($n)
    {
        if($n == 0) return 1;
        return $n*$this->testMath2($n-1);
    }

    /**
     * Нужно сгенерировать случайным образом пароль заданной длинны из заданного диапазона символов.
     * $symbols - строка с символами
     * $lenght - длинна пароля
     *
     * Пример:
     * на входе
     *  $symbols = 'abcdsrRGHK12345'
     *  $lenght = 5
     * на выходе строка 'bR41s'
     */
    public function testMath3($symbols, $lenght)
    {
        $psword = '';
        $len = strlen($symbols)-1;
        while ($lenght--) {
            $psword .= $symbols[rand(0,$len)];
        }

        return $psword;
    }

    /**
     * Вывести числа Фибоначи, где кол-во цифр задано параметром $n
     *
     * На выходе строка к примеру - '0,1,1,2,3,5 и тд.'
     *
     * Числа Фибоначи где каждое последующее число
     *  образуется путем сложения двух предыдущих.
     * Пример:
     * 0,1
     * 0,1,1
     * 0,1,1,2
     * 0,1,1,2,3 и тд.
     */
    public function testMath4($n)
    {
        $fib = array(0,1,1);
        for ($i = 2; $i < $n; $i++) {
            $fib[] = $fib[$i] + $fib[$i-1];
        }

        return $fib;
    }


}