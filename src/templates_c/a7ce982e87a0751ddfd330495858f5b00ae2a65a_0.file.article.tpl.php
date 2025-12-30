<?php
/* Smarty version 4.5.6, created on 2025-12-30 09:09:22
  from '/var/www/html/templates/article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_695396c2797cb2_64275454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7ce982e87a0751ddfd330495858f5b00ae2a65a' => 
    array (
      0 => '/var/www/html/templates/article.tpl',
      1 => 1767085760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_695396c2797cb2_64275454 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 20px auto; }
        h1, h2, h3 { color: #333; }
        .related-articles { display: flex; gap: 15px; margin-top: 40px; }
        .related-article { width: 30%; border: 1px solid #ddd; padding: 10px; box-sizing: border-box; }
        .related-article img { max-width: 100%; height: auto; margin-bottom: 8px; }
    </style>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div style="padding-top: 20px;">
<h1><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['article']->value['image']) {?>
    <img src="/images/<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" style="max-width: 80%; height: auto; margin-bottom: 20px;" />
<?php }?>

<h3><small>Дата публикации: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['created_at'], ENT_QUOTES, 'UTF-8', true);?>
</small></h3>
<h3><small>Просмотры: <?php echo $_smarty_tpl->tpl_vars['article']->value['views'];?>
</small></h3>

<div>
    <?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>

</div>
<div>
    <h3><small>Опсание</small></h3>
    <?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['description'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>

</div>
<h2>Похожие статьи</h2>
<div class="related-articles">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['relatedArticles']->value, 'rel');
$_smarty_tpl->tpl_vars['rel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rel']->value) {
$_smarty_tpl->tpl_vars['rel']->do_else = false;
?>
        <div class="related-article">
            <?php if ($_smarty_tpl->tpl_vars['rel']->value['image']) {?>
                <img src="/images/<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['rel']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['rel']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
            <?php }?>
            <h3><a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['rel']->value['id'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['rel']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</div>
<p></p>
</body>
</html>
<?php }
}
