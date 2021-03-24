    <div>
        <form wire:submit.prevent="{{ $method }}">
            <x-component-modal :showModel="$showModel"
                :action="$action">

                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900"
                        id="modal-headline">
                        Edición del Usuario
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">

                        <div class="flex space-x-5 mb-2">
                            <x-component-input placeholder="Ingrese su nombre"
                                name="name"
                                label="Nombre"
                                icon="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                            </x-component-input>

                            <x-component-input placeholder="Ingrese su correo "
                                name="email"
                                label="Email"
                                type="email"
                                icon="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                            </x-component-input>
                        </div>
                        <div class="flex">
                            <x-component-input-select name="role"
                            label="Rol"
                            :options="['administrador'=>'Administrador','gerente'=>'Gerente','supervisor'=>'Supervisor','basico' => 'Basico']">
                            </x-component-input-select>
                            <x-component-input placeholder="Ingrese su imagen "
                            name="profile_photo_path"
                            label="Imagen"
                            type="file"
                            icon="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                        </x-component-input>
                        </div>


                        @if ($action == 'Registrar')
                            <div class="flex mt-3">
                                <x-component-input placeholder="Ingrese su clave "
                                    name="password"
                                    label="Password"
                                    type="password"
                                    icon="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </x-component-input>

                                <x-component-input placeholder="Confirme su clave "
                                    name="password_confirmation"
                                    label="Confirmar passoword"
                                    type="password"
                                    icon="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </x-component-input>
                            </div>
                        @endif
                        </p>
                    </div>
                </div>
            </x-component-modal>
        </form>
    </div>
