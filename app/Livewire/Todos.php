<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';

    public $todos = [
        'Rohail is here',
        'Are you here to eat fruits',
    ];

    public function Add(){

        $this->todos[] = $this->pull('todo');

//        $this->todo = '';

//        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
