<?php
/* Smarty version 3.1.30, created on 2016-10-06 00:20:46
  from "C:\xampp\htdocs\proyectos\Proyecto-Web2\Tandilia 2\templates\productoslista.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f57cbeca68a1_35652795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aac2b9102764ecfbd0e1ee43a835d87b13d097b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto-Web2\\Tandilia 2\\templates\\productoslista.tpl',
      1 => 1475462307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f57cbeca68a1_35652795 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="media-list">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['producto']->value) {
?>
  <li class="media">
    <div class="media-left">
      <a class="">
        <img class="media-object" src="./images/icono.png" alt="" />
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading" ><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</h4>
    <p>
      <?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>

    </p>
    </div>
  </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
