<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/createBook.css') }}">

    <title>Book&Author Dashboard</title>
</head>
<body>
    <div class="container-fluid">
        <div id="content-wrapper" class="d-flex">
            <div id="sidebar">
                @include('layouts.sidebar')
            </div>
            <div id="main-content" class=" flex-grow-1">
                @include('layouts.navbar')
                

                <div class="container-fluid mt-4">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @yield('content')
                </div>
                
            </div>
        </div>
    </div>

</body>
<script>
    document.querySelectorAll('[title]').forEach(el => {
        new bootstrap.Tooltip(el);
    });
</script>

</html>
                             