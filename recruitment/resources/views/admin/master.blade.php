<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{!!url('public/bootstrap/css/bootstrap.min.css')!!}">
    {{-- custom css --}}
    <link rel="stylesheet" type="text/css" href="{!!url('public/css/custom.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!url('public/css/cv.css')!!}">
    {{-- datepicker --}}
    <link rel="stylesheet" href="{!!url('public/datepicker/jquery-ui.theme.css')!!}">
    <link rel="stylesheet" href="{!!url('public/datepicker/jquery-ui.min.css')!!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!!url('public/admin/dist/css/AdminLTE.min.css')!!}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{!!url('public/admin/dist/css/skins/_all-skins.min.css')!!}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{!!url('public/admin/plugins/iCheck/flat/blue.css')!!}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{!!url('public/admin/plugins/morris/morris.css')!!}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{!!url('public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}">
    <!--select 2-->
    <link rel="stylesheet" href="{!!url('public/admin/plugins/select2/select2.min.css')!!}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{!!url('public/admin/plugins/iCheck/all.css')!!}">
    <!-- Date Picker -->
    {{-- <link rel="stylesheet" href="{!!url('public/admin/plugins/datepicker/datepicker3.css')!!}"> --}}
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{!!url('public/admin/plugins/daterangepicker/daterangepicker.css')!!}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{!!url('public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--Data Table-->
    <link rel="stylesheet" href="{!!url('public/datatablesv2/css/dataTables.bootstrap.min.css')!!}">
    {{-- <link rel="stylesheet" href="{!!url('public/datatablesv2/css/jquery.dataTables.min.css')!!}"> --}}
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!--=======header======-->
      @include('admin.widgets.header')
      <!--=======/header======-->

      <!-- Left side column. contains the logo and sidebar -->
      @include('admin.widgets.sidebarleft')
      <!-- /Left side column. contains the logo and sidebar -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!--conten-->
        @yield('content')
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.11
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
      </footer>
      <!-- Control Sidebar -->
      @include('admin.widgets.controlersidebar')
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 2.2.3 -->
    <script src="{!!url('public/admin/plugins/jQuery/jquery-2.2.3.min.js')!!}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{!!url('public/admin/bootstrap/js/bootstrap.min.js')!!}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{!!url('public/admin/plugins/morris/morris.min.js')!!}"></script>
    <!-- Sparkline -->
    <script src="{!!url('public/admin/plugins/sparkline/jquery.sparkline.min.js')!!}"></script>
    <!-- jvectormap -->
    <script src="{!!url('public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}"></script>
    <script src="{!!url('public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{!!url('public/admin/plugins/knob/jquery.knob.js')!!}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{!!url('public/admin/plugins/daterangepicker/daterangepicker.js')!!}"></script>
    <!-- datepicker -->
    {{-- <script src="{!!url('public/admin/plugins/datepicker/bootstrap-datepicker.js')!!}"></script> --}}
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{!!url('public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}"></script>
    <!-- Slimscroll -->
    <script src="{!!url('public/admin/plugins/slimScroll/jquery.slimscroll.min.js')!!}"></script>
    <!-- FastClick -->
    <script src="{!!url('public/admin/plugins/fastclick/fastclick.js')!!}"></script>
    <!-- AdminLTE App -->
    <script src="{!!url('public/admin/dist/js/app.min.js')!!}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{!!url('public/admin/dist/js/pages/dashboard.js')!!}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{!!url('public/admin/dist/js/demo.js')!!}"></script>
    <!-- Select2 -->
    <script src="{!!url('public/admin/plugins/select2/select2.full.min.js')!!}"></script>
    <!-- icheck radio-->
    <script src="{!!url('public/admin/plugins/iCheck/icheck.min.js')!!}"></script>
    <!--Datatable-->
    <script src="{!!url('public/datatablesv2/js/jquery.dataTables.min.js')!!}"></script>
    <script src="{!!url('public/datatablesv2/js/dataTables.bootstrap.min.js')!!}"></script>
    <!--datepicker -->
    {{-- <script src="{!!url('public/datepicker/jquery-ui.min.js')!!}"></script> --}}
    <script src="{!!url('public/datepicker/jquery-ui.js')!!}"></script>
    <script src="{!!url('public/js/custom.js')!!}"></script>
    <script src="{!!url('public/tinymce/tinymce.min.js')!!}"></script>
    {{-- <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script> --}}
    <script>
    tinymce.init({
    selector: 'textarea.tinymce',theme: "modern",
    height: "",
    width:"",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
    ],
    toolbar1: "undo redo bold italic underline strikethrough cut copy paste| alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace | styleselect formatselect fontselect fontsizeselect ",
    toolbar2: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
    image_advtab: true,
    menubar: false,
    toolbar_items_size: 'small',
    relative_urls: false,
    remove_script_host : false,
    autosize:true,
    });
    tinymce.init({
    selector: 'textarea.tinymce-small',theme: "modern",
    height: "",
    width:"",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
    ],
    toolbar1: "undo redo bold italic underline strikethrough cut copy paste",
    toolbar2:"alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace ",
    toolbar3:"styleselect formatselect fontselect fontsizeselect ",
    toolbar4: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
    image_advtab: true,
    menubar: false,
    toolbar_items_size: 'small',
    relative_urls: false,
    remove_script_host : false,
    autosize:true,
    });
    $('#tablecv').DataTable({
        "aLengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
        responsive:true,
        "order": [[1,'asc']],
        "columnDefs": [ {
          "targets": 'no-sort',
          "orderable": false,
        } ],
    });
    $('.dataTables_filter input[type="search"]').
      attr('placeholder','Search email and name...').
      css({'width':'300px','height':'35px','display':'inline-block'});
      tinymce.init({ selector:'textarea.tinymce'});
  $('#dataTables-example').DataTable({
    responsive: true,
    "aLengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
  });
    </script>
  </body>
</html>
>>>>>>> origin/master
