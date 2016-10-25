<?php
/* Smarty version 3.1.30, created on 2016-10-25 00:39:29
  from "C:\xampp\htdocs\proyectos\Proyecto-Web2\Tandilia 2\templates\productoslista.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580e8da1607f84_60820561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aac2b9102764ecfbd0e1ee43a835d87b13d097b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto-Web2\\Tandilia 2\\templates\\productoslista.tpl',
      1 => 1477348710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580e8da1607f84_60820561 (Smarty_Internal_Template $_smarty_tpl) {
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
    <p>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto']->value['imagenes'], 'imagen', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['imagen']->value) {
?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="ProductoImagen_<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
_<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
"  class="img-thumbnail imgproducto">
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
