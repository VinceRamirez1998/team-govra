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
    @include('components/nav-user')

   
    {{-- second header --}}
    <div class=" flex w-full h-16 justify-start items-center mt-5 gap-7 md:gap-10 lg:gap-20 bg-blue-500 border-solid border-2 border-blue-500">
        <span class="ml-5 xl:ml-44 lg:ml-24 md:ml-24 sm:ml-16 font-sans font-semibold text-white text-sm sm:text-base" >Highlights</span>
        <span class="font-sans font-semibold text-white text-sm sm:text-base w-[26rem] lg:w-[20rem]">Goverment Directory</span>

        
            <form class="flex items-center w-full ">   
           
                <input type="text" name="name"  required class="h-[2.1rem] xl:h-[2.3rem] max-w-screen sm:w-[60%] sm:ml-16 md:w-[40%] md:ml-32 lg:w-[30%] xl:w-[30%]  lg:ml-[20rem] xl:ml-[20rem] 2xl:ml-[27rem]  px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-[100%]  rounded-md  focus:ring-1" placeholder="Search" />
                <button type="submit" class="p-2.5 text-sm mr-5 ml-1 font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                   
                </button>
            </form>

    </div>

    {{-- find job container --}}
    <div class="h-auto w-full max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl flex flex-col gap-6 mt-5 py-5 border-solid border-2 border-blue-500">

        {{-- government layout --}}
            <div class="flex gap-5 items-center justify-center h-40 w-full sm:h-[14rem] sm:justify-center border-solid border-2 border-red-500 bg-gray-100">
                {{-- government logo here --}}
                <div class="flex justify-center items-center h-[80%] w-[40%] sm:w-[38%] md:w-[35%] lg:w-[30%] xl:w-[20%] border-solid border-2 border-red-500 rounded-lg bg-gray-50">
                        {{-- <span class="font-sans font-bold text-lg ">Government Logo</span> --}}
                        <img class="h-full w-[90%] object-fill" src="{{URL('assets/images/government-logo/Department_of_Education_(DepEd).svg')}}" alt="deped">
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