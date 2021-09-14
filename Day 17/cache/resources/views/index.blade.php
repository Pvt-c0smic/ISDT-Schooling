<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library App</title>
</head>
<body>
    <h1>Execution time: {{ $execution_time }}</h1>
    <h1>Load time: <span id="load_time"> </span></h1>

    <ul>
        @foreach($doctors as $doctor)
            <li>
                {{ $doctor->name }}
            </li>
        @endforeach
    </ul>

    <script>
        window.onload = () => {
            loadTime = parseInt(
                window.performance.timing.domContentLoadedEventEnd
                -
                window.performance.timing.navigationStart
            ) / 1000;
            document.getElementById('load_time').innerHTML = loadTime;
        }
    </script>
</body>
</html>
