<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>{$article.title|escape}</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 20px auto; }
        h1, h2, h3 { color: #333; }
        .related-articles { display: flex; gap: 15px; margin-top: 40px; }
        .related-article { width: 30%; border: 1px solid #ddd; padding: 10px; box-sizing: border-box; }
        .related-article img { max-width: 100%; height: auto; margin-bottom: 8px; }
    </style>
</head>
<body>
{include file='navbar.tpl'}

<div style="padding-top: 20px;">
<h1>{$article.title|escape}</h1>

{if $article.image}
    <img src="/images/{$article.image|escape}" alt="{$article.title|escape}" style="max-width: 80%; height: auto; margin-bottom: 20px;" />
{/if}

<h3><small>Дата публикации: {$article.created_at|escape}</small></h3>
<h3><small>Просмотры: {$article.views}</small></h3>

<div>
    {$article.content|escape|nl2br}
</div>
<div>
    <h3><small>Опсание</small></h3>
    {$article.description|escape|nl2br}
</div>
<h2>Похожие статьи</h2>
<div class="related-articles">
    {foreach $relatedArticles as $rel}
        <div class="related-article">
            {if $rel.image}
                <img src="/images/{$rel.image|escape}" alt="{$rel.title|escape}">
            {/if}
            <h3><a href="article.php?id={$rel.id}">{$rel.title|escape}</a></h3>
        </div>
    {/foreach}
</div>
</div>
<p></p>
</body>
</html>
