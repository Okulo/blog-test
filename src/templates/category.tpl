<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Категория: {$category.name|escape}</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 20px auto; }
        h1, h2 { color: #333; }
        .articles-list { display: flex; flex-wrap: wrap; gap: 15px; }
        .article-item { width: 30%; border: 1px solid #ddd; padding: 10px; box-sizing: border-box; }
        .article-item img { max-width: 100%; height: auto; margin-bottom: 8px; }
        .pagination { margin-top: 20px}
        .pagination a { text-decoration: none; }
        .pagination .current { font-weight: bold;}
        .sort-links a { margin-right: 10px; }
    </style>
</head>
<body>
{include file='navbar.tpl'}
{include file='navbar.tpl'}

<div style="padding-top: 20px;">
<h2>{$category.name|escape}</h2>
<p>{$category.description|escape|nl2br}</p>

<div class="sort-links">
    Сортировать по:
    {if $sort == 'date'}
        <strong>дате</strong> |
        <a href="?id={$category.id}&sort=views">просмотрам</a>
    {else}
        <a href="?id={$category.id}&sort=date">дате</a> |
        <strong>просмотрам</strong>
    {/if}
</div>

<div class="articles-list">
    {foreach $articles as $article}
        <div class="article-item">
            {if $article.image}
                <img src="/images/{$article.image|escape}" alt="{$article.title|escape}">
            {/if}
            <h3>{$article.title|escape}</h3>
            <small>Дата: {$article.created_at|escape}</small><br />
            <small>Просмотры: {$article.views}</small>
            <p>{$article.description|escape|nl2br}</p>
            <a href="article.php?id={$article.id}">Читать подробнее</a>
        </div>
    {/foreach}
</div>

<div class="pagination">
    {if $page > 1}
        <a href="?id={$category.id}&sort={$sort}&page={$page-1}">Назад</a>
    {/if}

    {section name=p start=1 loop=$totalPages+1}
        {if $page == $smarty.section.p.index}
            <span class="current">{$smarty.section.p.index}</span>
        {else}
            <a href="?id={$category.id}&sort={$sort}&page={$smarty.section.p.index}">{$smarty.section.p.index}</a>
        {/if}
    {/section}

    {if $page < $totalPages}
        <a href="?id={$category.id}&sort={$sort}&page={$page+1}">Вперед</a>
    {/if}
</div>
</div>

</body>
</html>
