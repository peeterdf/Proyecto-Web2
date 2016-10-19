<?php
/* Smarty version 3.1.30, created on 2016-10-19 20:57:06
  from "C:\xampp\htdocs\TP-ESPECIAL-WEB2\Proyecto-Web2\Tandilia 2\templates\abm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807c202d5bfd1_05762596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9223a5f52e4a7c97a2e7192b459ae8b3084e648c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-ESPECIAL-WEB2\\Proyecto-Web2\\Tandilia 2\\templates\\abm.tpl',
      1 => 1476903407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807c202d5bfd1_05762596 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article>

    <div class="row">

      <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
        <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
      <?php }?>
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
            <td>  <a class="eliminarProductos" href="#" data-idproducto="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
      </table>

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-agrega btn btn-default">Agregar</button>

    <div class="mostrar col-md-12">
      <form class="form-horizontal formulario"  id="formProductos" action="guardar_producto" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label class="col-sm-2 control-label">Cerveza</label>
        <input class="" type="text" name="nombre" id="Tcerveza">
        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Categoria</label>
  <!--      <select class="selectpicker" name="fk_id_categoria" id="Ncategoria">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <option>8</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>  -->

        <input class="" type="number" name="fk_id_categoria" id="Fcategoria">

        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Descripcion</label>
        <input class="" type="textarea" name="descripcion" id="Cdescripcion">
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Precio Mayorista</label>
        <input class="" type="number" name="precio_may" id="Pmayorista">
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Precio Minorista</label>
        <input class="" type="number" name="precio_min" id="Pminorista">
        </div>


        <div class="form-group">
        <label class="col-sm-2 control-label">Imagenes</label>
        <input type="file" name="imagenes[]" required value="" multiple>
        </div>


        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input class="btn-enviar btn btn-default" type="submit" name="Enviar">
          </div>
        </div>
      </form>



    </div>
</article>
<?php }
}
