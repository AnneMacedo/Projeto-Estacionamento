<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
        <title>Estacionamento</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #5 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN LAYOUT FIRST STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
        <!-- END LAYOUT FIRST STYLES -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout5/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout5/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
</head>
<body>
    <!-- BEGIN HEADER -->
    <header class="page-header">
        <nav class="navbar mega-menu" role="navigation">
            <div class="container-fluid">
                <div class="clearfix navbar-fixed-top">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                    </button>
                    <!-- End Toggle Button -->
                    <!-- BEGIN LOGO -->
                    <a id="index" class="page-logo" href="index.php">
                        <img src="../assets/layouts/layout5/img/logo.png" alt="Logo"> </a>
                    <!-- END LOGO -->
                    <!-- BEGIN SEARCH -->
                    <form class="search" action="http://keenthemes.com/preview/metronic/theme/admin_5/extra_search.html" method="GET">
                        <input type="name" class="form-control" name="query" placeholder="Search...">
                        <a href="javascript:;" class="btn submit md-skip">
                            <i class="fa fa-search"></i>
                        </a>
                    </form>
                    <!-- END SEARCH -->
                </div>
                <!-- BEGIN HEADER MENU -->
                <div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
                            <a href="index.php" class="text-uppercase">
                                <i class="icon-home"></i> HOME </a>
                        </li>
                        <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
                            <a href="javascript:;" class="text-uppercase">
                                <i class="icon-puzzle"></i> Cliente </a>
                             <ul class="dropdown-menu dropdown-menu-fw">
                                <li class="dropdown more-dropdown-sub">
                                    <a href="cadastro_cliente.php">
                                        <i class="icon-bar-chart"></i> Novo Cliente </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="icon-bulb"></i> Registros </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
                            <a href="javascript:;" class="text-uppercase">
                                <i class="icon-puzzle"></i> Funcionários </a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li class="dropdown more-dropdown-sub">
                                    <a href="cadastro_funcionario.php">
                                        <i class="icon-diamond"></i> Novo Funcionário </a>
                                </li>
                                <li class="dropdown more-dropdown-sub">
                                    <a href="javascript:;">
                                        <i class="icon-puzzle"></i> Registros </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
                            <a href="javascript:;" class="text-uppercase">
                                <i class="icon-layers"></i> Controle de Fluxo </a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li>
                                    <a href="cadastro_reserva.php"> Nova Reserva </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Nova Entrada </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Registro de Reservas </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Registro de Entrada/Saída </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
                            <a href="javascript:;" class="text-uppercase">
                                <i class="icon-briefcase"></i> Veículos </a>
                        </li>
                         <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
                            <a href="javascript:;" class="text-uppercase">
                                <i class="icon-briefcase"></i> Vagas </a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li>
                                    <a href="cadastro_vaga.php"> Nova Vaga </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Registro de Vagas </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END HEADER MENU -->
            </div>
            <!--/container-->
        </nav>
    </header>
    <!-- END HEADER -->

    <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout5/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
        <!-- Google Code for Universal Analytics -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-37564768-1', 'auto');
          ga('send', 'pageview');
        </script>
        <!-- End -->

        <!-- Google Tag Manager -->
        <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-W276BJ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W276BJ');</script>
        <!-- End -->
</body>
</html>