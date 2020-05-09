<div class="pt-3 pb-3">
    <nav class="relative max-w-screen-xl mx-auto flex items-center justify-between px-4 sm:px-6 mb-10">
        <div class="flex items-center flex-1">
            <div class="flex items-center justify-between w-full md:w-auto">
                <a href="/" class="hover:opacity-75 text-white">
                    <h1 class="text-4xl font-bold tracking-tighter">DEVLOFT</h1>
                </a>
            </div>
        </div>
        <div class="hidden md:block md:ml-10">
            <a href="{{ route('about') }}"
               class="font-medium text-gray-200 hover:text-gray-500 focus:outline-none transition duration-150 ease-in-out {{ strpos(request()->route()->getName(), 'about') !== false ? 'active' : '' }}">
                About
            </a>

            <a href="{{ route('work') }}"
               class="ml-10 font-medium text-gray-200 hover:text-gray-500 focus:outline-none transition duration-150 ease-in-out {{ strpos(request()->route()->getName(), 'work') !== false ? 'active' : '' }}">My
                Work
            </a>

            <a href="{{ route('contact') }}"
               class="ml-10 font-medium text-gray-200 hover:text-gray-500 focus:outline-none transition duration-150 ease-in-out {{ strpos(request()->route()->getName(), 'contact') !== false ? 'active' : '' }}">
                Contact Me
            </a>
        </div>
    </nav>

    <div class="absolute top-0 transition transform origin-top-right md:hidden h-full w-full z-50">
            <div class="bg-dark shadow-xs overflow-hidden h-full w-full">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}"
                             alt="{{ config('app.name') }}"/>
                    </div>
                </div>
                <div class="px-2 pt-2 pb-3">
                    <a href="#"
                       class="block px-3 py-2 rounded-md text-base font-medium text-gray-200 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">About</a>
                    <a href="#"
                       class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-200 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">My
                        Work</a>
                    <a href="#"
                       class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-200 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Contact
                        Me</a>
                </div>
            </div>
    </div>
</div>
