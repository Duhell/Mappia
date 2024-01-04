<?php

namespace App\Livewire;

use Livewire\Component;

class CarouselRestaurantComponent extends Component
{
    protected $images;

    public function mount(){
        $this->images = \Illuminate\Support\Facades\File::files(public_path('restaurants'));
    }
    public function render()
    {
        return <<<'HTML'
        <div class="grid grid-cols-2 gap-x-4">
            <div id="carousel" class=" keen-slider">
                @foreach($this->images as $index=>$image)
                <div wire:key = "{{$index}}" class="h-[80px] w-[50px] keen-slider__slide">
                        <img
                            class="{{$index === 0 ? 'active':''}} w-full h-full"
                            src="{{asset('restaurants/'. basename($image))}}"
                            alt="image {{$index}}"
                        >
                </div>
                @endforeach
            </div>
            <div>
                <h2 class="text-3xl font-['lexend'] font-bold sm:text-4xl">Partners</h2>
                <p class="mt-4 font-['inter'] text-sm text-gray-600">
                    As we continue to expand and achieve greater success, we are delighted to announce our collaborations with some dining spots, as well as extending our partnerships to include essential services such as package delivery and ride services.
                </p>
            </div>
        </div>
        HTML;
    }
}
