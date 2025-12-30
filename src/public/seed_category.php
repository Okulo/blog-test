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

    $name = randomWords(rand(1, 3));
    $description = randomText(1);

    $stmt = $pdo->prepare("INSERT INTO categories (name, description) VALUES (?, ?)");
    $stmt->execute([$name, $description]);

    echo "Категория '{$name}' успешно добавлена.";

} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}
