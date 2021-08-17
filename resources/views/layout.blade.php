<!DOCTYPE html>

<html lang="en">

<head>
    <title>eITREM - @yield('title','')</title>
    @include('partials._head')
</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        <header class="main-header">
            @include('partials._mainHeader')
        </header>

        <!-- Main Menu -->
        <aside class="main-sidebar">
            @include('partials._mainMenu')
        </aside>
    
        <!-- Contents -->

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    @yield('section')
                    <small>@yield('level')</small>
                </h1>
                @yield('breadcrumb')
            </section>
            @yield('mainContent')
        </div>
        
        <!-- Footer -->
        <footer class="main-footer">
            @include('partials._mainFooter')
        </footer>
    
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark" style="display: none;">
            @include('partials._controlSideBar')
        </aside>

        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- Scripts -->
    @include('partials._scripts')

</body>

</html>