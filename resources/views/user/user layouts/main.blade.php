<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../assets/css/main/app.css" />
    <link rel="stylesheet" href="../assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/png" />
    <link rel="stylesheet" href="../assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="../assets/css/pages/simple-datatables.css">
    <link rel="stylesheet" href="../assets/extensions/choices.js/public/assets/styles/choices.css">
</head>

<body class="theme-dark" style="overflow-y: auto;">
    <div id="app">
        @include('user.user layouts.sidebar')
        <div id="main" class="layout-navbar">
            @include('user.user layouts.navbar')
            <div id="main-content">
                <div class="page-heading">
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">@yield('card_header')</h4>
                            </div>
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </section>
                </div>

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2023 &copy; TogaMbax</p>
                        </div>
                        {{-- <div class="float-end">
                            <p>
                                Crafted with
                                <span class="text-danger">
                                    <iclass="bi bi-heart-fill icon-mid">
                                        </iclass=>
                                </span>by<a href="#">Saugi</a>
                            </p>
                        </div> --}}
                    </div>
                </footer>
            </div>
    </div>
    </div>
    @yield('script')
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="../assets/js/pages/simple-datatables.js"></script>
    <script src="../assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="../assets/js/pages/form-element-select.js"></script>
</body>

</html>
