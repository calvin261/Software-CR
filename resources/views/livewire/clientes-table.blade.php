<div>
    <h1 class="text-3xl text-black pb-6">LISTADO DE CLIENTES</h1>
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
                                    Nombre

                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Apellido
                                    <button wire:click="sortable('name')">
                                        <span class="fa fa{{ $camp === 'name' ? $icon : '-circle' }} }}"></span>
                                    </button>
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Cedula
                                    <button wire:click="sortable('email')">
                                        <span class="fa fa{{ $camp === 'email' ? $icon : '-circle' }} }}"></span>
                                    </button>
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Correo
                                    <button wire:click="sortable('email')">
                                        <span class="fa fa{{ $camp === 'email' ? $icon : '-circle' }} }}"></span>
                                    </button>
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Telefono
                                    <button wire:click="sortable('email')">
                                        <span class="fa fa{{ $camp === 'email' ? $icon : '-circle' }} }}"></span>
                                    </button>
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Dirección
                                    <button wire:click="sortable('email')">
                                        <span class="fa fa{{ $camp === 'email' ? $icon : '-circle' }} }}"></span>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="">
                                <td>
                                    1
                                </td>
                                <td>
                                    Cliente 00001
                                </td>
                                <td>
                                    Cliente 00001
                                </td>
                                <td>
                                    000000000001
                                </td>
                                <td>
                                    cliente@negocio.com
                                </td>
                                <td>
                                    0000000000
                                </td>
                                <td>
                                    Quito
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    2
                                </td>
                                <td>
                                    Cliente 00002
                                </td>
                                <td>
                                    Cliente 00002
                                </td>
                                <td>
                                    000000000002
                                </td>
                                <td>
                                    cliente@negocio.com
                                </td>
                                <td>
                                    0000000000
                                </td>
                                <td>
                                    Quito
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    3
                                </td>
                                <td>
                                    Cliente 00003
                                </td>
                                <td>
                                    Cliente 00003
                                </td>
                                <td>
                                    000000000003
                                </td>
                                <td>
                                    cliente@negocio.com
                                </td>
                                <td>
                                    0000000000
                                </td>
                                <td>
                                    Quito
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    4
                                </td>
                                <td>
                                    Cliente 00004
                                </td>
                                <td>
                                    Cliente 00004
                                </td>
                                <td>
                                    000000000004
                                </td>
                                <td>
                                    cliente@negocio.com
                                </td>
                                <td>
                                    0000000000
                                </td>
                                <td>
                                    Quito
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    5
                                </td>
                                <td>
                                    Cliente 00005
                                </td>
                                <td>
                                    Cliente 00005
                                </td>
                                <td>
                                    000000000005
                                </td>
                                <td>
                                    cliente@negocio.com
                                </td>
                                <td>
                                    0000000000
                                </td>
                                <td>
                                    Quito
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    6
                                </td>
                                <td>
                                    Cliente 00006
                                </td>
                                <td>
                                    Cliente 00006
                                </td>
                                <td>
                                    000000000006
                                </td>
                                <td>
                                    cliente@negocio.com
                                </td>
                                <td>
                                    0000000000
                                </td>
                                <td>
                                    Quito
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
