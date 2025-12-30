<?php
/* Smarty version 4.5.6, created on 2025-12-30 09:08:47
  from '/var/www/html/templates/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6953969fb534a3_91707998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613a09af5fd741260bb75385e34c7ae2f0d44960' => 
    array (
      0 => '/var/www/html/templates/category.tpl',
      1 => 1767085726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 2,
  ),
),false)) {
function content_6953969fb534a3_91707998 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Категория: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</title>
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
<?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div style="padding-top: 20px;">
<h2><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
<p><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value['description'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</p>

<div class="sort-links">
    Сортировать по:
    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'date') {?>
        <strong>дате</strong> |
        <a href="?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&sort=views">просмотрам</a>
    <?php } else { ?>
        <a href="?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&sort=date">дате</a> |
        <strong>просмотрам</strong>
    <?php }?>
</div>

<div class="articles-list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
        <div class="article-item">
            <?php if ($_smarty_tpl->tpl_vars['article']->value['image']) {?>
                <img src="/images/<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
            <?php }?>
            <h3><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
            <small>Дата: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['created_at'], ENT_QUOTES, 'UTF-8', true);?>
</small><br />
            <small>Просмотры: <?php echo $_smarty_tpl->tpl_vars['article']->value['views'];?>
</small>
            <p><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['description'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</p>
            <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Читать подробнее</a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div class="pagination">
    <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
        <a href="?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Назад</a>
    <?php }?>

    <?php
$__section_p_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['totalPages']->value+1) ? count($_loop) : max(0, (int) $_loop));
$__section_p_0_start = min(1, $__section_p_0_loop);
$__section_p_0_total = min(($__section_p_0_loop - $__section_p_0_start), $__section_p_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_0_total !== 0) {
for ($__section_p_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = $__section_p_0_start; $__section_p_0_iteration <= $__section_p_0_total; $__section_p_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)) {?>
            <span class="current"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null);?>
</span>
        <?php } else { ?>
            <a href="?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&page=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null);?>
</a>
        <?php }?>
    <?php
}
}
?>

    <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['totalPages']->value) {?>
        <a href="?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Вперед</a>
    <?php }?>
</div>
</div>

</body>
</html>
<?php }
}
