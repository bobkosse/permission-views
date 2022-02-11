<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Users management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-gray-100">
                <div class="text-gray-800 bg-gray-100" x-data="{ selected: 'users' }">
                <nav class="bg-gray-100">
                <ul class="flex">
                    <li class="px-4 py-2" :class="{ 'bg-white rounded-lg rounded-b-none rounded-t': selected === 'users' }">
                        <a href="#users" @click="selected = 'users'">{{ __('Users') }}</a>
                    </li>
                    <li class="px-4 py-2" x-bind:class="{ 'bg-white rounded-lg rounded-b-none rounded-t': selected === 'roles' }">
                        <a href="#roles" x-on:click="selected = 'roles'">{{ __('Roles') }}</a>
                    </li>
                </ul>
                </nav>

                <div x-show.transition.in.opacity.duration.750ms="selected === 'users'" class="px-4 py-2 bg-white rounded-lg rounded-t-none rounded-b">
                    @livewire('users-overview')
                </div>

                <div x-show.transition.in.opacity.duration.750ms="selected === 'roles'" class="px-4 py-2 bg-white rounded-lg rounded-t-none rounded-b">
                    @livewire('roles-overview')
                </div>
            </div>
            </div>

        </div>
    </div>
</x-app-layout>