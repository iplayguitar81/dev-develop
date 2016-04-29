<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bowtie Software &amp; Web Development</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/1-col-portfolio.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('/')}}"><img src="/images/bowtiebranded.png" alt="bowtiesoftware.com" /></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li>
                    <a href="{{URL::to('/')}}">Home</a>
                </li>

                <li>
                    <a href="{{URL::to('/about')}}">About</a>
                </li>
                <li>
                    <a href="{{URL::to('/cards')}}">Cards</a>
                </li>

                <li>
                    <a href="{{URL::to('/posts')}}">Posts</a>
                </li>

                <li>
                    <a href="{{URL::to('/contact')}}">Contact</a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
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
        </div>

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Page Heading
                <small>Secondary Text</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->


@yield('content')


@yield('footer')

        <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Bowtie Software &amp; Web Development <?php echo date("Y"); ?></p>
            </div>
        </div>
        <!-- /.row -->
    </footer>
</div>
<script  src="{{URL::to(asset('/js/jquery.js'))}}"></script>
<script src="{{URL::to(asset('/js/bootstrap.min.js'))}}"></script>
</body>

        </html>