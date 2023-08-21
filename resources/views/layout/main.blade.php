<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kesatria Kode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
    
<body>
<nav class="navbar bg-primary z-1 px-5 fixed-top">
  <div class="container-fluid bg-primary p-3 w-120">
    <a class="navbar-brand fs-3 fw-bold text-light" href="">Tokopakedi</a>
  </div>
</nav>
    <div class="container" style="margin-top: 120px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="justify-content:center;">
        {{ $products->links() }}
        </div>
    </div>

    <footer class="fixed-bottom bg bg-dark text-light w-120 h-20">
            <p class="text-center">&copy; Copyright by Kesatria Kode {{ date('Y') }}</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script></head>

</body>

</html>