<?php

namespace App\Livewire\Welcome;

use App\Models\Event;
use Livewire\Component;

class Schedule extends Component
{
    public $events;
    public function mount(){
        $this->events = Event::all()->map(function($event){
            return [
                'title' => $event->title,
                'start' => $event->start_date,
                'end' => $event->end_date,
                'color' => $event->color
            ];
        })->toArray();
    }
    public function render()
    {
        return view('livewire.welcome.schedule', [
            'eventsJson' => json_encode($this->events),
        ]);
    }


}
