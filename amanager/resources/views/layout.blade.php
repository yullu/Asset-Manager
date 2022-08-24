<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>E-Record Asset Manager</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">

<header>
    <!-- Fixed navbar -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Assets Manager</a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('erecords.index') }}">Assets Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reports.index') }}">Reports</a>
                    </li>
                </ul>
                <u class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="nav-link"></div>
                    </li>
                </u>
            </div>
        </div>

    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">

    @yield('main-content')
    </div>

</main>

<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">Copyright @php echo date('Y') @endphp, Asset Manager App . All rights reserved.</span>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>
</html>
