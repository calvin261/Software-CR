<div>
    <label for="{{ $name }}"
        class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <div class="mt-1 relative rounded-md shadow-sm">

        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="h-4 w-4 text-gray-400"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="{{ $icon }}" />
            </svg>
        </div>

        <input type="{{ $type }}"
            wire:model="{{ $name}}"
            id="{{ $name }}"
            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"
            placeholder="{{ $placeholder }}">
    </div>
    @if ($errors->has($name))
    <small class="text-red-600">{{ $errors->first($name) }}</small>
    @endif
</div>
