<div>
    <h1 class="text-3xl text-black pb-6">LISTA DE PROVEEDORES</h1>
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
                                    Nombre del Producto

                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Cantidad
                                    <button wire:click="sortable('name')">
                                        <span class="fa fa{{ $camp === 'name' ? $icon : '-circle' }} }}"></span>
                                    </button>
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Provedor 1
                                    <button wire:click="sortable('email')">
                                        <span class="fa fa{{ $camp === 'email' ? $icon : '-circle' }} }}"></span>
                                    </button>
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Provedor 2
                                    <button wire:click="sortable('email')">
                                        <span class="fa fa{{ $camp === 'email' ? $icon : '-circle' }} }}"></span>
                                    </button>
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Provedor 3
                                    <button wire:click="sortable('email')">
                                        <span class="fa fa{{ $camp === 'email' ? $icon : '-circle' }} }}"></span>
                                    </button>
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    OBSERVACIONES
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
                                    Carne de Cerdo
                                </td>
                                <td>
                                    20
                                </td>
                                <td>
                                    nombre de proveedor 1
                                </td>
                                <td>
                                    nombre de proveedor 2
                                </td>
                                <td>
                                    nombre de proveedor 3
                                </td>
                                <td>
                                   Sin observaciones
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    1
                                </td>
                                <td>
                                    Carne de Vaca
                                </td>
                                <td>
                                    20
                                </td>
                                <td>
                                    nombre de proveedor 1
                                </td>
                                <td>
                                    nombre de proveedor 2
                                </td>
                                <td>
                                    nombre de proveedor 3
                                </td>
                                <td>
                                   Sin observaciones
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    1
                                </td>
                                <td>
                                   Chuletas
                                </td>
                                <td>
                                    20
                                </td>
                                <td>
                                    nombre de proveedor 1
                                </td>
                                <td>
                                    nombre de proveedor 2
                                </td>
                                <td>
                                    nombre de proveedor 3
                                </td>
                                <td>
                                   Sin observaciones
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    1
                                </td>
                                <td>
                                    Patas de Cerdo
                                </td>
                                <td>
                                    20
                                </td>
                                <td>
                                    nombre de proveedor 1
                                </td>
                                <td>
                                    nombre de proveedor 2
                                </td>
                                <td>
                                    nombre de proveedor 3
                                </td>
                                <td>
                                   Sin observaciones
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    1
                                </td>
                                <td>
                                    Cabeza de Cerdo
                                </td>
                                <td>
                                    20
                                </td>
                                <td>
                                    nombre de proveedor 1
                                </td>
                                <td>
                                    nombre de proveedor 2
                                </td>
                                <td>
                                    nombre de proveedor 3
                                </td>
                                <td>
                                   Sin observaciones
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
