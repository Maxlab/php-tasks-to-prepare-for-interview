<?php
namespace Training;

interface ITestMinMaxInterface
{
    /**
     * Найти максимальное значение в одноуровневом массиве
     * На входе array(2,5,3,5,6,7,8,9,25,24,18)
     *
     * Должно быть 25
     */
    public function testMinMax1($array);

    /**
     * Найти максимальное значение в мультимассиве
     * На входе array(array(2,5,3),5,6,7,array(8,9,25),24,18)
     *
     * Должно быть 25
     */
    public function testMinMax2($array);

    /**
     * На входе массив чисел $array и число $min
     * Нам нужно удалить все значения, что меньше $min
     *
     * На входе array(2,5,3,5,6,7,8,9,25,24,18,26,27,28,29,30,31)
     * Передаем $min = 9
     * На выходе должно быть array(9,25,24,18,26,27,28,29,30,31)
     */
    public function testMinMax3($array, $min);
}