<?php

namespace App\Livewire;
use Livewire\Attributes\Layout;
use App\Models\Wagon;

use Livewire\Component;

class WelcomePage extends Component
{

    public $wagons;
 
public  function mount() {
    $this->wagons = Wagon::OrderBy('position_on_list','desc')->get();
}

    #[Layout('components.layouts.app')]
    public function render()
    { 
        return view('livewire.welcome-page');
    }
}
