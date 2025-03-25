<div class="container">
    {{-- Care about people's approval and you will be their prisoner. --}}
    Todo List
{{--    <input type="text" wire:model="todo">--}}
{{--    <button class="border rounded" type="submit" wire:click="Add">Add</button>--}}
    <form wire:submit="Add">
        <input type="text" wire:model="todo">
        <button type="submit" class="rounded">Add</button>
    </form>

    <ul>

        @foreach($todos as $todo)

            <li>{{   $todo   }}</li>
        @endforeach
    </ul>
</div>
