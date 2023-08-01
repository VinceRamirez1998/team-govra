<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>job-offers</title>
    @vite('resources/css/app.css')

</head>
<body>
    @include('components/nav-user')

   
   @include('components/highlights-directory-nav')

    {{-- find job container --}}
    <div class="h-auto w-full max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl flex flex-col gap-6 mt-5 py-5 border-solid border-2 border-blue-500">

        {{-- government layout --}}
            <div class="flex gap-5 items-center justify-center h-40 w-full sm:h-[14rem] sm:justify-center border-solid border-2 border-red-500 bg-gray-100">
                {{-- government logo here --}}
                <div class="flex justify-center items-center h-[80%] w-[40%] sm:w-[38%] md:w-[35%] lg:w-[30%] xl:w-[20%] border-solid border-2 border-red-500 rounded-lg bg-gray-50">
                        {{-- <span class="font-sans font-bold text-lg ">Government Logo</span> --}}
                        <img class="h-full w-[90%] object-fill" src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="deped">
                </div>

                {{-- government details --}}
                <div class="flex flex-col justify-center border-solid border-2 border-red-500 h-[80%] w-[45%] sm:w-[38%] md:w-[35%] lg:w-[30%] xl:w-[20%] xl:mr-52 xl:justify-center xl:pl-14">
                    <span class="font-sans font-bold text-lg sm:text-xl xl:mb-1 xl:text-2xl">Government Name</span>
                    <span class="font-sans font-bold text-sm sm:text-base xl:text-lg ">Job Offer</span>
                    <span class="font-sans font-bold text-sm sm:text-base xl:text-lg">Available Slot</span>
                    <span class="font-sans font-bold text-sm sm:text-base  text-blue-400">See more details </span>
                </div>
            </div>

            <div class="flex gap-7 items-center justify-center h-40 w-full sm:h-[14rem] sm:justify-center border-solid border-2 border-red-500 bg-gray-100">
                {{-- government logo here --}}
                <div class="flex justify-center items-center h-[80%] w-[40%] sm:w-[38%] md:w-[35%] lg:w-[30%] xl:w-[20%] border-solid border-2 border-red-500 rounded-lg bg-gray-50">
                    <img class="h-[90%] w-full object-contain" src="{{URL('assets/images/government-logo/ched-logo.png')}}" alt="ched">
            </div>

                {{-- government details --}}
                <div class="flex flex-col justify-center border-solid border-2 border-red-500 h-[80%] w-[45%] sm:w-[38%] md:w-[35%] lg:w-[30%] xl:w-[20%] xl:mr-52 xl:justify-center xl:pl-14">
                    <span class="font-sans font-bold text-lg sm:text-xl xl:mb-1 xl:text-2xl">Government Name</span>
                    <span class="font-sans font-bold text-sm sm:text-base xl:text-lg">Job Offer</span>
                    <span class="font-sans font-bold text-sm sm:text-base xl:text-lg">Available Slot</span>
                    <span class="font-sans font-bold text-sm sm:text-base xl:text-lg text-blue-400">See more details </span>
                </div>
            </div>

            <div class="flex gap-7 items-center justify-center h-40 w-full sm:h-[14rem] sm:justify-center border-solid border-2 border-red-500 bg-gray-100 ">
                {{-- government logo here --}}
              <div class="flex justify-center items-center h-[80%] w-[40%] sm:w-[38%] md:w-[35%] lg:w-[30%] xl:w-[20%]  border-solid border-2 border-red-500 rounded-lg">
                        <span class="font-sans font-bold text-lg">Government Logo</span>
                </div>

                {{-- government details --}}
                <div class="flex flex-col justify-center border-solid border-2 border-red-500 h-[80%] w-[45%] sm:w-[38%] md:w-[35%] lg:w-[30%] xl:w-[20%] xl:mr-52 xl:justify-center xl:pl-14">
                    <span class="font-sans font-bold text-lg sm:text-xl xl:mb-1 xl:text-2xl">Government Name</span>
                    <span class="font-sans font-bold text-sm sm:text-base xl:text-lg">Job Offer</span>
                    <span class="font-sans font-bold text-sm sm:text-base xl:text-lg">Available Slot</span>
                    <span class="font-sans font-bold text-sm sm:text-base xl:text-lg text-blue-400">See more details </span>
                </div>
            </div>

            <div class="flex gap-7 items-center justify-center h-40 w-full sm:h-[14rem] sm:justify-center border-solid border-2 border-red-500 bg-gray-100">
                {{-- government logo here --}}
                <div class="flex justify-center items-center h-[80%] w-[40%] sm:w-[38%] md:w-[35%] lg:w-[30%] xl:w-[20%] border-solid border-2 border-red-500 rounded-lg">
                    <span class="font-sans font-bold text-lg">Government Logo</span>
            </div>

                {{-- government details --}}
                <div class="flex flex-col justify-center border-solid border-2 border-red-500 h-[80%] w-[45%] sm:w-[38%] md:w-[35%] lg:w-[30%] xl:w-[20%] xl:mr-52 xl:justify-center xl:pl-14">
                    <span class="font-sans font-bold text-lg sm:text-xl xl:mb-1 xl:text-2xl">Government Name</span>
                    <span class="font-sans font-bold text-sm sm:text-base xl:text-lg">Job Offer</span>
                    <span class="font-sans font-bold text-sm sm:text-base xl:text-lg">Available Slot</span>
                    <span class="font-sans font-bold text-sm sm:text-base xl:text-lg text-blue-400">See more details </span>
                </div>
            </div>

            
           
    </div>
   
  

    @include('components/footer')
</body>
</html>