<?php
/* Smarty version 3.1.39, created on 2021-03-30 11:18:33
  from 'C:\xampp\htdocs\kredyt\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6062ece94e8699_45665428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4971a2e3fc344876130f9573c28c61cab4e2275' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kredyt\\app\\CalcView.html',
      1 => 1617095911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6062ece94e8699_45665428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_629384716062ece94d4682_49797684', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5519481916062ece94d5545_27394691', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_629384716062ece94d4682_49797684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_629384716062ece94d4682_49797684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_5519481916062ece94d5545_27394691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5519481916062ece94d5545_27394691',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <!-- Boxes -->


            <div class="box">

                <div class="inner">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post" style="pure-form">
                        <label for="id_x" >Kwota: </label>
                        <input id="id_x" type="text" name="x" value="" style="margin:10px;" /><br />
                        <label for="id_y">Ile lat?: </label>
                        <input id="id_y" type="text" name="y" value="" style="margin:10px;"/><br />
                        <label for="id_p">Oprocentowanie: </label>
                        <input id="id_p" type="text" name="p" value="" style="margin:10px;"/><br />
                        <input type="submit" value="Oblicz" class="btn btn-primary" />
                    </form>

                </div>

            </div>



        </div>

    </div>



<div class="reports">
        <?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
    <h4>Wystąpiły błędy: </h4>
    <ol class="err">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
        Wynik
    <p class="res">
        <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

    </p>
    <?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}
