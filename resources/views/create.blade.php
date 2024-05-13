<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="container">
            <h1>Add Task</h1>

            <form action="{{ route('store') }}" method="post">   
                @csrf         
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Task</label>
                <textarea class="form-control" id="name" name="name" rows="3"></textarea>
            </div>
            <button class="btn btn-primary">Add</button>
            </form>

        </div>
    </body>
</html>







