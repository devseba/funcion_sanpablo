<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Forms
================================================== -->
<section id="forms" style="padding-top: 20px;margin-top: 0px">
  <div class="row">
    <div class="span10 offset1">
      <?$attr = array("class" => "form-horizontal well col-lg-6",
                      "style" => "width:60%");?>
      <?=form_open($action, $attr);?>
        <fieldset>
          <legend>Iniciar Sesi&oacute;n</legend>
          <div class="control-group">
            <label class="control-label" for="input01">Usuario o Email</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="email" placeholder="Ingrese su email" name="email">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="input01">Password</label>
            <div class="controls">
              <input type="password" class="input-xlarge" id="contraseña" placeholder="Ingrese su contraseña" name="password">
            </div>
          </div>

          <div class="form-group">
            <div class="controls">
                <button type="submit" class="btn btn-primary" id="asistir">Aceptar</button>
            </div>
          </div>          

        </fieldset>
      </form>
    </div>
  </div>

</section>
