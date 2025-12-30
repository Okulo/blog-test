<?php
/* Smarty version 4.5.6, created on 2025-12-30 09:11:24
  from '/var/www/html/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6953973cb14144_18380350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0d80c9f5195a4b1349fd7984fb80fa80c14534' => 
    array (
      0 => '/var/www/html/templates/index.tpl',
      1 => 1767085882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_6953973cb14144_18380350 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
<?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div style="padding-top: 20px;">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
    <section>
        <h2><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
        <div class="articles-grid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['articles'], 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                <li style="display:inline-block; width:30%; vertical-align:top; margin-right:1.5%;">
                    <?php if ((($tmp = $_smarty_tpl->tpl_vars['article']->value['image'] ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
                        <img src="/images/<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:100%; height:auto; display:block; margin-bottom:5px; border-radius: 6px;" />
                    <?php }?>
                    <strong><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</strong><br />
                    <small><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['created_at'], ENT_QUOTES, 'UTF-8', true);?>
</small><br />
                    <p><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['description'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</p>
                    <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Читать подробнее</a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
        <h4>
        <a href="category.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">Все статьи категории</a>
        </h4>
    </section>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</body>
</html>
<?php }
}
