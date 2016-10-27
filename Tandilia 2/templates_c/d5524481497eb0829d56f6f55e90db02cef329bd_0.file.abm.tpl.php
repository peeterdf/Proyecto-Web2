<?php
/* Smarty version 3.1.30, created on 2016-10-27 04:15:55
  from "C:\xampp\htdocs\proyectos\Proyecto-Web2\Tandilia 2\templates\abm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5811635bde6db1_88349620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5524481497eb0829d56f6f55e90db02cef329bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto-Web2\\Tandilia 2\\templates\\abm.tpl',
      1 => 1477534524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:abmtabla.tpl' => 1,
  ),
),false)) {
function content_5811635bde6db1_88349620 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article>

    <div class="row">

      <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
        <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
      <?php }?>
<div class="tablaabm">

  <?php $_smarty_tpl->_subTemplateRender("file:abmtabla.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-agregaprod btn btn-default">Agregar Producto</button>

    <div class="ocultarabm mostrarprod col-md-12">
      <form class="form-horizontal formularioabm"  id="formProductos" href="index.php?action=guardar_producto" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label class="col-sm-2 control-label">Cerveza</label>
        <input class="" type="text" name="nombre" id="Tcerveza">
        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Categoria</label>
        <select class="selectpicker" name="fk_id_categoria" id="Ncategoria">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" ><?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>

        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Descripcion</label>
        <input class="" type="textarea" name="descripcion" id="Cdescripcion" value="sadasdasd">
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Precio Mayorista</label>
        <input class="" type="number" name="precio_may" id="Pmayorista" value="123">
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Precio Minorista</label>
        <input class="" type="number" name="precio_min" id="Pminorista" value="123">
        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Imagenes</label>
        <input type="file" name="imagenes[]" required value="" multiple>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input class="btn-enviarprod btn btn-default" type="submit" name="Enviar">
          </div>
        </div>
      </form>

    </div>

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-editaprod btn btn-default">Editar Producto</button>
    <div class="ocultarabm editaprod col-md-12">
      <form class="form-horizontal  formularioabm"  id="formProductos" href="index.php?action=editar_producto" method="post" enctype="multipart/form-data">
        <select class="col-md-5 col-md-offset-1"  name="id_producto">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
          <option  value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value["nombre"];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        <div class="form-group">
        <label class="col-sm-2 control-label">Categoria</label>
        <select class="selectpicker" name="fk_id_categoria" id="Ncategoria">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" ><?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>

        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Descripcion</label>
        <input class="" type="textarea" name="descripcion" id="Cdescripcion" value="sadasdasd">
         </div>
        <div class="form-group col-md-10 col-md-offset-1">
        <label class="col-sm-2 control-label">Precio Mayorista</label>
        <input class="" type="number" name="precio_may" id="Pmayorista" value="">
         </div>
        <div class="form-group col-md-10 col-md-offset-1">
          <label class="col-sm-2 control-label">Precio Minorista</label>
          <input class="" type="number" name="precio_min" id="Pminorista" value="">
        </div>

          <div class="form-group col-md-5 col-md-offset-1">
            <input class="btn-editaprod btn btn-default editarProducto" type="submit" name="Enviar">
          </div>
      </form>
    </div>

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-agregacat btn btn-default">Agregar Categoria</button>

    <div class="ocultarabm mostrarcat col-md-12">
      <form class="form-horizontal formularioabm" href="index.php?action=guardar_categoria" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label class="col-sm-2 control-label">Nombre</label>
          <input class="" type="text" name="nombre" required value="">
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input class="btn-enviarcat btn btn-default" type="submit" name="Enviar">
          </div>
        </div>
      </form>
    </div>

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-borrarcat btn btn-default">Eliminar Categoria</button>

    <div class="ocultarabm borrarcat col-md-10 col-md-offset-1 ">
      <form class="form-horizontal formulario"  id="formProductos"  method="post" enctype="multipart/form-data">

        <div class="form-group">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <li>
          <a class="eliminarCategoria" href="#" data-idcategoria="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</a>
          </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </ul>
      </form>

      </div>
    </div>



    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-editacat btn btn-default">Editar Categoria</button>

    <div class="ocultarabm editacat col-md-12">
      <form class="form-horizontal  formularioabm"  id="formProductos" href="index.php?action=editar_categoria" method="post" enctype="multipart/form-data">
        <select class="col-md-5 col-md-offset-1"  name="id_categoria">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <option  value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nombre</label>
          <input class="" type="text" name="nombre" required value="">
        </div>


          <div class="form-group col-md-5 col-md-offset-1">
            <input class="btn-editaprod btn btn-default editarProducto" type="submit" name="Enviar">
          </div>
      </form>
    </div>


</article>
<?php }
}
