<div>
    <form class="mb-4" wire:submit="save">

        <x-input type="text" placeholder="Ingresa un Pais" wire:model="pais" wire:keydown.space="increment"></x-input>

        <x-button>
            Agregar
        </x-button>
    </form>

    <ul class="list-disc list-inside">
        @foreach ($paises as $index => $pais)
            <li wire:key="pais-{{ $index }}" class="px-2 py-2">
                <span wire:mouseenter="changeActive('{{$pais}}')"> ({{ $index }}) {{ $pais }}</span>

                <x-danger-button class="mx-2" wire:click="delete({{ $index }})">Eliminar</x-danger-button>
            </li>
        @endforeach
    </ul>
    {{ $count }}
</div>
