# Php задачки для подготовки к собеседованию

### Установка:
```
git clone https://github.com/Maxlab/php-tasks-to-prepare-for-interview.git && cd php-tasks-to-prepare-for-interview
```


### Описание:
Разбил задачи по их типам. Каждый тип представлен интерфейсом.
Также есть несколько вспомогательных классов:
 - Data.php, который предоставляет искусственные данные для заданий.

 ```php
 Data::getData(Data::getData(Data::ARR_SIMPL_INT)));
 ```
 - FB.php, он позволяет выводить в консоль браузера дебаг инфу. Он требует установки плагина firephp(для современных браузеров).

 ```php
 FB::info($some_var);
 ```

Пример использования смотрите в test.php






