<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layouts.Admin.head');

</head>

<body>
    <div class="wrapper">
        @include('Layouts.Admin.nav')
        @include('Layouts.Admin.saidbar')
        <div class="content-wrapper" style="min-height: 340px;">
            @yield('content')
        </div>
        @include('Layouts.Admin.footer')
    </div>
</body>

</html>
