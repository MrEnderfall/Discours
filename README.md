# Дискурс

В репозитории находятся исходники анонимного форума Дискурс (https://discou.rs/).

## Начало работы

Вам понадобится установить:
1) PHP версии 7.0 или выше (необходимо для Twig'a)
2) Twig
3) ImageMagick
4) Memcached (не обязательно, можно отключить)

Инструкции по установке несложно найти в интернете.

### Установка

1) Скопируйте содержание этого репозитория в корень вашего веб-сервера.
2) Установите Twig при помощи composer'а.
3) Создайте базу данных и таблицы при помощи файла database.sql
4) Отредактируйте app/config-example.php и переименуйте в config.php
5) Создайте первую запись в таблице forums при помощи phpMyAdmin или консоли
6) Откройте корневую директорию сайта и создайте первую тему (с этого момента всё должно работать)

## Авторы

В случае возникновения вопросов/проблем с установкой пишите @zefirov в Telegram.

## Лицензия

Исходный код предоставляется в свободном доступе.