<?php

namespace App\Livewire\JadwalKepala;

use Livewire\Component;

class DeleteJadwal extends Component
{
    public $event;
    public $title;
    public $start_date;
    public $end_date;
    public $color;

    protected $rules = [
        'title' => 'required|string|max:255',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        'color' => 'required|string|size:7',
    ];

    public function mount($event)
    {
        $this->event = $event;
        $this->title = $event->title;
        $this->start_date = $event->start_date;
        $this->end_date = $event->end_date;
        $this->color = $event->color;
    }

    public function render()
    {
        return view('livewire.jadwal-kepala.delete-jadwal');
    }
}
