<!-- page content -->
<div class="right_col" role="main" class="estilo_righ">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Listado de pedidos</h3>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Habitacion del pedido</h2>
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
            foreach($habitaciones as $habitacion){
              print("
              <div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                  <div class='tile-stats'>
                    <div class='icon'><i class='fa fa-caret-square-o-right'></i>
                    </div>
                    <div class='count'> 
                      <h2>
                      Habitacion N:$habitacion[NumeroHab] 
                      </h2>
                    </div>
                    <a href='h_pedidos.php?IdUsuario=$habitacion[IdUsuario]' class='h3'>Ver</a>
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
  
</div>
</div>
<!-- /page content -->