<nav class="bg-light p-2 rounded">
    <a href="{{ route('cms.home') }}" class="group flex items-center px-3 py-2 text-sm leading-5 font-medium text-white rounded-md hover:bg-dark {{ strpos(request()->route()->getName(), 'cms.home') !== false ? 'bg-dark' : '' }}">
    <span class="truncate">
      Home
    </span>
    </a>
    <a href="{{ route('cms.works') }}" class="mt-1 group flex items-center px-3 py-2 text-sm leading-5 font-medium text-white rounded-md hover:bg-dark focus:outline-none {{ strpos(request()->route()->getName(), 'cms.works') !== false ? 'bg-dark' : '' }}">
    <span class="truncate">
      Works
    </span>
    </a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();" class="mt-1 group flex items-center px-3 py-2 text-sm leading-5 font-medium text-white rounded-md hover:bg-dark focus:outline-none">
    <span class="truncate">
      Logout
    </span>
    </a>

    <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
       @csrf
    </form>
</nav>
