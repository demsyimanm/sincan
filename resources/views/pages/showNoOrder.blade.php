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
                        <a class="page-scroll" href="{{URL::to('/#about')}}">about</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{URL::to('/#order')}}">Order</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{URL::to('/#team')}}">Team</a>
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
    <header>
        <div class="container">
            <div class="intro-text"> 
                    <div class="col-lg-12 text-center" style="position:relative; bottom:130px">
                        <!--span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary" style="color:#00B3A2"></i>
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span-->
                        <h3 class="section-subheading">Nomor Order Anda adalah : </h3>
                        <br>
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary" style="color:#00B3A2"></i>
                            <h1 class="fa-stack-1x fa-inverse section-heading" style="position:relative;bottom:20px">{{$noOrder}}</h1>
                        </span>
                        
                        <br>
                        <h3 class="section-subheading">Silahkan Anda ingat nomor order Anda untuk mengunggah bukti pembayaran</h3>
                        <br>
                        <br>
                        <br>
                        <center><a href="{{URL::to('uploadBukti')}}" class="btn btn-primary" style="background-color : #00B3A2; border-color : #00B3A2" >Upload bukti pembayaran</a></center>
                    </div>
            </div>
        </div>
    </header>
    <!-- Team Section -->

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
<script>
   function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
            $('#blah').attr('width', "50%");
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#imginp").change(function(){
      readURL(this);
    });
</script>
</html>

