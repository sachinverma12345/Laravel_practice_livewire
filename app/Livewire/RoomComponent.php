<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;

class RoomComponent extends Component
{
    public $prices;

    public $selectedPrice = [];
    public $rooms;

    public function mount()
    {
        // Fetch rooms initially without filtering
        $this->rooms = Room::latest()->get();
    }

    public function updatedSelectedPrices()
    {
        dd($this->selectedPrices);
        // If any price is selected, filter rooms based on selected prices
        if (!empty($this->selectedPrices)) {
            $this->rooms = Room::whereIn('price', $this->selectedPrices)->latest()->get();
        } else {
            // If no price is selected, reset the rooms to all rooms
            $this->rooms = Room::latest()->get();
        }
    }
    public function render()
    {
        // $rooms = Room::when($this->selectedPrice, function ($query) {
        //     return $query->whereIn('room_type', $this->selectedPrice);
        // })->latest()->get();
       // dd($rooms->galleries);
       

        return view('livewire.room-component');
    }
}
