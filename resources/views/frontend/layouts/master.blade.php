
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>FoodPark || Restaurant Template</title>
    <link rel="icon" type="image/png" href="{{asset('frontend')}}/images/favicon.png">
    @include('frontend.layouts.components.head_css')
</head>

<body>


@include('frontend.layouts.components.header')

@yield('content')


@include('frontend.layouts.components.footer')


@include('frontend.layouts.components.footer_js')

</body>

</html>
