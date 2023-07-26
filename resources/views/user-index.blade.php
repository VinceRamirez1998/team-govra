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
    
    
    {{-- csc banner logo --}}

    <div class="flex max-w-screen-sm sm:max-w-screen-md md:max-w-screen-md lg:flex lg:max-w-screen-lg lg:justify-center lg:items-center justify-start items-center w-full h-40 mt-1 border-solid border-2 border-l-blue-600 z-0">
     <img class="h-[6rem] w-[100%] lg:border-solid lg:border-2 lg:border-red-700 lg:w-[80%]" src="{{URL('assets/images/csc-logo-03.png')}}" alt="cscbannerlogo">   
    </div>

    {{-- banner and announcements container --}}
    <div class="flex items-center max-w-screen-sm sm:max-w-screen-md md:max-w-screen-md lg:max-w-screen-lg flex-col border-solid border-2 border-green-700 h-[50rem] md:h-[53rem] lg:h-[40rem] w-full">

        {{-- banner container --}}
        <div class="border-solid border-2 border-red-600 mt-5 w-[90%] lg:w-[80%] h-80">

        </div>
        
        <div class="hidden lg:flex lg:flex-row lg:gap-10 lg:w-full lg:border-solid lg:border-2 lg:border-red-500 lg:mt-5 lg:justify-center lg:items-center lg:h-[19rem]">
            {{-- announcements container --}}
                <div class="border-solid border-2 border-red-600 mt-5 w-[90%] lg:w-[25rem] lg:mt-0 h-48 md:h-56">
                 <span class=" flex justify-center md:justify-start md:pl-4 md:h-10 md:text-center md:pt-1 text-white text-center w-full bg-red-600 h-8 text-xl font-sans font-bold">Announcements</span>
                </div>

            {{-- examinations advisories container --}}
                <div class="border-solid border-2 border-red-600 mt-5 w-[90%] lg:w-[25rem] lg:mt-0 h-48 md:h-56">
                  <span class=" flex justify-center md:justify-start md:pl-4 md:h-10 md:text-center md:pt-1 text-white text-center w-full bg-red-600 h-8 text-xl font-sans font-bold">Examination Advisories</span>
                </div>

        </div>
       

    </div>

    {{-- banner-content container  --}}
    <div class="flex lg:flex-row max-w-screen-sm sm:max-w-screen-md md:max-w-screen-md lg:max-w-screen-lg items-center flex-col h-[30rem] border-solid border-2 border-orange-600 w-full ">
        <div class="flex flex-col justify-center items-center border-solid border-2 border-red-600 h-[25rem] w-[90%] lg:w-[50%] lg:mt-0 mt-10">
            <span class="text-3xl font-sans font-semibold sm:text-4xl md:text-5xl lg:text-3xl">FIND YOUR DREAM</span>
            <span class="text-3xl font-sans font-semibold mt-3 sm:text-4xl md:text-5xl lg:text-3xl">JOB TODAY</span>
            <span class="text-lg font-sans font-semibold mt-3 sm:text-2xl md:text-3xl lg:text-xl">Explore all the most exciting job</span>
            <span class="text-lg font-sans font-semibold sm:text-2xl md:text-3xl lg:text-xl">roles based on your career!</span>

            <div class="flex flex-row items-center justify-center w-[90%] lg:w-[80%] h-[7rem] bg-blue-50 rounded-md border-solid border-2 border-red-600 mt-7 px-4">
                <div class="flex flex-col">
                    <label class="font-sans font-semibold sm:text-lg md:text-xl lg:text-lg" for="location">Location</label>
                <input type="password" name="password" id="password" required class="relative h-[1.8rem] sm:h-[2rem] md:h-[2.5rem] lg:h-[1.8rem] max-w-full w-[100%] mr-5  mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block  rounded-md focus:ring-1 mb-3" placeholder="Enter location" />
               
                </div>
                
                <button class="inline-flex items-center justify-center md:text-lg h-10 lg:h-10 sm:h-12 md:h-13 sm:w-[8rem] lg:w-[7rem] sm:ml-7 px-4 py-2 w-[7rem] bg-orange-500 hover:bg-orange-600 text-white font-medium rounded-md mx-2">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                
                    Search
                  </button>

            </div>

           
        
        </div>

        <div class="hidden lg:flex lg:h-[25rem] w-[50%] justify-center items-center border-solid border-2 border-red-800">

            <img class="" src="{{URL('assets/images/img-banner.png')}}" alt="">
        </div>
           
    </div>

     {{-- popular job container --}}
     <div class="flex max-w-screen-sm sm:max-w-screen-md md:max-w-screen-md lg:max-w-screen-lg flex-col items-center pt-5 w-full h-[80rem] sm:h-[90rem] md:h-[95rem] border-solid border-2 border-blue-500">
        <div class="flex flex-col items-center h-[80rem] sm:h-[90rem] md:h-[95rem] w-[90%] border-solid border-2 border-green-600 mt-2">
            <span class="font-sans font-bold text-2xl sm:text-3xl pt-5 mb-3">Popular Job Category</span>

            <div class="flex mt-2 bg-blue-100 flex-col rounded-xl items-center h-[95%] w-[85%]">  
                {{-- popular job contents teacher --}}
                <div class="flex flex-col justify-center items-center h-[13rem] w-[85%] sm:h-[15rem] md:h-[16rem] sm:w-[80%] bg-boxbg bg-opacity-50 mt-5 border-solid border-2 border-blue-600 rounded-lg">
                    <img class="h-[6rem] md:h-[7rem]" src="{{URL('assets/icons/man-teacher.svg')}}" alt="teacher">
                    <div class="flex justify-center items-center mt-2 h-8 md:h-10 bg-darkb w-full border-solid border-2 border-red-400  (0,34,51)">
                        <span class="font-sans font-semibold md:text-xl text-lg text-white">Teacher</span>
                    </div>
    
                    <div class="flex justify-center items-center mt-[1px] h-8 md:h-10 bg-orange-500 w-full border-solid border-2 border-red-400  (0,34,51)">
                        <span class="font-sans font-semibold md:text-xl text-lg text-white">120 Job offers</span>
                    </div>
    
                </div>
    
                    {{-- popular job contents fireman --}}
                    <div class="flex flex-col justify-center items-center h-[13rem] w-[85%] sm:h-[15rem] md:h-[16rem] sm:w-[80%] bg-boxbg bg-opacity-50 mt-5 border-solid border-2 border-blue-600 rounded-lg">
                        <img class="h-[6rem] md:h-[7rem]" src="{{URL('assets/icons/firefighter.svg')}}" alt="teacher">
                        <div class="flex justify-center items-center mt-2 h-8 md:h-10 bg-darkb w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl md:text-center text-white">Fire Fighter</span>
                        </div>
        
                        <div class="flex justify-center items-center mt-[1px] h-8 md:h-10 bg-orange-500 w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl text-white">120 Job offers</span>
                        </div>
        
                    </div>

                     {{-- popular job contents it specialist --}}
                    <div class="flex flex-col justify-center items-center h-[13rem] w-[85%] sm:h-[15rem] md:h-[16rem] sm:w-[80%] bg-boxbg bg-opacity-50 mt-5 border-solid border-2 border-blue-600 rounded-lg">
                        <img class="h-[6rem] md:h-[7rem]" src="{{URL('assets/icons/laptop.svg')}}" alt="laptop">
                        <div class="flex justify-center items-center mt-2 h-8 md:h-10 bg-darkb w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl text-white">IT Specialist</span>
                        </div>
        
                        <div class="flex justify-center items-center mt-[1px] h-8 md:h-10 bg-orange-500 w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl text-white">120 Job offers</span>
                        </div>
        
                    </div>

                      {{-- popular job contents it nurrse --}}
                      <div class="flex flex-col justify-center items-center h-[13rem] w-[85%] sm:h-[15rem] md:h-[16rem] sm:w-[80%] bg-boxbg bg-opacity-50 mt-5 border-solid border-2 border-blue-600 rounded-lg">
                        <img class="h-[6rem] md:h-[7rem] w-[40%]" src="{{URL('assets/icons/nurse.png')}}" alt="nurse">
                        <div class="flex justify-center mt-2 h-8 md:h-10 bg-darkb w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl text-white">Nurse</span>
                        </div>
        
                        <div class="flex justify-center mt-[1px] h-8 md:h-10 bg-orange-500 w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl text-white">120 Job offers</span>
                        </div>
        
                    </div>

                      {{-- explore all --}}
                      <div class="flex flex-col justify-center items-center h-[13rem] w-[85%] sm:h-[15rem] md:h-[16rem] sm:w-[80%] bg-orange-500 bg-opacity-95 mt-5 border-solid border-2 border-blue-600 rounded-lg">
                        <img class="h-[8rem] md:h-[10rem] w-[100%]" src="{{URL('assets/icons/arroow.svg')}}" alt="arrow">
                        <span class="text-2xl md:text-3xl font-sans font-bold text-white">EXPLORE ALL!</span>
                     
        
                    </div>
                
                </div>

        </div>
    </div>

    {{-- news and update container --}}
    <div class="flex max-w-screen-sm sm:max-w-screen-md md:max-w-screen-md lg:max-w-screen-lg  flex-col items-center h-[83rem] w-full border-solid border-2 border-pink-600">
        <div class="flex justify-center mt-7 rounded-lg h-[30rem] w-[90%] border-solid border-2 border-red-600">
            <span class="text-white text-center w-full bg-red-600 h-9 text-2xl font-sans font-bold">News and Updates</span>
        </div>

        {{-- issuances container --}}
        <div class="h-[15rem] w-[90%] mt-5 rounded-lg border-solid border-2 border-red-600">
            <span class=" flex justify-center md:justify-start md:pl-4 md:h-10 md:text-center md:pt-1 text-white text-center w-full bg-red-600 h-8 text-xl font-sans font-bold">Issuances</span>

        </div>

            {{-- issuances quick links --}}
            <div class="h-[15rem] w-[90%] mt-5 rounded-lg border-solid border-2 border-red-600">
                <span class=" flex justify-center md:justify-start md:pl-4 md:h-10 md:text-center md:pt-1 text-white text-center w-full bg-red-600 h-8 text-xl font-sans font-bold">Quick Links</span>
    
            </div>

             {{-- issuances archives --}}
             <div class="h-[15rem] w-[90%] mt-5 rounded-lg border-solid border-2 border-red-600">
                <span class=" flex justify-center md:justify-start md:pl-4 md:h-10 md:text-center md:pt-1 text-white text-center w-full bg-red-600 h-8 text-xl font-sans font-bold">Archives</span>
    
            </div>

    </div>
 
   
 
</body>
</html>