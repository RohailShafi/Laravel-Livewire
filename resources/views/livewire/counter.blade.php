<div class="container">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>Counter</h1>

{{--    <button wire:click.window=""></button>--}}
    Count: {{$counter}}

    <button class="btn btn-success" wire:click="increment">++ {{$counter}}</button>
    <button class="btn btn-danger" wire:click="decrement">-- {{ $this->counter1 }}</button>
    <h1 class="text-info"> Inline Component Called Once</h1>
{{--    @for($i=0; $i<1; $i++)--}}
{{--        <livewire:inline-component :nested="false"/>--}}
{{--        @break;--}}
{{--    @endfor--}}
</div>
