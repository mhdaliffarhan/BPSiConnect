<?php

namespace App\Livewire\JadwalKepala;

use Livewire\Component;

class Table extends Component
{
    public $events;
    public function mount(){
        $this->events = \App\Models\Event::all();
    }
    public function render()
    {
        return view('livewire.jadwal-kepala.table');
    }
}
