<!doctype html>
<html lang="en">

    <head>

        {{-- Include All Meta file --}}
        @include('backend.layout.partials.meta')

        <title> @yield('title') | Mushahedur - Dynamic Portfolio</title>

        {{-- Include All Style file --}}
        @include('backend.layout.partials.style')

    </head>

    <body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
            {{-- Include Header section --}}
            @include('backend.layout.partials.header')
            
            <!-- ========== Left Sidebar Start ========== -->

            {{-- Included Sidebar section --}}
            @include('backend.layout.partials.sidebar')
            <!-- Left Sidebar End -->
            <!-- ============================================================= -->

            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                {{-- Yield main containt section --}}
                @yield('containt')
                <!-- End Page-content -->

                {{-- Included Footer section --}}
                @include('backend.layout.partials.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        {{-- Included Script section --}}
        @include('backend.layout.partials.script')

    </body>

</html>