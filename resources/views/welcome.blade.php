<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rohail learning Livewire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
{{--    <link rel="stylesheet" href="style.css">--}}
</head>
<body>
<h1>
{{--    Hello World--}}
    <livewire:hello-world> </livewire:hello-world>
    <bold><hr class="text-danger"></bold>
        <livewire:counter/>
    <bold><hr class="text-danger"></bold>
        <livewire:todos/>

</h1>
</body>
</html>
