<?php

namespace App\Livewire;

use Livewire\Component;

class Sadness extends Component
{
    public $inhale;
    public $seconds = 0;
    public $count = 0;
    public $totalDuration = 10; // 2 seconds
    public $timeInterval;


    public function mount()
    {
        $this->inhale = 0;

    }

    public function startCounter()
    {
        $this->timeInterval = $this->totalDuration * 1000 / 100; // Calculate time interval in milliseconds
    
        $this->dispatch('startCounter', [
            'totalDuration' => $this->totalDuration * 1000, // Convert totalDuration to milliseconds
            'timeInterval' => $this->timeInterval,
        ]);
    }

    public function exhale()
    {
        dd($this->seconds);
    }
    public function render()
    {
        return view('livewire.sadness');
    }
}
