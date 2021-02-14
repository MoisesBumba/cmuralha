<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="img/favicon.png">

<title>CLINICA GRANDE MURALHA DA CHINA</title>

  <!-- Bootstrap CSS -->
  <link href="{{url('assets/painel/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{url('assets/painel/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{url('assets/painel/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{url('assets/painel/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{url('assets/painel/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{url('assets/painel/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{url('assets/painel/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}" type="text/css">
  <link href="{{url('assets/painel/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{url('css/fullcalendar.css')}}">
  <link href="{{url('assets/painel/css/widgets.css')}}" rel="stylesheet">
  <link href="{{url('assets/painel/css/style.css')}}" rel="stylesheet">
  <link href="{{url('assets/painel/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{url('assets/painel/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{url('assets/painel/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
 
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">CLINICA GRANDE<span class="lite"> MURALHA DA CHINA</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
         
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="">
                            </span>
                            
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> Meu Perfil</a>
              </li>
             
              <li>
                <a href=""><i class="icon_key_alt"></i>Sair</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
          <a class="" href="{{url('/painel')}}">
            <i class="icon_house_alt"></i>
            <span>PAINEL</span>
          </a>
          </li>
          <li>
            <a class="" href="">
              <i class="icon_genius"></i>
              <span>Usuários</span>
            </a>
          </li>
            <li>
              <a class="" href="{{url('/painel/banner')}}">
                <i class="icon_desktop"></i>
                <span>Banner</span>
              </a>
            </li>  
            <li>
              <a class="" href="/painel/sobre">
              <i class="icon_desktop"></i>
              <span>Quem Somos</span>
              </a>
            </li>  
            <li>
                <a class="" href="/painel/servicos">
                <i class="icon_desktop"></i> 
                <span>Serviços Médicos</span>
                </a>
            </li>
            <li>
                <a class="" href="/painel/doctor">
                <i class="icon_desktop"></i>
                <span>Dotores</span>
                </a>
            </li>
            <li> 
                <a class="" href="">
                <i class="icon_desktop"></i>
                <span>Blog</span>
                </a>
            </li>
            <li>
                <a class="" href="/painel/contact">
                <i class="icon_desktop"></i>
                <span>Contacto</span>
                </a>
            </li>
            <li>
                <a class="" href="">
                <i class="icon_desktop"></i>
                <span>Mensagem</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    @yield('contect')

  <!-- javascripts -->
  <script src="{{url('assets/painel/js/jquery.js')}}"></script>
  <script src="{{url('assets/painel/js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{url('assets/painel/js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{url('assets/painel/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{url('assets/painel/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{url('assets/painel/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{url('assets/painel/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{url('assets/painel/assets/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{url('assets/painel/js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/painel/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{url('assets/painel/js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <script src="{{url('assets/painel/js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{url('assets/painel/assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{url('assets/painel/js/calendar-custom.js')}}"></script>
    <script src="{{url('assets/painel/js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{url('assets/painel/js/jquery.customSelect.min.js')}}"></script>
    <script src="{{url('assets/painel/assets/chart-master/Chart.js')}}"></script>

    <!--custome script for all page-->
    <script src="{{url('assets/painel/js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{url('assets/painel/assets/painel/js/sparkline-chart.js')}}"></script>
    <script src="{{url('assets/painel/assets/painel/js/easy-pie-chart.js')}}"></script>
    <script src="{{url('assets/painel/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{url('assets/painel/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{url('assets/painel/js/xcharts.min.js')}}"></script>
    <script src="{{url('assets/painel/js/jquery.autosize.min.js')}}"></script>
    <script src="{{url('assets/painel/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{url('assets/painel/js/gdp-data.js')}}"></script>
    <script src="{{url('assets/painel/js/morris.min.js')}}"></script>
    <script src="{{url('js/sparklines.js')}}"></script>
    <script src="{{url('assets/painel/js/charts.js')}}"></script>
    <script src="{{url('assets/painel/js/jquery.slimscroll.min.js')}}"></script>

    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
    <!--Oculta a mensagem depois de um tempo-->
	<script>
      $(function(){
        setTimeout("$('.hide-msg').fadeOut();", 3000)
      });
    </script>
      @stack('scripts')
</body>

</html>
