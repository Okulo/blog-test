<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Простой блог</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 20px auto; }
        h1, h2, h3 { color: #333; }
        section { margin-bottom: 40px; }
        a { text-decoration: none; color: #007BFF; }
        a:hover { text-decoration: underline; }
        small { color: #666; }
        .articles-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 15px;
        }
        .article-item {
            width: calc(33.333% - 13.333px);
            box-sizing: border-box;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .article-item img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 10px;
        }
        .article-item h4 {
            margin: 0 0 5px;
            font-size: 1.1em;
        }
        .article-item .date {
            font-size: 0.85em;
            color: #888;
            margin-bottom: 10px;
        }
        .article-item p {
            font-size: 0.95em;
            margin-bottom: 10px;
            min-height: 50px;
        }
    </style>
</head>
<body>
{include file='navbar.tpl'}
<div style="padding-top: 20px;">
{foreach $categories as $category}
    <section>
        <h2>{$category.name|escape}</h2>
        <div class="articles-grid">
            {foreach $category.articles as $article}
                <li style="display:inline-block; width:30%; vertical-align:top; margin-right:1.5%;">
                    {if $article.image|default:false}
                        <img src="/images/{$article.image|escape}" alt="{$article.title|escape}" style="width:100%; height:auto; display:block; margin-bottom:5px; border-radius: 6px;" />
                    {/if}
                    <strong>{$article.title|escape}</strong><br />
                    <small>{$article.created_at|escape}</small><br />
                    <p>{$article.description|escape|nl2br}</p>
                    <a href="article.php?id={$article.id}">Читать подробнее</a>
                </li>
            {/foreach}

        </div>
        <h4>
        <a href="category.php?id={$category.id}">Все статьи категории</a>
        </h4>
    </section>
{/foreach}
</div>
</body>
</html>
