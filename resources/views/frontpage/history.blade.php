<x-home-layout>
  <!-- Banner -->
  <div class="w-full bg-cover bg-center" style="height: 70vh; background-image: url('{{ asset('images/bg-banner.jpeg') }}')">
    <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
      <div class="w-full">
        <div class="text-center mb-8">
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-5xl">History Payment</h1>
          <p class="mb-6 text-lg w-4/6 font-normal text-slate-200 mx-auto lg:text-xl sm:px-16 xl:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Banner -->

  <!-- component -->
  <div class="flex flex-row flex-wrap container mx-auto">
    <!-- component -->

    <div class="w-full relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 mx-auto border border-white">
      <div class="w-full md:w-1/3 bg-white grid place-items-center"><img src="{{ asset('images/bg-banner.jpeg') }}" class="rounded-xl" /></div>
      <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
        <div class="flex justify-between item-center">
          <p class="text-gray-500 font-medium hidden md:block">Vacations</p>
          <div class="bg-green-500 px-3 py-1 rounded-full text-xs font-medium text-white hidden md:block">Completed</div>
        </div>
        <h3 class="font-black text-gray-800 md:text-3xl text-xl">Nusa Penida Full Day Trip</h3>
        <div class="flex items-center">
          <p class="text-gray-600 font-bold text-sm">25-12-2022</p>
        </div>
        <p class="md:text-lg text-gray-500 text-base">Driver : Bayu Danu</p>
        <p class="md:text-lg text-gray-500 text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis eos aspernatur est, officia in ipsa. Voluptatibus aliquam rem alias quasi fuga maiores minus beatae, repellendus nostrum quod tempore, voluptas eos!</p>
        <p class="text-xl font-black text-gray-800">Rp. 750.000</p>
      </div>
    </div>
    <div class="w-full relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 mx-auto border border-white">
      <div class="w-full md:w-1/3 bg-white grid place-items-center"><img src="{{ asset('images/bg-banner.jpeg') }}" class="rounded-xl" /></div>
      <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
        <div class="flex justify-between item-center">
          <p class="text-gray-500 font-medium hidden md:block">Vacations</p>

          <div class="bg-yellow-500 px-3 py-1 rounded-full text-xs font-medium text-white hidden md:block">Pending</div>
        </div>
        <h3 class="font-black text-gray-800 md:text-3xl text-xl">Nusa Penida Full Day Trip</h3>
        <div class="flex items-center">
          <p class="text-gray-600 font-bold text-sm">25-12-2022</p>
        </div>
        <p class="md:text-lg text-gray-500 text-base">Driver : Bayu Danu</p>
        <p class="md:text-lg text-gray-500 text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis eos aspernatur est, officia in ipsa. Voluptatibus aliquam rem alias quasi fuga maiores minus beatae, repellendus nostrum quod tempore, voluptas eos!</p>
        <p class="text-xl font-black text-gray-800">Rp. 750.000</p>
      </div>
    </div>
    <div class="w-full relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 mx-auto border border-white">
      <div class="w-full md:w-1/3 bg-white grid place-items-center"><img src="{{ asset('images/bg-banner.jpeg') }}"tailwind logo" class="rounded-xl" /></div>
      <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
        <div class="flex justify-between item-center">
          <p class="text-gray-500 font-medium hidden md:block">Vacations</p>

          <div class="bg-red-500 px-3 py-1 rounded-full text-xs font-medium text-white hidden md:block">Canceled</div>
        </div>
        <h3 class="font-black text-gray-800 md:text-3xl text-xl">Nusa Penida Full Day Trip</h3>
        <div class="flex items-center">
          <p class="text-gray-600 font-bold text-sm">25-12-2022</p>
        </div>
        <p class="md:text-lg text-gray-500 text-base">Driver : Bayu Danu</p>
        <p class="md:text-lg text-gray-500 text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis eos aspernatur est, officia in ipsa. Voluptatibus aliquam rem alias quasi fuga maiores minus beatae, repellendus nostrum quod tempore, voluptas eos!</p>
        <p class="text-xl font-black text-gray-800">Rp. 750.000</p>
      </div>
    </div>
  </div>
  <div class="bg-green-900">TES GREEN</div>
</x-home-layout>
