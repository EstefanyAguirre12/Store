<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>Reservas online</title>
  <?php 
  require_once("php/estilos.php");
 ?>
</head>

<body class="nav-md">
  <div class="container body">

    <div class="main_container">
      <?php 
        require_once("php/panel.php");
       ?>

      <!-- page content -->
      <div class="right_col" role="main" class="estilo_righ">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Reservas</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Lista de reservas en linea</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="datatable-checkbox_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="dataTables_length" id="datatable-checkbox_length">
                          <label>Mostrando
                            <select name="datatable-checkbox_length" aria-controls="datatable-checkbox" class="form-control input-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                            </select> Por</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div id="datatable-checkbox_filter" class="dataTables_filter">
                          <label>Busquedad:
                            <input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-checkbox">
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                          <thead>
                            <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 263px;">Nombre</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                aria-label="Position: activate to sort column ascending" style="width: 420px;">Lugar</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                aria-label="Office: activate to sort column ascending" style="width: 201px;">Oficina</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                aria-label="Age: activate to sort column ascending" style="width: 113px;">Edad</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                aria-label="Start date: activate to sort column ascending" style="width: 197px;">Fecha</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" class="estilo_158">Salario</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr role="row" class="odd">
                              <td class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="even">
                              <td class="sorting_1">Angelica Ramos</td>
                              <td>Chief Executive Officer (CEO)</td>
                              <td>London</td>
                              <td>47</td>
                              <td>2009/10/09</td>
                              <td>$1,200,000</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td class="sorting_1">Ashton Cox</td>
                              <td>Junior Technical Author</td>
                              <td>San Francisco</td>
                              <td>66</td>
                              <td>2009/01/12</td>
                              <td>$86,000</td>
                            </tr>
                            <tr role="row" class="even">
                              <td class="sorting_1">Bradley Greer</td>
                              <td>Software Engineer</td>
                              <td>London</td>
                              <td>41</td>
                              <td>2012/10/13</td>
                              <td>$132,000</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td class="sorting_1">Brenden Wagner</td>
                              <td>Software Engineer</td>
                              <td>San Francisco</td>
                              <td>28</td>
                              <td>2011/06/07</td>
                              <td>$206,850</td>
                            </tr>
                            <tr role="row" class="even">
                              <td class="sorting_1">Brielle Williamson</td>
                              <td>Integration Specialist</td>
                              <td>New York</td>
                              <td>61</td>
                              <td>2012/12/02</td>
                              <td>$372,000</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td class="sorting_1">Bruno Nash</td>
                              <td>Software Engineer</td>
                              <td>London</td>
                              <td>38</td>
                              <td>2011/05/03</td>
                              <td>$163,500</td>
                            </tr>
                            <tr role="row" class="even">
                              <td class="sorting_1">Caesar Vance</td>
                              <td>Pre-Sales Support</td>
                              <td>New York</td>
                              <td>21</td>
                              <td>2011/12/12</td>
                              <td>$106,450</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td class="sorting_1">Cara Stevens</td>
                              <td>Sales Assistant</td>
                              <td>New York</td>
                              <td>46</td>
                              <td>2011/12/06</td>
                              <td>$145,600</td>
                            </tr>
                            <tr role="row" class="even">
                              <td class="sorting_1">Cedric Kelly</td>
                              <td>Senior Javascript Developer</td>
                              <td>Edinburgh</td>
                              <td>22</td>
                              <td>2012/03/29</td>
                              <td>$433,060</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-5">
                        <div class="dataTables_info" id="datatable-checkbox_info" role="status" aria-live="polite">Mostrado 10 de 57 registros</div>
                      </div>
                      <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="datatable-checkbox_paginate">
                          <ul class="pagination">
                            <li class="paginate_button previous disabled" id="datatable-checkbox_previous">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="0" tabindex="0">Anterior</a>
                            </li>
                            <li class="paginate_button active">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="1" tabindex="0">1</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="2" tabindex="0">2</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="3" tabindex="0">3</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="4" tabindex="0">4</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="5" tabindex="0">5</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="6" tabindex="0">6</a>
                            </li>
                            <li class="paginate_button next" id="datatable-checkbox_next">
                              <a href="#" aria-controls="datatable-checkbox" data-dt-idx="7" tabindex="0">Siguiente</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo odit eligendi minima nemo, quod possimus dolore vero quam consectetur
          eveniet asperiores ad praesentium officiis dolorem non molestias eos facere accusamus?
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>
  <?php 
  require_once("php/scrips.php");
 ?>

</body>

</html>