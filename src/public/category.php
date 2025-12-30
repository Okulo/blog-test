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

$category_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($category_id <= 0) {
    die('Категория не выбрана');
}

$stmt = $pdo->prepare("SELECT id, name, description FROM categories WHERE id = ?");
$stmt->execute([$category_id]);
$category = $stmt->fetch();

if (!$category) {
    die('Категория не найдена');
}

$allowedSorts = ['views', 'date'];
$sort = isset($_GET['sort']) && in_array($_GET['sort'], $allowedSorts) ? $_GET['sort'] : 'date';

$orderBy = $sort === 'views' ? 'a.views DESC' : 'a.created_at DESC';

$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$perPage = 5;
$offset = ($page - 1) * $perPage;

$stmt = $pdo->prepare("
    SELECT COUNT(*)
    FROM articles a
    JOIN article_category ac ON a.id = ac.article_id
    WHERE ac.category_id = ?
");
$stmt->execute([$category_id]);
$totalArticles = $stmt->fetchColumn();
$totalPages = ceil($totalArticles / $perPage);

$stmt = $pdo->prepare("
    SELECT a.id, a.title, a.description, a.created_at, a.views, a.image
    FROM articles a
    JOIN article_category ac ON a.id = ac.article_id
    WHERE ac.category_id = ?
    ORDER BY $orderBy
    LIMIT $perPage OFFSET $offset
");
$stmt->execute([$category_id]);
$articles = $stmt->fetchAll();

$smarty->assign('category', $category);
$smarty->assign('articles', $articles);
$smarty->assign('sort', $sort);
$smarty->assign('page', $page);
$smarty->assign('totalPages', $totalPages);

$smarty->display('category.tpl');
