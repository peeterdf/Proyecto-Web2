<?php
/* Smarty version 3.1.30, created on 2016-10-25 00:39:58
  from "C:\xampp\htdocs\proyectos\Proyecto-Web2\Tandilia 2\templates\venta.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580e8dbee8a724_58003546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a97a211e11436f3c37f43e5b2ac083696de3e96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto-Web2\\Tandilia 2\\templates\\venta.tpl',
      1 => 1477013405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580e8dbee8a724_58003546 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article>
    <div class="row">
      <div class="table-responsive col-md-10 ">
        <table class="table table-condensed">
          <h1>Precios</h1>
          <thead>
            <tr>
              <th>Cervezas</th>
              <th>Mayorista</th>
              <th>Minorista</th>
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
  (<?php echo $_smarty_tpl->tpl_vars['producto']->value["nombre_categoria"];?>
)</td>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value["precio_may"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value["precio_min"];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </tbody>
          </table>
        </div>

    </div>

    <div class="row">
      <h1>Pedidos</h1>
      <form class="form-horizontal col-md-6">

          <div class="form-group">
              <!--<label for="inputPassword3" class="col-sm-2 control-label">Nombre</label> -->
              <div class="">
                <input type="name" class="form-control" id="inputEmail3" placeholder="Nombre">
              </div>
            </div>

          <div class="form-group">
            <!--<label for="inputEmail3" class="col-sm-2 control-label">Email</label> -->
            <div class="">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Example@mail.com">
            </div>
          </div>

          <div class="form-group">
            <!--<label for="inputPassword3" class="col-sm-2 control-label">Seleccione</label> -->
            <div class="">
              <select class="form-control" name="">
                <option value = "Consumo personal"> Deseo comprar para consumo personal </option>
                <option value = "Vender en mi local"> Deseo vender en mi local </option>
                <option value = "Otra"> Otra consulta... </option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <!--<label for="inputPassword3" class="col-sm-2 control-label">Consulta</label> -->
            <div class="">
                <textarea name="consulta" class="form-control" rows="8" cols="40" placeholder="Consulta"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-5">
              <button type="submit" class="btn btn-default">Enviar</button>
            </div>
          </div>
        </form>

      <div class="col-md-6">
        <a href="http://www.lupulento.com.br/wp-content/uploads/2016/04/sampling_beers_in_style_at_spinnakers-e1460477803740.jpg" class="thumbnail">
          <img src="./images/vasosdecerveza.jpg" class="img-responsive" alt="vasos">
        </a>
      </div>
      </div>
</article>
<?php }
}
