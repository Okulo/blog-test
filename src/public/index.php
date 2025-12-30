<?php
require_once __DIR__ . '/../vendor/autoload.php';

$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ . '/../templates/');
$smarty->setCompileDir(__DIR__ . '/../templates_c/');

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

$pdo = new PDO($dsn, $user, $pass, $options);

$stmt = $pdo->query("
    SELECT c.id, c.name, c.description
    FROM categories c
    WHERE EXISTS (
        SELECT 1 FROM article_category ac WHERE ac.category_id = c.id
    )
");
$categories = $stmt->fetchAll();

foreach ($categories as &$category) {
    $stmt = $pdo->prepare("
        SELECT a.id, a.title, a.description, a.created_at, a.image
        FROM articles a
        JOIN article_category ac ON a.id = ac.article_id
        WHERE ac.category_id = ?
        ORDER BY a.created_at DESC
        LIMIT 3
    ");
    $stmt->execute([$category['id']]);
    $category['articles'] = $stmt->fetchAll();
}
unset($category);

$smarty->assign('categories', $categories);
$smarty->display('index.tpl');
