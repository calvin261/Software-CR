<div class="bg-gray-100 font-family-karla flex">
    <aside class="relative bg-sidebar w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href=""
                class="text-white text-2xl text-center font-semibold uppercase hover:text-gray-300">Modulo de Almacenamiento</a>

        </div>
        <nav class="text-white text-base font-semibold pt-3">

            <a href="{{ route('almacenamiento.dashboard') }}"
                class=" {{ request()->is('almacenamiento/dashborad') ?' active-nav-link ' : '' }} flex items-center  text-white py-4 pl-6 nav-item" >
                <i class="fas fa-tachometer-alt mr-3"></i>
               Almacenamiento
            </a>
            <a href="{{ route('almacenamiento.proveedores') }}"
                class="{{ request()->is('almacenamiento/proveedores') ? ' active-nav-link ' : '' }} flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
               Proveedores
            </a>
        </nav>
    </aside>


    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }"
            class="w-full bg-sidebar py-5 px-6 sm:hidden">

            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Modulo de Almacenamiento</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>
            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'"
                class="flex flex-col pt-4">
                <a href="index.html"
                    class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Almacenamiento
                </a>
                <a href="blank.html"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Proveedores
                </a>
            </nav>
        </header>

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                    {{ $slot }}
            </main>
        </div>


    </div>
</div>
