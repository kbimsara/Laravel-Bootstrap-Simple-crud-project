<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- sweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <!--NavBar/Start-->
    <nav class="navbar sticky-top navbar-expand-lg bg-white shadow">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="font-size: larger;">||||</span>
        </button>
        <div class="collapse navbar-collapse justify-content-center text-dark" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/"
                        style="font-size: medium;">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/about"
                        style="font-size: medium;">About</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/reg"
                        style="font-size: medium;">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="/login"
                        style="font-size: medium;">Login</a></li>
            </ul>
        </div>
    </nav>
    <!--NavBar/End-->
    <div class="container-fluid justify-content-center" style="margin-top: 80px;">
        <div class="row justify-content-center">
            
            @foreach ($errors->all() as $err)
            
                <script>
                    Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: '{{$err}}'
                        })
                </script>

            @endforeach
            
            <div class="col-4">
                <form method="post" action="/saveStData">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="nm" name="nm" placeholder="Enter">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="pw" name="pw" placeholder="Enter">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>


    {{-- sweetalert --}}
    @include('sweetalert::alert')
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>