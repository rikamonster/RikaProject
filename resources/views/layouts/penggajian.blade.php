<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{url('penggajian/img/profile.png')}}" />
    <title>Penggajian</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('penggajian/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{url('penggajian/css/freelancer.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('penggajian/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="{{url('css/custom.css')}}" rel="stylesheet">

</head>
<body class="index" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom affix-top" id="mainNav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/home">Beranda</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{url('Jabatan')}}">Jabatan</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{url('Golongan')}}">Golongan</a>
                    </li>
                    <li class="dropdown">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Penggajian
                    <span class=" fa fa-angle-down"></span>
                  </a>
                     <ul class="dropdown-menu dropdown-usermenu pull-right" role="menu">
                        <li>
                        <a href="{{url('Penggajians')}}"><font color="black">Daftar Penggajian</font></a>
                    </li>
                     <li>
                        <a href="{{url('Kategori')}}"><font color="black">Kategori Lembur</font></a>
                    </li>
                    <li>
                        <a href="{{url('Tunjangan')}}"><font color="black">Tunjangan</font></a>
                    </li>
                             </ul>
                      </li>
                    <li class="dropdown">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Pegawai
                    <span class=" fa fa-angle-down"></span>
                  </a>
                     <ul class="dropdown-menu dropdown-usermenu pull-right" role="menu">
                    <li>
                        <a href="{{url('Pegawai')}}"><font color="black">Daftar Pegawai</font></a>
                    </li>
                    <li>
                        <a href="{{url('Lembur')}}"><font color="black">Lembur Pegawai</font></a>
                    </li>
                    <li>
                        <a href="{{url('TunjanganP')}}"><font color="black">Tunjangan Pegawai</font></a>
                    </li>
                             </ul>
                      </li>
                    <li class="page-scroll">
                        <span class="skills">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </li>
                         @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else

                   
                    
                        <li class="dropdown">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right" role="menu">
                             <li>
                                <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                         <font color="black"><i class="fa fa-btn fa-sign-out"></i>Logout</font>
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            </form>
                            </li>
                            </ul>
                        </li>
                    @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    @yield('content')
 
            <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Lokasi</h3>
                        <p>Jl.Situterate
                            <br>Trs.Cibaduyut, Bandung</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Social Media Kami</h3>
                        <ul class="list-inline">
                            <li>
                                <a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Tentang Penggajian</h3>
                        <p>Website Penggajian Ini Di Buat Untuk Latihan Menghadapi UJIKOM.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright © Adam Kusumah 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- jQuery -->
    <script src="{{url('penggajian/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('penggajian/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{url('penggajian/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{url('penggajian/js/contact_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{url('penggajian/js/freelancer.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{url('js/custom.js')}}"></script>

</body></html>
