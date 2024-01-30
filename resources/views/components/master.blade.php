@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8iN17Dl5U+T23NZdKPHb8QK/EA8y8+FR5+iB/K4jBIMbl5WavHsAgB+BT6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
    <title>social | {{$title}}</title>
</head>
<body>
    @if(!request()->is('/'))
    @include('inc.nav')
    @endif
 

   
   <main>
    @include('inc.flashbag')
    {{$slot}}
   </main>
   @include('inc.footer')
   
</body>
</html>