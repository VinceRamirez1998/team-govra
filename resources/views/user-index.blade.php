<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components/nav')
    
    <div class="flex max-w-full justify-start items-center w-full h-40 mt-1 border-solid border-2 border-l-blue-600 z-0">
     <img class="h-[6rem] w-[100%]" src="{{URL('assets/images/csc-logo-03.png')}}" alt="cscbannerlogo">   
    </div>

    {{-- banner and announcements container --}}
    <div class="flex items-center flex-col border-solid border-2 border-green-700 h-[50rem] w-full">

        {{-- banner container --}}
        <div class="border-solid border-2 border-red-600 mt-5 w-[90%] h-80">

        </div>
        
        {{-- announcements container --}}
        <div class="border-solid border-2 border-red-600 mt-5 w-[90%] h-48">

        </div>
        
        {{-- examinations advisories container --}}
        <div class="border-solid border-2 border-red-600 mt-5 w-[90%] h-48">

        </div>

    </div>

    {{-- banner-content container --}}
    <div class="flex items-center flex-col h-[40rem] border-solid border-2 border-orange-600 w-full ">
        <div class="flex flex-col justify-center items-center border-solid border-2 border-red-600 h-[25rem] w-[90%] mt-10">
            <span class="text-4xl font-sans font-semibold">FIND YOUR DREAM</span>
            <span class="text-4xl font-sans font-semibold mt-3">JOB TODAY</span>
            <span class="text-xl font-sans font-semibold mt-3">Explore all the most exciting job</span>
            <span class="text-xl font-sans font-semibold">roles based on your career!</span>

            <div class="flex flex-col justify-center items-start w-[80%] h-[8rem] border-solid border-2 border-red-600 mt-7 pl-8">
                <label class="" for="location">Location</label>
                <input type="password" name="password" id="password" required class="relative h-[1.8rem] xl:h-[2.3rem] max-w-screen w-[50%]  mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block  rounded-md focus:ring-1 mb-3" placeholder="Enter password" />
               
            </div>
        
        </div>
         

    </div>
</body>
</html>