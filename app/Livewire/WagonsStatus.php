<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Wagon;

class WagonsStatus extends Component
{

    public $wagons, $row_number=1, $id=0;



    public function mount() {

        $this->wagons = Wagon::all();

    }

    public function All_Wagons()
    {
        $this->id=0;
        $this->wagons = Wagon::all();
    }

    public function KJ_Wagons()
    {
        $this->id=0;
        $this->wagons = Wagon::Where('Status','KJ')->get();
    }

    public function Repair_Wagons()
    {
        $this->id=0;
        $this->wagons = Wagon::Where('Status','W naprawie')->get();
    }    
    public function Hold_Wagons()
    {
        $this->id=0;
        $this->wagons = Wagon::Where('Status','wstrzymany')->get();
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.wagons-status');
    }
}
