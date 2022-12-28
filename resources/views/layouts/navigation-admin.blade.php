<aside class="w-96 mr-5 bg-teal-500 text-white py-4 px-3 rounded h-screen" aria-label="Sidebar">
  <div class="">
    <h3 class="font-bold text-2xl mb-5 text-center">Admin</h3>
    <ul class="space-y-2">
      <li>
        <a href="dashboard" class="flex items-center p-2 text-base font-normal text-white-900 rounded-lg">
          <i class="fa-solid fa-table-columns"></i>
          <span class="ml-3 text-white">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="tour_guide" class="flex items-center p-2 text-base font-normal text-white-900 rounded-lg">
          <i class="fa-solid fa-table-columns"></i>
          <span class="ml-3 text-white">Tour Guide</span>
        </a>
      </li>
      <li>
        <a href="destinations" class="flex items-center p-2 text-base font-normal text-white-900 rounded-lg">
          <i class="fa-solid fa-table-columns"></i>
          <span class="ml-3 text-white">Destination</span>
        </a>
      </li>
      <li>
        <a href="package" class="flex items-center p-2 text-base font-normal text-white-900 rounded-lg">
          <i class="fa-solid fa-table-columns"></i>
          <span class="ml-3 text-white">Package</span>
        </a>
      </li>
      <li>
        <a href="transaction" class="flex items-center p-2 text-base font-normal text-white-900 rounded-lg">
          <i class="fa-solid fa-table-columns"></i>
          <span class="ml-3 text-white">Transaction</span>
        </a>
      </li>
      <li>
        <a href="review" class="flex items-center p-2 text-base font-normal text-white-900 rounded-lg">
          <i class="fa-solid fa-table-columns"></i>
          <span class="ml-3 text-white">Review</span>
        </a>
      </li>
      <li>
        <div class="flex items-center p-2 text-base font-normal text-white-900 rounded-lg">
            <i class="fa-solid fa-table-columns mr-3"></i>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
    
              <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                              this.closest('form').submit();" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-600 md:p-0">
                {{ __('Log Out') }}
              </x-dropdown-link>
            </form>
        </div>
      </li>
    </ul>
  </div>
</aside>
