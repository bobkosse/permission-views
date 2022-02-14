<x-jet-form-section submit="createUser">
    <x-slot name="title">
        {{ __('User Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Enter the basic user information for this user') }}
    </x-slot>

    <x-slot name="form">
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name of the user') }}" />
            <x-jet-input id="name" type="text" class="block w-full mt-1" wire:model.defer="user.name" autocomplete="name" placeholder="{{ __('John Doe') }}"/>
            <x-jet-input-error for="user.name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('E-mail address') }}" />
            <x-jet-input id="email" type="email" class="block w-full mt-1" wire:model.defer="user.email" placeholder="{{ __('example@example.com') }}"/>
            <x-jet-input-error for="user.email" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('Initial password') }}" />
            <x-jet-input id="password" type="password" class="block w-full mt-1" wire:model.defer="user.password" placeholder="{{ __('V3rrY5ecr3t!') }}"/>
            <x-jet-input-error for="user.password" class="mt-2" />
        </div>

        <!-- Password confirmation-->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm initial password') }}" />
            <x-jet-input id="password_confirmation" type="password" class="block w-full mt-1" wire:model.defer="user.password_confirmation" placeholder="{{ __('V3rrY5ecr3t!') }}"/>
            <x-jet-input-error for="user.password_confirmation" class="mt-2" />
        </div>
    </x-slot>
</x-jet-form-section>