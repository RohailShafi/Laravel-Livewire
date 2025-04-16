<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rohail Learning Livewire</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    @livewireStyles
</head>
<body class="container py-5">

<!-- Livewire Component: Hello World -->
<livewire:hello-world />

<hr class="text-danger my-4">

<!-- Livewire Component: Counter -->
<livewire:counter />

<hr class="text-danger my-4">

<!-- Livewire Component: Todos -->
<livewire:todos />

<!-- Livewire Slot (if used in a layout) -->
{{ $slot ?? '' }}

@livewireScripts
</body>
</html>
