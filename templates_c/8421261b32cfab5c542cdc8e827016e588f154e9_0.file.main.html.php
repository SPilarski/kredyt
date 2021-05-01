<?php
/* Smarty version 3.1.39, created on 2021-05-01 18:44:30
  from 'C:\xampp\htdocs\kredyt\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608d856e97c9a2_21849722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8421261b32cfab5c542cdc8e827016e588f154e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kredyt\\app\\views\\templates\\main.html',
      1 => 1617096341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608d856e97c9a2_21849722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE HTML>
<!--
	Full Motion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Full Motion</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">



</head>
<body id="top">

<!-- Banner -->
<!--
    To use a video as your background, set data-video to the name of your video without
    its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
    formats to work correctly.
-->
<section id="banner" data-video="images/banner">
    <div class="inner">
        <header>
            <h1>Kalkulator</h1>
            <p>Kalkulator kredytowy!</p>
        </header>
        <a href="#main" class="more">Learn More</a>
    </div>
</section>

<!-- Main -->
<div id="main">
    <div class="inner">
        <div class="thumbnails">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_502285934608d856e979e96_63932973', 'content');
?>

        </div>

    </div>
</div>
<footer id="footer">
    <div class="inner">
        <a href="<?php echo '<?php ';?>
print(_APP_ROOT); <?php echo '?>';?>
/app/security/logout.php" class="btn btn-primary">Wyloguj</a>

    </div>
</footer>

<!-- Scripts -->
<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_502285934608d856e979e96_63932973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_502285934608d856e979e96_63932973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
