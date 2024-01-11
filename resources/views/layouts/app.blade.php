<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">


    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="col-12 col-md-6 centered container_maked" style="padding-top:15px;">
        @if(auth()->check())
        <div class="tasks-container">
            <x-header> </x-header>
            <x-modal> </x-modal>

        </div>
        @endif

        @yield('content')

    </div>

    <script src="https://kit.fontawesome.com/f9e19193d6.js" crossorigin="anonymous"></script>
</body>

</html>
