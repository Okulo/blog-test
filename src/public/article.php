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

$article_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($article_id <= 0) {
    die('Статья не выбрана');
}

$stmt = $pdo->prepare("
    SELECT a.id, a.title, a.description, a.content, a.created_at, a.views, a.image,
        GROUP_CONCAT(ac.category_id) as category_ids
    FROM articles a
    LEFT JOIN article_category ac ON a.id = ac.article_id
    WHERE a.id = ?
    GROUP BY a.id
");
$stmt->execute([$article_id]);
$article = $stmt->fetch();

if (!$article) {
    die('Статья не найдена');
}

$pdo->prepare("UPDATE articles SET views = views + 1 WHERE id = ?")->execute([$article_id]);

$categoryIds = explode(',', $article['category_ids']);
$placeholders = implode(',', array_fill(0, count($categoryIds), '?'));
$params = array_merge($categoryIds, [$article_id]);

$stmt = $pdo->prepare("
    SELECT a.id, a.title, a.image, a.created_at
    FROM articles a
    WHERE a.id != ?
    ORDER BY RAND()
    LIMIT 3
");

$stmt->execute([$article_id]);
$relatedArticles = $stmt->fetchAll();

$smarty->assign('article', $article);
$smarty->assign('relatedArticles', $relatedArticles);

$smarty->display('article.tpl');
