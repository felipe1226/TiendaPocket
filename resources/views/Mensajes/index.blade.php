@extends('Tienda.Layout.app')
@section('content')

<!--<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css"><link href="stylesheets\bootstrap.min.css" media="all" rel="stylesheet" type="text/css"> <link href="stylesheets\font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\hightop-font.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\isotope.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\jquery.fancybox.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\fullcalendar.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\wizard.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\select2.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\morris.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\datatables.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\datepicker.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\timepicker.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\colorpicker.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\bootstrap-switch.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\bootstrap-editable.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\daterange-picker.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\typeahead.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\summernote.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\ladda-themeless.min.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\social-buttons.css" media="all" rel="stylesheet" type="text/css">
  <link href="stylesheets\jquery.fileupload-ui.css" media="screen" rel="stylesheet" type="text/css">
  <link href="stylesheets\dropzone.css" media="screen" rel="stylesheet" type="text/css">
  <link href="stylesheets\nestable.css" media="screen" rel="stylesheet" type="text/css">
  <link href="stylesheets\pygments.css" media="all" rel="stylesheet" type="text/css">-->

  <!--<link href="stylesheets\style.css" media="all" rel="stylesheet" type="text/css">-->

  <!--<link href="stylesheets\color\green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css">
  <link href="stylesheets\color\orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css">
  <link href="stylesheets\color\magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css">
  <link href="stylesheets\color\gray.css" media="all" rel="alternate  stylesheet" title="gray-theme" type="text/css">-->

 <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script><script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><script src="javascripts\bootstrap.min.js" type="text/javascript"></script><script src="javascripts\raphael.min.js" type="text/javascript"></script><script src="javascripts\selectivizr-min.js" type="text/javascript"></script>
 <script src="javascripts\jquery.mousewheel.js" type="text/javascript"></script>
 <script src="javascripts\jquery.vmap.min.js" type="text/javascript"></script><script src="javascripts\jquery.vmap.sampledata.js" type="text/javascript"></script><script src="javascripts\jquery.vmap.world.js" type="text/javascript"></script><script src="javascripts\jquery.bootstrap.wizard.js" type="text/javascript"></script><script src="javascripts\fullcalendar.min.js" type="text/javascript"></script>
 <script src="javascripts\gcal.js" type="text/javascript"></script><script src="javascripts\jquery.dataTables.min.js" type="text/javascript"></script><script src="javascripts\datatable-editable.js" type="text/javascript"></script><script src="javascripts\jquery.easy-pie-chart.js" type="text/javascript"></script><script src="javascripts\excanvas.min.js" type="text/javascript"></script>
 <script src="javascripts\jquery.isotope.min.js" type="text/javascript"></script>
 <script src="javascripts\isotope_extras.js" type="text/javascript"></script><script src="javascripts\modernizr.custom.js" type="text/javascript"></script><script src="javascripts\jquery.fancybox.pack.js" type="text/javascript"></script><script src="javascripts\select2.js" type="text/javascript"></script>
 <script src="javascripts\styleswitcher.js" type="text/javascript"></script><script src="javascripts\wysiwyg.js"
 type="text/javascript"></script><script src="javascripts\typeahead.js" type="text/javascript"></script><script src="javascripts\summernote.min.js" type="text/javascript"></script><script src="javascripts\jquery.inputmask.min.js" type="text/javascript"></script><script src="javascripts\jquery.validate.js" type="text/javascript"></script><script src="javascripts\bootstrap-fileupload.js"
 type="text/javascript"></script><script src="javascripts\bootstrap-datepicker.js"
  type="text/javascript"></script><script src="javascripts\bootstrap-timepicker.js" type="text/javascript"></script><script src="javascripts\bootstrap-colorpicker.js" type="text/javascript"></script><script src="javascripts\bootstrap-switch.min.js" type="text/javascript"></script><script src="javascripts\typeahead.js" type="text/javascript"></script><script src="javascripts\spin.min.js"
 type="text/javascript"></script><script src="javascripts\ladda.min.js"
 type="text/javascript"></script><script src="javascripts\moment.js" type="text/javascript"></script><script src="javascripts\mockjax.js" type="text/javascript"></script><script src="javascripts\bootstrap-editable.min.js" type="text/javascript"></script><script src="javascripts\xeditable-demo-mock.js" type="text/javascript"></script><script src="javascripts\xeditable-demo.js" type="text/javascript"></script>
 <script src="javascripts\address.js"
 type="text/javascript"></script><script src="javascripts\daterange-picker.js" type="text/javascript"></script><script src="javascripts\date.js" type="text/javascript"></script><script src="javascripts\morris.min.js" type="text/javascript"></script><script src="javascripts\skycons.js" type="text/javascript"></script><script src="javascripts\fitvids.js" type="text/javascript"></script>
 <script src="javascripts\jquery.sparkline.min.js" type="text/javascript"></script><script src="javascripts\dropzone.js" type="text/javascript"></script><script src="javascripts\jquery.nestable.js" type="text/javascript"></script><script src="javascripts\main.js" type="text/javascript"></script><script src="javascripts\respond.js" type="text/javascript"></script>

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
                    <a href="#">
                      <div class="status"></div>
                      <div class="favorite fa fa-star-o"></div>
                      <h2>
                      <!--Jhon Smith<span>11/9/13</span>-->
                      @foreach ($mensajes as $mensaje)
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

              <div class="col-sm-9 message-content">
                <div class="message-header">
                  <p class="date pull-right text-muted">
                    {{$mensaje->created_at}}
                  </p>
                  <p>
                    <strong>{{$mensaje->Emisor->nombrePersona}}</strong><br><span class="text-muted">{{$mensaje->Receptor->nombrePersona}}</span><br>{{"$mensaje->asunto"}}
                  </p>
                  <div class="btn-group message-actions">
                    <button class="btn btn-sm btn-default-outline"><i class="fa fa-trash-o"></i></button><button class="btn btn-sm btn-default-outline"><i class="fa fa-reply"></i></button><button class="btn btn-sm btn-default-outline"><i class="fa fa-reply-all"></i></button><button class="btn btn-sm btn-default-outline"><i class="fa fa-long-arrow-right"></i></button>
                  </div>
                </div>
                <div class="message-text">
                  <p>
                    {{$mensaje->descripcion}}
                  <!--  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.-->
                  </p>
                  <p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection
