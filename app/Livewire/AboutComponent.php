<?php

namespace App\Livewire;

use Livewire\Component;

class AboutComponent extends Component
{

    public function render()
    {
        return <<<'HTML'
        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-first lg:h-full">
                    <img
                    alt="lake"
                    src="{{asset('images/Visit-Philippines-Lake-Lanao.jpg')}}"
                    class="absolute inset-0 h-full w-full object-cover"
                    />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold sm:text-4xl">About Mappia</h2>

                    <p class="mt-4 text-gray-600">
                    Mappia is derived from the language of the Maranao Tribe that means It's Okay or Good.
                    Mappia App was developed by Yaramay Computer and Maintenance Services that is based
                    on Manila, Philippines.
                    </p>

                    <p class="mt-4 text-gray-600">
                    The Mappia App was developed to help our kababayans who have difficulty going out of their
                    homes/workplace to make necessary transactions and purchases elsewhere, whether be it for
                    themselves or their families in K.S.A or Philippines. Choose from the variety of services that we
                    offer like Padala, Pabili, Guided Tour(Riyadh), and Airport Pickup/Dropoff (K.S.A and Manilla).
                    Mappia also offers discounts for OFW's, Senior Citizens and people Cooperative Members.
                    We are also commited to provide 24/7 support to address your problems regarding
                    transactions done through the Mappia App.
                    </p>

                    <a
                    href="#"
                    class="mt-8 inline-block rounded bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400"
                    >
                    Get Started Today
                    </a>
                </div>
                </div>
            </div>
        </section>
        HTML;
    }
}
