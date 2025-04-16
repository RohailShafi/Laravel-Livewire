<?php

namespace App\Livewire;

use Livewire\Component;


class InlineComponent extends Component
{
    private $title = 'Inline Component';
    protected $surprise = 'Wow Everything is working fine';
    public $message = 'Hi Guys this is a InLine Component, Oh are you not familiar.';

    public function render()
    {
        return <<<'HTML'
        <div class="container m-5 text-center">
            <h1>{{$this->title}}</h1>
            <p>{{$message}}</p>
            <p class="text-primary">{{$this->surprise}}</p>
            <h1 class="text-success">Counter Component is called</h1>
            <livewire:counter :nested="false"/>
            <hr/>

        </div>
        HTML;
    }
}


