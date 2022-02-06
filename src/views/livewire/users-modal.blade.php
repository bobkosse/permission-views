<dh-component>
    <div class="absolute top-0 bottom-0 left-0 right-0 z-10 py-12 transition duration-150 ease-in-out bg-gray-700" id="modal">
        <div role="alert" class="container w-11/12 max-w-lg mx-auto md:w-2/3">
            <div class="relative px-5 py-8 bg-white border border-gray-400 rounded shadow-md md:px-10">
                <div class="flex justify-start w-full mb-3 text-gray-600" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </div>
                <h1 class="mb-4 font-bold leading-tight tracking-normal text-gray-800 font-lg">{{ __('Create a new user') }}</h1>
                <label for="name" class="text-sm font-bold leading-tight tracking-normal text-gray-800">{{ __('Name of the user') }}</label>
                <input name="name" type="text" id="name" class="flex items-center w-full h-10 pl-3 mt-2 mb-5 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700" placeholder="{{ __('John Doe') }}" />
                
                <label for="email" class="text-sm font-bold leading-tight tracking-normal text-gray-800">{{ __('E-mail address') }}</label>
                <input name="email" type="email" id="email" class="flex items-center w-full h-10 pl-3 mt-2 mb-5 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700" placeholder="{{ __('example@example.com') }}" />

                <label for="password" class="text-sm font-bold leading-tight tracking-normal text-gray-800">{{ __('Initial password') }}</label>
                <input name="password" type="password" id="password" class="flex items-center w-full h-10 pl-3 mt-2 mb-5 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700" placeholder="{{ __('V3rrY5ecr3t!') }}" />

                <label for="confirm_password" class="text-sm font-bold leading-tight tracking-normal text-gray-800">{{ __('Confirm initial password') }}</label>
                <input name="confirm_password" type="password" id="confirm_password" class="flex items-center w-full h-10 pl-3 mt-2 mb-5 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700" placeholder="{{ __('V3rrY5ecr3t!') }}" />
                
                <label class="inline-block text-sm text-gray-600" for="Multiselect">Assign roles</label>
                <div class="relative flex w-full">
                    <select
                        id="select-role"
                        name="roles[]"
                        multiple
                        placeholder="Select roles..."
                        autocomplete="off"
                        class="block w-full rounded-sm cursor-pointer focus:outline-none"
                        multiple
                    >
                        @foreach($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <script>new TomSelect('#select-role');</script>

                <label class="inline-block mt-4 text-sm text-gray-600" for="Multiselect">Assign permissions</label>
                <div class="relative flex w-full">
                    <select
                        id="select-permission"
                        name="permissions[]"
                        multiple
                        placeholder="Select permissions..."
                        autocomplete="off"
                        class="block w-full rounded-sm cursor-pointer focus:outline-none"
                        multiple
                    >
                        @foreach($permissions as $permission)
                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                        @endforeach
                    </select>
                </div>
                <script>new TomSelect('#select-permission');</script>
                
                
                <div class="flex items-center justify-start w-full mt-6">
                    <button class="px-8 py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600">{{ __('Create user') }}</button>
                    <button wire:click="closeModal()" class="px-8 py-2 ml-3 text-sm text-gray-600 transition duration-150 ease-in-out bg-gray-100 border rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 hover:border-gray-400 hover:bg-gray-300">{{ __('Cancel') }}</button>
                </div>
                <button class="absolute top-0 right-0 mt-4 mr-5 text-gray-400 transition duration-150 ease-in-out rounded cursor-pointer hover:text-gray-600 focus:ring-2 focus:outline-none focus:ring-gray-600" wire:click="closeModal()" aria-label="close modal" role="button">
                    <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</dh-component>