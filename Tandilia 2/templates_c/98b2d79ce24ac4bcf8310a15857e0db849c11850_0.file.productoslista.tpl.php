<?php
/* Smarty version 3.1.30, created on 2016-10-19 16:21:53
  from "C:\xampp\htdocs\TP-ESPECIAL-WEB2\Proyecto-Web2\Tandilia 2\templates\productoslista.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580781810c3545_69383973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98b2d79ce24ac4bcf8310a15857e0db849c11850' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-ESPECIAL-WEB2\\Proyecto-Web2\\Tandilia 2\\templates\\productoslista.tpl',
      1 => 1476886909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580781810c3545_69383973 (Smarty_Internal_Template $_smarty_tpl) {
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
      <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_categoria'];?>

    </p>
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
