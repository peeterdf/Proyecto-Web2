<?php
/* Smarty version 3.1.30, created on 2016-10-19 01:06:36
  from "C:\xampp\htdocs\TP-ESPECIAL-WEB2\Proyecto-Web2\Tandilia 2\templates\abm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806aafce81cf5_18744432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9223a5f52e4a7c97a2e7192b459ae8b3084e648c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-ESPECIAL-WEB2\\Proyecto-Web2\\Tandilia 2\\templates\\abm.tpl',
      1 => 1476831992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806aafce81cf5_18744432 (Smarty_Internal_Template $_smarty_tpl) {
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
            <th>nombre</th>
            <th>descripcion</th>
            <th>precio_min</th>
            <th>precio_may</th>
            <th>categoria</th>
            <th>modificar</th>
            <th>eliminar</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value["descripcion"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value["precio_min"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value["precio_may"];?>
</td>
            <td>categoria</td>
            <td>boton modificar</td>
            <td>boton eliminar</td>
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
