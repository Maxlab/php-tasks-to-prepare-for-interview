<?php
namespace Training;

interface ITestMassiveReverseInterface
{
    /**
     * На входе массив array('A','B','C','D','E')
     * Нужно его перевернуть.
     */
    public function testMassRev1($array);

    /**
     * На входе массив array('A','B','C','D','E')
     * Нужно его перевернуть без использования array_reverse()
     */
    public function testMassRev2($array);

    /**
     * На входе массив array('A','B','C','D','E')
     * Нужно его перевернуть, но можно использовать, только floor() и count()
     * из встроенных функций.
     */
    public function testMassRev3($array);

}