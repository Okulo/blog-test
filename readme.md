# Blog Test Project (PHP + MySQL + Smarty + Docker)

Тестовый проект: простой блог на чистом PHP без фреймворков с использованием MySQL, шаблонизатора Smarty и Docker.

## Функциональность

- Категории и статьи
- Одна статья может относиться к нескольким категориям
- Главная страница:
  - вывод категорий
  - 3 последние статьи в каждой категории
- Страница категории:
  - список статей
  - сортировка (по дате / по просмотрам)
  - пагинация
- Страница статьи:
  - полный текст статьи
  - 3 похожие статьи (рандомно)
- Сидеры:
  - добавление категорий
  - добавление статей с Lorem Ipsum контентом
- Админка БД через phpMyAdmin

---

## Технологический стек

- PHP 8.2 (FPM)
- Apache 2.4
- MySQL 8.0
- Smarty
- Docker / Docker Compose
- PDO

## Структура проекта

blog-test/
├── docker/
│ ├── apache/
│ │ ├── Dockerfile
│ │ └── vhost.conf
│ └── php/
│ └── Dockerfile
├── src/
│ ├── public/
│ │ ├── index.php
│ │ ├── category.php
│ │ ├── article.php
│ │ ├── seed_category.php
│ │ ├── seed_articles.php
│ │ ├── images/
│ │ └── css/
│ ├── templates/
│ └── templates_c/
├── vendor/
├── docker-compose.yml
├── .env
└── README.md

## Установка и запуск

### 1. Клонировать репозиторий

git clone https://github.com/Okulo/blog-test.git
cd blog-test

### 2. Создать .env
MYSQL_DATABASE=blog
MYSQL_USER=blog_user
MYSQL_PASSWORD=blog_pass
MYSQL_ROOT_PASSWORD=root

### 3. Клонировать репозиторий
docker compose up --build

### 4. Доступы

Сайт:
http://localhost:8080

phpMyAdmin:
http://localhost:8081

Сервер: mysql
Пользователь: blog_user
Пароль: blog_pass

### сидеры
Добавить одну категорию
http://localhost:8080/seed_category.php

Добавить статьи
http://localhost:8080/seed_articles.php

## Примечание к

Проект реализован без использования PHP-фреймворков
Используется чистый PDO
Код без комментариев (по условию)
Логика и шаблоны разделены
Docker используется только как окружение

### Дамп БД лежит в корне 
blog.sql