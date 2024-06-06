
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>

    @include('admin.layouts.head_css')
</head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">

        @include('admin.layouts.navbar')

        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        @yield('content')

        @include('admin.layouts.footer')
    </div>
</div>

@include('admin.layouts.footer_js')
</body>
</html>
