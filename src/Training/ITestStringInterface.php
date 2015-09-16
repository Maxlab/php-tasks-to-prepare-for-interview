<?php
namespace Training;

interface ITestStringInterface
{
    /**
     * Нужно: обрезать строку и добавить в конец '...', если та больше заданной длинны.
     *
     * На входе два параметра
     * $string - строка
     * $lenght - длинна
     *
     * Пример:
     * $tring = 'John Doe'
     * $lenght = 4
     *
     * То, на выходе должно быть 'John...'
     *
     */
    public function testString1($tring, $lenght);

    /**
     * Нужно: Перевернуть строку 'John Doe'
     *
     * На выходе строка 'eoD nhoJ'
     */
    public function testString2($tring);

    /**
     * Нужно: сгенерировать случайным образом пароль заданной длинны и из указанных символов.
     * $symbols - строка с символами
     * $lenght - длинна пароля
     *
     * Пример:
     * на входе
     *  $symbols = 'abcdsrRGHK12345'
     *  $lenght = 5
     * на выходе строка 'bR48s'
     */
    public function testString3($symbols, $lenght);

}