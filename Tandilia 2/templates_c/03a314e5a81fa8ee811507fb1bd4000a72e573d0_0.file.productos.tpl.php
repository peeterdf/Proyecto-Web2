<?php
/* Smarty version 3.1.30, created on 2016-11-15 11:00:19
  from "C:\xampp\htdocs\Tandilia 2\templates\productos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582adcb3260104_61839944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03a314e5a81fa8ee811507fb1bd4000a72e573d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tandilia 2\\templates\\productos.tpl',
      1 => 1479203957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productoslista.tpl' => 1,
  ),
),false)) {
function content_582adcb3260104_61839944 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article>
   <h1>Tener en cuenta al tomar una cerveza</h1>
    <p>La temperatura adecuada para beber una cerveza artesanal no es “bajo cero”, ni con la botella congelada, ni “punto frozen” o todas
        esas cosas que apunta el marketing de la cerveza industrial.  ¿Por qué? Porque a esas temperaturas se pierden los aromas y nuestras
        papilas no pueden saborear la bebida.
        Las grandes cerveceras imponen esa idea en el consumidor para tapar la baja calidad de sus productos.  Se puede hacer una prueba:
        elija una cerveza artesanal y una industrial y déjelas tomar temperatura  ambiente, cuando huela y pruebe ambas notará la diferencia:
        la industrial es intomable.
    </p>
    <div class="col-md-10 col-md-offset-1">
        <img src="./images/baner.jpg" class="img-responsive thumbnail" alt="cerveza">
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
      <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
    <?php }?>

    <form class="form-vertical formularioabm col-md-10 col-md-offset-1 cat_prod" href="index.php?action=filtra_categoria" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label">Filtrar</label>
        <select class="" name="id_categoria">
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
        <input class="btn btn-default btn-filtro-cat" type="submit" name="Enviar">
      </div>
    </form>

    <div class="col-md-12 prodprueba" id="listaProducto" >
      <?php $_smarty_tpl->_subTemplateRender("file:productoslista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</article>
<?php }
}
