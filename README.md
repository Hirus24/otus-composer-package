# Процессор строк

Высчитывает длинну строки (в том числе кириллица)

## Требования

- PHP 7.4

## Установка
```bash
$composer requier Hirus24/otus-composer-package
```

## Использование
```php
<?php
$string_lenght = new StringLength();
echo  $string_lenght->getLength('измеряемый текст');
```
