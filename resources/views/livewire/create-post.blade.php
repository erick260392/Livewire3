<div>
    <div>

        <x-input type="text" wire:model.live='name'></x-input>

        {{-- <h1>{{$name}}</h1>
  <h2>{{$email}}</h2> --}}

        <x-button wire:click='save'> save</x-button>
    </div>
    {{$name}}
</div>
