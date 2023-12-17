
<!DOCTYPE html>
<html lang="en">

@include('includes.head')
@section('title')
<title>404 Error</title>
@endsection

<body>
    <div class="container-xxl bg-white p-0">
        @include('includes.spinner')


        @include('includes.navbar')
    
        @yield('header')


        @yield('404')


        @include('includes.footer')


        @include('includes.backToTop')
    </div>

    @include('includes.js')
</body>

</html>