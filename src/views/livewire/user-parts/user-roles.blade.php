<div class="mt-4 md:grid md:grid-cols-3 md:gap-6">
    <x-jet-section-title>
        <x-slot name="title">{{ __('User roles') }}</x-slot>
        <x-slot name="description">{{ __('In this section you can set the roles for the user.') }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 bg-white shadow sm:p-6">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                @foreach($roles as $role) 
                    <label for="{{ $role->name }}" class="block">
                        <input type="checkbox" id="{{ $role->name }}" wire:model.defer="user.roles.{{ $role->name }}">
                        {{ $role->name }}
                    </label>
                @endforeach
            </div>
        </div>
    </div>
</div>
