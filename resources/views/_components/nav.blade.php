<div class="fixed top-0 left-0 z-40 w-screen py-1 card lg:py-4">
  <nav class="flex items-center justify-between px-8 mx-auto xl:w-4/5">
    <div class="relative flex flex-wrap items-center justify-center w-auto h-full py-1 pl-2 text-center font-display max-w-1/3 lg:py-0 lg:pl-0">
      <img src="/img/sd.png" class="block w-auto h-12 mx-auto lg:h-16"/>
      <p class="hidden w-full text-xs lg:block">StonkyDong</p>
    </div>
    <div class="max-w-1/3 lg:hidden">
      <h1 class="text-xl font-display">StonkyDong</h1>
    </div>
    <div class="hidden w-1/2 lg:block">
      @include('_components.nav-links')
    </div>
    <div class="max-w-1/4 lg:hidden">
      <div class="pr-2 -my-2">
        <button type="button" class="p-2 border border-purple-500 btn gradient rounded-md" aria-expanded="false">
          <span class="sr-only">Open menu</span>
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
    <div class="hidden lg:flex lg:justify-end">
      <button type="button" class="h-16 px-4 py-2 mr-4 w-52 btn bg-gradient-to-tr from-green-800 to-green-500 rounded-md">Download</button>
    </div>
  </nav>
</div>
