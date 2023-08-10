
 {{-- find job container --}}
 
 
 
    {{-- government layout --}}
   
        <div class="flex gap-5 items-center justify-center h-40 w-full sm:h-[14rem] sm:justify-center border-solid border-2 border-red-500 bg-gray-100">
            {{-- government logo here --}}
            <div class="flex justify-center items-center h-[80%] w-[40%] sm:w-[38%] md:w-[35%] lg:w-[30%] xl:w-[20%] border-solid border-2 border-red-500 rounded-lg bg-gray-50">
                    {{-- <span class="font-sans font-bold text-lg ">Government Logo</span> --}}
                    <img class="h-[85%] w-[70%] object-fit" src="/storage/{{ $post->logo }}">
            </div>

            {{-- government details --}}
            <div class="flex flex-col justify-center border-solid border-2 border-red-500 h-[80%] w-[45%] sm:w-[38%] md:w-[35%] lg:w-[30%] xl:w-[20%] xl:mr-52 xl:justify-center xl:pl-14">
                <span class="font-sans font-bold text-lg sm:text-xl xl:mb-1 xl:text-2xl">{{ $post->name }}</span>
                <span class="font-sans font-bold text-sm sm:text-base xl:text-lg ">Job Offer</span>
                <span class="font-sans font-bold text-sm sm:text-base xl:text-lg">Available Slot</span>
                <span class="font-sans font-bold text-sm sm:text-base  text-blue-400">See more details </span>
            </div>
            
        </div>
  
       


