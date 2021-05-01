<?php
/* Smarty version 3.1.39, created on 2021-04-19 16:55:06
  from 'C:\xampp\htdocs\kredyt\app\calc\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607d99cad5a545_05341121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '595f6575c29201c5e4704344a996169a695b0e76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kredyt\\app\\calc\\CalcView.html',
      1 => 1618843865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d99cad5a545_05341121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1839771778607d99cad4b6e4_45876629', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295804813607d99cad4c469_78598733', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_1839771778607d99cad4b6e4_45876629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1839771778607d99cad4b6e4_45876629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_295804813607d99cad4c469_78598733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_295804813607d99cad4c469_78598733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <!-- Boxes -->


            <div class="box">

                <div class="inner">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" style="pure-form">
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
