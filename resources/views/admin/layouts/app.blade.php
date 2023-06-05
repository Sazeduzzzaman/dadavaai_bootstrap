<!DOCTYPE html>
<html lang="en" dir="ltr">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Global stylesheets -->
    <link href="{{ asset('admin/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
</head>

<body>

    <!-- Main navbar -->
    @include('admin.layouts.navigation')
    <!-- /main navbar -->

    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar
        -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Sidebar header -->
                @include('admin.layouts.sidebar-header')

                <!-- /sidebar header -->

                <!-- Main navigation -->
                @include('admin.layouts.main-navigation')

                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Page header -->
                @include('admin.layouts.page-header')
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">
                    @yield('content')
                </div>
                <!-- /content area -->

                <!-- Footer -->
                @include('admin.layouts.footer')
                <!-- /footer -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    <!-- Core JS files -->
    {{-- <script src="{{ asset('admin/assets/demo/demo_configurator.js') }}"></script> --}}
    <script src="{{ asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    {{-- <script src="{{ asset('admin/assets/js/vendor/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/visualization/d3/d3_tooltip.js') }}"></script> --}}
    <script src="{{ asset('admin/assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/uploaders/fileinput/plugins/sortable.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/uploaders/fileinput/fileinput.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/notifications/bootbox.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    <script src="{{ asset('admin/assets/demo/pages/components_modals.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/table_elements.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/form_layouts.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/components_buttons.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/form_select2.js') }}"></script>

    @stack('scripts')


    {{-- <script src="{{ asset('admin/assets/demo/pages/dashboard.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/charts/pages/dashboard/streamgraph.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/charts/pages/dashboard/sparklines.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/charts/pages/dashboard/lines.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/charts/pages/dashboard/areas.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/charts/pages/dashboard/donuts.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/charts/pages/dashboard/bars.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/charts/pages/dashboard/progress.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/charts/pages/dashboard/heatmaps.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/charts/pages/dashboard/pies.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/charts/pages/dashboard/bullets.js') }}"></script> --}}
</body>

</html>
