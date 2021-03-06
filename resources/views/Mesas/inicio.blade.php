@extends('Layout.app')
@section('content')
<div class="col-sm-offset-2 col-sm-8">
<div class="panel-tittle" align="center">
      <h3><b>MIS MESAS</b></h3>
  </div>
  <div class="navbar-form navbar-left" >
    <div class="form-group" align="left">
        <a href="#addModal" class="btn btn-default" data-toggle="modal">
            <i class="fa fa-plus"></i> Nueva mesa &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
        </a>
    </div>
  </div >
  <div class="navbar-form navbar-right" >
    <div class="form-group" align="right">
      <div class="icon-addon addon-md">
          <input  id="nombreInput" type="text" size="40" maxlength="30" placeholder="Buscar..." class="form-control" />
          <label for="nombreInput" class="glyphicon glyphicon-search" rel="tooltip" title="nombreInput"></label>
      </div>
    </div>
  </div>
	
<div class="modal fade in" id="addModal" >
    <div class="modal-dialog">
      <div class="modal-content">
        <form name="formulario" autocomplete="on" method="post" action="{{url('mesas/create')}}">
            {{csrf_field()}}
          <div class="modal-header" style="BACKGROUND-COLOR: rgb(79,0,85); color:white">
          <button aria-hidden="true" type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
            <h4 class="modal-title">
            Nuevo Mesa
            </h4>
          </div>
          <div class="modal-body">
            <div class="" >
            <div class="widget-content">
              <div class="form-group">
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre de la mesa" required="true"/>
                </div>
                <div class="form-group">
                    <select name="estado"  class="form-control">
                      <option value="Disponible">Disponible</option>
                      <option value="Ocupada">Ocupada</option>
                      <option value="Reservada">Reservada</option>
                    </select>
                </div>
              </div>
            </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" style="BACKGROUND-COLOR: rgb(79,0,85); color:white" >Guardar</button>
          </div>
        </form>
    </div>
   </div>
  </div>


</div>
<div id="list-prov" class="col-sm-offset-2 col-sm-8">
	
</div>
 
<script>
$(document).ready(function(){
    listprov();
    cambiarCurrent("#mesas");
    $("#nombreInput").keyup(function(e){
        var dato = $("#nombreInput").val();
        var url = "mesaslistall?nombre=";
        var urlf = url+dato;
        sleep(100);
        $.ajax({
          type:'get',
          url:urlf,
          success: function(data){
              $("#list-prov").empty().html(data);
          }
        });
    });
});
 function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}
var listprov = function()
  {
    $.ajax({
      type:'get',
      url: '{{url('mesaslistall')}}',
      success:  function(data){
        $("#list-prov").empty().html(data);
      }
    });
  }
function cambiarCurrent(idInput) {
  $(".current").removeClass("current");
  $(idInput).addClass("current");
};

</script>
  <style>
    .center-block {
        float: none;
        margin-left: auto;
        margin-right: auto;
    }
    
    .input-group .icon-addon .form-control {
        border-radius: 0;
    }
    
    .icon-addon {
        position: relative;
        color: rgb(79,0,85);
        display: block;
    }
    
    .icon-addon:after,
    .icon-addon:before {
        display: table;
        content: " ";
    }
    
    .icon-addon:after {
        clear: both;
    }
    
    .icon-addon.addon-md .glyphicon,
    .icon-addon .glyphicon, 
    .icon-addon.addon-md .fa,
    .icon-addon .fa {
        position: absolute;
        z-index: 2;
        left: 10px;
        font-size: 14px;
        width: 20px;
        margin-left: -2.5px;
        text-align: center;
        padding: 10px 0;
        top: 1px
    }
    
    .icon-addon.addon-lg .form-control {
        line-height: 1.33;
        height: 46px;
        font-size: 18px;
        padding: 10px 16px 10px 40px;
    }
    
    .icon-addon.addon-sm .form-control {
        height: 30px;
        padding: 5px 10px 5px 28px;
        font-size: 12px;
        line-height: 1.5;
    }
    
    .icon-addon.addon-lg .fa,
    .icon-addon.addon-lg .glyphicon {
        font-size: 18px;
        margin-left: 0;
        left: 11px;
        top: 4px;
    }
    
    .icon-addon.addon-md .form-control,
    .icon-addon .form-control {
        padding-left: 30px;
        float: left;
        font-weight: normal;
    }
    
    .icon-addon.addon-sm .fa,
    .icon-addon.addon-sm .glyphicon {
        margin-left: 0;
        font-size: 12px;
        left: 5px;
        top: -1px
    }
    
    .icon-addon .form-control:focus + .glyphicon,
    .icon-addon:hover .glyphicon,
    .icon-addon .form-control:focus + .fa,
    .icon-addon:hover .fa {
        color: rgb(79,0,85);
    }
  </style>
@endsection