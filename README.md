# Php задачки

### Установка:
```
git clone https://github.com/Maxlab/php-tasks-to-prepare-for-interview.git && cd php-tasks-to-prepare-for-interview
```


### Описание:
Разбил задачи по их типам. Каждый тип представлен интерфейсом.
Также есть несколько вспомогательных классов:
 - Data.php, он поставляет искусственные данные для заданий.

 ```php
 Data::getData(Data::ARR_SIMPL_INT));
 ```
 - FB.php, он позволяет выводить в консоль браузера дебаг инфу. Требует установки плагина firephp(для современных браузеров).

 ```php
 FB::info($some_var);
 ```

#####Файл с примерами https://github.com/Maxlab/php-tasks-to-prepare-for-interview/blob/master/test.php






