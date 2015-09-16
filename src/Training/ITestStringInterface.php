<?php
namespace Training;

interface ITestStringInterface
{
    /**
     * Нужно сгенерировать случайным образом пароль заданной длинны и из указанных символов.
     * $symbols - строка с символами
     * $lenght - длинна пароля
     *
     * Пример:
     * на входе
     *  $symbols = 'abcdsrRGHK12345'
     *  $lenght = 5
     * на выходе строка 'bR48s'
     */
    public function testString1($symbols, $lenght);

}