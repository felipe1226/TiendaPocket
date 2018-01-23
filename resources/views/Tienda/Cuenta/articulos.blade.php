@extends('Tienda.Layout.app')
@section('content')

<!-- Breadcrumb Column -->
         <div class="breadcrumb-container">
    <div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
<ul>
<li class="home"><a href="{{url('Tienda/')}}">Inicio</a></li>
<li class="depth1"><a href="{{url('Cuenta')}}">Cuenta</a></li>
<li class="depth2"><a href="{{url('ArticulosProveedor')}}">Mis articulos</a></li>
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
          <div id="sidebar" class="column hidden">

          </div>
           <!-- End of Sidebar -->

      <!-- Center Column -->
      <div id="center_column" class="column col-sm-12">

        <div id="mywishlist">
          <h1 class="page-heading">Mis articulos</h1>
          <div id="block-history" class="block-center table-responsive">
            <div class="content_sortPagiBar_top">
              <div id="pagination" class="pagination clearfix">
                <ul class="pagination">
                  <ul class="pagination">
                    {!!$articulos->render()!!}
                  </ul>
                </ul>
              </div>
            </div>
              <table class="std">
                <thead>
                  <tr>
                    <th class="cart_product first_item">Articulo</th>
                    <th class="item mywishlist_second">Descripcion</th>
                    <th class="item mywishlist_second">Descripcion</th>
                    <th class="item mywishlist_second">Precio Unitario</th>
                    <th class="item mywishlist_second">Inventario</th>
                    <th class="item mywishlist_second">Fecha creado</th>
                    <th class="last_item mywishlist_first"></th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($articulos as $articulo)
                    <tr class="cart_item first_item address_0 odd">

                      <td class="cart_product">
                        <a href="Detalles/{{$articulo->id}}"><img src="imgArticulos/{{$articulo->imagen}}" width="80" height="80"  /></a>
                      </td>

                      <td class="cart_description">
                        <h4 class="product-name">
                            <a href="Detalles/{{$articulo->id}}">{{$articulo->nombre}}</a>
                        </h4>
                        <small class="cart_ref">Marca: {{$articulo->marca}}
                        <br>Categoria: {{$articulo->categoria}}</small>
                      </td>
                      <td class="cart_description">
                            {{$articulo->descripcion}}</a>
                      </td>
                      <td class="cart_unit" data-title="Unit price">
                        <ul class="price text-right" id="precio">
                          <li class="price">${{$articulo->precio}}</li>
                        </ul>
                      </td>
                      <td class="cart_unit" data-title="Unit price">
                        <ul class="price text-right" id="cantidad">
                          <li class="price">{{$articulo->cantidad}}</li>
                        </ul>
                      </td>

                      <td class="cart_quantity text-center" data-title="Quantity">
                        {{$articulo->created_at}}

                      </td>

                      <td class="cart_delete text-center" data-title="Delete">
                        <div>
                          <a onclick="eliminar({{$articulo->id}})" title="Editar" class="cart_quantity_delete" id="33_204_0_23" href="javascript:void(0)"><i class="fa fa-fw fa-pencil-square-o"></i></a>

                          <a onclick="eliminar({{$articulo->id}})" title="Eliminar" class="cart_quantity_delete" id="33_204_0_23" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
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

            <ul class="footer_links">
              <li class="f_right"><a class="button" href="{{url('Tienda')}}" title= "Ir al inicio"> <i class="fa fa-home"></i></a></li>
              <li><a class="button" href="{{url('Cuenta')}}" title= "Regresar a mi cuenta"><i class="fa fa-user"></i> </a></li>

            </ul>


          </div><!-- #center_column -->
    </div><!-- .row -->
  </div><!-- #columns -->
</div><!-- .columns-container -->
</div>

@endsection
