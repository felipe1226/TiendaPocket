@extends('Tienda.Layout.app')
@section('content')

       			<!-- Breadcrumb Column -->
    <div class="breadcrumb-container">
      <div class="container">

       <!-- Breadcrumb -->
       <div class="breadcrumb clearfix">
       	<ul>
       		<li class="home"><a href="{{url('Tienda/')}}" title="Ir al inicio">Inicio</a></li>
            <li class="depth1"><a href="{{url('RegistrarArticulo')}}">RegistrarArticulo</a></li>
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


       	<!--<h1 class="page-heading bottom-indent">
       	Contact us</h1>-->
       	    <div class="contact-form">
       				<div class="contact-wrap row">
       	        <div class="gmap col-sm-12">
       		         <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
       		          <div id="map">&nbsp;</div>
       		           <script type="text/javascript">// <![CDATA[

               			  var myOptions = {
               				 zoom: 15,
               				 scrollwheel: false,
               				 center: new google.maps.LatLng(4.075526,-76.19952769999998),
               				 mapTypeId: google.maps.MapTypeId.ROADMAP
               			  };

               			  var map = new google.maps.Map(document.getElementById("map"), myOptions);
               		// ]]></script>
               	</div>
               	<div class="contact-content col-md-8 col-sm-12">
									@include('flash::message')
									{!!Form::open(array('url'=>'RegistrarArticulo','method'=>'POST','enctype' => 'multipart/form-data'))!!}
									{{Form::token()}}
               			<fieldset>
               				<h2 class="title">Informacion del articulo</h2>
               				<div class="row">
               					<div class="col-md-7 col-sm-7">
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
                              <div class="form-group" style="margin:0;">
                   							<label for="imagenArticulo">Imagen</label>
                   						</div>
                              <input type="hidden" name="MAX_FILE_SIZE" value="2097152000" />
                              <input type="file" name="imagenArticulo" class="form-control" />
                   					</div>
                          <div class="col-md-7 col-sm-7">
                 						<div class="form-group">
                              <label for="nombre">Nombre</label>
                 								<input class="form-control grey" type="text" name="nombre"/>
                 					</div>

               							<div class="form-group">
               								<label for="marca">Marca</label>
               									<input class="form-control grey" type="text" name="marca"/>
               							</div>

														<div class="form-group">
               								<label for="precio">Precio</label>
               									<input class="form-control grey" type="text" name="precio"/>
               							</div>

														<!--<div class="form-group">
               								<label for="impuesto">Impuesto</label>
               									<input class="form-control grey" type="text" name="impuesto"/>
               							</div>-->
														<div class="form-group">
               								<label for="cantidad">Cantidad</label>
               									<input class="form-control grey" type="text" name="cantidad"/>
               							</div>
               					</div>
               					<div class="col-md-12 col-sm-12">
               						<div class="form-group" style="margin:0;">
               							<label for="descripcion">Descripcion</label>
               						</div>
               						<textarea class="form-control" name="descripcion"></textarea>
               					</div>
               				</div>
                      <div class="submit">
                   			<button type="submit" class="button btn btn-default button-medium">Registrar
                   			</button>
                   		</div>
               			</fieldset>
										{!!Form::close()!!}

       	        </div>
              </div>
            </div>
          </div><!-- #center_column -->
       	</div><!-- .row -->
       </div><!-- #columns -->
     </div><!-- .columns-container -->

@endsection
