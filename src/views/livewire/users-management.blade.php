<div>
    <div class="pt-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        @include('permissions::livewire.user-parts.user-details')
        @include('permissions::livewire.user-parts.user-roles')
        @include('permissions::livewire.user-parts.user-permissions')

        <div class="flex items-center justify-end w-full mt-4">
            <a href="{{ route('permissions.roles.overview') }}" class="px-8 py-2 mr-3 text-sm text-gray-600 transition duration-150 ease-in-out bg-gray-100 border rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 hover:border-gray-400 hover:bg-gray-300">{{ __('Cancel') }}</a>
            <button wire:click="createUser()" class="px-8 py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600">{{ __('Create user') }}</button>
        </div>
    </div>
</div>