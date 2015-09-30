<?php
// Подгрузка файлов
require_once('loader.php');

use Training\ITestSortInterface;
use Training\Data;

// Класс Test реализует интерфейс ITestSortInterface
class Test implements ITestSortInterface
{
    /**
     * Отсортировать одномерный массив своими силами
     *
     * На входе array(2,5,3,5,6,7,8,9,25,24,18,26,27,28,29,30,31)
     * На выходе отсортированный массив
     */
    public function testSort1($array)
    {
        // Условие окончания рекурсии
        if (!$lenght = count($array)) return $array;

        // Обнуляем
        $x = $y = array();

        // Те, что меньше первого элемента в одну сторону, те что больше в другую.
        // А что-бы цыкл не ушел в бесконечность начинаем его с $i = 1
        for ($i = 1; $i < $lenght; $i++) {
            if ($array[$i] > $array[0]) $x[] = $array[$i];
            else $y[] = $array[$i];
        }

        return array_merge($this->testSort1($y), array($array[0]), $this->testSort1($x));
    }

    /**
     * Отсортировать двумерный массив пришедший из БД
     *
     * На входе array(
     *  array('price'=>10,'count'=>2),
     *  array('price'=>5,'count'=>5),
     *  array('price'=>8,'count'=>5),
     *  array('price'=>12,'count'=>4),
     *  array('price'=>8,'count'=>4),
     * )
     * На выходе отсортированный массив
     *  по 'price' DESC и во вторую очередь по 'count' DESC
     * array(
     *  array('price'=>5,'count'=>5),
     *  array('price'=>8,'count'=>4),
     *  array('price'=>8,'count'=>5),
     *  array('price'=>10,'count'=>2),
     *  array('price'=>12,'count'=>4),
     * )
     *
     */
    public function testSort2($array)
    {
        // TODO: Implement testSort2() method.
    }

    /**
     * Отсортировать числа на диагонали квадратной матрицы
     * На входе квадратная матрица
     * array(
     *  array(10,5,3,6),
     *  array(8,2,11,13),
     *  array(9,25,30,18),
     *  array(34,37,38,24)
     * )
     *
     * На выходе должен быть массив
     * array(
     *  array(2,5,3,6),
     *  array(8,10,11,13),
     *  array(9,25,24,18),
     *  array(34,37,38,30)
     * )
     *
     */
    public function testSort3($array)
    {
        // TODO: Implement testSort3() method.
    }

}

$test = new Test();
/**
 * Тут подробнее.
 * \FireDog\FB::info() - выводит дебаг инфу в консоль сервера
 * Data::getData(Data::ARR_SIMPL_INT) - предоставляет готовые данные для заданий
 */
\FireDog\FB::info($test->testSort1(Data::getData(Data::ARR_SIMPL_INT)));