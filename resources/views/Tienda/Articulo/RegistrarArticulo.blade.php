@extends('Tienda.Layout.app')
@section('content')

       			<!-- Breadcrumb Column -->
    <div class="breadcrumb-container">
      <div class="container">

       <!-- Breadcrumb -->
       <div class="breadcrumb clearfix">
       	<ul>
       		<li class="home"><a href="{{url('Tienda/')}}" title="Ir al inicio">Inicio</a></li>
          <li class="depht1"><a href="{{url('MiCuenta')}}">Mi cuenta</a></li>
          <li class="depth2"><a href="{{url('ArticulosProveedor')}}">Mis articulos</a></li>
          <li class="depth3"><a href="{{url('RegistrarArticulo')}}"><span id="direccion">Registrar articulo</span></a></li>
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
       						<!-- Center Column -->
       		<div id="center_column" class="column col-sm-12">
            <div class="contact-content">
              @include('flash::message')
              {!!Form::open(array('url'=>'Articulo/registrar','method'=>'POST', 'id' => 'formulario', 'enctype' => 'multipart/form-data'))!!}
        			{{Form::token()}}
                <h2 class="title">Informacion del articulo</h2>
                @if($articulo != null)
                  <input id="id_articulo" name="id_articulo" type="hidden" value="{{$articulo->id}}">
                @else
                  <input id="id_articulo" name="id_articulo" type="hidden" value="0">
                @endif
                <input id="color" name="color" type="hidden" value="">
                <input id="valDescuento" name="valDescuento" type="hidden" value="">
                <input id="nImg" type="hidden" value="1"/>
                <a id="buttonPlus" onclick="addImage()" class="btn btn-default" href="javascript:void(0)" title="Agregar"><i class="fa fa-fw fa-camera"></i><i class="fa fa-fw fa-plus"></i></a>
                <a id="buttonMinus"  onclick="delImage()" class="btn btn-default" href="javascript:void(0)" title="Sustraer" style="display: none"><i class="fa fa-fw fa-camera"></i><i class="fa fa-fw fa-minus"></i></a>
                <div class="row">
                  <div id="imagen1" class="col-md-4 col-sm-6">

                    <div class="form-group">

                      <label for="fileUpload">Imagen 1 (Principal)</label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div id="vistaImagen1" class="fileupload-preview fileupload-exists img-thumbnail" style="width: 170px; max-height: 170px;">
                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" height="160">
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152000">
          							<div class="uploader" id="uniform-fileUpload">
                          <input id="img1" type="file" name="imagen1" class="form-control" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="imagen2" class="col-md-4 col-sm-6" style="display: none">
                    <div class="form-group">
                      <label for="fileUpload">Imagen 2 (Opcional)</label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div id="vistaImagen2" class="fileupload-preview fileupload-exists img-thumbnail" style="width: 170px; max-height: 170px;">
                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" height="160">
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152000">
          							<div class="uploader" id="uniform-fileUpload">
                          <input id="img2" type="file" name="imagen2" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="imagen3" class="col-md-4 col-sm-12" style="display: none">
                    <div class="form-group">
                      <label for="fileUpload">Imagen 3(Opcional)</label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div id="vistaImagen3" class="fileupload-preview fileupload-exists img-thumbnail" style="width: 170px; max-height: 170px;">
                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" height="160">
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152000">
          							<div class="uploader" id="uniform-fileUpload">
                          <input id="img3" type="file" name="imagen3" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="contact-form-box col-md-10 col-sm-12">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                          <div class="form-group selector1">
                            <label for="categoria">Categoria</label>
                            <select id="categoria" class="form-control" name="categoria">
                              <option value="0">Elija la categoria</option>
                                <option value="PocketClub">PocketClub</option>
                                <option value="Licores">Licores</option>
                                <option value="Electronicos">Electronicos</option>
                                <option value="Cocteleria">Cocteleria</option>
                                <option value="Cocina">Cocina</option>
                                <option value="Publicitarios">Publicitarios</option>
                                <option value="Herramientas y decoracion">Herramientas y decoracion</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                              <input id="nombre" class="form-control grey" type="text" name="nombre"/>
                        </div>

                          <div class="form-group">
                            <label for="marca">Marca</label>
                              <input id="marca" class="form-control grey" type="text" name="marca"/>
                          </div>

                          <div class="checkbox">
                            <label><input id="checkColores" type="checkbox" onclick="addColores()"> Colores </label>
                          </div>
                          <div id="campoColor" style="display: none">
                            <div class="col-md-offset-1 col-md-4">
                              <div class="form-group">
                                <ul>
                                  <li>
                                    <input id="valRojo" type="hidden" value="0">
                                    <a onclick="checkColor('Rojo')" href="javascript:void(0)">
                                      <i id="checkRojo" class="fa fa-square" style="color:red;"></i><span> Rojo</span>
                                    </a>
                                  </li>
                                  <li>
                                    <input id="valAzul" type="hidden" value="0">
                                    <a onclick="checkColor('Azul')" href="javascript:void(0)">
                                      <i id="checkAzul" class="fa fa-square" style="color:blue;"></i><span> Azul</span>
                                    </a>
                                  </li>
                                  <li>
                                    <input id="valAmarillo" type="hidden" value="0">
                                    <a onclick="checkColor('Amarillo')" href="javascript:void(0)">
                                      <i id="checkAmarillo" class="fa fa-square" value="1" style="color:yellow;"></i><span> Amarillo</span>
                                    </a>
                                  </li>
                                  <li>
                                    <input id="valVerde" type="hidden" value="0">
                                    <a onclick="checkColor('Verde')" href="javascript:void(0)">
                                      <i id="checkVerde" class="fa fa-square" style="color:green;"></i><span> Verde</span>
                                    </a>
                                  </li>
                                  <li>
                                    <input id="valGris" type="hidden" value="0">
                                    <a onclick="checkColor('Gris')" href="javascript:void(0)">
                                      <i id="checkGris" class="fa fa-square" style="color:gray;"></i><span> Gris</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-md-offset-2 col-sm-6">
                        <div class="form-group">
                          <label for="cantidad">Cantidad</label>
                            <input id="cantidad" class="form-control grey" type="text" name="cantidad"/>
                        </div>
                        <div class="form-group">
                          <label for="precio">Precio</label>
                          <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input id="precio" class="form-control grey" type="text" name="precio" onchange="aplicarDescuento()">
                          </div>
                        </div>

                        <div class="checkbox">
                          <label><input id="checkDescuento" type="checkbox" onclick="addDescuento()"> Aplicar descuento </label>
                        </div>
                        <div id="campoDescuento" style="display: none">
                          <div class="form-group col-md-offset-2 col-md-6 col-sm-6 col-xs-8">
                            <div class="input-group">
                              <input class="form-control" id="valorDescuento" value="0" onchange="aplicarDescuento()">
                              <div class="input-group-addon">%</div>
                            </div>
                          </div>
                          <div class="col-md-offset-2 col-md-12 col-xs-offset-">
                            <label for="precio">Descuento de:</label>
                            <strong><span id="descuento"></span></strong><br>
                            <label for="precio">Precio total:</label>
                            <strong><span id="precioTotal"></span></strong>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-7">
                          <label for="descripcion">Descripcion</label>
                          <textarea id="descripcion" class="form-control" name="descripcion" rows="4"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="submit col-md-offset-6 col-sm-offset-10 col-xs-offset-9">
                        <buttom type="buttom" class="btn btn-default" onclick="validar()">Guargar</buttom>
                      </div>
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
            </div>
          </div><!-- #center_column -->
       	</div><!-- .row -->
      </div><!-- #columns -->
    </div><!-- .columns-container -->



    <script>

      $(function() {
        var id = $('#id_articulo').val();
        if(id != "0"){
          $('#direccion').html("Actualizar articulo");
          var articulo = eval(<?php echo json_encode($articulo);?>);
          $('#vistaImagen1').html('<img height="160" width="100%" src="'+baseDir+'imgArticulos/'+articulo.imagen1+'">');
          if(articulo.imagen2 != null){
            addImage();
            $('#vistaImagen2').html('<img height="160" width="100%" src="'+baseDir+'imgArticulos/'+articulo.imagen2+'">');
          }
          if(articulo.imagen3 != null){
            addImage();
            $('#vistaImagen3').html('<img height="160" width="100%" src="'+baseDir+'imgArticulos/'+articulo.imagen3+'">');
          }
          $('#img1').val("1");


          $('#categoria').val(articulo.categoria);
          $('#nombre').val(articulo.nombre);
          $('#marca').val(articulo.marca);
          $('#cantidad').val(articulo.cantidad);
          $('#precio').val(articulo.precio);
          $('#descripcion').val(articulo.descripcion);
          if(articulo.color != ""){
            document.getElementById("checkColores").checked = true;
            $('#campoColor').show();
            var valor;
            var colores = articulo.color;
            var i=0;
            var color = colores.split("/");
            for(i; i<color.length;i++){
              $('#val'+color[i]).val("1");
              $('#check'+color[i]).addClass("fa fa-check-square");
            }
          }
          if(articulo.descuento != ""){
            document.getElementById("checkDescuento").checked = true;
            $('#campoDescuento').show();
            $('#valorDescuento').val(articulo.descuento);
            aplicarDescuento();

          }
        }

      });

       function validar(){
          var error = false;

          var nombre = $('#name').val();
          var imagen1 = $('#img1').val();
          var imagen2 = null;
          var imagen3 = null;
          if(imagen1 == ""){
            error = true;
            alert("Debe elegir un archivo para la imagen principal!");
          }
          if($('#nImg').val() > 1){
            imagen2 = $('#img2').val();
            if(imagen2 == ""){
              error = true;
              alert("Debe elegir un archivo para la imagen 2!");
            }
          }
          else{
            $('#img2').val("");
            imagen2 = null;
          }
          if($('#nImg').val() > 2){
            imagen3 = $('#img3').val();
            if(imagen3 == ""){
              error=true;
              alert("Debe elegir un archivo para la imagen 3!");
            }
          }
          else{
            $('#img3').val("");
            imagen3 = null;
          }
          var marca = $('#marca').val();
          var precio = $('#precio').val();
          var cantidad = $('#cantidad').val();
          var categoria = $('#categoria').val();
          if(categoria == "0"){
            error = true;
            alert("Elija una categoria, por favor!");
          }
          var descripcion = $('#descripcion').val();

          var color = "";
          var descuento = 0;

          if((document.getElementById("checkColores").checked) == true){
            var valor;
            var colores = ["Rojo", "Azul", "Amarillo","Verde", "Gris"];
            var i=0;
            var cant=0;
            for(i; i<5;i++){
              cant++;
              valor = $('#val'+colores[i]).val();
              if(valor == "1"){
                if(cant==0){
                  color = colores[i];
                }
                else{
                  color+= "/"+colores[i];
                }

              }
            }
            if(color == ""){
              error = true;
              alert("Seleccione al menos un color, por favor!");
            }
          }else{
            color = "";
          }
          $('#color').val(color);
          if((document.getElementById("checkDescuento").checked) == true){
            descuento = $('#valorDescuento').val();
            if(descuento == "0"){
              descuento = "";
            }
          }
          else{
            descuento = "";
          }
          $('#valDescuento').val(descuento);

          if(!error){
            //document.getElementById("formulario").submit();
            alert(imagen1);
          }

       }

       function addImage(){
         var n = $('#nImg').val();
         if(n==1){
           $('#nImg').val("2");
           $('#buttonMinus').show("fast");
           $('#imagen2').show("slow");
         }
         else{
           if(n==2){
             $('#nImg').val("3");
             $('#buttonPlus').hide("fast");
             $('#imagen3').show("slow");
           }
         }
       }

       function delImage(){
         var n = $('#nImg').val();
         if(n==2){
           $('#nImg').val("1");
           $('#buttonMinus').hide("fast");
           $('#imagen2').hide("slow");
         }
         else{
           if(n==3){
             $('#nImg').val("2");
             $('#buttonPlus').show("fast");
             $('#imagen3').hide("slow");
           }
         }
       }

       function addDescuento(){
         var check = document.getElementById("checkDescuento").checked;
         if(check){
           $('#campoDescuento').show("fast");
           aplicarDescuento();
         }
         else{
           $('#campoDescuento').hide("fast");
         }
       }

       function aplicarDescuento(){
         var check = document.getElementById("checkDescuento").checked;
         var campoPrecio = $('#precio').val().trim();
         var campoDescuento = $('#valorDescuento').val().trim();
         if(check && (campoPrecio !="") && (campoDescuento !="")){
           var precio = parseInt($('#precio').val());
           var descuento = parseInt($('#valorDescuento').val());
           var precioDescuento = (precio * descuento)/100;
           var total = precio-precioDescuento ;
           $('#descuento').html("$"+precioDescuento);
           $('#precioTotal').html("$"+total);
         }
       }

       function addColores(){
         var check = document.getElementById("checkColores").checked;
         if(check){
           $('#campoColor').show("fast");
         }
         else{
           $('#campoColor').hide("fast");
         }
       }
       function checkColor(color){
         var valor = $('#val'+color).val();
         if(valor == "0"){
           $('#val'+color).val("1");
           $('#check'+color).removeClass("fa fa-square");
           $('#check'+color).addClass("fa fa-check-square");
         }
         else{
           $('#val'+color).val("0");
           $('#check'+color).removeClass("fa fa-check-square");
           $('#check'+color).addClass("fa fa-square");
         }
       }
     </script>

@endsection
