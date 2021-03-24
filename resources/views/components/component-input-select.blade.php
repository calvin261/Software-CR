
<div>
    <label for="{{ $name }}"
        class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <select  wire:model="{{ $name}}" class="border border-white focus:border focus:border-white">
            <option value="">Seleccione</option>
            @foreach ($options as $key=>$option)
                    <option value="{{ $key }}">{{ $option }}</option>
            @endforeach
        </select>
        @if ($errors->has($name))
        <small class="text-red-600">{{ $errors->first($name) }}</small>
        @endif
    </div>
</div>

