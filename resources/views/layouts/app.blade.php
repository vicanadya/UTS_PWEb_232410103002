<!DOCTYPE html>
<html>
<head>
    <title>UTS PWEB</title>
</head>
<body>
    @include('components.navbar')

    <div>
        @yield('content')
    </div>

    @include('components.footer')
</body>
</html>
