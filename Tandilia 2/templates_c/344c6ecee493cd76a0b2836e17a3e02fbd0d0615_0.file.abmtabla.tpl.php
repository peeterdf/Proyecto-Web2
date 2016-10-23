<?php
/* Smarty version 3.1.30, created on 2016-10-22 23:00:47
  from "C:\xampp\htdocs\proyectos\Proyecto-Web2\Tandilia 2\templates\abmtabla.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580bd37fb31fc8_29562431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '344c6ecee493cd76a0b2836e17a3e02fbd0d0615' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto-Web2\\Tandilia 2\\templates\\abmtabla.tpl',
      1 => 1477013405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580bd37fb31fc8_29562431 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Categoria</th>
      <th>Descripcion</th>
      <th>Precio minorista</th>
      <th>Precio mayorista</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value["nombre"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value["nombre_categoria"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value["descripcion"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value["precio_min"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value["precio_may"];?>
</td>
      <td>  <a class="eliminarProducto" href="#" data-idproducto="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php }
}
