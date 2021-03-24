<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    <div class="flex text-gray-500 ">

                        <select wire:model="perPage"
                            class="border border-white focus:border focus:border-white">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                        <input type="text"
                            class="rounded-xl w-full text-gray-500 ml-6"
                            wire:model="search" />
                        <select wire:model="user_role"
                            class="border border-white focus:border focus:border-white">
                            <option value="">Seleccione</option>
                            <option value="administrador">Administrador</option>
                            <option value="gerente">Gerente</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="basico">Basico</option>
                        </select>
                        <button wire:click="clear"
                            class="ml-6">
                            <span class="fa fa-eraser"></span>
                        </button>
                    </div>
                </div>
                @can('administrador create')

                    <button type="button"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                        wire:click="showModal">
                        <svg class="h-6 w-6 text-purple-600"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                    </button>
                @endcan
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Id
                                <button wire:click="sortable('id')">
                                    <span class="fa fa{{ $camp === 'id' ? $icon : '-circle' }} }}"></span>
                                </button>
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Imagen

                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                name
                                <button wire:click="sortable('name')">
                                    <span class="fa fa{{ $camp === 'name' ? $icon : '-circle' }} }}"></span>
                                </button>
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                                <button wire:click="sortable('email')">
                                    <span class="fa fa{{ $camp === 'email' ? $icon : '-circle' }} }}"></span>
                                </button>
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Role
                            </th>
                            <th scope="col"
                                class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $user->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm w-10 h-10 font-medium text-gray-900">
                                        <img class="rounded-full"
                                            src=" {{ asset('storage/' . $user->image_user) }}"
                                            alt="{{ $user->name }}">
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900"> {{ $user->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ $user->email }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->role }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    @can('administrador update')
                                        <a href="javascript:void(0)"
                                            class="text-indigo-600 hover:text-indigo-900"
                                            wire:click="showModal({{ $user->id }})">Edit</a>
                                    @endcan
                                    @can('administrador delete')

                                        <a href="javascript:void(0)"
                                            class="text-red-600 hover:text-red-900"
                                            onclick="borrarUsuario({{ $user->id }})""
                                            >Delete</a>
                                    @endcan
                                </td>
                            </tr>





                                        @endforeach

                                        <!-- More items... -->
                    </tbody>
                </table>
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function borrarUsuario(user) {
                if (confirm('¿Esta seguro de boorar este usuario?')) {
                    Livewire.emit('deleteUserList', user)
                } else {
                    alert('Se canceló');
                }
            }
            Livewire.on('deleteUser', (user) => {
                alert(`El usuario ${user.name} se borró correctamente`)
            });

        </script>
    @endpush
</div>
