<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/js/app.js')
    @inertiaHead

</head>



<body class="bg-custom">
    <nav class="navbar navbar-expand-lg bg-blue">
        <div class="container">
            <a class="navbar-brand text-white p-0" href="{{ route('home') }}">
                <div class="row align-items-center">
                    <div class="col pe-0">
                        <i class="bx bx-bowl-rice fs-2"></i>
                    </div>
                    <div class="col">
                        Alan Resto
                    </div>
                </div>
            </a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2">
                        <a class="nav-link {{ request()->routeIs('product.*') ? 'active underline-border' : '' }}"
                            href="#" aria-current="page">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="py-4">
            @inertia
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script>
        console.log(products);
    </script>
</body>

</html>
