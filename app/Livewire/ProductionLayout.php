<?php

namespace App\Livewire;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Wagon;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class ProductionLayout extends Component
{

    public $wagons, $wagons_PNM, $wagons_NEW, $location;
    public $work_centers = ['SM2a', 'SM2', 'SM1', 'SM1a', 'SR2', 'SR2a', 'SR3', 'SR3a', 'SR4', 'SR4a', 'SR5', 'SR5a','SH3','SH2','SR6','SR7','SR8'];
    public $wagons_to_enter,$track,$no_of_wagons=0;
    
    #[Locked]
    public $wagon_id;

    public function WagonsForPNM($track) {
        $this->wagons_to_enter = Wagon::Where('location',$track)->get();
        $this->no_of_wagons = count($this->wagons_to_enter);
        $this->track=$track;
    }

    public function Save()
    {
        //dd($request->wagon_number);
        //dd($this->location);
        $wagon = Wagon::find($this->wagon_id);
        //dd($this->location);
        $wagon->location = $this->location;
        $wagon->save();
        $this->redirect('production-layout');
    }
 
    public function mount() {
        $this->wagons = Wagon::OrderBy('position_on_list','desc')->get();

        foreach ($this->work_centers as $wc)
        {
            $this->wagons_PNM[$wc] = Wagon::Where('location',$wc)->get();
        }
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.production-layout');
    }
}
