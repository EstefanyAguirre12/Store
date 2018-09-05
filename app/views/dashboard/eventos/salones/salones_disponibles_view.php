<!-- page content -->
      <div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Salones eventos</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Listado salones</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li>
                      <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                      </a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row">
                <?php
                    foreach($salas as $salon){
                      print("
                      <div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                          <div class='tile-stats'>
                            <div class='icon'><i class='fa fa-caret-square-o-right'></i>
                            </div>
                            <div class='count'> 
                              <h2>
                              Sala:$salon[NombreSala] 
                              </h2>
                              <h4>
                                Estado:$salon[Estado] 
                              </h4>
                            </div>
                            <h3 class='red'>Precio:$salon[Costo]  capacidad:$salon[Capacidad] </h3>
                            <p>Info:$salon[Descripcion]    </p>
                          </div>
                      </div>
                      "); 
                  }   
                ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Seleccione los parametros</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li>
                      <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                      </a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form autocomplete= 'off' method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left">
                  <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Precio 1*:</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name  " name="precio1" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Precio 2*:</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name  " name="precio2" class="form-control col-md-7 col-xs-12 validate" type="text" name="middle-name" required/>
                  </div>
                </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" name="aceptar" class="btn btn-success">aceptar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- /page content -->