<?php

namespace App\Livewire;

use Livewire\Component;

class HeroComponent extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="relative md:h-[600px] md:-mt-[100px] w-full">
            <div class="hero h-full "  style="background-image: url(https://images.unsplash.com/photo-1674876105548-520cc1e2c82a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-['lexend'] font-bold">Hello there</h1>
                        <p class="mb-5 font-['inter'] ">Browse menus from your favorite local restaurants and order delivery straight to your door.</p>
                        <div class="flex gap-x-3 items-center">
                            <input type="text" placeholder="Type your location" class="input text-black input-bordered w-full max-w-xs" />
                            <button class="btn bg-[#96c296]">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        HTML;
    }
}
