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
            <a href="{{url('RegistrarArticulo')}}" class="btn btn-default" title="Registrar articulo"> <i class="fa fa-fw fa-glass"></i><i class="fa fa-fw fa-plus"></i></a>
            <div class="content_sortPagiBar_top">
              <div id="pagination" class="pagination clearfix">
                <ul class="pagination">
                    {!!$articulos->render()!!}
                </ul>
              </div>
            </div>
              <table class="std">
                <thead>
                  <tr>
                    <th class="cart_product first_item">Articulo</th>
                    <th class="cart_product">Descripcion</th>
                    <th class="cart_product">Descripcion</th>
                    <th class="cart_product">Precio Unitario</th>
                    <th class="cart_product">Descuento</th>
                    <th class="cart_product">Inventario</th>
                    <th class="cart_product">Fecha creado</th>
                    <th class="last_item cart_product"></th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($articulos as $articulo)
                    <tr id="{{$articulo->id}}" class="cart_item first_item select">

                      <td class="cart_product">
                        <a href="Detalles/{{$articulo->id}}"><img src="imgArticulos/{{$articulo->imagen1}}" width="80" height="80"  /></a>
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
                          <li class="price"><strong>${{$articulo->precio}}</strong></li>
                        </ul>
                      </td>
                      <td class="cart_unit" data-title="Unit price">
                        <ul class="price text-right" id="descuento">
                          @if($articulo->descuento == "")
                            <li class="price">0%</li>
                          @else
                            <li class="price"><strong>{{$articulo->descuento}}%</strong></li>
                          @endif
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

            <ul class="footer_links">
              <li class="f_right"><a class="button" href="{{url('Tienda')}}" title= "Ir al inicio"> <i class="fa fa-home"></i></a></li>
              <li><a class="button" href="{{url('MiCuenta')}}" title= "Regresar a mi cuenta"><i class="fa fa-user"></i> </a></li>
            </ul>


          </div><!-- #center_column -->
    </div><!-- .row -->
  </div><!-- #columns -->
</div><!-- .columns-container -->
</div>


<script>
  $(".select").click(function(){
    var idArticulo = $(this).attr("id");
    location.href="Articulo/"+idArticulo+"/edit";
  });
</script>

<style>
    .select:hover {
      background: #eeeeee;
    }
</style>

@endsection
