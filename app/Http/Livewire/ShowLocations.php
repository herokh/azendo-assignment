<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Livewire\Component;

class ShowLocations extends Component
{
    public $locations;

    public function render()
    {
        return view('livewire.show-locations');
    }
}
