<header class="w-full">
  <div class="max-w-2xl mx-auto px-4 py-4 flex justify-between items-center">
    <h1 class="text-xl font-semibold">Profile Manager</h1>

    <div class="flex items-center space-x-2">
        @if (request()->routeIs('login'))
              <a href="{{ url('/') }}" 
                  class="px-4 py-2 bg-black text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition shadow">
                  Back
              </a>
          @else
              <a href="{{ route('login') }}" 
                  class="px-4 py-2 bg-black text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition shadow">
                  Login
              </a>
        @endif
    </div>
  </div>
</header>