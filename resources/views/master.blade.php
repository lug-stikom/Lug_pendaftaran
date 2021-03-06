<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LUG</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/gambar.min.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LUG</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://www.facebook.com/lug805/"><img src="http://www.freeiconspng.com/uploads/image--facebook-icon--omori-wiki-12.png" alt="facebook" style="width:25px;height:25px;"></a></li>
        <li><a href="//lug.stikom.edu/">Official Web</a></li>
          </ul>
        </div>  -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        @if ( ! Auth::guest())
          <ul class="nav navbar-nav">
            <li><a href="/member">Membership</a></li>
            <li><a href="/pengurus">Pengurus</a></li>
            <li><a href="/pertemuan">Pertemuan</a></li>
            <li><a href="/presensi">Presensi</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="https://www.facebook.com/lug805/"><img src="http://www.freeiconspng.com/uploads/image--facebook-icon--omori-wiki-12.png" alt="facebook" style="width:25px;height:25px;"></a></li>
            <li><a href="//lug.stikom.edu/">Official Web</a></li>
          </ul>

        @endif
        <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>



    <div class="container">
      <div class="cols-md-12">
        @if (session('pesan_sukses'))
          <div class="alert alert-success">
              {{ session('pesan_sukses') }}
          </div>
        @endif

        @yield('content')
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="{{ asset('js/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/common.js')}}"></script>
    <!-- <script type="text/javascript" src="{{ asset('js/webcam.js')}}"></script> -->

  </body>
</html>
