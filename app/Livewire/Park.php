<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Wagon;

class Park extends Component
{
    public $tracks = [];

    public function mount()
    {
        // Pobierz tylko wagony, które mają poprawny track w location
        $wagons = Wagon::where('location', 'regexp', '^track_\\d+$')->orderBy('position_on_list')->get();
        $tracks = array_fill(0, 8, []);
        foreach ($wagons as $wagon) {
            if (preg_match('/track_(\d+)/', $wagon->location, $m)) {
                $trackIndex = max(0, min(7, ((int)$m[1]) - 1));
                $tracks[$trackIndex][] = $wagon;
            }
        }
        $this->tracks = $tracks;
    }

    #[\Livewire\Attributes\On('moveWagon')]
    public function moveWagon($wagonId = null, $trackNo = null, $insertIndex = null)
    {
        if (!$wagonId || !$trackNo) return;
        $wagon = \App\Models\Wagon::find($wagonId);
        if ($wagon) {
            // Przypisz position_on_list = numer slotu + 1
            $slot = is_null($insertIndex) ? 1 : ((int)$insertIndex + 1);
            $wagon->location = 'track_' . $trackNo;
            $wagon->position_on_list = $slot;
            $wagon->save();
        }
        $this->mount(); // odśwież tory
    }

    #[\Livewire\Attributes\On('sortWagons')]
    public function sortWagons($trackNo = null, $ids = null)
    {
        // sortowanie wyłączone - nie wykonuje żadnych zmian
        $this->mount();
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.park', [
            'tracks' => $this->tracks
        ]);
    }
}
