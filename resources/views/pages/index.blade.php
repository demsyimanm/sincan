<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SinCan</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::to('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::to('assets/css/agency.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::to('assets/fonts/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .kotak {
            height: 400px; 
            width: 800px;
            margin: 0 auto;
        }
    </style>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="color : #00B3A2;">SinCan</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">about</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#order">Order</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a href="{{URL::to('uploadBukti')}}">Upload Bukti Pembayaran</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">SINCAN</div>
                <div class="intro-lead-in">Alat Pengiris dan Pencincang</div>            
                <a href="#about" style="background-color : #00B3A2; border-color : #00B3A2" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Tentang SINCAN ...</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x" >
                        <i class="fa fa-circle fa-stack-2x text-primary" style="color:#00B3A2"></i>
                        <i class="fa fa-question fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Explanation</h4>
                    <p class="text-muted"><b>SINCAN</b>  adalah akronim dari Pengiris dan Pencincang. <b>SINCAN</b> merupakan alat bantu bagi rumah tangga atau penjual makanan untuk memudahkan pengguna dalam mengiris dan mencincang bahan makanan..</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary" style="color:#00B3A2"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Marketing</h4>
                    <p class="text-muted"><b>SINCAN</b> ditargetkan kepada ibu-ibu rumah tangga dan juga pedagang-pedagang makanan kecil, karena <b>SINCAN</b> relatif murah dalam biaya pembuatannya, sehingga cocok untuk membantu pedagang-pedagang kecil dan ibu rumah tangga dalam memasak.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary" style="color:#00B3A2"></i>
                        <i class="fa fa-trophy fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Advantages</h4>
                    <p class="text-muted" style="text-align:left">
                            <p class="text-muted" style="text-align:left">1. Sangat mudah digunakan
                            <p class="text-muted" style="text-align:left">2. Relatif murah daripada alat yang sudah ada</ul>
                            <p class="text-muted" style="text-align:left">3. Mata pisau bisa diganti apabila sudah rusak
                            <p class="text-muted" style="text-align:left">4. Mata pisau bisa custom sesuai kebutuhan
                        </li>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="order">
        <div class="container col-md-8 col-md-offset-2" style="background-color:#E2E1E1">
            <div class="col-md-10 col-md-offset-1" >
            <br>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary" style="color:#00B3A2"></i>
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h2 class="section-heading">Order</h2>
                        <h3 class="section-subheading text-muted">Pesan SINCAN secara online</h3>
                    </div>
                </div>
                <form method="post" action="{{URL::to('order')}}">
                    <div class="row form-group">
                        <label class="col-md-3" style="text-align:right">Nama</label>
                        <div class="col-md-9">
                            <input name="nama" class="form-control col-md-8" placeholder="Nama">
                        </div>
                    </div>
                    <br>
                    <div class="row form-group">
                        <label class="col-md-3" style="text-align:right">Alamat</label>
                        <div class="col-md-9">
                            <input name="alamat" class="form-control col-md-8" placeholder="Alamat">
                        </div>
                    </div>
                    <br>
                    <div class="row form-group">
                        <label class="col-md-3" style="text-align:right">Nomor Telepon</label>
                        <div class="col-md-9">
                            <input name="no_telp" class="form-control col-md-8" placeholder="Nomor Telepon">
                        </div>
                    </div>
                    <br>
                    <div class="row form-group">
                        <label class="col-md-3" style="text-align:right">Kode Pos</label>
                        <div class="col-md-9">
                            <input name="kode_pos" class="form-control col-md-8" placeholder="Kode Pos">
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    {{csrf_field()}}
                    <center><button class="btn btn-primary" style="background-color:#00B3A2;border-color:#00B3A2" type="submit">Order</button></center>
                </form>
                <br>
            </div>
        </div>
    </section>
    <!-- Team Section -->

    <section id="team" class="bg-light-gray">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2 class="section-heading">Kelompok 7</h2>
                    <h3 class="section-subheading text-muted">Kelas Technopreneur 39</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="{{URL::to('assets/img/team/d.jpg')}}" class="img-responsive img-circle" alt="">
                        <h4>Putu Sadhvi Sita</h4>
                        <p class="text-muted">4212100116</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="{{URL::to('assets/img/team/c.jpg')}}" class="img-responsive img-circle" alt="">
                        <h4>Muhammad Khusnul Yaqin Febrianto</h4>
                        <p class="text-muted">4212100139</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member" style="margin-top:4%">
                        <img src="{{URL::to('assets/img/team/b.jpg')}}" class="img-responsive img-circle" style="width:105%" alt="">
                        <h4>Muhammad Jabir Al Haiyan</h4>
                        <p class="text-muted">5112100702</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="{{URL::to('assets/img/team/a.jpg')}}" class="img-responsive img-circle" style="width:100%" alt="">
                        <h4>Demsy Iman Mustasyar</h4>
                        <p class="text-muted">5113100015</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- jQuery -->
    <script src="{{URL::to('assets/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{URL::to('assets/js/classie.js')}}"></script>
    <script src="{{URL::to('assets/js/cbpAnimatedHeader.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{URL::to('assets/js/jqBootstrapValidation.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{URL::to('assets/js/agency.js')}}"></script>
    
    <script src="{{URL::to('assets/js/highcharts.js')}}"></script>
    <script src="{{URL::to('assets/js/highcharts-3d.js')}}"></script>
</body>

</html>
