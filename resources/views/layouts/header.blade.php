<div class="pt-3 pb-3">
    <nav class="hidden md:relative max-w-screen-xl mx-auto md:flex items-center justify-between px-4 sm:px-6 mb-10">
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

            <mobile-menu>
                <template slot="menu">
                    <div class="text-center leading-loose">
                        <a href="{{ route('home') }}"
                           class="{{ strpos(request()->route()->getName(), 'home') !== false ? 'underline' : '' }} block px-3 py-2 rounded-md text-2xl font-medium text-gray-200 hover:underline transition duration-150 ease-in-out">Home</a>
                        <a href="{{ route('about') }}"
                           class="{{ strpos(request()->route()->getName(), 'about') !== false ? 'underline' : '' }} block px-3 py-2 rounded-md text-2xl font-medium text-gray-200 hover:underline transition duration-150 ease-in-out">About</a>
                        <a href="{{ route('work') }}"
                           class="{{ strpos(request()->route()->getName(), 'work') !== false ? 'underline' : '' }} mt-1 block px-3 py-2 rounded-md text-2xl font-medium text-gray-200 hover:underline transition duration-150 ease-in-out">My
                            Work</a>
                        <a href="{{ route('contact') }}"
                           class="{{ strpos(request()->route()->getName(), 'contact') !== false ? 'underline' : '' }} mt-1 block px-3 py-2 rounded-md text-2xl font-medium text-gray-200 hover:underline transition duration-150 ease-in-out">Contact
                            Me</a>
                    </div>
                </template>
            </mobile-menu>
</div>
