@extends('Layout.app')
@section('content')

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
            Messages/Inbox
          </h1>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <a class="btn btn-block btn-primary compose-btn" href="#">Compose</a>
            <ul class="list-group">
              <li class="list-group-item active">
                <a href="#">
                  <p>
                    <span class="badge">8</span>Inbox
                  </p>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <p>
                    <span class="badge">9</span>Starred
                  </p>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <p>
                    Sent

                  </p>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <p>
                    <span class="badge">1</span>Drafts
                  </p>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <p>
                    Trash
                  </p>
                </a>
              </li>
            </ul>
          </div>

          <div class="col-sm-10 messages">
            <div class="widget-container">
              <div class="col-sm-3 message-list">
                <ul class="list-group">
                  <li class="list-group-item active">

                      @foreach ($mensajes as $mensaje)
                    <a onclick="verMensaje({{$mensaje->id}})" href="javascript:void(0)">
                      <div class="status"></div>
                      <div class="favorite fa fa-star-o"></div>
                      <h2>

                      {{$mensaje->Emisor->nombrePersona}}<span>{{$mensaje->created_at}}</span>
                    </h2>
                      <p>
                      {{$mensaje->descripcion}}
                      <!--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque volutpat mattis eros…-->

                      </p>
                      @endforeach
                    </a>
                  </li>
                </ul>
              </div>

            <div id="messageBox" class="col-sm-9 message-content" style="display: block">
              <div class="message-header">
                <p class="date pull-right"><span id="fecha"></span>
                </p>
                <p>
                  <strong id="emisor"></strong><br><span id="receptor"></span><br><span id="asunto"></span>
                </p>
                <div class="btn-group message-actions">
                  <button class="btn btn-sm btn-default-outline"><i class="fa fa-trash-o"></i></button><button class="btn btn-sm btn-default-outline"><i class="fa fa-reply"></i></button><button class="btn btn-sm btn-default-outline"><i class="fa fa-reply-all"></i></button><button class="btn btn-sm btn-default-outline"><i class="fa fa-long-arrow-right"></i></button>
                </div>
              </div>
              <div class="message-text">
                <p>
                  <span id="descripcion"></span>
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>

  <script>
  function verMensaje(idMensaje){
      var options = {};
      $( "#messageBox" ).show( "fold", options, 500, callback );

          JSONMensajes = eval(<?php echo json_encode($mensajes);?>);
          JSONMensajes.forEach(function(currentValue,index,arr) {
            if(currentValue.id == idMensaje){

              $('#fecha').html(currentValue.created_at);
              $('#emisor').html(currentValue.emisor.nombrePersona);
              $('#asunto').html(currentValue.asunto);
              $('#descripcion').html(currentValue.descripcion);
            }
          });

}
function callback() {
      setTimeout(function() {
        $( "#messageBox:visible" ).removeAttr( "style" ).fadeOut();
      }, 1000 );
    };


  </script>


@endsection
