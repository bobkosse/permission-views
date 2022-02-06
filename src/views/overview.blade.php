<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Users, roles and permissions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-gray-100">
                <div class="text-gray-800 bg-gray-100" x-data="{ selected: 'option-1' }">
                <nav class="bg-gray-100">
                <ul class="flex">
                    <li class="px-4 py-2" :class="{ 'bg-white rounded-lg rounded-b-none rounded-t': selected === 'option-1' }">
                        <a href="#option-1" @click="selected = 'option-1'">{{ __('Users') }}</a>
                    </li>
                    <li class="px-4 py-2" x-bind:class="{ 'bg-white rounded-lg rounded-b-none rounded-t': selected === 'option-2' }">
                        <a href="#option-2" x-on:click="selected = 'option-2'">{{ __('Roles') }}</a>
                    </li>
                </ul>
                </nav>

                <div x-show.transition.in.opacity.duration.750ms="selected === 'option-1'" class="px-4 py-2 bg-white rounded-lg rounded-t-none rounded-b">
                    @livewire('users-overview')
                </div>

                <div x-show.transition.in.opacity.duration.750ms="selected === 'option-2'" class="px-4 py-2 bg-white rounded-lg rounded-t-none rounded-b">
                    @livewire('roles-overview')
                </div>
            </div>
            </div>

        </div>
    </div>
</x-app-layout>