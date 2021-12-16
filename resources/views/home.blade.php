<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2048</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div id="app">

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"
        integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/js-game/bind_polyfill.js')}}"></script>
    <script src="{{asset('js/js-game/classlist_polyfill.js')}}"></script>
    <script src="{{asset('js/js-game/animframe_polyfill.js')}}"></script>
    <script src="{{asset('js/js-game/keyboard_input_manager.js')}}"></script>
    <script src="{{asset('js/js-game/html_actuator.js')}}"></script>
    <script src="{{asset('js/js-game/grid.js')}}"></script>
    <script src="{{asset('js/js-game/tile.js')}}"></script>
    <script src="{{asset('js/js-game/local_storage_manager.js')}}"></script>
    <script src="{{asset('js/js-game/game_manager.js')}}"></script>
    <script src="{{asset('js/js-game/application.js')}}"></script>
</body>

</html>
