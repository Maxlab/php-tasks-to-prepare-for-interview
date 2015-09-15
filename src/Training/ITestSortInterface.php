<?php
namespace Training;


interface ITestSortInterface
{
    /**
     * Отсортировать одномерный массив своими силами
     *
     * На входе array(2,5,3,5,6,7,8,9,25,24,18,26,27,28,29,30,31)
     * На выходе отсортированный массив
     */
    public function testSort1($array);

    /**
     * Отсортировать двумерный массив пришедший из БД
     *
     * На входе array(
     *  '1'=>array('price'=>10,'count'=>2),
     *  '2'=>array('price'=>5,'count'=>5),
     *  '3'=>array('price'=>8,'count'=>5),
     *  '4'=>array('price'=>12,'count'=>4),
     *  '5'=>array('price'=>8,'count'=>4),
     * )
     * На выходе отсортированный массив
     *  по 'price' DESC и во вторую очередь по 'count' DESC
     * array(
     *  '2'=>array('price'=>5,'count'=>2),
     *  '5'=>array('price'=>8,'count'=>4),
     *  '3'=>array('price'=>8,'count'=>5),
     *  '1'=>array('price'=>10,'count'=>5),
     *  '4'=>array('price'=>12,'count'=>4),
     * )
     *
     */
    public function testSort2($array);

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
    public function testSort3($array);
}
