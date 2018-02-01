@extends('Tienda.Layout.app')
@section('content')

       			<!-- Breadcrumb Column -->
    <div class="breadcrumb-container">
      <div class="container">

       <!-- Breadcrumb -->
       <div class="breadcrumb clearfix">
       	<ul>
       		<li class="home"><a href="{{url('Tienda/')}}" title="Ir al inicio">Inicio</a></li>
            <li class="depth1"><a href="{{url('RegistrarArticulo')}}">Registrar Articulo</a></li>
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
              <h2 class="title">Informacion del articulo</h2>
              <input id="nImg" type="hidden" value="1"/>
              <a id="buttonPlus" onclick="addImage()" class="btn btn-default" href="javascript:void(0)" title="Agregar"><i class="fa fa-fw fa-camera"></i><i class="fa fa-fw fa-plus"></i></a>
              <a id="buttonMinus"  onclick="delImage()" class="btn btn-default" href="javascript:void(0)" title="Sustraer" style="display: none"><i class="fa fa-fw fa-camera"></i><i class="fa fa-fw fa-minus"></i></a>
              <div class="row">
                <div id="imagen1" class="col-md-4">
                  <div class="form-group">
                    <label for="fileUpload">Imagen 1 (Principal)</label>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 200px; max-height: 200px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                      </div>
                      <input type="hidden" name="MAX_FILE_SIZE" value="2097152000">
        							<div class="uploader" id="uniform-fileUpload">
                        <input type="file" name="imagen1" class="form-control">
                        <span class="filename" >Nombre de archivo</span>
                        <span class="action" >Imagen 1</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="imagen2" class="col-md-4" style="display: none">

                  <div class="form-group">
                    <label for="fileUpload">Imagen 2 (Opcional)</label>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 200px; max-height: 200px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                      </div>
                      <input type="hidden" name="MAX_FILE_SIZE" value="2097152000">
        							<div class="uploader" id="uniform-fileUpload">
                        <input type="file" name="imagen2" class="form-control">
                        <span class="filename" >Nombre de archivo</span>
                        <span class="action" >Imagen 1</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="imagen3" class="col-md-3" style="display: none">
                  <div class="form-group">
                    <label for="fileUpload">Imagen 3(Opcional)</label>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 200px; max-height: 200px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                      </div>
                      <input type="hidden" name="MAX_FILE_SIZE" value="2097152000">
        							<div class="uploader" id="uniform-fileUpload">
                        <input type="file" name="imagen3" class="form-control">
                        <span class="filename" >Nombre de archivo</span>
                        <span class="action" >Imagen 1</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="contact-form-box col-md-8 col-sm-12">
                  <form method="POST" action="http://localhost/TiendaPocket/public/Tienda/Contactenos" accept-charset="UTF-8" enctype="multipart/form-data">
                    <fieldset>

                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                            <div class="form-group selector1">
                              <label for="categoria">Categoria</label>
                              <select class="form-control" name="categoria">
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
                 								<input id="name" class="form-control grey" type="text" name="nombre"/>
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
                            <div class="form-group col-md-offset-2 col-md-6 col-sm-4 col-xs-6">
                              <div class="input-group">
                                <input class="form-control" id="valorDescuento" value="0" onchange="aplicarDescuento()">
                                <div class="input-group-addon">%</div>
                              </div>
                            </div>
                            <div class="col-md-offset-2 col-md-10">
                              <label for="precio">Descuento de:</label>
                              <strong><span id="descuento"></span></strong><br>
                              <label for="precio">Precio total:</label>
                              <strong><span id="precioTotal"></span></strong>
                            </div>
                          </div>
                        </div>
               				</div>
                      <div class"row">
                        <div class="form-group">
                          <label for="descripcion">Descripcion</label>
                          <textarea id="descripcion" class="form-control" name="descripcion"></textarea>
                        </div>
                      </div>
                      <div class"row">
                        <div class="col-md-offset-10 col-sm-offsett-10 col-xs-offset-10">
                          <buttom type="submit" class="button btn btn-default button-medium">Guardar
                          </buttom>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>




            </div>
          </div><!-- #center_column -->
       	</div><!-- .row -->
       </div><!-- #columns -->
     </div><!-- .columns-container -->



     <script>

       function validar(){
         var nombre = $('#name').val();
         var imagen = $('#imagen').val();
         var marca = $('#marca').val();
         var precio = $('#precio').val();
         var cantidad = $('#cantidad').val();
         var categoria = $('#categoria').val();
         var descripcion = $('#descripcion').val();

         alert(nombre+" "+imagen+" "+marca+" "+precio+" "+cantidad+" "+categoria+" "+descripcion);
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
