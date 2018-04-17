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

            <input id="idEditado" type="hidden" value="-1">
            <input id="deptoEditado" type="hidden" value="0">
            <input id="costoEditado" type="hidden" value="0">

            <div class="column col-md-4 col-sm-6 col-xs-12">
      				<div class="box">
                {!!Form::open(array('url'=>'Distribucion/registrar','method'=>'POST', 'id' => 'formulario'))!!}
                {{Form::token()}}
                <h3 class="page-subheading">Nueva zona</h3>
                <div class="form-group">
                  <select name="idDepto" class="form-last-name form-control" id="idDepto">
                      @foreach($departamentos as $departamento)
                        <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="input-group col-md-6">
                  <div class="input-group-addon">$</div>
                  <input id="costo" class="form-control grey" type="text" name="costo" placeholder="Costo de envio">
                </div>
                <br><div class="clearfix"></div>
                <a onclick="validar()" href="javascript:void(0)" class="btn btn-default" title="Guardar"><i class="fa fa-fw fa-truck"></i><i class="fa fa-fw fa-plus"></i></a>
                {!! Form::close() !!}
              </div>
            </div>
            <div id="block-history" class="block-center table-responsive col-md-8">
              <table class="std">
                <thead>
                  <tr>
                    <th class="cart_product first_item">Departamento</th>
                    <th class="item mywishlist_second">Costo de envio</th>
                    <th class="last_item mywishlist_first"></th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($distribucionesPag as $distribucion)
                    <tr class="cart_item first_item odd">
                      <td id="departamento{{$distribucion->id}}" class="cart_description">
                        {{$distribucion->departamento}}</a>
                      </td>
                      <input id="nombreDept{{$distribucion->id}}" type="hidden" value="{{$distribucion->departamento}}">
                      <td class="cart_unit" data-title="Unit price">
                        <ul class="price text-right" id="precio{{$distribucion->id}}">
                          <li class="price">$<span id="costo{{$distribucion->id}}">{{$distribucion->costo}}</span></li>
                        </ul>
                      </td>

                      <td class="cart_delete text-center" data-title="Delete">
                          <div id="buttonEditar{{$distribucion->id}}" style="display:block;">
                            <a onclick="editar({{$distribucion->id}})" href="javascript:void(0)" title="Editar" class="cart_quantity_delete"><i class="fa fa-fw fa-pencil-square-o"></i></a>
                          </div>
                          <div id="buttonActualizar{{$distribucion->id}}" style="display:none;">
                            <a onclick="actualizar({{$distribucion->id}})" href="javascript:void(0)"  title="Confirmar cambios" class="cart_quantity_delete"><i class="fa fa-fw fa-check-circle-o"></i></a>
                          </div>
                          <a onclick="eliminarDistribucion({{$distribucion->id}})" title="Eliminar" class="cart_quantity_delete" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>


              <div class="content_sortPagiBar_top">
  		          <div id="pagination" class="pagination clearfix">
  					      <ul class="pagination">
                    <ul class="pagination">
                      {!!$distribucionesPag->render()!!}
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
          </div><!-- #center_column -->
        </div><!-- .row -->
    </div><!-- #columns -->
  </div><!-- .columns-container -->
</div>


<script>

  function validar(){
    var error = false;
    var dept = $('#idDepto option:selected').text();
    var costo = $('#costo').val();
    JSONDistribuciones = eval(<?php echo json_encode($distribuciones);?>);
    JSONDistribuciones.forEach(function(currentValue,index,arr) {
      if(dept == currentValue.departamento){
        notificacion("Error de registro", "El departamento del "+$('#idDepto option:selected').text()+" ya se encuentra registrado!","", false);
        error = true;
      }
    });
    if(costo != "0" && !error){
      document.getElementById("formulario").submit();
    }
  }

  function editar(id){
    var dept = $('#nombreDept'+id).val();
    var costo = $('#costo'+id).html();
    var idEditado = $('#idEditado').val();
    var deptoEditado = $('#deptoEditado').val();
    var costoEditado = $('#costoEditado').val();

      if(idEditado != -1){
        var departamento = $('#idDepto'+idEditado).val();
        var nuevoCosto = $('#campoCosto'+idEditado).val();
        var error = false;
        var confirma = false;
        if((departamento != deptoEditado) && (nuevoCosto != costoEditado)){
          if(confirm('¿Desea confirmar los cambios de la distribucion?\n\nDepartamento: '+deptoEditado+' a '+departamento+'\nCosto: $'+costoEditado+' a $'+nuevoCosto)){
            error = verificarDepartamento(departamento);
            confirma = true;
          }
        }
        else{
          if(departamento != deptoEditado){
            if(confirm('¿Desea confirmar los cambios de la distribucion?\n\nDepartamento: '+deptoEditado+' a '+departamento)){
              error = verificarDepartamento(departamento);
              confirma = true;
            }
          }
          else{
            if(nuevoCosto != costoEditado){
              if(confirm('¿Desea confirmar los cambios de la distribucion a '+deptoEditado+'?\n\nCosto: $'+costoEditado+' a $'+nuevoCosto)){
                confirma = true;
              }
            }
          }
        }
        if(confirma && !error){
          actualizar(idEditado,departamento,nuevoCosto);
        }
        $('#departamento'+idEditado).html(deptoEditado);
        $('#precio'+idEditado).html('<li class="price">$<span id="costo'+idEditado+'">'+costoEditado+'</span></li>');
        $('#buttonActualizar'+idEditado).hide();
        $('#buttonEditar'+idEditado).show();
      }
      $('#idEditado').val(id);
      $('#deptoEditado').val(dept);
      $('#costoEditado').val(costo);

      $('#buttonActualizar'+id).show();
      $('#buttonEditar'+id).hide();

      $('#departamento'+id).html('<div class="form-group"><select name="idDepto" class="form-last-name form-control" id="idDepto'+id+'" required></option></select></div>');
      JSONDepartamentos = eval(<?php echo json_encode($departamentos);?>);
      JSONDepartamentos.forEach(function(currentValue,index,arr) {
        $('#idDepto'+id).append($('<option>', {
            value: currentValue.nombre,
            text: currentValue.nombre
        }));
      });
      $('#idDepto'+id+' option[value="' + dept + '"]').attr("selected", true);

      $('#precio'+id).html('<input id="campoCosto'+id+'" type="text" value="'+costo+'"/>');
  }

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

  function actualizar(idDistribucion, departamento, costo){
      $.ajax({
        url: "Distribucion/actualizar",
        type: 'GET',
        data: {
          id: idDistribucion,
          departamento: departamento,
          costo: costo
        },
        success: function(){
          var idEditado = $('#idEditado').val('-1');
          var deptoEditado = $('#deptoEditado').val('0');
          var costoEditado = $('#costoEditado').val('0');

          location.reload();
          notificacion("Distribucion actualizada","Se han realizado los cambios satisfactoriamente!","", false);
        },
        error: function(data){
          notificacion("Error de registro", "Se ha presentado un error al guardar la distribucion!","", false);
        }
      });
  }

  function  verificarDepartamento(departamento){
    var error = false;
    JSONDistribuciones = eval(<?php echo json_encode($distribuciones);?>);
    JSONDistribuciones.forEach(function(currentValue,index,arr) {
      if(departamento == currentValue.departamento){
        notificacion("Error al guardar cambios!", "El departamento "+departamento+" ya se encuentra en tus distribuciones!", "", false);
        error = true;
      }
    });
    return error;
  }


  function eliminarDistribucion(idDistribucion){
    if(confirm('¿Desea descartar la distribucion a '+$('#nombreDept'+idDistribucion).val()+'?')){
      $.ajax({
        url: "Distribucion/eliminar",
        type: 'GET',
        data: {
          id: idDistribucion
        },
        success: function(){
          location.reload();
        },
        error: function(data){
          alert('Error al eliminar la distribución!');
        }
      });
    }
  }


</script>

@endsection
