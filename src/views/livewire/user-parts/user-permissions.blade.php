<div class="mt-4 md:grid md:grid-cols-3 md:gap-6">
    <x-jet-section-title>
        <x-slot name="title">{{ __('User permissions') }}</x-slot>
        <x-slot name="description">{{ __('In this section you can set additional permissions for the user.') }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 bg-white shadow sm:p-6">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                @foreach($permissions as $permission_group) 
                    <div class="p-2">
                        <h3 class="text-xl">{{ $permission_group['group_name'] }}</h3>
                        @foreach( $permission_group['permissions'] as $permission => $guard) 
                            <label for="{{ $permission }}" class="block">
                                <input type="checkbox" id="{{ $permission }}" wire:model.defer="user.permissions.{{ $permission }}">
                                {{ $permission }}
                            </label>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
