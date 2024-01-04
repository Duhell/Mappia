<div class="w-full mt-14">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-['lexend'] font-bold sm:text-4xl">Our Partners</h2>
        <p class="mt-4 w-full sm:w-[800px] sm:mx-auto font-['inter'] text-sm text-gray-600">
            As we continue to expand and achieve greater success, we are delighted to announce our collaborations with some dining spots, as well as extending our partnerships to include essential services such as package delivery and ride services.
        </p>
    </div>
    <div class="w-full mt-7">
        <div id="carousel" class=" keen-slider">
            @foreach($images as $index=>$image)
            <div wire:key = "{{$index}}" class="cursor-pointer keen-slider__slide">
                    <img
                        class="{{$index === 0 ? 'active':''}} w-[80px] h-[80px]"
                        src="{{asset('restaurants/'. basename($image))}}"
                        alt="image {{$index}}"
                    >
            </div>
            @endforeach
        </div>
    </div>
</div>
