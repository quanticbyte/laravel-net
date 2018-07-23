@include('includes.head')

<body>
@include('includes.magatzemHeader')


<div class="container">

    <div id="main" class="row">

        @yield('content')

    </div>




<!-- el container es tanca en footer -->
@include('includes.footer')