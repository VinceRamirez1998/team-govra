<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

   
    
</head>
<body class="bg-bgcolor">
    @include('components/nav-user')
    @include('components/highlights-directory-nav')
    
    {{-- find job container --}}
    <div class="flex flex-col justify-center items-center mt-1 h-auto max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl">
          {{-- government details container --}}
        <div class="flex items-center justify-center gap-5 h-[11rem] sm:h-[13rem] md:h-[14rem] xl:h-[15rem] xl:gap-20 2xl:h-[16rem] w-full bg-bgcolor">
            {{-- government logo here --}}
                <div class=" flex justify-center items-center h-[80%] w-[45%] sm:w-[40%] md:w-[35%] lg:w-[30%] xl:w-[25%] 2xl:w-[20%] border-solid border-2 border-sky-50 shadow-md  rounded-lg bg-gray-50">
                   <img class="h-full w-[90%] lg:w-[85%] object-fill" src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DepEd">
                </div>
                {{-- government details --}}
                <div class="flex flex-col justify-center gap-8 h-[80%] w-[40%] md:w-[35%] lg:w-[30%] xl:w-[25%] 2xl:w-[20%]">
                    <span class="text-sm font-sans font-bold sm:text-xl md:text-2xl xl:text-3xl">Government name</span>
                    <span class="text-xs font-sans font-semibold sm:text-lg md:text-xl xl:text-2xl">Government type</span>
                </div>
        </div>

        <div class="h-[3rem] sm:h-[3.5rem] md:h-[4rem] w-full flex items-center justify-center border-y-2 border-gray-200">
            <ul class="flex flex-row gap-5 md:gap-16">
                <li class="text-xs sm:text-base md:text-lg text-blue-500  font-sans font-bold underline decoration-blue-500 underline-offset-4 decoration-2">Government Overview</li>
                <li class="text-xs sm:text-base md:text-lg font-sans font-bold">Jobs Offer</li>
                <li class="text-xs sm:text-base md:text-lg font-sans font-bold">Reviews</li>
            </ul>
    
        </div>
      
        {{-- government details container --}}
    <div class="flex flex-col justify-center items-center">
              {{-- government overview details --}}
        <div class="h-[11rem] md:h-[12rem] w-full xl:w-[90%] flex flex-col  bg-bgcolor">
            <span class="text-lg font-sans font-bold pt-2 sm:pt-3 sm:text-xl md:text-2xl xl:text-3xl pl-3">Government Overview</span>
            <p class="px-3 indent-7 text-justify text-sm sm:text-base md:text-lg xl:text-xl">    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur omnis recusandae amet ipsam optio. Numquam nihil expedita, recusandae ducimus perspiciatis odio illo consectetur, deleniti non, fugiat doloribus rem? Sed, cum?</p>
        </div>

        <div class="flex flex-col justify-center items-center lg:gap-12  lg:flex lg:flex-row">
                  {{-- government-VISION --}}
                  <div class="flex items-center h-[14rem] sm:h-[17rem] lg:h-[18rem] xl:h-[19rem] w-[90%] sm:w-[80%] md:w-[70%] lg:w-[45%] 2xl:w-[40%] sm:mt-12 border-sky-50 bg-gray-50 bg-opacity-40  shadow-lg mb-2  relative rounded-md mt-10 border-solid border-2  flex-col">
                    {{-- eye-icon-container --}}
                    <div class="flex justify-center items-center absolute  top-[-2rem] sm:top-[-2.5rem] bg-iconbg h-[4rem] sm:h-[4.5rem]  w-[4rem] sm:w-[4.5rem]  rounded-[50%] border-solid border-2 border-red-100  shadow-sm">
                       <img class="h-[80%] w-[70%] object-contain" src="{{URL('assets/icons/vision-icon.svg')}}" alt="vision">

                      
                    </div>
                     {{-- VISION-title --}}
                     <div class="flex justify-center items-center w-full h-9 sm:h-10 bg-iconbg mt-9 ">
                            <span class="text-white font-sans font-semibold sm:text-lg">Vision</span>
                     </div>
                     {{-- VISION-details --}}
                     <p class="p-3 font-sans text-justify  text-xs sm:text-base lg:text-base xl:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quasi repellendus, quidem mollitia neque cum dolorem numquam explicabo suscipit ratione distinctio magni nemo ad libero nesciunt officiis hic repudiandae! Quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi vitae sint corporis, dolore sapiente dolor et itaque accusamus! Ipsa, expedita alias voluptate odio explicabo! </p>
                   
                </div>

                  {{-- government-mission --}}
                  <div class="flex items-center h-[14rem] sm:h-[17rem] lg:h-[18rem] xl:h-[19rem] w-[90%] sm:w-[80%]  md:w-[70%] lg:w-[45%] 2xl:w-[40%] sm:mt-12 border-sky-50 bg-gray-50 bg-opacity-40  shadow-lg mb-2 relative rounded-md mt-10 border-solid border-2 flex-col">
                    {{-- eye-icon-container --}}
                    <div class="flex justify-center items-center absolute top-[-2rem] sm:top-[-2.5rem] bg-iconbg h-[4rem] sm:h-[4.5rem] w-[4rem] sm:w-[4.5rem]  rounded-[50%] border-solid border-2 border-red-100 shadow-sm">
                       <img class="h-[80%] w-[70%] object-contain" src="{{URL('assets/icons/mission-icon.svg')}}" alt="misson">

                      
                    </div>
                     {{-- VISION-title --}}
                     <div class="flex justify-center items-center w-full h-9 sm:h-10 bg-iconbg mt-9 ">
                            <span class="text-white font-sans font-semibold sm:text-lg ">Mission</span>
                     </div>
                     {{-- VISION-details --}}
                     <p class="p-3 font-sans text-justify  text-xs sm:text-base lg:text-base xl:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quasi repellendus, quidem mollitia neque cum dolorem numquam explicabo suscipit ratione distinctio magni nemo ad libero nesciunt officiis hic repudiandae! Quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi vitae sint corporis, dolore sapiente dolor et itaque accusamus! Ipsa, expedita alias voluptate odio explicabo! </p>
                   
                </div>
        </div>
          

                {{-- location-website-contacts container --}}
                <div class="flex items-center gap-9 sm:gap-12 flex-col lg:flex-row lg:justify-center lg:items-center  h-[32rem] lg:h-[15rem] sm:h-[38rem] w-[90%] lg:w-full mt-2">

                    {{-- location-container --}}
                    <div class="flex gap-2 justify-start  bg-opacity-40  items-center h-[8rem] sm:h-[10rem] w-[70%] sm:w-[65%] md:w-[60%] lg:w-[25%] 2xl:w-[22%] border-sky-50 bg-gray-50 shadow-lg rounded-md mt-6 lg:mt-0 border-solid border-2">
                        <div class="flex justify-center items-center ml-5 h-[4.5rem] sm:h-[5.5rem] w-20 sm:w-[5.5rem]  border-solid border-2 border-sky-50 shadow-sm rounded-[50%] bg-iconbg">
                            <img class="h-[55%] w-[70%] object-contain" src="{{URL('assets/icons/location-icon.svg')}}" alt="location">
                        </div>
                        <div class="h-[6rem] sm:h-[6.5rem] w-[10rem] sm:w-[12rem] md:w-[14rem] lg:w-[11rem]">
                            <span class="text-sm font-sans font-bold mb-1 sm:text-base md:text-lg">Location</span><br>
                            <span class="text-xs text-justify font-sans font-bold mb-1 sm:text-sm md:text-base">Lorem ipsum dolor sit, amet consectetur  </span>
                        </div>
                    </div>

                      {{-- website-container --}}
                      <div class="flex gap-2 justify-start  bg-opacity-40  items-center h-[8rem] sm:h-[10rem] w-[70%] sm:w-[65%] md:w-[60%] lg:w-[25%] 2xl:w-[22%] border-sky-50 bg-gray-50 shadow-lg rounded-md border-solid border-2 ">
                        <div class="flex justify-center items-center ml-5 h-[4.5rem] sm:h-[5.5rem] w-20 sm:w-[5.5rem]  border-solid border-2 border-sky-50 shadow-sm rounded-[50%] bg-iconbg">
                            <img class="h-[70%] w-[70%] object-contain" src="{{URL('assets/icons/website-icon.svg')}}" alt="location">
                        </div>
                        <div class="h-[6rem] sm:h-[6.5rem] w-[10rem] sm:w-[12rem]  md:w-[14rem] lg:w-[11rem]">
                            <span class="text-sm font-sans font-bold mb-1 sm:text-base md:text-lg">Webiste</span><br>
                            <span class="text-xs text-justify font-sans font-bold mb-1 sm:text-sm md:text-base">Lorem ipsum dolor sit, amet consectetur  </span>
                        </div>
                    </div>


                      {{-- contacts-container --}}
                      <div class="flex gap-2 justify-start items-center h-[8rem] sm:h-[10rem] w-[70%] sm:w-[65%] md:w-[60%] lg:w-[25%] 2xl:w-[22%] border-sky-50  bg-gray-50  shadow-lg rounded-md border-solid border-2">
                        <div class="flex justify-center items-center ml-5 h-[4.5rem] sm:h-[5.5rem] w-20 sm:w-[5.5rem]  border-solid border-2 border-sky-50 shadow-sm rounded-[50%] bg-iconbg">
                            <img class="h-[50%] w-[70%] object-contain" src="{{URL('assets/icons/contact-icon.svg')}}" alt="location">
                        </div>
                        <div class="h-[6rem]  sm:h-[6.5rem] w-[10rem] sm:w-[12rem]  md:w-[14rem] lg:w-[11rem]">
                            <span class="text-sm font-sans font-bold mb-1 sm:text-base md:text-lg">Contacts</span><br>
                            <span class="text-xs text-justify font-sans font-bold mb-1 sm:text-sm md:text-base">Lorem ipsum dolor sit, amet consectetur  </span>
                        </div>
                    </div>


                    


                     
                    
                </div>
    </div>
      
    </div>
   
    @include('components/footer')
</body>
</html>