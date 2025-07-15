<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">

    
    <div id="wrapper">

        
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-text mx-3">Protan</div>
            </a>

            
            <hr class="sidebar-divider my-0">

            
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <i class="fas fa-box"></i>
                    <span>Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kegiatans.index') }}">
                    <i class="fas fa-calendar"></i>
                    <span>Kegiatan</span>
                </a>
            </li>

            
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        

       
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
               
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="w-100 text-center">
                    <h4 class="w-100 text center my-auto">Selamat Datang!</h4>
                </nav>

                
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            
            <footer class="sticky-footer bg-white mt-auto">
                <div class="container my-auto">
                    <div class="text-center my-auto">
                        <span>© {{ date('Y') }} Protan</span>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
