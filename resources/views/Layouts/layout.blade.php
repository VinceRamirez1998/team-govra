<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('components/nav-user')
    @include('components/highlights-directory-nav')
    <div class=" flex w-full h-auto justify-start items-center  gap-5 sm:gap-7 md:gap-10 lg:gap-20  border-solid border-2 border-blue-500">
       
{{ $slot }}

      
    </div>
    @include('components/footer')
 
   



        
    
</body>
</html>