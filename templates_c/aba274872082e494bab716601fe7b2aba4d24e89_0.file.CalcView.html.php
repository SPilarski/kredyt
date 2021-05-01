<?php
/* Smarty version 3.1.39, created on 2021-05-01 18:44:30
  from 'C:\xampp\htdocs\kredyt\app\views\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608d856e8f6315_34254143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aba274872082e494bab716601fe7b2aba4d24e89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kredyt\\app\\views\\CalcView.html',
      1 => 1619885590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608d856e8f6315_34254143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2030571869608d856e8e4ce0_79573090', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_581819949608d856e8e59a1_24042015', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'footer'} */
class Block_2030571869608d856e8e4ce0_79573090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2030571869608d856e8e4ce0_79573090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_581819949608d856e8e59a1_24042015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_581819949608d856e8e59a1_24042015',
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
