<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter=0;
    public $counter1= 1;

    public function increment(){

        $this->counter++;
    }

    public function decrement(){

        $this->counter1--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
