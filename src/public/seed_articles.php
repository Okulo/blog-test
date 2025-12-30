<?php
require_once __DIR__ . '/../vendor/autoload.php';

$host = 'mysql';
$db   = 'blog';
$user = 'blog_user';
$pass = 'blog_pass';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

function randomWords($count = 3) {
    $words = ['Lorem', 'Ipsum', 'Dolor', 'Sit', 'Amet', 'Consectetur', 'Adipiscing', 'Elit', 'Sed', 'Do', 'Eiusmod', 'Tempor', 'Incididunt', 'Ut', 'Labore', 'Et', 'Dolore', 'Magna', 'Aliqua'];
    shuffle($words);
    return implode(' ', array_slice($words, 0, $count));
}

function randomText($paragraphs = 2) {
    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
    $text = '';
    for ($i = 0; $i < $paragraphs; $i++) {
        $text .= $lorem . "\n\n";
    }
    return trim($text);
}

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    $stmt = $pdo->query("SELECT id FROM categories");
    $categories = $stmt->fetchAll(PDO::FETCH_COLUMN);

    if (empty($categories)) {
        die("Нет категорий для добавления статей.");
    }

    $numArticles = 3;
    for ($i = 0; $i < $numArticles; $i++) {
        $title = randomWords(rand(2, 5));
        $description = randomText(1);
        $text = randomText(rand(2, 4));
        $image = 'image' . rand(1, 6) . '.jpg';
        $createdAt = date('Y-m-d H:i:s', strtotime("-" . rand(0, 365) . " days"));

        $stmt = $pdo->prepare("INSERT INTO articles (title, description, content, image, created_at) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$title, $description, $text, $image, $createdAt]);

        $articleId = $pdo->lastInsertId();

        $randomCategoryId = $categories[array_rand($categories)];

        $stmt = $pdo->prepare("INSERT INTO article_category (article_id, category_id) VALUES (?, ?)");
        $stmt->execute([$articleId, $randomCategoryId]);

        echo "Статья '{$title}' добавлена в категорию с ID {$randomCategoryId}.<br>";
    }

} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}