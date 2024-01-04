<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class LandingLivewireView extends Component
{
    #[Title('Mappia Store')]
    public function render()
    {
        return view('livewire.landing-livewire-view');
    }
}
