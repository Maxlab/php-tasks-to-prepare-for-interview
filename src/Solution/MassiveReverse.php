<?php
namespace Solution;

class MassiveReverse implements \Training\ITestMassiveReverseInterface
{
    public function __construct() {}

    /**
     * На входе массив array('A','B','C','D','E')
     * Нужно его перевернуть.
     */
    public function testMassRev1($array)
    {
        return array_reverse($array);
    }

    /**
     * На входе массив array('A','B','C','D','E')
     * Нужно его перевернуть без использования array_reverse()
     */
    public function testMassRev2($array)
    {
        $count = count($array);
        $res = array();

        while ($count--) {
            $res[] = $array[$count];
        }

        return $res;
    }

    /**
     * На входе массив array('A','B','C','D','E')
     * Нужно его перевернуть, но можно использовать, только floor() и count()
     * из встроенных функций. Перекладывать значения в другой массив нельзя,
     * используйте, только $array
     */
    public function testMassRev3($array)
    {
        $count = count($array);
        $flCount = floor($count/2);

        for ($i = $count - 1; $i >= $flCount; $i--) {
            $buf = $array[$i];
            $array[$i] = $array[$count - $flCount - $i + 1];
            $array[$count - $flCount - $i + 1] = $buf;
        }

        return $array;
    }
}
