<base href="/public">
{{-- Top Start --}}
    @include('admin.includes.top')
{{-- Top End --}}

    <!-- Page Wrapper -->



    <div id="wrapper">

     {{-- Sidebar Start --}}
        @include('admin.includes.sidebar')
    {{-- Sidebar End --}}
    

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

        {{-- Navbar Start --}}
            @include('admin.includes.navbar')
        {{-- Navbar End --}}
     

                {{-- Main Content Start--}}

                <div class="container-fluid">

                    
                    @yield('content')

                </div>
                 {{-- Main Content End--}}

            </div>
            <!-- End of Main Content -->


        {{-- Footer Start --}}
            @include('admin.includes.footer')
        {{-- Footer End --}}



        </div>
        <!-- End of Content Wrapper -->

    </div>


    <!-- End of Page Wrapper -->

   

    {{-- Bottom Start --}}
        @include('admin.includes.bottom')
    {{-- Bottom End --}}