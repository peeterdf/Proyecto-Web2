<?php
/* Smarty version 3.1.30, created on 2016-10-20 02:39:37
  from "C:\xampp\htdocs\TP-ESPECIAL-WEB2\Proyecto-Web2\Tandilia 2\templates\abmtabla.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5808124968d333_46021389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85dbd654faabf197626b7267fbeb0b69cfba0116' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-ESPECIAL-WEB2\\Proyecto-Web2\\Tandilia 2\\templates\\abmtabla.tpl',
      1 => 1476923914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5808124968d333_46021389 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Categoria</th>
      <th>Descripcion</th>
      <th>Precio minorista</th>
      <th>Precio mayorista</th>
      <th>Modificar</th>
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
      <td>boton modificar</td>
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
