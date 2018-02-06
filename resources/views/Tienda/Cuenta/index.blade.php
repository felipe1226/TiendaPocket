@extends('Tienda.Layout.app')
@section('content')

<!-- Breadcrumb Column -->
	<div class="breadcrumb-container">
		<div class="container">

<!-- Breadcrumb -->
			<div class="breadcrumb clearfix">
				<ul>
					<li class="home"><a href="{{url('Tienda')}}">Inicio</a></li>
					<li class="depth1"><a href="{{url('MiCuenta')}}">Mi cuenta</a></li>
		    </ul>
			</div>
<!-- /Breadcrumb -->
		</div>
	</div>
						<!-- End Breadcrumb Column -->
						<div class="columns-container">
		<div id="columns" class="container">
			<div class="row">
														 <!-- Sidebar -->
				<div id="sidebar" class="column hidden">
				</div>
								 <!-- End of Sidebar -->
						<!-- Center Column -->
				<div id="center_column" class="column col-sm-12">
					<h1 class="page-heading">Mi Cuenta</h1>
					<p class="info-account">Administra toda la informacion de tu cuenta, articulos y pedidos.</p>

					<div class="row addresses-lists">
						<div class="col-md-4 col-xs-12 col-sm-6">
							<ul class="myaccount-link-list">
								<li><a href="{{url('Pedidos')}}" title="Mis Pedidos"><i class="fa fa-list-ol"></i><span>Historial de Pedidos y Detalles</span></a></li>
								<li><a href="{{url('InformacionPersonal')}}"><i class="fa fa-user"></i><span>Mi Informacion Personal</span></a></li>
            		<li><a href="{{url('MisDirecciones')}}"><i class="fa fa-building"></i><span>Mis Direcciones</span></a></li>
        			</ul>
						</div>
						<div class="col-md-4 col-xs-12 col-sm-6">
        			<ul class="myaccount-link-list">
								<li><a href="{{url('RegistrarArticulo')}}"><i class="fa fa-fw fa-inbox"></i><span>Registrar articulo</span></a></li>
								<li><a href="{{url('ArticulosProveedor')}}"><i class="fa fa-fw fa-glass"></i><span>Mis articulos</span></a></li>
								<li><a href="{{url('Distribuciones')}}"><i class="fa fa-fw fa-truck"></i><span>Distribuciones</span></a></li>
								<li><a href="{{url('Carrito')}}"><i class="fa fa-fw fa-shopping-cart"></i><span>Mi carrito</span></a></li>
								<li><a 	href="{{url('ListaDeseos')}}"><i class="fa fa-heart"></i><span>Mi Lista de Deseos</span></a></li>
        			</ul>
    				</div>
					</div>
					<ul class="footer_links">
										<li class="f_right"><a class="button" href="http://localhost/TiendaPocket/public/Tienda" title="Ir al inicio"> <i class="fa fa-home"></i></a></li>
					</ul>
				</div><!-- #center_column -->
			</div><!-- .row -->
		</div><!-- #columns -->
	</div><!-- .columns-container -->
</div>



@endsection
