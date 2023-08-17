<div class=" flex flex-col w-[95%] mt-2 border-solid border-2 h-auto mb-2 border-sky-50 shadow-md py-2 rounded-lg  ">
    <span class="mt-1 font-sans font-bold text-base text-justify uppercase px-2 w-[95%]">{{$items->title}}</span>
    <span class="mt-2 font-sans text-gray-400 text-xs px-2">{{$items->published}}</span>
    <span class="mt-2 font-sans text-base text-justify h-auto border-solid border-red-500 border-2 px-2 w-[98%] break-words">{!! $items->content !!}</span>
    <a href="{{url('/NewsUpdate', $items->id )}}" class="mt-2 font-sans text-base text-justify px-2 py-2 text-blue-400">{!! $items->links !!}</a>
   
  </div>