
<!DOCTYPE html>
@include('includes.head')
<body>
    <div class="container-xxl bg-white p-0">
        @include('includes.spinner')


        @include('includes.navbar')


        @yield('header')



        @include('includes.classes')


        @include('includes.appointment')



        @include('includes.testimonial')


        @include('includes.footer')



        @include('includes.backToTop')

    </div>

    @include('includes.js')

</body>

</html>