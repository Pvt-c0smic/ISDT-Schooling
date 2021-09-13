<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library App</title>
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center mt-5 pt-5">
        <div class="col-6">
            <form action="{{ URL::route('form.process') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input name="email" required type="email" class="form-control">
                    <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Message</label>
                    <textarea name="message" required class="form-control" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Email</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
