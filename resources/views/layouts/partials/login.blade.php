@if (Route::has('login'))
  <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
    @auth
      <a class="text-sm text-gray-700 underline dark:text-gray-500" href="{{ url('/home') }}">Home</a>
    @else
      <a class="text-sm text-gray-700 underline dark:text-gray-500" href="{{ route('login') }}">Log in</a>

      @if (Route::has('register'))
        <a class="ml-4 text-sm text-gray-700 underline dark:text-gray-500" href="{{ route('register') }}">Register</a>
      @endif
    @endauth
  </div>
@endif
