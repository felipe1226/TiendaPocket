@extends('Tienda.Layout.app')
@section('content')

<!-- Breadcrumb Column -->
<div class="breadcrumb-container">
  <div class="container">

    <!-- Breadcrumb -->
    <div class="breadcrumb clearfix">
      <ul>
        <li class="home"><a href="{{url('Tienda/')}}">Inicio</a></li>
        <li class="depth1"><a href="{{url('MiCuenta')}}">Mi cuenta</a></li>
        <li class="depth2"><a href="{{url('Distribuciones')}}">Distribuciones</a></li>
      </ul>

    </div>
<!-- /Breadcrumb -->

  </div>
</div>
      <!-- End Breadcrumb Column -->

<!-- Columns -->
<div class="columns-container">
  <div id="columns" class="container">
    <div class="row">
                       <!-- Sidebar -->
      <div id="sidebar" class="column hidden"></div>
           <!-- End of Sidebar -->

      <!-- Center Column -->
        <div id="center_column" class="column col-sm-12">
          <div id="mywishlist">
            <h1 class="page-heading">Distribuciones de envio</h1>

            <p>Agregue las zonas de distribucion disponibles para realizar sus envios de pedidos y sus costos de envio según su localizacion.</p>

            <p><strong class="dark">Asegúrese de mantener actualizada su información y la tarifas de envio para cada zona de distribucion.</strong></p><br>

            <div class="column col-md-4 col-sm-6 col-xs-12">
      				<div class="box">
                <h3 class="page-subheading">Nueva zona</h3>
                <div class="form-group">
                  <select name="idDepto" class="form-last-name form-control" id="idDepto" required>
                      @foreach($departamentos as $departamento)
                        <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="input-group col-md-6">
                  <div class="input-group-addon">$</div>
                  <input class="form-control grey" type="text" name="envio" placeholder="Costo de envio">
                </div>
                <br><div class="clearfix"></div>
                <a href="#addPModal" class="btn btn-default" data-toggle="modal" title="Guardar"><i class="fa fa-fw fa-truck"></i><i class="fa fa-fw fa-plus"></i></a>
              </div>
            </div>
            <div id="block-history" class="block-center table-responsive col-md-6">
              <table class="std">
                <thead>
                  <tr>
                    <th class="cart_product first_item">Departamento</th>
                    <th class="item mywishlist_second">Costo de envio</th>
                    <th class="last_item mywishlist_first"></th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($articulos as $articulo)
                    <tr class="cart_item first_item odd">
                      <td class="cart_description">
                            {{$articulo->descripcion}}</a>
                      </td>
                      <td class="cart_unit" data-title="Unit price">
                        <ul class="price text-right" id="precio">
                          <li class="price">${{$articulo->precio}}</li>
                        </ul>
                      </td>

                      <td class="cart_delete text-center" data-title="Delete">
                        <div>

                          <a href="{{url('Articulo/'.$articulo->id.'/edit')}}" title="Editar" class="cart_quantity_delete"><i class="fa fa-fw fa-pencil-square-o"></i></a>

                          <a onclick="eliminar({{$articulo->id}})" title="Eliminar" class="cart_quantity_delete" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>


              <div class="content_sortPagiBar_top">
  		          <div id="pagination" class="pagination clearfix">
  					      <ul class="pagination">
                    <ul class="pagination">
                      {!!$articulos->render()!!}
                    </ul>
  								</ul>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <ul class="footer_links">
              <li class="f_right"><a class="button" href="{{url('Tienda')}}" title= "Ir al inicio"> <i class="fa fa-home"></i></a></li>
              <li><a class="button" href="{{url('MiCuenta')}}" title= "Regresar a mi cuenta"><i class="fa fa-user"></i> </a></li>
            </ul>

            <div class="modal fade" id="addPModal" >
              <div class="modal-dialog">
                <div class="modal-content">
                {!! Form::open(['method' => 'POST', 'action' => 'ProductoController@store']) !!}
                  <div class="modal-header" style="BACKGROUND-COLOR: rgb(79,0,85); color:white">
                    <button aria-hidden="true" type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                    <h4 class="modal-title">
                      Nuevo Producto
                    </h4>
                  </div>
                  <div class="modal-body">
                    <div class="" >
                      <div class="widget-content">
                        <div class="form-group">
                          <input type="text" name="nombreProducto" class="form-control" placeholder="Nombre" required="true" />
                        </div><br>
                      </div>
                      <div class="form-group col-md-4">
                        <select id="idCiudad" name="idCiudad" class="form-email form-control" id="form-email" required>
                            <option></option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <select name="idDepto" class="form-last-name form-control" id="idDepto" required>
                              @foreach($departamentos as $departamento)
                                <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                              @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                          <input id="precio" value="" type="number" min="0" step="any" name="precio" class="form-control" required="true" placeholder="Precio" />
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-default" onclick = "return confirm ('¿Está seguro de registrar el producto?')" style="BACKGROUND-COLOR: rgb(79,0,85); color:white" >Guardar</button>

                  </div>
                {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div><!-- #center_column -->
        </div><!-- .row -->
    </div><!-- #columns -->
  </div><!-- .columns-container -->
</div>


<script>

  $('#idDepto').on('change', function (event) {
      var id = $(this).find('option:selected').val();
      $('#idCiudad').empty();
      $('#idCiudad').append($('<option>', {
            value: 0,
            text: 'Elija una opción'
        }));
      JSONCiudades = eval(<?php echo json_encode($ciudades);?>);
      JSONCiudades.forEach(function(currentValue,index,arr) {
        if(currentValue.idDepartamento == id){
          $('#idCiudad').append($('<option>', {
            value: currentValue.id,
            text: currentValue.nombre
        }));
        }
    });
  });
</script>

@endsection
